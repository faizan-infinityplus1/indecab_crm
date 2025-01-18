<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Master\DutyTypeController;
use App\Http\Controllers\Master\CategoriesVehicleGroupsController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('check/email', [LoginController::class, 'checkEmail'])->name('check.email');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/duty-types', [DutyTypeController::class, 'showDutyTypes'])->name('showDutyTypes');
    Route::get('/duty-types/create', [DutyTypeController::class, 'createDutyTypes'])->name('createDutyTypes');
    Route::get('/duty-types/edit', [DutyTypeController::class, 'editDutyTypes'])->name('editDutyTypes');
    Route::get('/vehicle-groups', [CategoriesVehicleGroupsController::class, 'showVehicleGroups'])->name('showVehicleGroups');
    Route::get('/vehicle-groups/create', [CategoriesVehicleGroupsController::class, 'createVehicleGroups'])->name('createVehicleGroups');
});


require __DIR__ . '/auth.php';
