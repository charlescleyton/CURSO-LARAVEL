<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class. 'index'])->name('home');
Route::get('/task/new', [TaskController::class. 'create'])->name('task.create');
Route::get('/task', [TaskController::class. 'task'])->name('task');

Route::get('/login', [AuthController::class. 'index'])->name('login');
Route::get('/register', [AuthController::class. 'register'])->name('register');


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
