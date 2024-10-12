<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route untuk halaman register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
