@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3 validator-error">
                <div class="row">
                    <div class="col-md-6 position-static" x-show="open">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">New Permission Profile</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>

                <form action="">
                    @csrf
                    <div class="mb-3 validator-error">
                        <label for="name" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" name="name" id="name">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="row d-flex align-items-center justify-content-between mb-3">
                        <div class="col-md-6">

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
                                    <div class="text-decoration-underline other-permissions">
                                        1 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        1 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        2 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        4 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        4 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        4 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        4 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        5 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        4 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        5 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
                                    <div class="text-decoration-underline other-permissions">
                                        3 other role
                                    </div>
                                    <small
                                        class="flex-column align-items-start bg-dark text-light p-2 width-200 position-absolute other-permissions-description">
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
        </div>
    </div>
@endsection
@section('extrajs')
@endsection
