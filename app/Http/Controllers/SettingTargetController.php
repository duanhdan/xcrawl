<?php

namespace App\Http\Controllers;

use Auth;
use App\Target;
use App\TargetUser;
use App\Rules\XmlRPCRequest;
use Illuminate\Http\Request;

class SettingTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $targets = Target::where('workspace_id', Auth::user()->state->workspace_id)->get();

        return view('settings.targets.index', compact('targets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $target = Target::with('user')->findOrFail($id);

        return view('settings.targets.edit', compact('target'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $target = Target::findOrFail($id);

        $this->validate($request, [
            'name'=>'required|max:255',
            'url'=>'required|url|max:255',
            'username'=>'required|max:50',
            'password'=>'required|max:50',
            'url'=>[new XmlRPCRequest($request)]
        ]);

        $input = $request->only(['name', 'url', 'username', 'password']);
        $target->fill($input)->save();

        if ($target->user) {
            $target->user->fill($request->only('username', 'password'))->save();
        }
        else {
            $target_user = TargetUser::create(array_merge(['user_id' => Auth::id(), 'target_id' => $target->id], $request->only('username', 'password')));
        }

        return redirect()->route('settings.targets.index')
            ->with('flash_message',
             'Target successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
