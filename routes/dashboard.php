<?php

use App\Http\Controllers\APDController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/apd', [APDController::class, 'index'])->name('apd.index');
Route::post('/admin/apd', [ApdController::class, 'store'])->name('apd.store');
Route::put('/admin/apd/{id}', [ApdController::class, 'update'])->name('apd.update');
Route::delete('/admin/apd/{id}', [ApdController::class, 'destroy'])->name('apd.delete');