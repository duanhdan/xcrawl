<?php

namespace App\Http\Controllers;

use App\Source;
use App\Target;
use App\Rule;
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

        $rule = Rule::create(array_merge(['workspace_id' => Auth::user()->state->workspace_id, 'user_id' => Auth::id()], $request->only('source_id', 'source_category_id', 'target_id', 'target_category_id', 'post_status', 'status')));

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
    public function edit(Rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rule $rule)
    {
        //
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
