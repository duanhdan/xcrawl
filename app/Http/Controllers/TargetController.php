<?php

namespace App\Http\Controllers;

use Auth;
use App\Target;
use App\TargetCategory;
use App\Rules\XmlRPCRequest;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $targets = Target::get();

        return view('targets.index', compact('targets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('targets.create');
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
            'name'=>'required|max:255',
            'url'=>'required|url|max:255',
            'username'=>'required|max:50',
            'password'=>'required|max:50',
            'url'=>[new XmlRPCRequest($request)]
        ]);

        $source = Target::create(array_merge(['user_id' => Auth::id()], $request->only('name', 'url', 'username', 'password')));

        return redirect()->route('targets.index')
            ->with('flash_message',
             'Target '. $source->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('targets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $target = Target::findOrFail($id);

        return view('targets.edit', compact('target'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Target  $target
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

        return redirect()->route('targets.index')
            ->with('flash_message',
             'Target successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        $target = Target::findOrFail($id);
        $target->delete();

        return redirect()->route('targets.index')
            ->with('flash_message',
             'Target successfully deleted.');
    }

    public function fetch($id)
    {
        $target = Target::findOrFail($id);

        # Check XML RPC Connection
        $wpClient = new \WordpressXmlRPC();
        # Log error
        $wpClient->onError(function($error, $event) {
            dd($error);
        });

        # Set the credentials for the next requests
        $wpClient->setCredentials($target->url . '/xmlrpc.php', $target->username, $target->password);

        $data = $wpClient->getTerms('category');

        $c_categories = [];
        $d_categories = [];

        foreach ($target->categories as $e_category) {
            foreach ($data as $n_category) {
                if ($e_category->category_id == $n_category['term_id']) {
                    $c_categories[] = $e_category->category_id;
                }
            }
        }

        foreach ($target->categories as $e_category) {
            if (! in_array($e_category->category_id, $c_categories)) {
                $e_category->delete();
            }
        }

        foreach ($data as $n_category) {
            if (! in_array($n_category['term_id'], $c_categories)) {
                TargetCategory::create([
                    'target_id' => $target->id,
                    'category_id' => $n_category['term_id'],
                    'parent_category_id' => $n_category['parent'],
                    'name' => $n_category['name'],
                    'url' => $n_category['slug']
                ]);
            } else {
                foreach ($target->categories as $e_category) {
                    if ($e_category->category_id == $n_category['term_id']) {
                        $e_category->update([
                            'parent_category_id' => $n_category['parent'],
                            'name' => $n_category['name'],
                            'url' => $n_category['slug']
                        ]);
                    }
                }
            }
        }

        return redirect()->route('targets.index')
            ->with('flash_message',
             'Target categories were fetched!');
    }
}
