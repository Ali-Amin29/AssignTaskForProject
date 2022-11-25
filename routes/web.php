<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\TaskController ;
use App\Http\Controllers\ProjectController ;


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


// Auth Route
Auth::routes();
Route::get('/',function(){
    return view('auth.login');
});

// Home Route for all
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Resources routes
Route::resource('user', UserController::class);
Route::resource('task', TaskController::class);
Route::resource('project', ProjectController::class);

// add Task
Route::get('/create/task', function(){
    $project=Project::get();
    $user=User::get();
    return view('createtask',['projects'=>$project,'users'=>$user]);
} )->name('addtask');

// add Project
Route::get('/create/project', function(){
    return view('createproject');
} )->name('addproject');
