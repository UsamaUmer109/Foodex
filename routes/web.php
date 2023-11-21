<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// For Guest User

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/user', [UserController::class, 'index']);

Route::middleware(['user'])->group(function () {
    // Route::get('/user', [UserController::class, 'index']);
});
Route::middleware(['user'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
