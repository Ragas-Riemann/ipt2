<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('dashboard');   // loads resources/views/dashboard.blade.php
})->name('dashboard');

Route::get('/students', [PersonController::class, 'index'])->name('students');
Route::post('/students/store', [PersonController::class, 'store'])->name('students.store');
Route::get('/students/show', [PersonController::class, 'show'])->name('students.show');


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

