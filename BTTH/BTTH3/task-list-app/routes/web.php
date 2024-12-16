<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class); 

Route::post('/tasks/{id}/toggle-status', [TaskController::class, 'toggleStatus'])->name('tasks.toggleStatus');

