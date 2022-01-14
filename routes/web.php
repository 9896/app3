<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Inertia\Inertia;
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
    return Inertia::render('Tasks/Create');
});



//Route::get('/home', [TaskController::class, 'get'])->name('home');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/task-list', [TaskController::class, 'get'])->name('tasklist');

Route::post('/add-task', [TaskController::class, 'add']);

