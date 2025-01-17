<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/dutytypes', [AdminController::class, 'showDutyTypes'])->name('showDutyTypes');
Route::middleware('guard:guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('/check/email', [LoginController::class, 'checkEmail'])->name('check.email');
});
Route::prefix('admumb')->group(function () {

Route::middleware('guard:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('login');
});
});


require __DIR__ . '/auth.php';
