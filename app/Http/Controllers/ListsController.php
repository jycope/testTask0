<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Lists::all();

        return view('lists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = new Lists();

        return view('lists.create', compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('name'));
        $data = $this->validate($request, [
            'name' => 'required'
        ]);
        $list = new Lists();
        $list->fill($data);
        $list->save();

        return redirect()->route('lists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    public function show(Lists $list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(Lists $list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lists $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\List  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lists $list)
    {
        //
    }
}