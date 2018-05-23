<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Link;
use App\Target;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->input('is', 'all');
        $query = Post::where('workspace_id', Auth::user()->state->workspace_id);
        if (Auth::user()->role(Auth::user()->state->workspace_id)->name == 'Manager' || Auth::id() == 1) {
            //
        } else {
            $query = $query->where('user_id', Auth::id());
        }

        if ($status == 'all') {
            //
        } else if ($status == 'pending') {
            $query = $query->where('status', 0);
        } else if ($status == 'awaiting') {
            $query = $query->where('status', 1);
        } else if ($status == 'processing') {
            $query = $query->where('status', 2);
        } else if ($status == 'processed') {
            $query = $query->where('status', 9);
        } else if ($status == 'failed') {
            $query = $query->where('status', -1);
        }

        $posts = $query->orderBy('id', 'desc')->paginate(20);

        return view('posts.index', compact('posts', 'status'));
    }

    public function approve($id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'status' => 1
        ]);

        return redirect('posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $link = Link::findOrFail($id);
        $targets = Target::pluck('name', 'id')->prepend('Select target...', '');

        $raw = app_path() . env('APP_RAW_PATH') . 'raw/' . date('Y/m/d/H/', strtotime($link->created_at)) . $link->source->name . '_' . $link->post_id . '.html';

        $html = \SimpleHtmlDom::str_get_html(file_get_contents($raw));

        if ($link->source->name == 'bestie.vn') {
            $post_image = $html->find('meta[property="og:image"]', 0)->content;

            $tags = $html->find('a.fs10');

            $post_tags = [];
            foreach ($tags as $tag) {
                $post_tags[] = trim(html_entity_decode($tag->text()));
            }
            $post_tags = implode(',', $post_tags);

            $post_description = html_entity_decode($html->find('meta[property="og:description"]', 0)->content);
        }


        return view('posts.create', compact('link', 'targets', 'post_image', 'post_tags', 'post_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:255',
            'slug'=>'required|max:255',
            'description'=>'required',
            'target_id'=>'required',
            'target_category_id'=>'required',
        ]);

        $link = Link::findOrFail($request['link_id']);
        $raw = app_path() . env('APP_RAW_PATH') . 'raw/' . date('Y/m/d/H/', strtotime($link->created_at)) . $link->source->name . '_' . $link->post_id . '.html';

        $html = \SimpleHtmlDom::str_get_html(file_get_contents($raw));

        if ($link->source->name == 'bestie.vn') {
            $content = $html->find('.fs15content', 0);
            foreach ($content->find('a') as $xlink) {
                $xlink->outertext = trim($xlink->innertext);
            }
            foreach ($content->find('iframe') as $xiframe) {
                $xiframe->outertext = '';
            }
            $post_content = trim(html_entity_decode($content->innertext));
        }

        $post = Post::create(array_merge([
                'user_id' => Auth::id(),
                'status' => 0,
                'content' => $post_content,
            ],
            $request->only('workspace_id', 'link_id', 'title', 'slug', 'target_id', 'target_category_id', 'image', 'description', 'post_status')
            ));

        $link->update(['status' => 2]);

        return redirect()->route('posts.index')
            ->with('flash_message',
             'New post was added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
