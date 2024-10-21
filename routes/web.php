<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users/homepage');
})->name('homepage');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';