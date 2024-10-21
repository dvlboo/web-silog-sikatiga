<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});