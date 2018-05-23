<?php

namespace App\Http\Controllers;

use Auth;
use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->input('is', 'all');
        $query = Link::with('source')->whereHas('workspace', function($q){
                    $q->where('id', Auth::user()->state->workspace_id);
                });

        if ($status == 'all') {
            //
        } else if ($status == 'pending') {
            $query = $query->where('status', 0);
        } else if ($status == 'wrote') {
            $query = $query->where('status', 2);
        } else if ($status == 'processed') {
            $query = $query->where('status', 9);
        } else if ($status == 'failed') {
            $query = $query->where('status', -1);
        }

        $links = $query->orderby('id', 'desc')->paginate(20);

        return view('links.index', compact('links', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
