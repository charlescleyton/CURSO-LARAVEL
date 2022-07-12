<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/read',[PostController::class,'read']);
Route::get('/posts/all',[PostController::class,'all']);
Route::get('/posts/update',[PostController::class,'update']);
Route::get('/posts/up_all',[PostController::class,'up_all']);
Route::get('/posts/delete',[PostController::class,'delete']);

Route::get('/', function () {
    return view('welcome');
});
