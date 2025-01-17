<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\ShopAuth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
        Route::GET('/login', 'AdminAuth\LoginController@    ')->name('login');
        Route::POST('/login', 'AdminAuth\LoginController@login');
        Route::POST('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
        Route::GET('/password/email', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::POST('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::POST('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.update');
        Route::GET('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::GET('/check/email', 'AdminAuth\LoginController@checkEmail')->name('check.email');
});

Route::middleware('auth')->group(function () {
    
});

require __DIR__ . '/auth.php';
