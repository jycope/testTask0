<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\ScheduleTask;
use Illuminate\Http\Request;

class ScheduleTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function index(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function create(Schedule $schedule)
    {
        $task = new ScheduleTask();

        return view('schedule.tasks.create', compact('task', 'schedule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Schedule $schedule)
    {
        $data = $this->validate($request, [
            'title' => 'required|max:30',
            'required' => 'nullable'
        ]);
        $task = $schedule->tasks()->make();
        $task->fill($data);
        $task->save();

        return redirect()
            ->route('schedule.show', $schedule);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @param  \App\Models\ScheduleTask  $scheduleTask
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule, ScheduleTask $scheduleTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @param  \App\Models\ScheduleTask  $scheduleTask
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule, ScheduleTask $scheduleTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @param  \App\Models\ScheduleTask  $scheduleTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule, ScheduleTask $scheduleTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @param  \App\Models\ScheduleTask  $scheduleTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule, ScheduleTask $scheduleTask)
    {
        //
    }
}