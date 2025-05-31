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
                <li class=""><a href="{{ route('bookings.booked') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Booked</a>
                </li>
                <li class=""><a href="{{ route('bookings.on-going') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">On-Going</a>
                </li>
                <li class="active"><a href="{{ route('bookings.completed') }}"
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
                            <th width="100">setting</th>
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
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#add-advance-payment-receipt">Add Advance Payment
                                                Receipt</a></li>
                                        {{-- <li><a href="{{ route('bookings.specific-bookings') }}" class="dropdown-item">View
                                                Booking</a></li> --}}
                                        <li><a href="#" class="dropdown-item">Edit Booking</a></li>
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

    {{-- Add Advance Payment Receipt --}}
    <div class="modal fade" id="add-advance-payment-receipt" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Advance Payment (Receipt)</h1>
                        <small>Booking Id: <span>#78866454</span></small>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="mb-3">
                        <label for="drop_time" class="form-label">Amount <span class="text-danger">*</span> </label>
                        <input type="number" class="form-control  border-bottom" id="">
                    </div>
                    <div class="mb-3">
                        <label for="drop_time" class="form-label">Payment Mode <span class="text-danger">*</span>
                        </label>
                        <div class="form-check ps-2">
                            <label class="form-check-label px-3">
                                <input class="form-check-input" type="radio" name="paymentMode" id="">
                                Cash
                            </label>
                            <label class="form-check-label px-3">
                                <input class="form-check-input" type="radio" name="paymentMode" id="">
                                Cheque
                            </label>
                            <label class="form-check-label px-3">
                                <input class="form-check-input" type="radio" name="paymentMode" id="">
                                NEFT
                            </label>
                            <label class="form-check-label px-3">
                                <input class="form-check-input" type="radio" name="paymentMode" id="">
                                Credit Card
                            </label>
                            <label class="form-check-label px-3">
                                <input class="form-check-input" type="radio" name="paymentMode" id="">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3 shadow-sm">
                        <div class="panel-heading bg-light p-3">Cheque info</div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Cheque Number </label>
                                <input type="text" class="form-control  border-bottom" name="" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Bank Name </label>
                                <input type="text" class="form-control  border-bottom" name="" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Cheque Date </label>
                                <input type="date" class="form-control  border-bottom" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3 shadow-sm">
                        <div class="panel-heading bg-light p-3">NEFT Info</div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Transaction Number </label>
                                <input type="text" class="form-control  border-bottom" name="" id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Bank Name </label>
                                <input type="text" class="form-control  border-bottom" name="" id="">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="rep_time" class="form-label">Received in Bank</label>
                        <select class="form-select border-bottom" name="" id="">
                            <option value="">[Select Bank Account]</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rep_time" class="form-label">Bank Credit Date <span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control  border-bottom" name="" id="">
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <div>
                        <button type="button" class="btn btn-primary border" id="">Save</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Advance Payment Receipt close --}}

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
