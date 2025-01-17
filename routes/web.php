<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('/check/email', [LoginController::class, 'checkEmail'])->name('check.email');

    // Route::POST('/login', 'AdminAuth\LoginController@login');
        // Route::POST('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
        // Route::GET('/password/email', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        // Route::POST('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        // Route::POST('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.update');
        // Route::GET('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('password.reset');
        // Route::GET('/check/email', 'AdminAuth\LoginController@checkEmail')->name('check.email');
});
Route::middleware('auth:admin')->group(function () {
Route::prefix('admumb')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
});


require __DIR__ . '/auth.php';
