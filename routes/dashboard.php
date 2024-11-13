<?php

use App\Http\Controllers\APDController;
use App\Http\Controllers\RiskRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/show-apd', [APDController::class, 'view'])->name('apd.view');

Route::get('/admin/add-apd', [APDController::class, 'add'])->name('apd.add');
Route::post('/admin/add-apd', [APDController::class, 'upload'])->name('apd.upload');

Route::put('/admin/apd/{id}', [APDController::class, 'update'])->name('apd.update');
Route::delete('/admin/apd/{id}', [APDController::class, 'delete'])->name('apd.delete');


Route::get('/admin/risk-register', [RiskRegisterController::class, 'view'])->name('risk-register.view');
Route::put('/admin/risk-register/{id}', [ApdController::class, 'update'])->name('risk-register.update');
Route::delete('/admin/risk-register/{id}', [ApdController::class, 'delete'])->name('risk-register.delete');

