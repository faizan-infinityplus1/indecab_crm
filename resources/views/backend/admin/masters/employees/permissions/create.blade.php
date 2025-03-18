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
                            <tr>
                                <td>
                                    <div class="permission-name">View Credit/Debit Notes</div>
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
                                    <div class="permission-name">Manage Credit/Debit Notes</div>
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
                                    <div class="permission-name">Download/Print Credit/Debit Notes</div>
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
                                    <div class="permission-name">Cancel Credit/Debit Notes</div>
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
                                    <div class="permission-name">Export Credit/Debit Notes</div>
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
                                    <div class="permission-name">Email Credit/Debit Notes</div>
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
                            {{-- Purchases --}}
                            <tr>
                                <td colspan="3">
                                    <b>Purchases</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Purchases</div>
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
                                    <div class="permission-name">Manage Purchases</div>
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
                                                    View Purchases
                                                </li>
                                                <li>
                                                    Manage Purchase Duties
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
                                    <div class="permission-name">Approve Purchase Invoice</div>
                                    <i class="text-black-50 fs-6">Ability to approve purchase invoices.</i>
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
                                                    View Purchases
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
                                    <div class="permission-name">Export Purchases</div>
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
                                                    View Purchases
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
                                    <div class="permission-name">Download/Print Purchases</div>
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
                                                    View Purchases
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
                                    <div class="permission-name">Email Purchases</div>
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
                                                    View Purchases
                                                </li>
                                                <li>
                                                    Download/Print Purchases
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
                                    <div class="permission-name">Cancel Purchases</div>
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
                                                    View Purchases
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Purchases duties --}}
                            <tr>
                                <td colspan="3">
                                    <b>Purchases duties</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Purchase Duties</div>
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
                                    <div class="permission-name">Manage Purchase Duties</div>
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
                                    <div class="permission-name">Generate Purchase duty slip</div>
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
                                    <div class="permission-name">Make duty slip adjustments</div>
                                    <i class="text-black-50 fs-6">Ability to make adjustments to purchase duty slip.</i>
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
                                                    Generate Purchase duty slip
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Purchase payments --}}
                            <tr>
                                <td colspan="3">
                                    <b>Purchase payments</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Purchases Payments</div>
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
                                    <div class="permission-name">Manage Purchase Payments</div>
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
                                    <div class="permission-name">Export Purchases Payments</div>
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
                                    <div class="permission-name">Cancel Purchases Payments</div>
                                    <i class="text-black-50 fs-6">Ability to make adjustments to purchase duty slip.</i>
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
                                    <div class="permission-name">Download/Print Purchases Payments</div>
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
                                    <div class="permission-name">Email Purchases Payments</div>
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
                            {{-- Petty cash --}}
                            <tr>
                                <td colspan="3">
                                    <b>Petty cash</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Petty Cash</div>
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
                                    <div class="permission-name">Manage Petty Cash</div>
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
                                                    Add Petty Cash
                                                </li>
                                                <li>
                                                    Send petty cash info
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
                                    <div class="permission-name">Add Petty Cash </div>
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
                                    <div class="permission-name">Send petty cash info</div>
                                    <i class="text-black-50 fs-6">Ability to send petty cash info to drivers via SMS.</i>
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
                                    <div class="permission-name">Export Petty Cash</div>
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
                            {{-- Vehicle expenses --}}
                            <tr>
                                <td colspan="3">
                                    <b>Vehicle expenses</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Vehicle Expenses</div>
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
                                                    View Basic Vehicle Information
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
                                    <div class="permission-name">Manage Vehicle Expenses</div>
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
                                                    View Basic Vehicle Information
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
                                    <div class="permission-name">Export Vehicle Expenses</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Vehicle Fuel --}}
                            <tr>
                                <td colspan="3">
                                    <b>Vehicle Fuel</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Vehicle Fuel</div>
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
                                                    View Basic Vehicle Information
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
                                    <div class="permission-name">Manage Vehicle Fuel</div>
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
                                                    View Basic Vehicle Information
                                                </li>
                                                <li>
                                                    Add Vehicle Fuel
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
                                    <div class="permission-name">Add Vehicle Fuel</div>
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
                                                    View Basic Vehicle Information
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
                                    <div class="permission-name">Edit Cost of Vehicle Fuel</div>
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
                                                    View Basic Vehicle Information
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Fuel stations --}}
                            <tr>
                                <td colspan="3">
                                    <b>Fuel stations</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Fuel Station</div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Fuel Stations</div>
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
                                                    Add Fuel Station
                                                </li>
                                                <li>
                                                    Edit Fuel Station
                                                </li>
                                                <li>
                                                    Delete Fuel Station
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
                                    <div class="permission-name">Add Fuel Station</div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Edit Fuel Station</div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Delete Fuel Station </div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Smses --}}
                            <tr>
                                <td colspan="3">
                                    <b>Smses</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View SMS </div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Export Sms</div>
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
                                                    View SMS
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Whatsapp --}}
                            <tr>
                                <td colspan="3">
                                    <b>Whatsapp</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Whatsapp messages</div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Export Whatsapp messages</div>
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
                                                    View Whatsapp messages
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Drivers --}}
                            <tr>
                                <td colspan="3">
                                    <b>Drivers</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Drivers</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Drivers</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Driver Attendance</div>
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
                                                    Manage Drivers
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
                                    <div class="permission-name">View Driver Attendance</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Basic Driver Information</div>
                                    <i class="text-black-50 fs-6">User would be able to view only driver name, primary and
                                        alternate phone number.</i>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Driver Users</div>
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
                                                    Manage Drivers
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
                                    <div class="permission-name">Export Drivers</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Duty supporters --}}
                            <tr>
                                <td colspan="3">
                                    <b>Duty supporters</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Duty Supporters</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Duty Supporters</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Basic Duty Supporter Information</div>
                                    <i class="text-black-50 fs-6">User would be able to view only supporter name, primary
                                        and alternate phone number.</i>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Vehicles --}}
                            <tr>
                                <td colspan="3">
                                    <b>Vehicles</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Vehicles</div>
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
                                    <div class="permission-name">Manage Vehicles</div>
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
                                    <div class="permission-name">View Basic Vehicle Information</div>
                                    <i class="text-black-50 fs-6">User would be able to view vehicle model name, number,
                                        fuel etc and not the registration details</i>
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
                                    <div class="permission-name">Export Vehicles</div>
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
                            {{-- Vehicle groups --}}
                            <tr>
                                <td colspan="3">
                                    <b>Vehicle groups</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Vehicle Groups</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Vehicle Groups</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Customer groups --}}
                            <tr>
                                <td colspan="3">
                                    <b>Customer groups</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Customer Groups</div>
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
                                                    View Customers
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Customers --}}
                            <tr>
                                <td colspan="3">
                                    <b>Customers</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Customers</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage customers</div>
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
                                                    View Customers
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
                                    <div class="permission-name">View customer pricing</div>
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
                                                    View Customers
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
                                    <div class="permission-name">Edit customer pricing</div>
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
                                                    View Customers
                                                </li>
                                                <li>
                                                    View customer pricing
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
                                    <div class="permission-name">Export Customers</div>
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
                                                    View Customers
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
                                    <div class="permission-name">Manage People</div>
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
                                                    View Customers
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
                                    <div class="permission-name">Export Customer People</div>
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
                                                    View Customers
                                                </li>
                                                <li>
                                                    Manage People
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
                                    <div class="permission-name">Manage Fields</div>
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
                                                    View Customers
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Pricing --}}
                            <tr>
                                <td colspan="3">
                                    <b>Pricing</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Pricing</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Pricing</div>
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
                                                    View Pricing
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Supplier groups --}}
                            <tr>
                                <td colspan="3">
                                    <b>Supplier groups </b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Supplier Groups (Ability to add or update)</div>
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
                                                    View Suppliers
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Suppliers --}}
                            <tr>
                                <td colspan="3">
                                    <b>Suppliers </b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Suppliers</div>
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
                                                    View Suppliers
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
                                    <div class="permission-name">Manage Suppliers</div>
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
                                                    View Suppliers
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
                                    <div class="permission-name">View supplier pricing</div>
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
                                                    View Suppliers
                                                </li>
                                                <li>
                                                    View supplier pricing
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
                                    <div class="permission-name">Edit Supplier Pricing</div>
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
                                                    View Suppliers
                                                </li>
                                                <li>
                                                    Manage Suppliers
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
                                    <div class="permission-name">Manage Supplier Users</div>
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
                                                    View Suppliers
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
                                    <div class="permission-name">Export Suppliers</div>
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
                                                    View Suppliers
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Duty types --}}
                            <tr>
                                <td colspan="3">
                                    <b>Duty types</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Duty Types</div>
                                    <i class="text-black-50 fs-6">Ability to view duty type.</i>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Duty Types</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Taxes --}}
                            <tr>
                                <td colspan="3">
                                    <b>Taxes</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Taxes</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Taxes</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Branches --}}
                            <tr>
                                <td colspan="3">
                                    <b>Branches</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Branches</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Branches</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Billing items --}}
                            <tr>
                                <td colspan="3">
                                    <b>Billing items</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Billing Items</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Billing Items</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Bank accounts --}}
                            <tr>
                                <td colspan="3">
                                    <b>Bank accounts</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Bank Accounts</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Bank Accounts</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Sister companies --}}
                            <tr>
                                <td colspan="3">
                                    <b>Sister companies</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View My Companies</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage My Companies</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Company --}}
                            <tr>
                                <td colspan="3">
                                    <b>Company</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Edit primary company information</div>
                                    <i class="text-black-50 fs-6">Ability to edit allowances, email and other settings.
                                        Also user will be able to change company information</i>
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
                                                    Manage Company Profiles
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Business profiles --}}
                            <tr>
                                <td colspan="3">
                                    <b>Business profiles</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Company Profiles</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Company Profiles</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Labels --}}
                            <tr>
                                <td colspan="3">
                                    <b>Labels</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Labels listing</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Labels</div>
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
                                                    Labels listing
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Feedback forms --}}
                            <tr>
                                <td colspan="3">
                                    <b>Feedback forms</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Feedback Forms</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Feedback Forms</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Reports --}}
                            <tr>
                                <td colspan="3">
                                    <b>Reports</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Reports</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Exports --}}
                            <tr>
                                <td colspan="3">
                                    <b>Exports</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Exports History</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Networks --}}
                            <tr>
                                <td colspan="3">
                                    <b>Networks</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Networks</div>
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
                                                    Manage Bookings
                                                </li>
                                                <li>
                                                    View/Accept/Reject Incoming Requests
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
                                    <div class="permission-name">View/Accept/Reject Incoming Requests</div>
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
                                                    Manage Bookings
                                                </li>
                                            </ul>
                                        </div>
                                    </small>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            {{-- Export profiles --}}
                            <tr>
                                <td colspan="3">
                                    <b>Export profiles</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">View Export Profiles</div>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Edit Export Profiles</div>
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
                            {{-- Location tracking --}}
                            <tr>
                                <td colspan="3">
                                    <b>Location tracking</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Location Tracking</div>
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
                                                    View Locations (Tracking)
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
                                    <div class="permission-name">View Locations (Tracking)</div>
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
                            {{-- Auto collect --}}
                            <tr>
                                <td colspan="3">
                                    <b>Auto collect</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="permission-name">Manage Auto-collects</div>
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
                                                    View Auto-collects
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
                                    <div class="permission-name">View Auto-collects</div>
                                    <i class="text-black-50 fs-6">Ability to view auto-collects.</i>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <input type="checkbox" name="" id="">
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
    <script></script>
@endsection
