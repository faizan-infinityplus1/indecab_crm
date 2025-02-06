<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Master\BankAccountsController;
use App\Http\Controllers\Master\BillingItemsController;
use App\Http\Controllers\Master\BranchesController;
use App\Http\Controllers\Master\DutyTypeController;
use App\Http\Controllers\Master\CategoriesVehicleGroupsController;
use App\Http\Controllers\Master\CompaniesController;
use App\Http\Controllers\Master\CompaniesProfilesController;
use App\Http\Controllers\Master\CustomerPricingController;
use App\Http\Controllers\Master\TaxesController;
use App\Http\Controllers\Master\CustomersController;
use App\Http\Controllers\Master\DutySupportersController;
use App\Http\Controllers\Master\EmployeesController;
use App\Http\Controllers\Master\FeedbackFormsController;
use App\Http\Controllers\Master\LabelsController;
use App\Http\Controllers\Master\MyDriversController;
use App\Http\Controllers\Master\SupplierPricingController;
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
    Route::get('/duty-types/edit/{id}', [DutyTypeController::class, 'edit'])->name('dutytype.edit');
    Route::post('/duty-types/update/{id}', [DutyTypeController::class, 'update'])->name('dutytype.update');
    Route::get('/duty-types/delete/{id}', [DutyTypeController::class, 'delete'])->name('dutytype.delete');

    Route::get('/vehicle-groups', [CategoriesVehicleGroupsController::class, 'index'])->name('vehiclegroups.index');
    Route::get('/vehicle-groups/manage/{id?}', [CategoriesVehicleGroupsController::class, 'manage'])->name('vehiclegroups.manage');
    Route::post('/vehicle-groups/store', [CategoriesVehicleGroupsController::class, 'store'])->name('vehiclegroups.store');
    Route::get('/vehicle-groups/edit/{id}', [CategoriesVehicleGroupsController::class, 'edit'])->name('vehiclegroups.edit');
    Route::post('/vehicle-groups/update/{id}', [CategoriesVehicleGroupsController::class, 'update'])->name('vehiclegroups.update');

    Route::get('/taxes', [TaxesController::class, 'index'])->name('taxes.index');
    Route::get('/taxes/manage/{id?}', [TaxesController::class, 'manage'])->name('taxes.manage');
    Route::post('/taxes/store', [TaxesController::class, 'store'])->name('taxes.store');
    Route::post('/taxes/update/{id}', [TaxesController::class, 'update'])->name('taxes.update');

    Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
    Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
    Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
    Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
    Route::post('/customers/update/{id}', [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('/customers/delete/applicable-taxes/{id}', [CustomersController::class, 'deleteApplicableTaxes'])->name('customers.delete.applicable.taxes');
    Route::delete('/customers/delete/interstate-taxes/{id}', [CustomersController::class, 'deleteInterstateTaxes'])->name('customers.delete.interstate.taxes');
    Route::delete('/customers/delete/driver-allowance-setting/{id}', [CustomersController::class, 'deleteDriverAllowanceSetting'])->name('customers.delete.driver.allowance.setting');
    Route::delete('/customers/delete/duty-type/{id}', [CustomersController::class, 'deleteDutyType'])->name('customers.delete.duty.type');
    Route::delete('/customers/delete/files/{id}', [CustomersController::class, 'deleteFiles'])->name('customers.delete.files');

    Route::get('/customers/groups', [CustomersController::class, 'showCustomersGroups'])->name('showCustomersGroups');
    Route::get('/customers/groups/create', [CustomersController::class, 'createCustomersGroups'])->name('createCustomersGroups');

    Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers.index');
    Route::get('/suppliers/create', [SuppliersController::class, 'create'])->name('suppliers.create');
    Route::post('/suppliers/store', [SuppliersController::class, 'store'])->name('suppliers.store');
    Route::get('/suppliers/edit/{id}', [SuppliersController::class, 'edit'])->name('suppliers.edit');
    Route::post('/suppliers/update/{id}', [SuppliersController::class, 'update'])->name('suppliers.update');
    Route::delete('/suppliers/delete/applicable-taxes/{id}', [SuppliersController::class, 'deleteApplicableTaxes'])->name('suppliers.delete.applicable.taxes');
    Route::delete('/suppliers/delete/interstate-taxes/{id}', [SuppliersController::class, 'deleteInterstateTaxes'])->name('suppliers.delete.interstate.taxes');
    Route::delete('/suppliers/delete/driver-allowance-setting/{id}', [SuppliersController::class, 'deleteDriverAllowanceSetting'])->name('suppliers.delete.driver.allowance.setting');
    Route::delete('/suppliers/delete/bank-account/{id}', [SuppliersController::class, 'deleteBankAccounts'])->name('suppliers.delete.bank_accounts');
    Route::delete('/suppliers/delete/files/{id}', [SuppliersController::class, 'deleteFiles'])->name('suppliers.delete.files');


    Route::get('/suppliers/groups', [SuppliersController::class, 'showSuppliersGroups'])->name('showSuppliersGroups');
    Route::get('/suppliers/groups/create', [SuppliersController::class, 'createSuppliersGroups'])->name('createSuppliersGroups');

    Route::get('/drivers', [MyDriversController::class, 'showDrivers'])->name('showDrivers');
    Route::get('/drivers/create', [MyDriversController::class, 'createDrivers'])->name('createDrivers');

    Route::get('/vehicles', [VehiclesController::class, 'showVehicles'])->name('showVehicles');
    Route::get('/vehicles/create', [VehiclesController::class, 'createVehicles'])->name('createVehicles');
    
    Route::get('/duty-supporters', [DutySupportersController::class, 'index'])->name('dutysupporters.index');
    Route::get('/duty-supporters/manage/{id?}', [DutySupportersController::class, 'manage'])->name('dutysupporters.manage');

    Route::get('/labels', [LabelsController::class, 'index'])->name('labels.index');
    Route::get('/labels/manage/{id?}', [LabelsController::class, 'manage'])->name('labels.manage');

    Route::get('/feedback-forms', [FeedbackFormsController::class, 'index'])->name('feedbackforms.index');
    Route::get('/feedback-forms/manage/{id?}', [FeedbackFormsController::class, 'manage'])->name('feedbackforms.manage');

    Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
    Route::get('/employees/manage/{id?}', [EmployeesController::class, 'manage'])->name('employees.manage');
    
    Route::get('/billing-items', [BillingItemsController::class, 'index'])->name('billingitems.index');
    Route::get('/billing-items/manage/{id?}', [BillingItemsController::class, 'manage'])->name('billingitems.manage');

    Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
    Route::get('/branches/manage/{id?}', [BranchesController::class, 'manage'])->name('branches.manage');

    Route::get('/bank-accounts', [BankAccountsController::class, 'index'])->name('bankaccounts.index');
    Route::get('/bank-accounts/manage/{id?}', [BankAccountsController::class, 'manage'])->name('bankaccounts.manage');

    Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
    Route::get('/companies/manage/{id?}', [CompaniesController::class, 'manage'])->name('companies.manage');

    Route::get('/companies/profiles', [CompaniesProfilesController::class, 'index'])->name('companiesprofiles.index');
    Route::get('/companies/profiles/manage/{id?}', [CompaniesProfilesController::class, 'manage'])->name('companiesprofiles.manage');
    
    Route::get('/pricing', [CustomerPricingController::class, 'index'])->name('customerpricing.index');

    Route::get('/pricing/supplier', [SupplierPricingController::class, 'index'])->name('supplierpricing.index');
});


require __DIR__ . '/auth.php';
