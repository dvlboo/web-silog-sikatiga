<?php

use App\Http\Controllers\RiskRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users/homepage');
})->name('homepage');

Route::get('/risk-register', [RiskRegisterController::class, 'show'])->name('risk-register');
Route::post('/risk-register', [RiskRegisterController::class, 'upload']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';