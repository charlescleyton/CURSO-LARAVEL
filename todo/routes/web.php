<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/task/new', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('tasks.create_action');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('tasks.edit_action');
Route::get('/tasks/delete', [TaskController::class, 'delete'])->name('tasks.delete');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.view');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');



