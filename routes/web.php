<?php

use App\Http\Controllers\TasksController;

use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class,'create']);
Route::resource('tasks', TasksController::class);
Route::get('/statistics', [TasksController::class,'statistics'])->name('statistics');
