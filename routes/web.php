<?php

use App\Http\Controllers\ListsController;
use App\Http\Controllers\ListTasksController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScheduleTaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('schedule', ScheduleController::class);

Route::resource('schedule.tasks', ScheduleTaskController::class);