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
                <li class="active"><a href="{{ route('duties.all') }}"
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
                        @foreach ($data as $data)
                            <tr>
                                <td>
                                    <i class="fa-solid fa-phone text-success"></i>
                                </td>
                                <td>{{ $data->end_date }}</td>
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
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        {{-- Booked --}}
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#details">Details</a>
                                            </li>
                                            <li><a class="dropdown-item" onclick="unconfirmDuty()">Unconfirm duty</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#add-remove-lable">Add/Remove labels</a></li>
                                            <li><a href="#" class="dropdown-item">Edit duty</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-vehicle-driver">Allot vehicle & driver</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-send-to-associate">Send to Associate</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-supporters">Allot supporters</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#print-duty-slip">Print duty slip</a></li>
                                            <li><a href="#" class="dropdown-item">View Booking</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#cancel-duty">Cancel Duty</a></li>
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
                        @endforeach
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
                                        <th class="fw-medium">Customer</th>
                                        <td colspan="3"> Vijay Vaidyanathan</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Booked By</th>
                                        <td colspan="3">Vijay Vaidyanathan ( <i
                                                class="fa-solid fa-phone text-success"></i> <a href="tel:+9840872950"
                                                class="text-decoration-none ">
                                                98408 72950 </a>) </td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Labels</th>
                                        <td colspan="3">
                                            <span class="py-1 px-3 rounded-5 bg-danger-subtle">
                                                Cash Paid By Company
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Reporting Address</th>
                                        <td colspan="3">Mumbai Airport T1</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Flight/Train Number</th>
                                        <td colspan="3">6E-2215</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Drop Address</th>
                                        <td colspan="3"><span class="text-secondary">NA</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Price</th>
                                        <td>₹ 2,500.00</td>
                                        <td><span class="fw-medium">Per Extra KM Rate: </span> ₹ 13.00</td>
                                        <td><span class="fw-medium">Per Extra Hour Rate: </span> ₹ 150.00</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Operator Notes</th>
                                        <td colspan="3"><span class="text-secondary">NA</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Remarks</th>
                                        <td colspan="3"><span class="text-secondary">NA</span></td>
                                    </tr>
                                    <tr>
                                        <th class="fw-medium">Passengers</th>
                                        <td colspan="3">
                                            <ol class="ps-3" style="list-style-type: decimal;">
                                                <li>Vijay Vaidyanathan - <i class="fa-solid fa-phone text-success"></i> <a
                                                        href="tel:+9840872950" class="text-decoration-none ">
                                                        98408 72950 </a></li>
                                            </ol>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                                @foreach ($labels as $label)
                                    <option value="{{ $label->id }}">{{ $label->label_name }}</option>
                                @endforeach
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
                                <input class="form-check-input" type="checkbox" id="add_customer_name">
                                <label class="form-check-label" for="add_customer_name">
                                    Add customer name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_booked_by_name">
                                <label class="form-check-label" for="add_booked_by_name">
                                    Add booked by name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_all_passenger_names">
                                <label class="form-check-label" for="add_all_passenger_names">
                                    Add all passenger names and numbers
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hide_duty_type_name">
                                <label class="form-check-label" for="hide_duty_type_name">
                                    Hide duty type name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hide_vehicle_group_name">
                                <label class="form-check-label" for="hide_vehicle_group_name">
                                    Hide vehicle group name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hide_vehicle_name">
                                <label class="form-check-label" for="hide_vehicle_name">
                                    Hide vehicle name
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hide_remarks">
                                <label class="form-check-label" for="hide_remarks">
                                    Hide remarks
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_garage_start_time">
                                <label class="form-check-label" for="add_garage_start_time">
                                    Add garage start time
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="add_released_km_time">
                                <label class="form-check-label" for="add_released_km_time">
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
                                <input class="form-check-input" type="checkbox" id="hide_business_letter_head">
                                <label class="form-check-label" for="hide_business_letter_head">
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
                            {{-- component --}}
                            <tr>
                                <td class="p-1">Custom</td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="name" id="name"></td>
                                <td class="p-1"><input type="text" class="form-control  border-bottom"
                                        name="name" id="name"></td>
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
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel Duty</button>
                        <button type="submit" class="btn btn-primary rounded-1">Keep Duty</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Cancel duty close --}}

@endsection


@section('extrajs')
    <script>
        $(document).ready(function() {

            document.getElementById("base_city").innerHTML = generateCityOptions();

            $("#labels").select2({
                allowClear: true
            });
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

            // code for details option from setting
            $('.duties-nav-tabs').on('click', function() {
                // Remove 'active' class from all <li> elements
                $('#tabs-nav li').removeClass('active');

                // Add 'active' class to the parent <li> of the clicked tab
                $(this).closest('li').addClass('active');
            });


            $('#add_entire_booking_date_range').change(function() {
                if ($(this).prop('checked')) {
                    $('#compact').prop('disabled', true);
                } else {
                    $('#compact').prop('disabled', false);
                }
            });

        });

        function unconfirmDuty() {
            let unconfirmDuty = confirm("Press a button!");
            if (unconfirmDuty == true) {
                console.log('Unconfirm The Duty');

            } else {
                console.log('cancel');
            }
        }
    </script>
    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this duty type?')) {
                window.location.href = url; // Proceed with the delete action if confirmed
            }
        }
    </script>
@endsection
