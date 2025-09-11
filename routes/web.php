<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/students', [PersonController::class, 'index'])->name('students');
Route::post('/students/store', [PersonController::class, 'store'])->name('students.store');
Route::get('/students/show', [PersonController::class, 'show'])->name('students.show');
