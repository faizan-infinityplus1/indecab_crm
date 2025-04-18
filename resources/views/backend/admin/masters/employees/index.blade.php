@extends('layouts.admin-master')
@section('content')

    <style>
        .page-header-sticky {
            margin-top: 0;
            padding-top: 10px;
            position: sticky;
            top: 0px;
            z-index: 3;
        }
    </style>



    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Employees</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('employeepermissions.index') }}"
                        class="btn btn-light border">Permission profiles</a>
                </div>
                <div class="btn-group" role="group"><a href="{{ route('employees.create') }}" class="btn btn-primary">Add
                        Employee</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#import-employees">Import</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#call-settings">Indecall Settings - For Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body px-0">
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-white"py-1 px-3 rounded-5>{{ $error }}</span>
                        </li>
                    @endforeach
                </div>
            @endif
            {{-- <div class="bg-light mb-3 p-3 text-center">
                Get started by adding <a href="{{ route('employees.create') }}" class="text-decoration-none">employees</a>
                for your business.
            </div> --}}

            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email / Username</th>
                            <th>Branches</th>
                            <th>User</th>
                            <th>Permission profile</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>
                                    {{ $data->name }}
                                </td>
                                <td>
                                    {{ $data->phone_no }}
                                </td>
                                <td>
                                    {{ $data->email }}
                                </td>
                                <td>
                                    {!! $data->branches ?? '<span>NA</span>' !!}
                                </td>
                                <td>
                                    <div class="{{ $data->is_api_user == true ? 'text-success' : 'text-danger' }}">
                                        {{ $data->is_api_user == true ? 'Active' : 'In Active' }}</div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('employees.edit', $data->id) }}">Edit</a>
                                            </li>
                                            <li>
                                                <p class="dropdown-item mb-0" data-bs-toggle="modal"
                                                    data-bs-target="#activity-log">View Activity Logs</p>
                                            </li>
                                            <li>
                                                <p class="dropdown-item mb-0" data-bs-toggle="modal"
                                                    data-bs-target="#manage-permission">Manage Permission</p>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Reset Password</a></li>
                                            <li><a class="dropdown-item" href="#">Disable Employee User</a></li>
                                            <li><a class="dropdown-item" href="#">Indecall Settings</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email / Username</th>
                            <th>Branches</th>
                            <th>User</th>
                            <th>Permission profile</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Activity logs Modal Start-->
    <div class="modal fade" id="activity-log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Activity logs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>
                            you have created Duty type at 14:06 on 04-07-2024
                        </p>
                    </div>
                    <div class="bg-light p-3">
                        <p class="text-center m-0">
                            No log records found.
                        </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Activity logs Modal End-->
    <!-- Import Employees Modal End-->
    <div class="modal fade" id="import-employees" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Import Employees</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="qwer" class="form-label">Select File</label>
                        <input type="file" name="" id="qwer" affieldinput="[object Object]"
                            class="form-control"
                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

                    </div>
                    <p class="text-secondary">
                        Select .csv file from which you need to import data.
                    </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <div>
                        <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Import
                            Employees</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    <button type="button" class="btn btn-light border border-secondary-subtle rounded-1"
                        data-bs-dismiss="modal">Download Import Format</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Import Employees Modal End-->
    <!-- Manage Call Settings Modal End-->
    <div class="modal fade" id="call-settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header ">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Manage Indecall Settings</h1>
                        <p class="text-secondary mb-0">
                            For You
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Indecall Phone Number</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div>
                        <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Setup
                            Indecall</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Manage Call Settings Modal End-->
    <!-- Manage Manage Permission Modal End-->
    <div class="modal fade" id="manage-permission" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header z-3 position-sticky top-0 bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Manage Permissions</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row mb-3">
                            <div class="d-flex align-items-center justify-content-end">
                                <label class="form-label me-4 mb-0 h6">Permission profile:</label>
                                <select name="" id="">
                                    <option value="">Select permission profile</option>
                                    <option value="purchase-management">Purchase management</option>
                                    <option value="fleet-management">Fleet management</option>
                                    <option value="collections">Collections</option>
                                    <option value="billing">Billing</option>
                                    <option value="super-admin">Super Admin</option>
                                    <option value="booking-management">Booking management</option>
                                </select>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-between mb-3">
                            <div class="col-md-6">
                                <p class="mb-0">Employee: <b>employee name</b></p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center justify-content-end">
                                <button type="reset" class="btn btn-light border text-uppercase">Select None</button>
                                <button type="button" class="btn btn-light border text-uppercase" id="selectAll">Select
                                    All</button>
                            </div>
                        </div>

                        <table class="table border-top">
                            <tbody>
                                {{-- Employees --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Employees</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">View Emoloyees</div>
                                        <i class="text-black-50 fs-6">Ability to view employees.</i>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Manage employees</div>
                                        <i class="text-black-50 fs-6">Ability to create users and manage their role.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            1 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View employees
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Employees administration</div>
                                        <i class="text-black-50 fs-6">Ability to perform administrative tasks like reset
                                            password, disable employee</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            1 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View employees
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Auto Login</div>
                                        <i class="text-black-50 fs-6">This permission is required to autologin your
                                            passenger/employees into the system using Auto-Login/SSO functionality..</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View employees
                                                    </li>
                                                    <li>
                                                        Manage employees
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                {{-- Duties --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Duties</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Edit Duty</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        Manage duty labels
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Manage duty labels</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Allot vehicle & drivers to duty</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Skip duty</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Cancel duty</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Send info duty</div>
                                        <i class="text-black-50 fs-6">Ability to send allotted duty information to driver,
                                            passenger, customer, booked by and other custom phone numbers and email
                                            addresses.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">View duty slip</div>
                                        <i class="text-black-50 fs-6">Ability to view the duty slips.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Generate duty slip</div>
                                        <i class="text-black-50 fs-6">Ability to manually generate and edit the duty
                                            slips.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Make duty slip adjustments</div>
                                        <i class="text-black-50 fs-6">Ability to make adjustments to duty slip.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        Generate duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Approve duty slip</div>
                                        <i class="text-black-50 fs-6">Ability to approve duty slips.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Export duties</div>
                                        {{-- <i class="text-black-50 fs-6">Ability to approve duty slips.</i> --}}
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View Export Profiles
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Send/Receive chats with Network Associates</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                {{-- Bookings --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Bookings</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">View Bookings</div>
                                        <i class="text-black-50 fs-6">Ability to view bookings. Permission to add/delete
                                            booking should be explicitly granted.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Manage Bookings</div>
                                        <i class="text-black-50 fs-6">Ability to add/create and view bookings. Permission
                                            to delete booking should be explicitly granted.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Send Booking Confirmation SMS & Email</div>
                                        <i class="text-black-50 fs-6">Ability to send confirmation sms and email to
                                            customers, driver, booked by, passenger and other custom number and email
                                            addresses</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Delete Bookings</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Export Bookings</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Configure auto allotment</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            2 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                {{-- Invoices --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Invoices</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">View Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Manage Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            4 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Download/Print Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            4 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Email Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            4 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Send Invoices via Network</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            4 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Cancel Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            5 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                    <li>
                                                        Manage Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Export Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            4 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Approve Invoices</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Change Billing Company</div>
                                        <i class="text-black-50 fs-6">Ability to change billing company once the invoice is
                                            created.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            5 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                    <li>
                                                        View Invoices
                                                    </li>
                                                    <li>
                                                        Manage Invoices
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                {{-- Receipts --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Receipts</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">View Receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Manage Receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Download/Print Receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Cancel receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Request Payments</div>
                                        <i class="text-black-50 fs-6">Ability to request payments using payment
                                            gateway.</i>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Export Receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="permission-name">Email Receipts</div>
                                    </td>
                                    <td>
                                        <div class="text-decoration-underline">
                                            3 other role
                                        </div>
                                        <small
                                            class="d-flex flex-column align-items-start bg-dark text-light p-2 width-200">
                                            <i>Following permissions will be enabled along with this roles:</i>
                                            <div>
                                                <ul class="p-0 m-0">
                                                    <li>
                                                        View Basic Driver Information
                                                    </li>
                                                    <li>
                                                        View Bookings
                                                    </li>
                                                    <li>
                                                        View duty slip
                                                    </li>
                                                </ul>
                                            </div>
                                        </small>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                </tr>
                                {{-- Credit debit notes --}}
                                <tr>
                                    <td colspan="3">
                                        <b>Credit debit notes</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer position-sticky bottom-0  bg-white">
                    <div>
                        <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Update
                            Permissions</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Manage Manage Permission Modal End-->

@endsection


@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

            $('#selectAll').click(function() {
                $('.checkbox').prop('checked', true);
            });
        });
    </script>
@endsection
