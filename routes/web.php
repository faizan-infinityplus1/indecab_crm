<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Master\DutyTypeController;
use App\Http\Controllers\Master\CategoriesVehicleGroupsController;
use App\Http\Controllers\Master\TaxesController;
use App\Http\Controllers\Master\CustomersController;
use App\Http\Controllers\Master\MyDriversController;
use App\Http\Controllers\Master\SuppliersController;
use App\Http\Controllers\Master\VehiclesController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/duty-types', [DutyTypeController::class, 'index'])->name('dutytype.index');
    Route::get('/duty-types/manage/{id?}', [DutyTypeController::class, 'manage'])->name('dutytype.manage');
    Route::post('/duty-types/store', [DutyTypeController::class, 'store'])->name('dutytype.store');
    Route::post('/duty-types/update/{id}', [DutyTypeController::class, 'update'])->name('dutytype.update');

    Route::get('/vehicle-groups', [CategoriesVehicleGroupsController::class, 'index'])->name('vehiclegroups.index');
    Route::get('/vehicle-groups/manage/{id?}', [CategoriesVehicleGroupsController::class, 'manage'])->name('vehiclegroups.manage');
    Route::post('/vehicle-groups/store', [CategoriesVehicleGroupsController::class, 'store'])->name('vehiclegroups.store');
    Route::post('/vehicle-groups/update/{id}', [CategoriesVehicleGroupsController::class, 'update'])->name('vehiclegroups.update');

    Route::get('/taxes', [TaxesController::class, 'showTaxes'])->name('showTaxes');
    Route::get('/taxes/create', [TaxesController::class, 'createTaxes'])->name('createTaxes');

    Route::get('/customers', [CustomersController::class, 'showCustomers'])->name('showCustomers');
    Route::get('/customers/create', [CustomersController::class, 'createCustomers'])->name('createCustomers');
    Route::get('/customers/groups', [CustomersController::class, 'showCustomersGroups'])->name('showCustomersGroups');
    Route::get('/customers/groups/create', [CustomersController::class, 'createCustomersGroups'])->name('createCustomersGroups');

    Route::get('/suppliers', [SuppliersController::class, 'showSuppliers'])->name('showSuppliers');
    Route::get('/suppliers/create', [SuppliersController::class, 'createSuppliers'])->name('createSuppliers');
    Route::get('/suppliers/groups', [SuppliersController::class, 'showSuppliersGroups'])->name('showSuppliersGroups');
    Route::get('/suppliers/groups/create', [SuppliersController::class, 'createSuppliersGroups'])->name('createSuppliersGroups');

    Route::get('/drivers', [MyDriversController::class, 'showDrivers'])->name('showDrivers');
    Route::get('/drivers/create', [MyDriversController::class, 'createDrivers'])->name('createDrivers');

    Route::get('/vehicles', [VehiclesController::class, 'showVehicles'])->name('showVehicles');
    Route::get('/vehicles/create', [VehiclesController::class, 'createVehicles'])->name('createVehicles');
});


require __DIR__ . '/auth.php';
