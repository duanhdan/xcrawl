<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Post;

class PostToWordpress extends Command
{
    protected $img_mime = [
        // images
        'image/png' => 'png',
        'image/jpeg' => 'jpe',
        'image/jpeg' => 'jpeg',
        'image/jpeg' => 'jpg',
        'image/gif' => 'gif',
        'image/bmp' => 'bmp',
        'image/vnd.microsoft.icon' => 'ico',
        'image/tiff' => 'tiff',
        'image/tiff' => 'tif',
        'image/svg+xml' => 'svg',
        'image/svg+xml' => 'svgz',
    ];

    private function save_image($image_url) {
        $img = tempnam(sys_get_temp_dir(), 'img-') . '.tmp';

        $fp = fopen($img, 'w+');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_URL, $image_url);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $result = curl_exec($ch);
        curl_close($ch);

        fclose($fp);

        return $result ? $img : false;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:wordpress';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $post = Post::with('link')->with('target')->with('category')->where('status', 1)->first();

        if (! $post) {
            return false;
        }

        $post->status = 2;
        $post->save();

        # Create client instance
        $wpClient = new \WordpressXmlRPC();
        # Log error
        $wpClient->onError(function($error, $event) {
            dd($error);
        });

        # Set the credentials for the next requests
        $wpClient->setCredentials($post->target->url . '/xmlrpc.php', $post->target->user->username, $post->target->user->password);

        // Push featured image
        $featured_img_path = app_path() . env('APP_RAW_PATH') . 'images/' . date('Y/m/d/H/', strtotime($post->link->created_at)) . $post->link->source->name . '_' . $post->link->post_id . '.tmp';
        $featured_img_mime = mime_content_type($featured_img_path);
        $featured_img_ext = $this->img_mime[$featured_img_mime];

        if (! $post->slug) {
            $post->slug = Str::slug($post->title, '-');
            $post->slug = $post->slug_prefix ? $post->slug_prefix . '-' . $post->slug : $post->slug;
            $post->slug = $post->slug_suffix ? $post->slug . '-' . $post->slug_suffix : $post->slug;
        }

        $data_image = $wpClient->uploadFile(
            $post->slug . '.' . $featured_img_ext,
            $featured_img_mime,
            file_get_contents($featured_img_path)
        );

        // Push draft post
        $data_post = $wpClient->newPost(
            $post->title,
            $post->content,
            [
                'post_name' => $post->slug,
                'post_status' => $post->post_status,
                'post_excerpt' => $post->description,
                'post_thumbnail' => $data_image['id'],
                'terms' => [
                    'category' => [$post->target_category_id],
                ],
                'terms_names' => [
                    'post_tag' => explode(',', $post->tags),
                ]
            ]
        );

        // Update post pushing status
        if ($data_post) {
            $post->update(['status' => 9]);
        } else {
            $post->update(['status' => -1]);
        }

        // Remove all external image's link
        $dom_content = \SimpleHtmlDom::str_get_html($post->content);

        foreach ($dom_content->find('img') as $img) {
            $img_file = $this->save_image($img->src);

            try {
                $img_mime = mime_content_type($img_file);
            } catch (Exception $e) {
                print $img->src;
                dd($e . '<hr>');
            }

            $img_ext = $img_file ? $this->img_mime[$img_mime] : null;

            $data_image = $wpClient->uploadFile(
                date('Ymd') . microtime() . '.' . $img_ext,
                $img_mime,
                file_get_contents($img_file)
            );

            $img->src = $data_image['link'];

            unlink($img_file);
        }

        $dom_content->save();

        $data_status = $wpClient->editPost(
            $data_post,
            [
                'post_content' => $dom_content->innertext,
            ]
        );

        return $data_status;
    }
}
