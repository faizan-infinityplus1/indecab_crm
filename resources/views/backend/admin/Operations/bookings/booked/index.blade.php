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
            <h4>Bookings</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('booking.create') }}" class="btn btn-primary">Add
                        Booking</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Export Bookings</a></li>
                        <li><a class="dropdown-item" href="#">Import Bookings</a></li>
                        <li><a class="dropdown-item" href="#">Import Duties</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="duties-nav-container">
            <ul class="nav nav-tabs border-0">
                <li class=""><a href="{{ route('bookings.all') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">All</a>
                </li>
                <li class="active"><a href="{{ route('bookings.booked') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Booked</a>
                </li>
                <li class=""><a href="{{ route('bookings.on-going') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">On-Going</a>
                </li>
                <li class=""><a href="{{ route('bookings.completed') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Completed</a>
                </li>
                <li class=""><a href="{{ route('bookings.billed') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Billed</a>
                </li>
                <li class=""><a href="{{ route('bookings.cancelled') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Cancelled</a>
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
                            id="" placeholder="Type here to filter by name, number, city, duty type or booking ID">
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
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Booked By</th>
                            <th>Passenger</th>
                            <th>Vehicle Group</th>
                            <th>Duty Type</th>
                            <th>Status</th>
                            <th>Duties</th>
                            <th>setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Date</td>
                            <td>Customer</td>
                            <td>Booked By</td>
                            <td>Passenger</td>
                            <td>Vehicle Group</td>
                            <td>Duty Type</td>
                            <td>Status</td>
                            <td>Duties</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">Add Advance Payment Receipt</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Booking</a></li>
                                        <li><a href="#" class="dropdown-item">Delete Booking</a></li>
                                        <li><a href="#" class="dropdown-item">Send confirmation</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Booked By</th>
                            <th>Passenger</th>
                            <th>Vehicle Group</th>
                            <th>Duty Type</th>
                            <th>Status</th>
                            <th>Duties</th>
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
