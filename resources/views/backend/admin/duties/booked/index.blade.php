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
                <li class="active"><a href="{{ route('duties.booked') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Booked</a>
                </li>
                <li class=""><a href="{{ route('duties.allotted') }}"
                        class="p-3 d-inline-block text-decoration-none duties-nav-tabs">Allotted</a>
                </li>
                <li class=""><a href="{{ route('duties.dispatched') }}"
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
                        <input type="text" id="globalSearch" class="form-control"
                            placeholder="Type here to filter by name, number, city, duty type, company name or booking ID">

                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <div class="row g-2 align-items-center">

                        <!-- Date Range & Icons -->
                        <div class="col-md-8">
                            <div class="d-flex align-items-center justify-content-between gap-2">

                                <input type="text" id="min-date" class="form-control datepicker"
                                    placeholder="DD/MM/YYYY">


                                <input type="text" id="max-date" class="form-control datepicker"
                                    placeholder="DD/MM/YYYY">

                            </div>
                        </div>

                        <!-- Clear Filters Button -->
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-light border w-100">
                                Clear Filters
                            </button>
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
                            <th>Vehicle</th>
                            <th>Driver/Supplier</th>
                            <th>Duty Type</th>
                            <th>Rep.Address</th>
                            <th>City</th>
                            <th>Rep.Time</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $data)
                            <tr>
                                <td>
                                    <i class="fa-solid fa-phone text-success"></i>
                                </td>
                                <td>
                                    {{ $data->end_date ? \Carbon\Carbon::parse($data->end_date)->format('d/m/Y') : 'N/A' }}
                                </td>
                                <td>{{ $data->customers->name }}</td>
                                <td>
                                    @foreach ($data->bookedBy as $bookedbyData)
                                        {{ $bookedbyData->name }}
                                    @endforeach
                                </td>
                                <td>{{ $data->vehicleGroup->name }}</td>
                                <td>Driver/Supplier</td>
                                <td>{{ $data->dutyType->duty_name }}</td>
                                <td>{{ $data->reporting_address }}</td>
                                <td>{{ $data->from_service }}</td>
                                <td>{{ $data->reporting_time }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        {{-- Booked --}}
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="dropdown-item open-detail-modal" data-bs-toggle="modal"
                                                    data-id="{{ $data->id }}">Details</a>
                                            </li>
                                            <li><a class="dropdown-item" onclick="unconfirmDuty()">Unconfirm duty</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#add-remove-lable">Add/Remove labels</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#edit-duty">Edit duty</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-vehicle-driver">Allot vehicle & driver</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-send-to-associate">Send to Associate</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-supporters">Allot supporters</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#print-duty-slip">Print duty slip</a></li>
                                            <li><a href="{{ route('bookings.specific-bookings') }}"
                                                    class="dropdown-item">View Booking</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#cancel-duty">Cancel Duty</a></li>
                                        </ul>

                                        {{-- Details needed --}}
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#details">Details 3</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-duty-to-supplier">Add Supplier Details</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#add-remove-lable">Add/Remove labels</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#edit-duty">Edit duty</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-supporters">Allot supporters</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-vehicle-driver">Re-allot</a></li>
                                            <li><a class="dropdown-item" onclick="clearAllotment()">Clear
                                                    Allotment</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#send-details-to-supplier">Send details to
                                                    supplier</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#print-duty-slip">Print duty slip</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#create-placard">Create placard</a></li>
                                            <li><a href="{{ route('bookings.specific-bookings') }}"
                                                    class="dropdown-item">View Booking</a></li>

                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#cancel-duty">Cancel Duty</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Passenger</th>
                            <th>Vehicle</th>
                            <th>Driver/Supplier</th>
                            <th>Duty Type</th>
                            <th>Rep.Address</th>
                            <th>City</th>
                            <th>Rep.Time</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    {{-- modal form --}}
    {{-- details --}}
    <div class="modal fade" id="details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty Details - #50249209-4</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <ul class="nav nav-tabs border-0 w-100" id="tabs-nav">
                        <!-- Details Tab Link -->
                        <li class="nav-item w-50 mb-3 active" id="details-tab">
                            <a href="#duty-detail-detail"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs active"
                                data-bs-toggle="tab">Details</a>
                        </li>
                        <!-- Activity Tab Link -->
                        <li class="nav-item w-50 mb-3" id="activity-tab">
                            <a href="#duty-detail-activity"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs"
                                data-bs-toggle="tab">Activity</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Details Tab Content -->
                        <div id="duty-detail-detail" class="tab-pane fade show active">

                        </div>

                        <!-- Activity Tab Content -->
                        <div id="duty-detail-activity" class="tab-pane fade">
                            <p>
                                <small class="text-secondary"> 08/03 at 21:49</small> Created as duty for booking #50249209
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- details close --}}
    {{-- add remove lable --}}
    <div class="modal fade" id="add-remove-lable" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty Details - #50249209-4</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="row">
                        <div class="mb-3">
                            <label for="labels" class="control-label w-100">Labels</label>
                            <select class="form-select border-bottom" name="labels[]" id="labels">
                                <option value="">label 1 </option>
                                <option value="">label 2 </option>
                                <option value="">label 3 </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- add remove lable close --}}
    {{-- Edit Duty --}}
    <div class="modal fade" id="edit-duty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Duty <span> #18326801-1</span></h1>
                        <small>Start Date: <span>07-04-2025</span></small>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="rep_time" class="form-label">Reporting time</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    id="rep_time" name="rep_time">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="drop_time" class="form-label">Estimated Drop-Off Time</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    id="drop_time" name="drop_time">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="drop_time" class="form-label">Start from garage before (in min)</label>
                                <input type="number" class="form-control  border-bottom" id="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="control-label w-100">Vehicle Group</label>
                                <select class="form-select border-bottom" name="" id="">
                                    <option value="">select vehicle group</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="control-label w-100">Duty Type</label>
                                <select class="form-select border-bottom" name="" id="">
                                    <option value="">select Duty Type</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label"> Price</label>
                                <input type="number" class="form-control  border-bottom" id="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label"> Per Extra KM Rate</label>
                                <input type="number" class="form-control  border-bottom" id="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label"> Per Extra Hr Rate</label>
                                <input type="number" class="form-control  border-bottom" id="">
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <div class="mb-3 w-100">
                                <button type="reset" class="btn btn-light border w-100">Get Price</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="reporting_address" class="form-label w-100">Reporting Address
                                </label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="reporting_address[]" id="reporting_address" multiple="multiple">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="drop_address" class="form-label w-100">Drop Address</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="drop_address[]" id="drop_address" multiple="multiple">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label"> Short Reporting Address (to be shown in duty
                            listing)</label>
                        <input type="text" class="form-control  border-bottom" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Remarks </label>
                        <textarea class="form-control" rows="3" name="" id=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Flight/Train Number</label>
                        <input type="text" class="form-control  border-bottom" id="">
                    </div>
                    <p class="mb-3">
                        <a href="" class="text-decoration-none" id="supplierRemarksLink">
                            Add separate remarks for driver/supplier.
                        </a>
                    </p>
                    <div class="bg-light mb-3 p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="control-label w-100">Vehicle Group</label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">select vehicle group</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="control-label w-100">Duty Type</label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">select Duty Type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="" id="supplierRemarks" style="display: none;">
                            <label for="" class="form-label">Driver/Supplier Remarks </label>
                            <textarea class="form-control" rows="3" name="" id=""></textarea>
                        </div>
                    </div>
                    <p class="text-danger mb-3">
                        Please note: Above changes will only affect this duty and would not change/affect any other duty of
                        this booking.
                    </p>
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
    {{-- Edit Duty close --}}
    {{-- Allot vehicle & driver --}}
    <div class="modal fade" id="allot-vehicle-driver" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Allot Duty</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <th class="fw-medium">ID</th>
                                <td>#50249209-4</td>
                                <th class="fw-medium">Status</th>
                                <td> Booked</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Start Date</th>
                                <td>31-03-2025</td>
                                <th class="fw-medium">End Date</th>
                                <td>31-03-2025</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Garage Start Time</th>
                                <td> 07:00</td>
                                <th class="fw-medium">Reporting Time</th>
                                <td>08:00</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">From City</th>
                                <td> Mumbai</td>
                                <th class="fw-medium">To City</th>
                                <td> Mumbai</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Duty Type</th>
                                <td colspan="3">8H 80KMs</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Vehicle Group</th>
                                <td colspan="3">Sedan</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Reporting Address</th>
                                <td colspan="3">Mumbai Airport T1</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Drop Address</th>
                                <td colspan="3"><span class="text-secondary">NA</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="reset" class="btn btn-light border">Send to Associate</button>

                    <ul class="nav nav-tabs border-0 w-100" id="tabs-nav">
                        <!-- My Vehicles Tab Link -->
                        <li class="nav-item w-50 mb-3 active" id="details-tab">
                            <a href="#duty-my-vehicles"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs active"
                                data-bs-toggle="tab">My Vehicles</a>
                        </li>
                        <!-- My Suppliers Tab Link -->
                        <li class="nav-item w-50 mb-3" id="activity-tab">
                            <a href="#duty-my-suppliers"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs"
                                data-bs-toggle="tab">My Suppliers</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- My Vehicles Tab Content -->
                        <div id="duty-my-vehicles" class="tab-pane fade show active">
                            <select class="form-select border-bottom" name="vehicles[]" id="vehicles">
                                <option value="asdasdasdsd">vehicle 1 </option>
                                <option value="asdasdasdsd">vehicle 2 </option>
                                <option value="asdasdasdsd">vehicle 3 </option>
                            </select>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover datatable" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Group</th>
                                            <th>Driver</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>Phone Number</td>
                                            <td>Group</td>
                                            <td>Driver</td>
                                            <td><span class="text-success">Available</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Group</th>
                                            <th>Driver</th>
                                            <th>Availability</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>

                        <!-- My Suppliers Tab Content -->
                        <div id="duty-my-suppliers" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover datatable" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Vehicle Number</th>
                                            <th>Group</th>
                                            <th>City</th>
                                            <th>Document status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>Phone Number</td>
                                            <td>Vehicle Number</td>
                                            <td>Group</td>
                                            <td>City</td>
                                            <td>Document status</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Vehicle Number</th>
                                            <th>Group</th>
                                            <th>City</th>
                                            <th>Document status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Allot vehicle & driver close --}}
    {{-- Send to Associate --}}
    <div class="modal fade" id="allot-send-to-associate" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send Duty #67920002-1 to Network</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <th class="fw-medium">ID</th>
                                <td>#50249209-4</td>
                                <th class="fw-medium">Status</th>
                                <td> Booked</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Start Date</th>
                                <td>31-03-2025</td>
                                <th class="fw-medium">End Date</th>
                                <td>31-03-2025</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Garage Start Time</th>
                                <td> 07:00</td>
                                <th class="fw-medium">Reporting Time</th>
                                <td>08:00</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">From City</th>
                                <td> Mumbai</td>
                                <th class="fw-medium">To City</th>
                                <td> Mumbai</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Duty Type</th>
                                <td colspan="3">8H 80KMs</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Vehicle Group</th>
                                <td colspan="3">Sedan</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Reporting Address</th>
                                <td colspan="3">Mumbai Airport T1</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Drop Address</th>
                                <td colspan="3"><span class="text-secondary">NA</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mb-3">
                        <select class="form-select border-bottom" aria-label="Default select example" name="base_city"
                            id="base_city">
                            <option class="d-none" value="">Select an option</option>

                        </select>
                    </div>
                    <button type="reset" class="btn btn-light border">Select All Suppliers</button>

                </div>
                <div class="modal-footer justify-content-between px-5">
                    <div>
                        <button type="submit" class="btn btn-primary rounded-1">Send Request</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-light border rounded-1" data-bs-toggle="modal"
                            data-bs-target="#allot-vehicle-driver">Allot My Driver/Supplier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Send to Associate close --}}
    {{-- Allot supporters --}}
    <div class="modal fade" id="allot-supporters" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty Supporters</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <p>
                        Showing supporters that can be booked for duty <span>#67920002-1</span>:
                    </p>
                    <div class="mb-3">
                        <select class="form-select border-bottom" name="" id="">
                            <option class="" value="">Select an option</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-1">Allot</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Allot supporters close --}}
    {{-- Print duty slip --}}
    <div class="modal fade" id="print-duty-slip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Print Duty Slip for <span>#67920002-1</span>
                        </h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="bg-light mb-3 p-3">
                        <form action="">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add customer name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add booked by name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add all passenger names and numbers
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide duty type name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide vehicle group name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide vehicle name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide remarks
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add garage start time
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add released km/time section
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_entire_booking_date_range">
                                <label class="form-check-label" for="add_entire_booking_date_range">
                                    Add entire booking date range
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide business letter head
                                </label>
                            </div>
                            <p>Duty Slip Design</p>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-light border w-100"
                                        id="compact">Compact</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary rounded-1 w-100"
                                        id="full-page">Full-page</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Print</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Print duty slip close --}}
    {{-- Cancel duty --}}
    <div class="modal fade" id="cancel-duty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Duty <span>#20608345-1</span>
                        </h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <p class="text-danger mb-3">Are you sure you want to cancel this duty?</p>
                    <p class="mb-3">Select phone numbers and emails you want to send cancellation information to:</p>
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1">Name</th>
                                <th class="p-1">Send SMS</th>
                                <th class="p-1">Send Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1">
                                    <p class="mb-1">
                                        Apple Travels Solutions
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Supplier</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="">
                                        <label class="form-check-label" for="">
                                            9873001255
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="" disabled>
                                        <label class="form-check-label" for="">
                                            Invalid email
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1">
                                    <p class="mb-1">
                                        Rkdf education society
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Customer</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="">
                                        <label class="form-check-label" for="">
                                            6232557572
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="" disabled>
                                        <label class="form-check-label" for="">
                                            rkdftraveldesk@gmail.com
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            {{-- component --}}
                            <tr>
                                <td class="p-1">Custom</td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="" id=""></td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="" id=""></td>
                            </tr>
                            {{-- component end here --}}
                        </tbody>
                    </table>
                    <p>
                        <span class="bg-danger text-white p-1 rounded-1">New</span> <i>Separate multiple email, phone &
                            whatsapp numbers by comma [ , ] or semi-colon [ ; ] in custom row to send the details to all of
                            them in one click.</i>
                    </p>
                    <p class="mb-1">Message</p>
                    <div class="bg-light mb-3 p-3">
                        <div class="bg-white p-3 shadow-sm rounded-1">
                            <p class="mb-0">
                                Booking cancelled
                                <br>
                                Name: ramesh
                                <br>
                                Date: 20/03/2025
                                <br>
                                Regards Travel (9870306295).
                                <br>
                                - Sent via Indecab
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 d-flex justify-content-between">
                        <button type="button" class="btn btn-light border mx-auto" id="">Copy SMS Text</button>
                    </div>
                    <div class="mb-3">
                        <label for="cancellation_reason" class="form-label">Cancellation reason </label>
                        <textarea class="form-control" rows="3" name="cancellation_reason" id="cancellation_reason"></textarea>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Send a single email to selected email IDs.
                        </label>
                    </div>
                </div>
                <div class="modal-footer justify-content-between px-5">
                    <div>
                        <button type="button" class="btn btn-light border" id="">Copy Email</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel
                            Duty</button>
                        <button type="submit" class="btn btn-primary rounded-1">Keep Duty</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Cancel duty close --}}
    {{-- allot-duty-to-supplier --}}
    <div class="modal fade" id="allot-duty-to-supplier" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Allot Duty To Supplier - <span> Apple Travels
                                Solutions</span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <th class="fw-medium">ID</th>
                                <td>#50249209-4</td>
                                <th class="fw-medium">Status</th>
                                <td> Booked</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Start Date</th>
                                <td>31-03-2025</td>
                                <th class="fw-medium">End Date</th>
                                <td>31-03-2025</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Garage Start Time</th>
                                <td> 07:00</td>
                                <th class="fw-medium">Reporting Time</th>
                                <td>08:00</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">From City</th>
                                <td> Mumbai</td>
                                <th class="fw-medium">To City</th>
                                <td> Mumbai</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Duty Type</th>
                                <td colspan="3">8H 80KMs</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Vehicle Group</th>
                                <td colspan="3">Sedan</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Reporting Address</th>
                                <td colspan="3">Mumbai Airport T1</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Drop Address</th>
                                <td colspan="3"><span class="text-secondary">NA</span></td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <button type="reset" class="btn btn-light border">Send to Associate</button> --}}
                    <p>Fill in the form below with details of supplier's driver and vehicle.</p>
                    <form action="">
                        <div class="bg-light mb-3 p-3">
                            <p>Quick selection (based on your previous manual allotment history for selected supplier):</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="control-label mb-1">Supplier Vehicles</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="base_city" id="base_city">
                                        <option class="d-none" value="">Select an option</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="control-label mb-1">Supplier Drivers</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="base_city" id="base_city">
                                        <option class="d-none" value="">Select an option</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label"> Vehicle Name</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label"> Vehicle Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Fuel Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="">
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Petrol</option>
                                    <option value="">Diesel</option>
                                    <option value="">CNG</option>
                                    <option value="">Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label"> Driver Name</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label"> Driver Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" for="">
                                Copy same vehicle and driver details for all duties of this booking allotted to this
                                supplier?
                            </label>
                        </div>
                    </form>

                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-primary rounded-1">Allot</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- allot-duty-to-supplier close --}}
    {{-- Send details to supplier --}}
    <div class="modal fade" id="send-details-to-supplier" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send duty detail to supplier</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <p class="mb-3">Use this to send duty details to supplier for them to confirm.</p>
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1">Name</th>
                                <th class="p-1">Send SMS</th>
                                <th class="p-1">Send Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1">
                                    <p class="mb-1">
                                        Apple Travels Solutions
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Supplier</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="">
                                        <label class="form-check-label" for="">
                                            9873001255
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="" disabled>
                                        <label class="form-check-label" for="">
                                            Invalid email
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            {{-- new component --}}
                            <tr>
                                <td class="p-1">Custom</td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="" id=""></td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="" id=""></td>
                            </tr>
                            {{-- new component end here --}}
                        </tbody>
                    </table>
                    <p>
                        <small class="bg-danger text-white p-1 rounded-1">New</small> <i>Separate multiple email, phone &
                            whatsapp numbers by comma [ , ] or semi-colon [ ; ] in custom row to send the details to all of
                            them in one click.</i>
                    </p>
                    <p class="mb-1">Message</p>
                    <div class="bg-light mb-3 p-3">
                        <div class="bg-white p-3 shadow-sm rounded-1">
                            <p class="mb-0">
                                Booking #44158262-6
                                <br>
                                For Dr Asha Kapoor
                                <br>
                                Vehicle group: Innova Crysta
                                <br>
                                Duty type: 8H 80KMs
                                <br>
                                City: Delhi
                                <br>
                                Date: 12/03 to 17/03
                                <br>
                                Reporting time: 08:55
                                <br>
                                Reporting address: Delhi Indira Gandhi Airport
                                <br>
                                Flight/Train Number: EK510
                                <br>
                                Drop address: NA
                                <br>
                                Remarks: NA
                                <br>
                                Regards Mumbai Cab Service
                                <br>
                                Contact: 9619900011
                                <br>
                                - Sent via Indecab
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 d-flex justify-content-between">
                        <button type="button" class="btn btn-light border mx-auto" id="">Copy SMS
                            Text</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add entire booking dates
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Remarks not added.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add text "Details updated"
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add customer name in email
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Attach duty slip in email
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide passenger phone number from sms/whatsapp/email
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light mb-3 p-3">
                        <p>Attached duty slip options (format in which it is to be sent in email):</p>
                        <form action="">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add customer name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add booked by name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add all passenger names and numbers
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide duty type name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide vehicle group name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide vehicle name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide remarks
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add garage start time
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add released km/time section
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_entire_booking_date_range">
                                <label class="form-check-label" for="add_entire_booking_date_range">
                                    Add entire booking date range
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide business letter head
                                </label>
                            </div>
                            <p>Duty Slip Design</p>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-light border w-100"
                                        id="compact">Compact</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary rounded-1 w-100"
                                        id="full-page">Full-page</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer justify-content-end px-5">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary rounded-1">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Send details to supplier close --}}
    {{-- Create placard --}}
    <div class="modal fade" id="create-placard" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Placard for Duty <span> #44158262-6
                            </span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1">Name</th>
                                <th class="p-1">Send Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- new component --}}
                            <tr>
                                <td class="p-1">Custom</td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="" id=""></td>
                            </tr>
                            {{-- new component end here --}}
                        </tbody>
                    </table>
                    <p>
                        <small class="bg-danger text-white p-1 rounded-1">New</small> <i> Separate multiple email, phone &
                            whatsapp numbers by comma [ , ] or semi-colon [ ; ] in custom row to send the details to all of
                            them in one click.</i>
                    </p>
                    <div class="mb-3">
                        <label for="" class="form-label"> Title</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Title 2</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Subtitle</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
                    <p><a href="#" class="text-decoration-none">View customer notes</a></p>
                </div>
                <div class="modal-footer justify-content-between px-5">
                    <div>
                        <button type="button" class="btn btn-primary rounded-1" id="placard-print"><i
                                class="fa-solid fa-print"></i> Print</button>
                        <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-envelope"></i>
                            Send Email</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Create placard close --}}

@endsection


@section('extrajs')
    <script>
        function unconfirmDuty() {
            let unconfirmDuty = confirm("Are you sure you want to mark this duty as unconfirmed?");
            if (unconfirmDuty == true) {
                console.log('Unconfirm The Duty');

            } else {
                console.log('cancel');
            }
        }

        function clearAllotment() {
            let clearAllotment = confirm("Are you sure you want to clear the allotment?");
            if (clearAllotment == true) {
                console.log('Clear The Allotment');
            } else {
                console.log('cancel');
            }
        }

        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this duty type?')) {
                window.location.href = url; // Proceed with the delete action if confirmed
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.open-detail-modal').on('click', function() {
                const dutyId = $(this).data('id');
                console.log(dutyId, 'i m here open-detail-modal');

                // Set the ID in the modal header
                $('#exampleModalLabel').text(`Duty Details - #${dutyId}`);

                // Clear previous content (optional)
                $('#duty-detail-detail').html('<p>Loading...</p>');
                var dutyDetailsUrl = "{{ route('duty.details', ['id' => ':id']) }}";
                const fetchUrl = dutyDetailsUrl.replace(':id', dutyId);
                // Show the modal
                $('#details').modal('show');
                // AJAX Request to fetch duty details
                $.ajax({
                    url: fetchUrl, // Adjust this route
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // json = JSON.parse(response);
                        console.log(response);
                        // Replace content inside the modal with response data
                        let bookedByList = '';

                        if (Array.isArray(response.booked_by) && response.booked_by.length >
                            0) {
                            console.log(response.booked_by); // For debugging

                            bookedByList = `
                            <ol class="ps-3" style="list-style-type: decimal;">
                        `;

                            response.booked_by.forEach(person => {
                                bookedByList += `
                            <li>
                                ${person.name ?? 'N/A'} 
                                - <i class="fa-solid fa-phone text-success"></i> 
                                <a href="tel:${person.phone_no ?? ''}" class="text-decoration-none">
                                    ${person.phone_no ?? 'N/A'}
                                </a>
                            </li>
                            `;
                            });

                            bookedByList += '</ol>';
                        } else {
                            bookedByList = '<span class="text-secondary">NA</span>';
                        }


                        let html = `
                          <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th class="fw-medium">ID</th>
                                        <td>${dutyId}</td>
                                        <th class="fw-medium">Status</th>
                                        <td> ${response.status}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Start Date</th>
                                        <td>${formatDate(response.start_date)}</td>
                                        <th class="fw-medium">End Date</th>
                                        <td>${formatDate(response.end_date)}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Garage Start Time</th>
                                        <td> 07:00 Dummy</td>
                                        <th class="fw-medium">Reporting Time</th>
                                        <td>${response.reporting_time}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">From City</th>
                                        <td> ${response.from_service}</td>
                                        <th class="fw-medium">To City</th>
                                        <td> ${response.to_service}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Duty Type</th>
                                        <td colspan="3">${response.duty_type.duty_name ?? ''}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Vehicle Group</th>
                                        <td colspan="3">${response.vehicle_group.name ?? ''}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Customer</th>
                                        <td colspan="3"> ${response.customers.name ?? ''}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th class="fw-medium">Booked By</th>
                                      <td colspan="3">
                                        ${response.booked_by?.[0]?.name ?? ''} 
                                       (<i class="fa-solid fa-phone text-success"></i> 
                                        <a href="tel:${response.booked_by?.[0]?.phone_no ?? ''}" class="text-decoration-none ">
                                        ${response.booked_by?.[0]?.phone_no ?? ''}
                                        </a>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Labels</th>
                                        <td colspan="3">
                                            ${
                                                response.label_details && response.label_details.length > 0
                                                ? response.label_details.map(label => `
                                                        <span class="py-1 px-3 rounded-5 me-1"
                                                            style="background-color:${label.label_color}; color:black;">
                                                            ${label.label_name}
                                                        </span>
                                                    `).join('')
                                                : '<span class="text-secondary">NA</span>'
                                            }
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="fw-medium">Reporting Address</th>
                                        <td colspan="3">${response.reporting_address ?? 'NA'}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th class="fw-medium">Drop Address</th>
                                        <td colspan="3"><span class="text-secondary">${response.per_extra_km_rate ?? 'NA'}</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Price</th>
                                        <td>₹ ${response.price ?? ''}</td>
                                        <td><span class="fw-medium">Per Extra KM Rate: </span> ₹ ${response.per_extra_km_rate ?? 'NA'}</td>
                                        <td><span class="fw-medium">Per Extra Hour Rate: </span> ₹ ${response.per_extra_hr_rate ?? 'NA'}</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Operator Notes</th>
                                        <td colspan="3"><span class="text-secondary">${response.operator_notes ?? 'NA'}</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Remarks</th>
                                        <td colspan="3"><span class="text-secondary">${response.remarks ?? 'NA'}</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Passengers</th>
                                          <td colspan="3">${bookedByList}</td>

                                    </tr>
                                </tbody>
                            </table>
                    `;
                        $('#duty-detail-detail').html(html);
                    },
                    error: function() {
                        $('#duty-detail-detail').html(
                            '<p class="text-danger">Failed to load details.</p>');
                    }
                });
            });
        });
    </script>
@endsection
