@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Receipts</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('employees.manage') }}" class="btn btn-primary">Add New
                        Receipt</a></div>
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


        {{-- Input Sectiion --}}
        <div class="row mt-4">
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
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <p class="text-end" style="color: blue">
                    <span>
                        View Totals
                    </span>
                </p>
            </div>
        </div>

        <div class="well mb-3">
            <p class="text-center">No receipts found.</p>
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
