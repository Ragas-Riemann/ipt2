<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AuthController;

// Dashboard (home)
Route::get('/', function () {
    return view('dashboard');   // loads resources/views/dashboard.blade.php
})->name('dashboard');

// API endpoints for students
Route::get('/students', [PersonController::class, 'index']);  // fetch all students
Route::post('/students', [PersonController::class, 'store']); // store student

// Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 🔹 Catch-all route for React Router (put at the very bottom)
Route::get('/{any}', function () {
    return view('dashboard');  // serves the React app
})->where('any', '.*');
