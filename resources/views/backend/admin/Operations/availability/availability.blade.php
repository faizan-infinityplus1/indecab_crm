@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <h4>Availability</h4>
        </div>

        <div class="row">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

            <!-- Search Input -->
            <div class="col-lg-7 col-md-6 col-12 mb-3">
                <div class="input-group">
                    <div class="d-flex justify-content-center align-items-center me-2">
                        <i class="bi bi-search fs-5"></i>
                    </div>
                    <input type="text" class="form-control border-bottom" name="name" id="name"
                        placeholder="Type here to filter by vehicle name, number, vehicle group, driver or DCO supplier">
                </div>
            </div>

            <!-- Date Filters and Clear Button -->
            <div class="col-lg-5 col-md-6 col-12">
                <div class="row g-2">
                    <div class="col-12 col-sm-4">
                        <input class="form-control border-bottom" type="text" placeholder="DD/MM/YYYY" value="">
                    </div>
                    <div class="col-12 col-sm-1 text-center d-flex align-items-center justify-content-center">
                        <span class="text-muted fs-4">&#8594;</span>
                    </div>
                    <div class="col-12 col-sm-4">
                        <input class="form-control border-bottom" type="text" placeholder="DD/MM/YYYY" value="">
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <button class="btn btn-default btn-block border shadow-sm w-100">Clear Filters</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="scrollbar-custom overflow-auto p-3">
            <div class="well">
                <p>
                    Please select driver / vehicles / suppliers to see their availability.
                </p>
            </div>
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
