<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/test-extends', function () {
    return view('test-extends');
})->name('test-extends');

Route::get("login", [AuthManager::class, "login"])->name("login");

Route::post("login", [AuthManager::class, "loginPost"])
    ->name("login.post");

Route::get("register", [AuthManager::class, "register"])->name("register");

Route::post("register", [AuthManager::class, "registerPost"])
    ->name("register.post");

// Task routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::patch('/tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');