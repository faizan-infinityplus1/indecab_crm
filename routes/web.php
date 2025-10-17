<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\Business\BusinessSettingController;
use App\Http\Controllers\Master\CustomersPeopleController;
use App\Http\Controllers\Operations\BillingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Master\BankAccountsController;
use App\Http\Controllers\Master\BillingItemsController;
use App\Http\Controllers\Master\BranchesController;
use App\Http\Controllers\Master\DutyTypeController;
use App\Http\Controllers\Master\CategoriesVehicleGroupsController;
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
use App\Http\Controllers\Master\EmployeePermissionsController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Duties import
use App\Http\Controllers\Duties\DutyController;
use App\Http\Controllers\Master\MyCompaniesController;
use App\Http\Controllers\Operations\OperationController;
use App\Http\Controllers\Operations\BookingsController;


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

    Route::get('/customers/{customerId}/people', [CustomersPeopleController::class, 'index'])->name('customers.people.index');
    Route::get('/customers/{customerId}/people/manage/{customerPeopleId?}', [CustomersPeopleController::class, 'manage'])->name('customers.people.manage');
    Route::post('/customers/{customerId}/people/createOrUpdate', [CustomersPeopleController::class, 'createOrUpdate'])->name('customers.people.createOrUpdate');

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

    Route::get('/drivers', [MyDriversController::class, 'index'])->name('mydrivers.index');
    Route::get('/drivers/create', [MyDriversController::class, 'create'])->name('mydrivers.create');
    Route::post('/drivers/store', [MyDriversController::class, 'store'])->name('mydrivers.store');
    Route::get('/drivers/edit/{id}', [MyDriversController::class, 'edit'])->name('mydrivers.edit');
    Route::post('/drivers/edit/{id}', [MyDriversController::class, 'update'])->name('mydrivers.update');
    Route::delete('/drivers/delete/addresses/{id}', [MyDriversController::class, 'deleteAddresses'])->name('mydrivers.delete.addresses');
    Route::delete('/drivers/delete/deductions/{id}', [MyDriversController::class, 'deleteDeductions'])->name('mydrivers.delete.deductions');
    Route::delete('/drivers/delete/files/{id}', [MyDriversController::class, 'deleteFiles'])->name('mydrivers.delete.files');
    Route::get("/drivers/show", [MyDriversController::class, "showDriver"])
        ->name('mydrivers.show');


    Route::get('/vehicles', [VehiclesController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/manage', [VehiclesController::class, 'manage'])->name('vehicles.manage');
    Route::post('/vehicles/{vehicleId}/createOrUpdate', [VehiclesController::class, 'createOrUpdate'])->name('vehicles.createOrUpdate');

    Route::get('/duty-supporters', [DutySupportersController::class, 'index'])->name('dutysupporters.index');
    Route::get('/duty-supporters/create', [DutySupportersController::class, 'create'])->name('dutysupporters.create');
    Route::post('/duty-supporters/store', [DutySupportersController::class, 'store'])->name('dutysupporters.store');
    Route::get('/duty-supporters/edit/{id}', [DutySupportersController::class, 'edit'])->name('dutysupporters.edit');
    Route::post('/duty-supporters/update/{id}', [DutySupportersController::class, 'update'])->name('dutysupporters.update');
    Route::get('/duty-supporters/delete/addresses/{id}', [DutySupportersController::class, 'deleteAddress'])->name('dutysupporters.delete.addresses');
    Route::get('/duty-supporters/delete/files/{id}', [DutySupportersController::class, 'deleteFiles'])->name('dutysupporters.delete.files');

    Route::get('/labels', [LabelsController::class, 'index'])->name('labels.index');
    Route::get('/labels/manage/{id?}', [LabelsController::class, 'manage'])->name('labels.manage');
    Route::post('/labels/store', [LabelsController::class, 'store'])->name('labels.store');
    Route::get('/labels/edit/{id}', [LabelsController::class, 'edit'])->name('labels.edit');
    Route::post('/labels/update/{id}', [LabelsController::class, 'update'])->name('labels.update');

    Route::get('/feedback-forms', [FeedbackFormsController::class, 'index'])->name('feedbackforms.index');
    Route::get('/feedback-forms/manage/{id?}', [FeedbackFormsController::class, 'manage'])->name('feedbackforms.manage');
    Route::get('/feedback-forms/1', [FeedbackFormsController::class, 'addField'])->name('feedbackforms.addField');

    Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
    Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
    Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employees.store');
    Route::get('/employees/edit/{id}', [EmployeesController::class, 'edit'])->name('employees.edit');
    Route::post('/employees/update/{id}', [EmployeesController::class, 'update'])->name('employees.update');
    Route::get('/employees/delete/{id}', [EmployeesController::class, 'delete'])->name('employees.delete');
    Route::delete('/employees/delete/files/{id}', [EmployeesController::class, 'deleteFiles'])->name('employees.delete.files');

    Route::get('/employees/permission-profiles', [EmployeePermissionsController::class, 'index'])->name('employeepermissions.index');
    Route::get('/employees/permission-profiles/create', [EmployeePermissionsController::class, 'create'])->name('employeepermissions.create');

    Route::get('/billing-items', [BillingItemsController::class, 'index'])->name('billingitems.index');
    Route::get('/billing-items/manage/{id?}', [BillingItemsController::class, 'manage'])->name('billingitems.manage');
    Route::post('/billing-items/store', [BillingItemsController::class, 'store'])->name('billingitems.store');
    Route::get('/billing-items/edit/{id}', [BillingItemsController::class, 'edit'])->name('billingitems.edit');
    Route::post('/billing-items/update/{id}', [BillingItemsController::class, 'update'])->name('billingitems.update');

    Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
    Route::get('/branches/manage/{id?}', [BranchesController::class, 'manage'])->name('branches.manage');

    Route::get('/bank-accounts', [BankAccountsController::class, 'index'])->name('bankaccounts.index');
    Route::get('/bank-accounts/manage/{id?}', [BankAccountsController::class, 'manage'])->name('bankaccounts.manage');
    Route::post('/bank-accounts/store', [BankAccountsController::class, 'store'])->name('bankaccounts.store');
    Route::get('/bank-accounts/edit/{id}', [BankAccountsController::class, 'edit'])->name('bankaccounts.edit');
    Route::post('/bank-accounts/update/{id}', [BankAccountsController::class, 'update'])->name('bankaccounts.update');

    Route::get('/companies', [MyCompaniesController::class, 'index'])->name('companies.index');
    Route::get('/companies/manage/{id?}', [MyCompaniesController::class, 'manage'])->name('companies.manage');
    Route::post('/companies/store', [MyCompaniesController::class, 'store'])->name('companies.store');
    Route::post('/companies/update/{id}', [MyCompaniesController::class, 'update'])->name('companies.update');

    Route::get('/companies/profiles', [CompaniesProfilesController::class, 'index'])->name('companiesprofiles.index');
    Route::get('/companies/profiles/manage/{id?}', [CompaniesProfilesController::class, 'manage'])->name('companiesprofiles.manage');

    Route::get('/pricing', [CustomerPricingController::class, 'index'])->name('customerpricing.index');

    Route::get('/pricing/supplier', [SupplierPricingController::class, 'index'])->name('supplierpricing.index');

    // reports
    Route::get('/report-requests', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/report-requests/recent', [ReportController::class, 'recent'])->name('reports.recent');
    Route::get('/report-requests/manage', [ReportController::class, 'manage'])->name('reports.manage');

    // Route::get('/bookingManage/{id?}', [AddBookController::class, 'manage'])->name('dutytype.manage');
    Route::get("/booking/create", [BookingsController::class, "create"])->name("booking.create");
    Route::post("/booking/createOrUpdate/{bookingId?}", [BookingsController::class, "store"])->name("booking.createOrUpdate");
    Route::get("/duties/upcoming", [DutyController::class, "upcomingDuties"])->name('duties.upcoming');
    Route::get("/duties/booked", [DutyController::class, "bookedDuties"])->name('duties.booked');
    Route::get("/duties/allotted", [DutyController::class, "allottedDuties"])->name('duties.allotted');
    Route::get("/duties/dispatched", [DutyController::class, "dispatchedDuties"])->name('duties.dispatched');
    Route::get("/duties/completed", [DutyController::class, "completedDuties"])->name('duties.completed');
    Route::get("/duties/billed", [DutyController::class, "billedDuties"])->name('duties.billed');
    Route::get("/duties/cancelled", [DutyController::class, "cancelledDuties"])->name('duties.cancelled');
    Route::get("/duties/all", [DutyController::class, "allDuties"])->name('duties.all');
    Route::get("/duties/incoming", [DutyController::class, "incomingDuties"])->name('duties.incoming');
    Route::get("/duties/need-attention", [DutyController::class, "needsattentionDuties"])->name('duties.needsattention');


    // Booking Duties Data
    Route::get('/get-duty-details/{id}', [DutyController::class, 'getDetails'])->name('duty.details');
    Route::get('/edit-duty-details/{id}', [DutyController::class, 'editDetails'])->name('duty.edit.details');
    Route::get('/allot-duty-details/{id}', [DutyController::class, 'allotDetials'])->name('duty.allot.details');
    Route::post('/update-vehicle-duty/{id}', [DutyController::class, 'updateParticularDuty'])->name('update.duty.booking');
    
    Route::get('/booking-details/{id}', [DutyController::class, 'bookingDetails'])->name('duty.booking.details');

    // Allot Supporters
    Route::get('/allot-supporters/{id}', [DutyController::class, 'manageSupporters'])->name('duty.allot.supporters');
    // Manage Supporters
    Route::post('/update-supporters/{id}', [DutyController::class, 'updateSupporters'])->name('duty.update.supporters');

    // Store Allot Duties Data
    Route::post('/store-vehicle-duty/{id}', [DutyController::class, 'storeVehicleDuty'])->name('store.vehicle.duty');
    Route::post('/duty-store-supplier/{id}', [DutyController::class, 'storeSupplierDuty'])->name('store.supplier.duty.tr');

    // Clear Allotment
    Route::get('/clear-allotment/{id}', [DutyController::class, 'clearAllotment'])->name('duty.clear.allotment');

    // Allot Duty to Supplier
    Route::get('/get-duty-supplier/{id}', [DutyController::class, 'getDutySupplier'])->name('get.duty.supplier');
    Route::post('/store-duty-supplier/{id}', [DutyController::class, 'storeSupplierDuty'])->name('store.supplier.duty.allot');
    Route::get('/get-supplier-vehicle/{id}', [DutyController::class, 'getSupplierVehicle'])->name('get.supplier.vehicle.details');
    Route::get('/get-supplier-driver/{id}', [DutyController::class, 'getSupplierDriver'])->name('get.supplier.driver.details');
    Route::get('/allot-duty-supplier/{id}', [DutyController::class, 'allotDutySupplier'])->name('duty.allot.supplier');



    // Update Label
    Route::get('/edit-labels/{id}', [DutyController::class, 'editLabels'])->name('edit.duty.label');
    Route::post('/update-labels/{id}', [DutyController::class, 'updateLabels'])->name('update.duty.label');

    // Operations Routes
    Route::get("/availability", [OperationController::class, "Availability"]);
    Route::get("/bookings/all", [BookingsController::class, "allBookings"])->name('bookings.all');
    Route::get("/bookings/booked", [BookingsController::class, "bookedBookings"])->name('bookings.booked');
    Route::get("/bookings/on-going", [BookingsController::class, "onGoingBookings"])->name('bookings.on-going');
    Route::get("/bookings/completed", [BookingsController::class, "completedBookings"])->name('bookings.completed');
    Route::get("/bookings/billed", [BookingsController::class, "billedBookings"])->name('bookings.billed');
    Route::get("/bookings/cancelled", [BookingsController::class, "cancelledBookings"])->name('bookings.cancelled');
    Route::get("/bookings/show/{id}", [BookingsController::class, "specificBookings"])
        ->name('bookings.specific-bookings');
    Route::get("/billed", [OperationController::class, "Billed"]);
    Route::get("/receipts", [OperationController::class, "receipt"])->name('receipts');
    Route::get("/receipts/create", [OperationController::class, "create"])->name("receipts.create");
    Route::get("/payment-gateway", [OperationController::class, "PaymentGateway"]);
    Route::get("/purchased-duty", [OperationController::class, "PurchasedDuty"]);
    Route::get("/purchased-invoice", [OperationController::class, "PurchasedInvoice"]);
    Route::get("/purchased-payment", [OperationController::class, "PurchasedPayment"]);
    Route::get("/billing", [BillingController::class, "billing"])->name('billing');
    Route::get("/billing/invoice", [BillingController::class, "invoice"])->name('invoice');


    Route::get('/business-setting', [BusinessSettingController::class, 'index'])->name('businessSetting.index');
});



require __DIR__ . '/auth.php';
