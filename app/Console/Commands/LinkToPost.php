<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Auth;
use App\Link;
use App\Rule;
use App\Post;
use App\Workspace;

class LinkToPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'link:post';

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

    protected function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $links = Link::with('source')->has('pending')->get();
        $rules = Rule::where('status', 1)->get();

        foreach ($links as $link) {
            $flag = false;
            foreach ($rules as $rule) {
                if ($rule->source_category_id == $link->source_category_id) {
                    $raw = app_path() . env('APP_RAW_PATH') . 'raw/' . date('Y/m/d/H/', strtotime($link->created_at)) . $link->source->name . '_' . $link->post_id . '.html';

                    if (! file_exists($raw)) {
                        $flag = true;
                        continue;
                    }
                    $html = \SimpleHtmlDom::str_get_html(file_get_contents($raw));

                    if ($link->source->name == 'bestie.vn') {
                        $tags = $html->find('a.fs10');

                        $post_tags = [];
                        foreach ($tags as $tag) {
                            $post_tags[] = trim(html_entity_decode($tag->text()));
                        }

                        $post_description = html_entity_decode($html->find('meta[property="og:description"]', 0)->content);
                        $content = $html->find('.fs15content', 0);
                        foreach ($content->find('a') as $xlink) {
                            $xlink->outertext = trim($xlink->innertext);
                        }
                        foreach ($content->find('iframe') as $xiframe) {
                            $xiframe->outertext = '';
                        }
                        $post_content = trim(html_entity_decode($content->innertext));

                        if (stristr($rule->slug_prefix, 'random')) {
                            $xnum = explode('-', $rule->slug_prefix);
                            $post_prefix = $this->generateRandomString($xnum[1]);
                        } else {
                            $post_prefix = $rule->slug_prefix;
                        }

                        if (stristr($rule->slug_suffix, 'random')) {
                            $xnum = explode('-', $rule->slug_suffix);
                            $post_suffix = $this->generateRandomString($xnum[1]);
                        } else {
                            $post_suffix = $rule->slug_suffix;
                        }

                        Post::create([
                            'workspace_id' => $rule->workspace_id,
                            'rule_id' => $rule->id,
                            'link_id' => $link->id,
                            'user_id' => $rule->user_id,
                            'target_id' => $rule->target_id,
                            'target_category_id' => $rule->target_category_id,
                            'title' => $link->title,
                            'slug_prefix' => $post_prefix,
                            'slug_suffix' => $post_suffix,
                            'image' => $html->find('meta[property="og:image"]', 0)->content,
                            'description' => $post_description,
                            'content' => $post_content,
                            'tags' => implode(',', $post_tags),
                            'post_status' => $rule->post_status,
                            'status' => 0
                        ]);

                        $link->workspace()->updateExistingPivot($rule->workspace_id, ['status' => 1]);
                        $link->status = 1;
                        $link->save();
                    }
                }
            }

            if ($flag) {
                $link->status = -1;
                $link->save();
            }
        }
    }
}
