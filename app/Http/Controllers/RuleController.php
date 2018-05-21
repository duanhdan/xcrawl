<?php

namespace App\Http\Controllers;

use App\Source;
use App\Target;
use App\Rule;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::where('workspace_id', Auth::user()->state->workspace_id)->get();

        return view('rules.index', compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sources = Source::where('status', 1)->pluck('name', 'id')->prepend('Select source...', '');
        $targets = Target::pluck('name', 'id')->prepend('Select target...', '');;

        return view('rules.create', compact('sources', 'targets'));
    }

    public function getSourceCategories(Request $request, $id)
    {
        if($request->ajax()) {
            $source = Source::with('categories')->findOrFail($id);
            return response()->json( $source->categories );
        }
    }

    public function getTargetCategories(Request $request, $id)
    {
        if($request->ajax()) {
            $target = Target::with('categories')->findOrFail($id);
            return response()->json( $target->categories );
        }
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
            'source_id'=>'required',
            'source_category_id'=>'required',
            'target_id'=>'required',
            'target_category_id'=>'required',
        ]);

        $rule = Rule::create(array_merge(['workspace_id' => Auth::user()->state->workspace_id, 'user_id' => Auth::id()], $request->only('source_id', 'source_category_id', 'target_id', 'target_category_id', 'post_status', 'status', 'slug_prefix', 'slug_suffix')));

        return redirect()->route('rules.index')
            ->with('flash_message',
             'New rule was added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rule = Rule::findOrFail($id);
        $sources = Source::where('status', 1)->pluck('name', 'id')->prepend('Select source...', '');
        $targets = Target::pluck('name', 'id')->prepend('Select target...', '');;

        return view('rules.edit', compact('rule', 'sources', 'targets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = Rule::findOrFail($id);
        $old_rule = $rule;

        $this->validate($request, [
            'target_id'=>'required',
            'target_category_id'=>'required',
        ]);

        $input = $request->only('source_id', 'source_category_id', 'target_id', 'target_category_id', 'post_status', 'status', 'slug_prefix', 'slug_suffix');
        $rule->fill($input)->save();

        // Update to all pending post
        if ($request['update_post']) {
            $posts = Post::where('rule_id', $rule->id)->get();

            foreach ($posts as $post) {
                if (! $rule->status) {
                    $post->delete();
                    continue;
                }

                $post->target_id = $rule->target_id;
                $post->target_category_id = $rule->target_category_id;
                $post->post_status = $rule->post_status;
                if (stristr($rule->slug_prefix, 'random')) {
                    $xnum = explode('-', $rule->slug_prefix);
                    $post->slug_prefix = $this->generateRandomString($xnum[1]);
                } else {
                    $post->slug_prefix = $rule->slug_prefix;
                }

                if (stristr($rule->slug_suffix, 'random')) {
                    $xnum = explode('-', $rule->slug_suffix);
                    $post->slug_suffix = $this->generateRandomString($xnum[1]);
                } else {
                    $post->slug_suffix = $rule->slug_suffix;
                }

                $post->save();
            }
        }

        return redirect()->route('rules.index')
            ->with('flash_message',
             'Rule successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = Rule::findOrFail($id);
        $rule->delete();

        return redirect()->route('rules.index')
            ->with('flash_message',
             'Rule successfully deleted.');
    }
}
