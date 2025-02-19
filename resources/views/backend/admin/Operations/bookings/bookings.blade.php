@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Bookings</h4>
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
        <ul class="nav nav-tabs border-0 d-flex flex-wrap mt-3">
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">All</a>
            </li>
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">Booked</a>
            </li>
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">On-Going</a>
            </li>
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">Completed</a>
            </li>
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">Billed</a>
            </li>
            <li class="nav-item position-relative">
                <a class="nav-link text-dark fw-semibold px-3 py-2" href="#">Cancelled</a>
            </li>
        </ul>
        <hr class="col-md-5">
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

            .nav-tabs .nav-link {
                box-shadow: none !important;
            }
        </style>

        {{-- Input Sectiion --}}
        <div class="row">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

            <!-- Search Input -->
            <div class="col-lg-7 col-md-6 col-12 mb-3">
                <div class="input-group">
                    <div class="d-flex justify-content-center align-items-center me-2">
                        <i class="bi bi-search fs-5"></i>
                    </div>
                    <input type="text" class="form-control border-bottom" name="name" id="name"
                        placeholder="Type here to filter by name, number, city, duty type, company name or booking ID">
                </div>
            </div>

            <!-- Date Filters and Clear Button -->
            <div class="col-lg-5 col-md-6 col-12">
                <div class="row g-2">
                    <div class="col-12 col-sm-1 text-center d-flex align-items-center justify-content-center">
                        <span class="text-muted fs-5"><</span>
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
        
        <div class="well mb-3">
            <p class="text-center">No bookings found.</p>
        </div>
    </div>
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
