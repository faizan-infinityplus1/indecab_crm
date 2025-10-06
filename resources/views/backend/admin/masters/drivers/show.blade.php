@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="position-static">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">Adil Patel <span class="h6 text-muted">( 08:00 - 18:00)</span></h1>
                    </div>
                    <div class="d-flex gap-2 pb-3">
                        <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Edit</a></div>
                        <div class="dropdown">
                            <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#send-confirmation">Copy settings to other drivers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="">
                </div>
                <div class="col-9">
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Official Information</div>
                        <div class="p-3 panel-body">
                            <p>
                                <strong>
                                    Birthdate:
                                </strong>
                                20/09/2024 (Age : 10 months)
                            </p>
                            <p>
                                <strong>
                                    Joining date:
                                </strong>
                                22/09/2022
                            </p>
                            <p>
                                <strong>
                                    Aadhar Card Number:
                                </strong>
                                800921478297
                            </p>
                            <p>
                                <strong>
                                    PAN Card:
                                </strong>
                                CJEPP7913B
                            </p>
                            <p>
                                <strong>
                                    Is Vaccinated for COVID 19?
                                </strong>
                                No
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Salary & Allowances</div>
                        <div class="p-3 panel-body">
                            <p>
                                <strong>
                                    Salary:
                                </strong>
                                ₹ 16,000.00
                            </p>
                            <p>
                                <strong>
                                    Daily allowance:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                            <p>
                                <strong>
                                    Overtime per hours:
                                </strong>
                                ₹ 50.00
                            </p>

                            <p>
                                <strong>
                                    Outstation allowance per day:
                                </strong>
                                ₹ 400.00
                            </p>

                            <p>
                                <strong>
                                    Outstation overnight allowance per day:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>

                            <p>
                                <strong>
                                    Sunday allowance:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>

                            <p>
                                <strong>
                                    Early start allowance:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>

                            <p>
                                <strong>
                                    Late/Night allowance:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>

                            <p>
                                <strong>
                                    Extra duty allowance:
                                </strong>
                                <span>
                                    Second - ₹ 300.00,
                                </span>
                                <span>
                                    Third - <span class="text-muted">NA</span>,
                                </span>
                                <span>
                                    Fourth - <span class="text-muted">NA</span>,
                                </span>
                                <span>
                                    Fifth - <span class="text-muted">NA</span>
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Police Verification Details</div>
                        <div class="p-3 panel-body">
                            <p>
                                <strong>
                                    Display Card Number:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                            <p>
                                <strong>
                                    Display Card Expiry Date:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                            <p>
                                <strong>
                                    Verification Number:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                            <p>
                                <strong>
                                    Verification Card Expiry Date:
                                </strong>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Addresses</div>
                        <div class="p-3 panel-body">
                            <p>
                                <strong>
                                    Home Address
                                </strong>
                                <br>
                                Mohan Nano I Wing 3rd Flor Room No 303 Ambernath West 421501
                            </p>
                            <p>
                                <strong>
                                    Permanent Address
                                </strong>
                                <br>
                                Mohan Nano I Wing 3rd Flor Room No 303 Ambernath West 421501
                            </p>
                            <p>
                                <strong>
                                    Temporary Address
                                </strong>
                                <br>
                                Mohan Nano I Wing 3rd Flor Room No 303 Ambernath West 421501
                            </p>
                            <p>
                                <strong>
                                    Village Address
                                </strong>
                                <br>
                                Mohan Nano I Wing 3rd Flor Room No 303 Ambernath West 421501
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Additional Info</div>
                        <div class="p-3 panel-body">
                            <p>
                                <span class="text-muted">
                                    NA
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
