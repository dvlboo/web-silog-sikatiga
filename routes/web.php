<?php

use App\Http\Controllers\APDController;
use App\Http\Controllers\RiskRegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('users/homepage');
})->name('homepage');


Route::get('/risk-register', function () {
    return view('users/risk-register-page');
})->name('risk-register');
Route::post('/risk-register', [RiskRegisterController::class, 'upload']);



// Users => APD
Route::get('/apd', [APDController::class, 'apd'])->name('apd');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';