@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Duties</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="/booking/create" class="btn btn-primary">ADD
                        BOOKING</a></div>
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

        {{-- Alloted Section --}}
        <div class="row mb-4">
            <div class="col-md-8">
                <ul class="nav nav-tabs  d-flex flex-wrap mt-3">
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Upcoming</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark px-3 py-2 border-0" href="#">Booked</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Allotted</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Dispatched</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark px-3 py-2 border-0" href="#">Completed</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Billed</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Cancelled</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Incoming</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link text-dark  px-3 py-2 border-0" href="#">Needs Attention</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <style>
            .nav-item:hover .nav-link {
                color: #007bff !important;
            }

            .nav-item:hover::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 10%;
                width: 80%;
                height: 2px;
                background-color: #007bff;
            }

            /* .nav-tabs .nav-link {
                                            box-shadow: none !important;
                                        } */
        </style>

        {{-- Input Sectiion --}}
        <div class="row">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

            <!-- Search Input -->
            <div class="col-lg-7 col-md-6 col-12 mb-3 ">
                <div class="input-group border-bottom">
                    <div class="d-flex justify-content-center align-items-center me-2 position-absolute pt-1">
                        <i class="bi bi-search fs-6"></i>
                    </div>
                    <input type="text" class="form-control ps-4" name="name" id="name"
                        placeholder="Type here to filter by name, number, city, duty type, company name or booking ID">
                </div>
            </div>

            <!-- Date Filters and Clear Button -->
            <div class="col-lg-5 col-md-6 col-12">
                <div class="row g-2">
                    <div class="col-12 col-sm-1 text-center d-flex align-items-center justify-content-center">
                        <span class="text-muted fs-5">
                            < </span>
                    </div>
                    <div class="col-12 col-sm-3">
                        <input class="form-control border-bottom" type="text" placeholder="DD/MM/YYYY" value="">
                    </div>
                    <div class="col-12 col-sm-1 text-center d-flex align-items-center justify-content-center">
                        <span class="text-muted fs-4">&#8594;</span>
                    </div>
                    <div class="col-12 col-sm-3">
                        <input class="form-control border-bottom" type="text" placeholder="DD/MM/YYYY" value="">
                    </div>
                    <div class="col-12 col-sm-1 text-center d-flex align-items-center justify-content-center">
                        <span class="text-muted fs-5">></span>
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <button class="btn btn-default btn-block border shadow-sm w-100">Clear Filters</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <p class="text-end">
                    <span>
                        Total: <b class="text-muted">view </b>
                    </span>
                </p>
            </div>
        </div>

        {{-- table Start here --}}
        {{-- <table class="table table-hover duties-list reactive-table">
            <thead>
                <tr>
                    <th class=""></th>
                    <th class="">Date&nbsp▲</th>
                    <th class="">Customer</th>
                    <th class="">Passenger</th>
                    <th class="">Vehicle Group</th>
                    <th class="">Vehicle</th>
                    <th class="">Driver/Supplier</th>
                    <th class="">Duty Type</th>
                    <th class="">Rep. Address</th>
                    <th class="">Drop Address</th>
                    <th class="">Remarks</th>
                    <th class="">Operator Notes</th>
                    <th class="">City</th>
                    <th class="">Rep.Time</th>
                    <th class="">Labels</th>
                    <th class="">Status</th>
                    <th class=""></th>
                </tr>
            </thead>
            <tbody>
                <tr class="clickable">
                    <td class="-action-cell -indecall">
                        <div class="dropdown">
                            <i style="font-size:15px" class="fa text-success">&#xf095;</i>
                        </div>
                    </td>
                    <td>
                        <span>15-02</span>
                    </td>
                    <td>
                        <span>CIEL HR SERVICES LIMITED</span>
                    </td>
                    <td>
                        <span>Ms Lata</span>
                    </td>
                    <td>
                        <small>Innova Crysta</small>
                    </td>
                    <td>
                        <span>KA51AD7155</span>
                    </td>
                    <td>
                        <span>Airline tour and travels</span>
                    </td>
                    <td>
                        <span>4H 40KMs</span>
                    </td>
                    <td>
                        <span>Bangalore Airport</span>
                    </td>
                    <td>
                        <span>NA</span>
                    </td>
                    <td>
                        <span>NA</span>
                    </td>
                    <td>
                        <span></span>
                    </td>
                    <td>
                        Bengaluru
                    </td>
                    <td>05:45</span>
                    </td>
                    <td>
                        <span>Cash Duty</span>
                    </td>
                    <td>
                        <span>Booked</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#activity-log">View Activity Logs</a>
                                </li>
                                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                    {{-- <td class="js-menu">
                        <div class="dropdown">
                            <i class="fa fa-cog fa-spin" style="font-size:15px"></i>
                        </div>
                    </td> --}}
        {{-- </tr> --}}

        {{-- </tbody> --}}
        {{-- </table>  --}}
        <div class="table-responsive">
            <table class="table table-striped table-hover datatable" style="width:100%;">
                <thead>
                    <tr>
                        <th class=""></th>
                        <th class="">Date</th>
                        <th class="">Customer</th>
                        <th class="">Passenger</th>
                        <th class="">Vehicle Group</th>
                        <th class="">Vehicle</th>
                        <th class="">Driver/Supplier</th>
                        <th class="">Duty Type</th>
                        <th class="">Rep. Address</th>
                        <th class="">Drop Address</th>
                        <th class="">Remarks</th>
                        <th class="">Operator Notes</th>
                        <th class="">City</th>
                        <th class="">Rep.Time</th>
                        <th class="">Labels</th>
                        <th class="">Status</th>
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable">
                        <td class="-action-cell -indecall">
                            <div class="dropdown">
                                <i style="font-size:15px" class="fa text-success">&#xf095;</i>
                            </div>
                        </td>
                        <td>
                            <span>15-02</span>
                        </td>
                        <td>
                            <span>CIEL HR SERVICES LIMITED</span>
                        </td>
                        <td>
                            <span>Ms Lata</span>
                        </td>
                        <td>
                            <small>Innova Crysta</small>
                        </td>
                        <td>
                            <span>KA51AD7155</span>
                        </td>
                        <td>
                            <span>Airline tour and travels</span>
                        </td>
                        <td>
                            <span>4H 40KMs</span>
                        </td>
                        <td>
                            <span>Bangalore Airport</span>
                        </td>
                        <td>
                            <span>NA</span>
                        </td>
                        <td>
                            <span>NA</span>
                        </td>
                        <td>
                            <span></span>
                        </td>
                        <td>
                            Bengaluru
                        </td>
                        <td>05:45</span>
                        </td>
                        <td>
                            <span>Cash Duty</span>
                        </td>
                        <td>
                            <span>Booked</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th class=""></th>
                        <th class="">Date</th>
                        <th class="">Customer</th>
                        <th class="">Passenger</th>
                        <th class="">Vehicle Group</th>
                        <th class="">Vehicle</th>
                        <th class="">Driver/Supplier</th>
                        <th class="">Duty Type</th>
                        <th class="">Rep. Address</th>
                        <th class="">Drop Address</th>
                        <th class="">Remarks</th>
                        <th class="">Operator Notes</th>
                        <th class="">City</th>
                        <th class="">Rep.Time</th>
                        <th class="">Labels</th>
                        <th class="">Status</th>
                        <th class=""></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection



@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $("#formTaxes").validate({
                rules: {
                    name: {
                        required: true
                    },
                    percentage: {
                        required: true
                    }
                },
                messages: {

                    name: {
                        required: "Please Enter Tax Name"
                    },

                    percentage: {
                        required: "Please Enter Tax Percentage"
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

        });
    </script>
@endsection
