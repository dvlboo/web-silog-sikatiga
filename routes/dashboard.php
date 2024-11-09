<?php

use App\Http\Controllers\APDController;
use App\Http\Controllers\RiskRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/apd', [APDController::class, 'view'])->name('apd.view');
Route::post('/admin/apd', [APDController::class, 'upload'])->name('apd.upload');
Route::put('/admin/apd/{id}', [APDController::class, 'update'])->name('apd.update');
Route::delete('/admin/apd/{id}', [APDController::class, 'delete'])->name('apd.delete');


Route::get('/admin/risk-register', [RiskRegisterController::class, 'view'])->name('risk-register.view');
Route::post('/admin/risk-register', [ApdController::class, 'upload'])->name('risk-register.upload');
Route::put('/admin/risk-register/{id}', [ApdController::class, 'update'])->name('risk-register.update');
Route::delete('/admin/risk-register/{id}', [ApdController::class, 'delete'])->name('risk-register.delete');

