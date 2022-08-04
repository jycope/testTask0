<?php

namespace App\Http\Controllers;

use App\Models\ListTasks;
use App\Models\Lists;
use Illuminate\Http\Request;

class ListTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function index(Lists $lists)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function create(Lists $lists)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lists $lists)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lists  $lists
     * @param  \App\Models\ListTasks  $listTasks
     * @return \Illuminate\Http\Response
     */
    public function show(Lists $lists, ListTasks $listTasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lists  $lists
     * @param  \App\Models\ListTasks  $listTasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Lists $lists, ListTasks $listTasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lists  $lists
     * @param  \App\Models\ListTasks  $listTasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lists $lists, ListTasks $listTasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lists  $lists
     * @param  \App\Models\ListTasks  $listTasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lists $lists, ListTasks $listTasks)
    {
        //
    }
}
