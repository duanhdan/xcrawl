<?php

namespace App\Http\Controllers;

use App\Source;
use App\SourceCategory;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = Source::get();

        return view('sources.index', compact('sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sources.create');
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
            'name'=>'required|max:255|unique:sources',
            'url'=>'required|url|max:255',
        ]);

        $source = Source::create($request->only('name', 'url', 'status')); //

        return redirect()->route('sources.index')
            ->with('flash_message',
             'Source '. $source->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Source  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('sources');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = Source::findOrFail($id);

        return view('sources.edit', compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $source = Source::findOrFail($id);

        //Validate name, email and password fields
        $this->validate($request, [
            'name'=>'required|max:255|unique:sources',
            'url'=>'required|url|max:255',
        ]);
        $input = $request->only(['name', 'url', 'status']);
        $source->fill($input)->save();

        return redirect()->route('sources.index')
            ->with('flash_message',
             'Source successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source = Source::findOrFail($id);
        $source->delete();

        return redirect()->route('sources.index')
            ->with('flash_message',
             'Source successfully deleted.');
    }
}
