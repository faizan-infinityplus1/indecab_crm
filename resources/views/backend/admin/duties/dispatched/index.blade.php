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
            <h4>Duties</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('booking.create') }}" class="btn btn-primary">Add
                        Booking</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Export Duties</a></li>
                        <li><a class="dropdown-item" href="#">Import Duties</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="duties-nav-container">
            <ul class="nav nav-tabs border-0">
                <li class=""><a href="{{ route('duties.upcoming') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Upcoming</a>
                </li>
                <li class=""><a href="{{ route('duties.booked') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Booked</a>
                </li>
                <li class=""><a href="{{ route('duties.allotted') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Allotted</a>
                </li>
                <li class="active"><a href="{{ route('duties.dispatched') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Dispatched</a>
                </li>
                <li class=""><a href="{{ route('duties.completed') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Completed</a>
                </li>
                <li class=""><a href="{{ route('duties.billed') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Billed</a>
                </li>
                <li class=""><a href="{{ route('duties.cancelled') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Cancelled</a>
                </li>
                <li class=""><a href="{{ route('duties.all') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">All</a>
                </li>
                <li class="">
                    <a href="{{ route('duties.incoming') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">
                        Incoming
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('duties.needsattention') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">
                        Needs Attention
                    </a>
                </li>
            </ul>
        </div>
        <form action="">
            <div class="row my-3">
                <div class="col-md-7 mb-3">
                    <div class="position-relative">
                        <label for="" class="form-label position-absolute mb-1 bottom-0"><i
                                class="fa-solid fa-magnifying-glass"></i></label>
                        <input type="text" name="" value="" class="form-control  border-bottom ps-4"
                            id=""
                            placeholder="Type here to filter by name, number, city, duty type, company name or booking ID">
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-end justify-content-around ">
                            <div>
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <input type="date" name="" id="">
                            <i class="fa-solid fa-arrow-right"></i>
                            <input type="date" name="" id="">

                            <div>
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-light border w-100">Clear Filters</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-body px-0">
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-white">{{ $error }}</span>
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Passenger</th>
                            <th>Vehicle Group</th>
                            <th>Vehicle</th>
                            <th>Driver/Supplier</th>
                            <th>Duty Type</th>
                            <th>Rep.Address</th>
                            <th>Drop Address</th>
                            <th>Remarks</th>
                            <th>Operator Notes</th>
                            <th>City</th>
                            <th>Rep.Time</th>
                            <th>Labels</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <i class="fa-solid fa-phone text-success"></i>
                            </td>
                            <td>Date</td>
                            <td>Customer</td>
                            <td>Passenger</td>
                            <td>Vehicle Group</td>
                            <td>Vehicle</td>
                            <td>Driver/Supplier</td>
                            <td>Duty Type</td>
                            <td>Rep.Address</td>
                            <td>Drop Address</td>
                            <td>Remarks</td>
                            <td>Operator Notes</td>
                            <td>City</td>
                            <td>Rep.Time</td>
                            <td>Labels</td>
                            <td>Status</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">Details</a></li>
                                        <li><a href="#" class="dropdown-item">Unconfirm duty</a></li>
                                        <li><a href="#" class="dropdown-item">Add/Remove labels</a></li>
                                        <li><a href="#" class="dropdown-item">Edit duty</a></li>
                                        <li><a href="#" class="dropdown-item">Allot vehicle &amp; driver</a></li>
                                        <li><a href="#" class="dropdown-item">Send to Associate</a></li>
                                        <li><a href="#" class="dropdown-item">Allot supporters</a></li>
                                        <li><a href="#" class="dropdown-item">Print duty slip</a></li>
                                        <li><a href="#" class="dropdown-item">View Booking</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Duty</a></li>
                                    </ul>
                                    {{-- Details needed --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">Details</a></li>
                                        <li><a href="#" class="dropdown-item">Add Supplier Details</a></li>
                                        <li><a href="#" class="dropdown-item">Add/Remove labels</a></li>
                                        <li><a href="#" class="dropdown-item">Edit duty</a></li>
                                        <li><a href="#" class="dropdown-item">Allot supporters</a></li>
                                        <li><a href="#" class="dropdown-item">Re-allot</a></li>
                                        <li><a href="#" class="dropdown-item">Send to Associate</a></li>
                                        <li><a href="#" class="dropdown-item">Clear Allotment</a></li>
                                        <li><a href="#" class="dropdown-item">Send details to supplier</a></li>
                                        <li><a href="#" class="dropdown-item">Print duty slip</a></li>
                                        <li><a href="#" class="dropdown-item">Create placard</a></li>
                                        <li><a href="#" class="dropdown-item">View Booking</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Duty</a></li>
                                    </ul>
                                    {{-- Allotted --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="">Details</a></li>
                                        <li><a href="#" class="">Update Supplier Details</a></li>
                                        <li><a href="#" class="">Add/Remove labels</a></li>
                                        <li><a href="#" class="">Edit duty</a></li>
                                        <li><a href="#" class="">Allot supporters</a></li>
                                        <li><a href="#" class="">Re-allot</a></li>
                                        <li><a href="#" class="">Send to Associate</a></li>
                                        <li><a href="#" class="">Clear Allotment</a></li>
                                        <li><a href="#" class="">Send info</a></li>
                                        <li><a href="#" class="">Send driver/supplier location</a></li>
                                        <li><a href="#" class="">Mark as driver/supplier arrived</a></li>
                                        <li><a href="#" class="">Send details to supplier</a></li>
                                        <li><a href="#" class="">Print duty slip</a></li>
                                        <li><a href="#" class="">Create placard</a></li>
                                        <li><a href="#" class="">Mark as dispatched</a></li>
                                        <li><a href="#" class="">Close Duty</a></li>
                                        <li><a href="#" class="">Add Advance Purchase Payment</a></li>
                                        <li><a href="#" class="">View Booking</a></li>
                                        <li><a href="#" class="">Cancel Duty</a></li>
                                    </ul>
                                    {{-- Completed --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="">Details</a></li>
                                        <li><a href="#" class="">View duty slip</a></li>
                                        <li><a href="#" class="">Edit duty slip</a></li>
                                        <li><a href="#" class="">Clear duty slip</a></li>
                                        <li><a href="#" class="">Add/Remove labels</a></li>
                                        <li><a href="#" class="">Allot supporters</a></li>
                                        <li><a href="#" class="">Print duty slip</a></li>
                                        <li><a href="#" class="">Add Advance Purchase Payment</a></li>
                                        <li><a href="#" class="">Request customer feedback</a></li>
                                        <li><a href="#" class="">View Booking</a></li>
                                    </ul>
                                    {{-- Billed --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="">Details</a></li>
                                        <li><a href="#" class="">View duty slip</a></li>
                                        <li><a href="#" class="">Add/Remove labels</a></li>
                                        <li><a href="#" class="">Allot supporters</a>
                                        </li>
                                        <li><a href="#" class="">Print duty slip</a></li>
                                        <li><a href="#" class="">Add Advance Purchase
                                                Payment</a></li>
                                        <li><a href="#" class="">Add Petty Cash</a></li>
                                        <li><a href="#" class="">View Booking</a></li>
                                        <li><a href="#" class="">View Invoice</a></li>
                                    </ul>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="">Details</a></li>
                                        <li><a href="#" class="">Add/Remove labels</a></li>
                                        <li><a href="#" class="">View Booking</a></li>
                                        <li><a href="#" class="">Restore Duty</a></li>
                                    </ul>
                                    {{-- Cancelled --}}
                                    <ul class="dropdown-menu">
                                        <li> <a class="dropdown-item" href="#">Edit</a> </li>
                                        <li><a class="dropdown-item" href="#">Manage people</a></li>
                                        <li><a class="dropdown-item" href="#">Custome fields</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#create-corporate-account">Create Corporate Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Passenger</th>
                            <th>Vehicle Group</th>
                            <th>Vehicle</th>
                            <th>Driver/Supplier</th>
                            <th>Duty Type</th>
                            <th>Rep.Address</th>
                            <th>Drop Address</th>
                            <th>Remarks</th>
                            <th>Operator Notes</th>
                            <th>City</th>
                            <th>Rep.Time</th>
                            <th>Labels</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
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
    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this duty type?')) {
                window.location.href = url; // Proceed with the delete action if confirmed
            }
        }
    </script>
@endsection
