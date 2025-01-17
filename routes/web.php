<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('check/email', [LoginController::class, 'checkEmail'])->name('check.email');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/duty-types', [AdminController::class, 'showDutyTypes'])->name('showDutyTypes');
});


require __DIR__ . '/auth.php';
