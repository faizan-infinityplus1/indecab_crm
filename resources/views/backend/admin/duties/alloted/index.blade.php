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
                <li class="active"><a href="{{ route('duties.allotted') }}"
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
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $data)
                            <tr class="data-row">
                                <td>
                                    <i class="fa-solid fa-phone text-success"></i>
                                </td>
                                <td data-toggle="tooltip" data-placement="bottom"
                                    title="End on {{ $data->end_date ? \Carbon\Carbon::parse($data->end_date)->format('d/m/Y') : 'N/A' }} ">
                                    {{ $data->end_date ? \Carbon\Carbon::parse($data->end_date)->format('d/m/Y') : 'N/A' }}
                                </td>
                                <td>
                                    {{ $data->customers->name }}
                                </td>
                                <td>
                                    @foreach ($data->bookedBy as $bookedbyData)
                                        {{ $bookedbyData->name }}
                                    @endforeach
                                </td>
                                <td>
                                    {{ $data->vehicleGroup->name }}
                                </td>
                                <td>Vehicle</td>
                                <td>Driver/Supplier</td>
                                <td>
                                    {{ $data->dutyType->duty_name }}
                                </td>
                                <td>
                                    {{ $data->reporting_address }}
                                </td>
                                <td>{{ $data->drop_address }}</td>
                                <td>{{ $data->remarks }}</td>
                                <td>{{ $data->operator_notes }}</td>
                                <td>{{ $data->from_service }}</td>
                                <td>{{ $data->reporting_time }}</td>
                                <td>{{ $data->label->label_name }}</td>
                                <td class="booking-status-container">
                                    <span>
                                        {{ $data->status }}
                                    </span>
                                    <button class="btn btn-success py-0 px-2" data-bs-toggle="modal"
                                        data-bs-target="#send-info" data-id="{{ $data->id }}">
                                        SEND INFO
                                    </button>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        {{-- allotted --}}
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item open-detail-modal"
                                                    data-bs-toggle="modal" data-bs-target="#details"
                                                    data-id="{{ $data->id }}">Details</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-duty-to-supplier">Update Supplier
                                                    Details</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#add-remove-lable" id="manageLabels"
                                                    data-id="{{ $data->id }}">Add/Remove labels</a></li>
                                            <li><a href="#" class="dropdown-item edit-detail-modal"
                                                    data-bs-toggle="modal" data-bs-target="#edit-duty"
                                                    data-id="{{ $data->id }}">Edit duty</a></li>

                                            <li>
                                                <a href="#" class="dropdown-item open-allot-vehicle-driver-modal"
                                                    data-bs-toggle="modal" data-id="{{ $data->id }}">Allot
                                                    vehicle &
                                                    driver</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-vehicle-driver">Re-allot</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#allot-send-to-associate">Send to Associate</a>
                                            </li>
                                            <li><a href="#" class="dropdown-item" onclick="clearAllotment()">Clear
                                                    Allotment</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#send-info">Send info</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#">Send driver/supplier location</a></li>

                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#">Mark as driver/supplier arrived</a></li>

                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#send-details-to-supplier">Send details to
                                                    supplier</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#print-duty-slip">Print duty slip</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#create-placard">Create placard</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#">Mark as dispatched</a></li>

                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#close-duty">Close Duty</a></li>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#advance-purchase-payment">Add Advance Purchase
                                                    Payment</a></li>
                                            {{-- <li><a href="{{ route('bookings.specific-bookings') }}" class="dropdown-item">View Booking</a></li> --}}

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
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty Details - #50249209-4</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
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
                                        <th class="fw-medium">Supplier</th>
                                        <td colspan="3">Shanu Shaikh - ( <i class="fa-solid fa-phone text-success"></i>
                                            <a href="tel:+9619900011" class="text-decoration-none ">
                                                9619900011 </a>)
                                        </td>
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
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- details close --}}
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
                <div class="modal-body px-5 bg-white">
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
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <button type="button" class="btn btn-primary rounded-1">Allot</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- allot-duty-to-supplier close --}}
    {{-- add remove lable --}}
    <div class="modal fade" id="add-remove-lable" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty Details - #50249209-4</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
                    <div class="row">
                        <div class="mb-3">
                            <label for="labels" class="control-label w-100">Labels</label>
                            <select class="form-select border-bottom" name="labels[]" id="labelsDuty" multiple>
                                @foreach ($labels as $labelData)
                                    <option value="{{ $labelData->id }}">{{ $labelData->label_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <button type="button" class="btn btn-success rounded-1" data-bs-dismiss="modal"
                        id="label_save">Save</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- add remove lable close --}}
    {{-- Edit Duty --}}
    <div class="modal fade" id="edit-duty-detail" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0" id="edit-duty-detail-content">

            </div>
        </div>
    </div>
    {{-- Edit Duty close --}}
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
                <div class="modal-body px-5 bg-white">
                    <p>
                        Showing supporters that can be booked for duty <span>#67920002-1</span>:
                    </p>
                    <div class="mb-3">
                        <select class="form-select border-bottom" name="" id="">
                            <option class="" value="">Select an option</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-1">Allot</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Allot supporters close --}}
    {{-- Allot vehicle & driver --}}
    <div class="modal fade" id="allot-vehicle-driver" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0" id="allot-duty-detail-content">

            </div>
        </div>
    </div>
    {{-- Allot vehicle & driver close --}}
    {{-- Send to Associate --}}
    <div class="modal fade" id="allot-send-to-associate" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send Duty #67920002-1 to Network</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
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
                <div class="modal-footer sticky-bottom bg-white justify-content-between px-5">
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
    {{-- Send info --}}
    <div class="modal fade" id="send-info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send Notifications for <span>
                                #16331828-5</span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
                    <p class="mb-3">Use this to send SMS and email notifications to driver and customer/passengers.</p>
                    <p><a href="#" class="text-decoration-none mb-3">View customer notes</a></p>
                    <ul class="nav nav-tabs border-0 w-100" id="tabs-nav">
                        <!-- Details Tab Link -->
                        <li class="nav-item w-50 mb-3 active" id="details-tab">
                            <a href="#driver-or-supporters"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs active"
                                data-bs-toggle="tab">Driver / Supporters</a>
                        </li>
                        <!-- Activity Tab Link -->
                        <li class="nav-item w-50 mb-3" id="activity-tab">
                            <a href="#customer-or-passenger"
                                class="p-3 d-block text-center text-decoration-none duties-nav-tabs"
                                data-bs-toggle="tab">Customer / Passenger / Other Contacts</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- driver / supporters -->
                        <div id="driver-or-supporters" class="tab-pane fade show active">
                            <table class="w-100 table-bordered mb-3">
                                <thead>
                                    <tr>
                                        <th class="p-1">Name</th>
                                        <th class="p-1">Send SMS</th>
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
                                    </tr>
                                    {{-- new component --}}
                                    <tr>
                                        <td class="p-1">Custom</td>
                                        <td class="p-1"><input type="text" class="form-control  border-bottom"
                                                name="" id=""></td>
                                    </tr>
                                    {{-- new component end here --}}
                                </tbody>
                            </table>
                        </div>

                        <!-- customer / passenger -->
                        <div id="customer-or-passenger" class="tab-pane fade">
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
                        </div>
                    </div>

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
                                    Add vehicle details to SMS
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Add garage start time to SMS
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
                                    Add entire booking dates
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-end px-5 bg-white">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-1">Send</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Send info close --}}
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
                <div class="modal-body px-5 bg-white">
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
                <div class="modal-footer sticky-bottom justify-content-end px-5 bg-white">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary rounded-1">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Send details to supplier close --}}
    {{-- Print duty slip --}}
    <div class="modal fade" id="print-duty-slip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Print Duty Slip for <span>#67920002-1</span>
                        </h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
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
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <button type="submit" class="btn btn-primary rounded-1">Print</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Print duty slip close --}}
    {{-- Create placard --}}
    <div class="modal fade" id="create-placard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Placard for Duty <span> #44158262-6
                            </span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
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
                <div class="modal-footer sticky-bottom justify-content-between px-5 bg-white">
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
    {{-- close duty --}}
    <div class="modal fade" id="close-duty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Close Duty - <span> #16331828-7</span></h1>
                        <p>Use this in case if the driver doesn't have phone to generate digital duty slip, or in case of
                            external suppliers.</p>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
                    <p>You will be able to create custom duty slip for supplier once this duty slip is marked complete.</p>
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1">Customer</th>
                                <td class="p-1" colspan="3">Mukund. H R Doshi</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- new component --}}
                            <tr>
                                <th class="p-1">
                                    <p>
                                        Vehicle
                                    </p>
                                </th>
                                <td class="p-1">
                                    <p>Innova Crysta (MH03EG3151)</p>
                                    <small><i> Innova Crysta </i></small>
                                </td>
                                <th class="p-1">
                                    <p>
                                        driver
                                    </p>
                                </th>
                                <td class="p-1">
                                    <p>
                                        ADIL PATEL
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th class="p-1">
                                    <p>Price</p>
                                </th>
                                <td class="p-1">
                                    <p>₹ 3,500.00</p>
                                </td>
                                <th class="p-1">
                                    <p>Passenger</p>
                                </th>
                                <td class="p-1">
                                    <p>Mukund. H R Doshi</p>
                                    <p><a href="#" class="text-decoration-none">View customer notes</a></p>
                                </td>
                            </tr>
                            {{-- new component end here --}}
                        </tbody>
                    </table>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty Start Date <span
                                            class="text-danger">*</span> </label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty End Date <span
                                            class="text-danger">*</span> </label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty Start Km <span
                                            class="text-danger">*</span> </label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty Type <span
                                            class="text-danger">*</span> </label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">add time here</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty Start Time <span
                                            class="text-danger">*</span> </label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">add time here</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty End Time <span
                                            class="text-danger">*</span> </label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">add time here</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Duty End Km <span
                                            class="text-danger">*</span> </label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Vehicle Group <span
                                            class="text-danger">*</span> </label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">add time here</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="">
                                    <label class="form-check-label" for="">
                                        Auto-switch duty types
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Price </label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="number" class="form-control border-bottom" id="">
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-light border w-100"
                                                id="">Get Price</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Per Extra KM Rate </label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Per Extra Hr Rate </label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1">
                                    T.Time
                                </th>
                                <th class="p-1">
                                    Ex.Time
                                </th>
                                <th class="p-1">
                                    Ex.Time Cost
                                </th>
                                <th class="p-1">
                                    T.KM
                                </th>
                                <th class="p-1">
                                    Ex.KM
                                </th>
                                <th class="p-1">
                                    Ex.KM Cost
                                </th>
                                <th class="p-1">
                                    Sub Total
                                </th>
                            </tr>
                            <tr>
                                <td class="p-1"></td>
                                <td class="p-1"></td>
                                <td class="p-1">
                                    <p class="mb-0">0.00</p>
                                </td>
                                <td class="p-1">
                                    <p class="mb-0 ">
                                        <span class="text-secondary">NA</span>
                                    </p>
                                </td>
                                <td class="p-1"></td>
                                <td class="p-1">0.00</td>
                                <td class="p-1"></td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Chargeable driver allowances</div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Daily allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Over time</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Outstation allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Outstation overnight allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Sunday allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Early start allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Night allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Extra duty allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Billing Items:</p>
                    <table class="w-100 table mb-3 border-top">
                        <thead>
                            <tr>
                                <th class="p-1">
                                    Item
                                </th>
                                <th class="p-1">
                                    Amount
                                </th>
                                <th class="p-1">
                                    Image
                                </th>
                                <th class="p-1">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <select class="form-select border-bottom" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cancellation_reason" class="form-label">Description </label>
                                        <textarea class="form-control" rows="3" name="" id=""></textarea>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="billing-items-image-container"></div>
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-light border w-100"
                                            id="">Choose file</button>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-danger rounded-1">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <select class="form-select border-bottom" name="" id="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cancellation_reason" class="form-label">Description </label>
                                        <textarea class="form-control" rows="3" name="" id=""></textarea>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <input type="number" class="form-control  border-bottom" id="">
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="billing-items-image-container"></div>
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-light border w-100"
                                            id="">Choose file</button>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-danger rounded-1">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" id="" class="btn btn-primary rounded-1 mb-3">Add another
                        item</button>
                    <p class="mb-2">
                        Scanned Duty Slip
                    </p>
                    <div class="mb-3">
                        <button type="button" class="btn btn-light border" id="">Choose file</button>
                    </div>
                    <div class="mb-3 d-none">
                        <div class="scanned-duty-Slip-image-container"></div>
                        <button type="button" class="btn btn-light border" id="">Remove</button>
                    </div>
                    <div class="mb-3">
                        <label for="cancellation_reason" class="form-label">Remarks </label>
                        <textarea class="form-control" rows="3" name="" id=""></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Mark passenger did not show at reporting address
                        </label>
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-end px-5 bg-white">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary rounded-1" id="">Close & View Duty
                        Slip</button>
                </div>
            </div>
        </div>
    </div>
    {{-- close duty close --}}
    {{-- Advance Purchase Payment --}}
    <div class="modal fade" id="advance-purchase-payment" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0 h-100">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Advance Purchase Payment</h1>
                        <small>Booking Id: <span> #16331828-5</span></small>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
                    <div class="mb-3">
                        <label for="" class="form-label"> Duty <span class="text-danger">*</span> </label>
                        <input type="date" class="form-control  border-bottom" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Amount <span class="text-danger">*</span> </label>
                        <input type="number" class="form-control  border-bottom" id="">
                    </div>
                    <div class="mb-3">
                        <label for="cancellation_reason" class="form-label">Comment </label>
                        <textarea class="form-control" rows="3" name="" id=""></textarea>
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <div>
                        <button type="button" class="btn btn-primary rounded-1" id="">Save</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Advance Purchase Payment close --}}
    {{-- Cancel duty --}}
    <div class="modal fade" id="cancel-duty" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Duty <span>#20608345-1</span>
                        </h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5 bg-white">
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
                        <button type="button" class="btn btn-light border mx-auto" id="">Copy SMS
                            Text</button>
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
                <div class="modal-footer sticky-bottom justify-content-between px-5 bg-white">
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


@endsection


@section('extrajs')
    <script src="{{ asset('admin/js/timeslots.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script src="{{ asset('admin/js/cities.js') }}"></script>
    <script>
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this duty type?')) {
                window.location.href = url; // Proceed with the delete action if confirmed
            }
        }

        function clearAllotment() {
            let clearAllotment = confirm("Are you sure you want to clear the allotment?");
            if (clearAllotment == true) {
                console.log('clear Allotment');

            } else {
                console.log('cancel');
            }
        }

        $(document).ready(function() {
            $('#labelsDuty').select2({
                dropdownParent: $('#add-remove-lable'),
                placeholder: "Select an Option",
                allowClear: true
            });
            $('.open-detail-modal').on('click', function() {
                const dutyId = $(this).data('id');
                console.log(dutyId);
                console.log('i m open-detail-modal');
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
                        // console.log(response);
                        // Replace content inside the modal with response data
                        let bookedByList = '';

                        if (Array.isArray(response.booked_by) && response.booked_by.length >
                            0) {
                            // console.log(response.booked_by); // For debugging
                            bookedByList = `
                            <ol class="ps-3" style="list-style-type: decimal;">`;

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

            // Manage LabelsF
            // ✅ On label manage button click
            $(document).on('click', '#manageLabels', function() {
                const dutyId = $(this).data('id');
                // console.log('Clicked label for duty:', dutyId);

                const fetchUrl = "{{ route('edit.duty.label', ['id' => ':id']) }}".replace(
                    ':id', dutyId);

                $.ajax({
                    url: fetchUrl,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // console.log('Booking data:', response.booking);
                        currentBookingId = response.booking.id;
                        labelArray = response.booking.labels;
                        // labelArray = JSON.parse(response.booking.labels);
                        // console.log('Parsed labelArray:', labelArray);
                        labelArray = response.booking.labels ?
                            response.booking.labels.split(',').map(label => label
                                .trim()) : [];
                        console.log(labelArray);
                        // ✅ Set selected options
                        $('#labelsDuty').val(labelArray).trigger('change');

                        // ✅ Now show the modal
                        $('#add-remove-lable').modal('show');
                    },
                    error: function() {
                        $('#duty-detail-detail').html(
                            '<p class="text-danger">Failed to load details.</p>'
                        );
                    }
                });

                // ✅ On Save
                $('#label_save').on('click', function() {
                    // console.log('Save clicked');

                    if (!currentBookingId) {
                        console.error('Booking ID is not set!');
                        return;
                    }

                    const fetchUrl = "{{ route('update.duty.label', ['id' => ':id']) }}".replace(
                        ':id', currentBookingId);
                    const labelData = $('#labelsDuty').val();
                    // console.log(labelData);

                    const payload = {
                        _token: '{{ csrf_token() }}',
                        booking_id: currentBookingId,
                        labels: labelData
                    };

                    // console.log('Sending payload:', payload);

                    $.ajax({
                        url: fetchUrl,
                        type: 'POST',
                        dataType: 'json',
                        data: payload,
                        success: function(response) {
                            // console.log('Saved:', response);
                            $('#add-remove-lable').modal('hide');
                            setTimeout(() => window.location.reload(), 300);
                        },
                        error: function(xhr) {
                            console.error('Save failed:', xhr.responseText);
                        }
                    });
                });
            });

            // Edit Duty Modal Start Here
            $('.edit-detail-modal').on('click', function() {

                const dutyId = $(this).data('id');

                // Set the ID in the modal header
                $('#edit-duty-detail').modal('show');

                // Clear previous content (optional)
                $('#edit-duty-detail-content').html('<p>Loading...</p>');
                var dutyDetailsUrl = "{{ route('duty.edit.details', ['id' => ':id']) }}";
                const fetchUrl = dutyDetailsUrl.replace(':id', dutyId);
                // Show the modal
                // AJAX Request to fetch duty details
                $.ajax({
                    url: fetchUrl, // Adjust this route
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        let html = `
                      <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">${response.booking.customers.name} <span> #${response.booking.id}</span></h1>
                        <small>Start Date: <span>${formatDate(response.booking.start_date)}</span></small>
                    </div>
                    </div>
                    <div class="modal-body px-5 bg-white">
                        <input type="hidden" id="booking_id_up" value="${response.booking.id}" />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                <label class="control-label">Rep. Time <span class="text-danger">*</span></label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="reporting_time" id="rep_time"
                                        required>
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
                                    <input type="number" class="form-control  border-bottom" id="garage_time" value="${response.booking.garage_time ?? ''}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="control-label w-100">Vehicle Group</label>
                                <select class="form-select border-bottom" name="vehicle_group" id="vehicle_group">
                                    <option value="">select vehicle group</option>
                                </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="control-label w-100">Duty Type</label>
                                   <select class="form-select border-bottom" name="duty_type" id="duty_type"> </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Price</label>
                                    <input type="number" class="form-control border-bottom" id="price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="km_rate" class="form-label"> Per Extra KM Rate</label>
                                    <input type="number" class="form-control  border-bottom" id="km_rate" value="${response.booking.per_extra_km_rate ?? ''}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="hr_rate" class="form-label"> Per Extra Hr Rate</label>
                                    <input type="number" class="form-control border-bottom" value="${response.booking.per_extra_hr_rate ?? ''}" id="hr_rate">
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
                                       <input type="text" class="form-control border-bottom" value="${response.booking.reporting_address ?? ''}" id="reporting_address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="drop_address" class="form-label w-100">Drop Address</label>
                                  <input type="text" class="form-control border-bottom" id="drop_address_up" value="${response.booking.drop_address ?? ''}" >
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="short_reporting_address" class="form-label"> Short Reporting Address (to be shown in duty
                                listing)</label>
                            <input type="text" class="form-control border-bottom" id="short_reporting_address" value="${response.booking.short_reporting_address ?? ''}">
                        </div>
                        <div class="mb-3">
                            <label for="remarks" class="form-label">Remarks </label>
                            <textarea class="form-control" rows="3" name="remarks" id="remarks">${response.booking.remarks ?? ''}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="flight_train_number" class="form-label"> Flight/Train Number</label>
                            <input type="text" class="form-control  border-bottom" id="flight_train_number" value="${response.booking.ticket_number ?? ''}">
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
                                    <label class="control-label w-100">Supplier Vehicle Group</label>
                                    <select class="form-select border-bottom" name="supplier_vehicle_group" id="supplier_vehicle_group"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="control-label w-100">Supplier Duty Type</label>
                                        <select class="form-select border-bottom" name="supplier_duty_type" id="supplier_duty_type">
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
                            <button type="button" class="btn btn-primary border" id="updateDutyDetail">Saves</button>
                            <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    `;
                        $('#edit-duty-detail-content').html(html);
                        // Now rep_time exists in the DOM
                        const repTime = response.booking.reporting_time;
                        const dropTime = response.booking.drop_time;

                        document.getElementById("rep_time").innerHTML = generateTimeSlots(
                            repTime);
                        document.getElementById("drop_time").innerHTML = generateTimeSlots(
                            dropTime);

                        // Vehicle Group
                        const vehicleGroupSelects = document.querySelectorAll(
                            '#edit-duty-detail-content select[name="vehicle_group"]'
                        );

                        // Duty Type
                        const dutytypeSelect = document.getElementById('duty_type');
                        console.log(dutytypeSelect);
                        if (dutytypeSelect && Array.isArray(response.mst_duty_type)) {
                            dutytypeSelect.innerHTML =
                                '<option value="">Select duty type</option>';

                            const selectedDutyType = response.booking?.duty_type?.id || null;
                            response.mst_duty_type.forEach(duty => {
                                const option = document.createElement('option');
                                option.value = duty.id;
                                option.textContent = duty.duty_name;

                                if (duty.id == selectedDutyType) {
                                    option.selected = true;
                                }
                                Append = dutytypeSelect.appendChild(option);
                                if (Append) {
                                    // console.log(Append);
                                }
                            });
                        } else {
                            console.error('Select not found or invalid response');
                        }

                        if (vehicleGroupSelects.length > 0) {
                            vehicleGroupSelects.forEach(vehicleGroupSelect => {
                                if (
                                    Array.isArray(response.all_vehicle_groups) &&
                                    response.all_vehicle_groups.length > 0
                                ) {
                                    vehicleGroupSelect.innerHTML =
                                        '<option value="">Select vehicle group</option>';

                                    const selectedVehicleGroupId = response.booking
                                        .vehicle_group.id || null;

                                    response.all_vehicle_groups.forEach(group => {
                                        const option = document.createElement(
                                            'option');
                                        option.value = group.id;
                                        option.textContent = group.name;

                                        // Preselect user's selected vehicle group
                                        if (group.id ==
                                            selectedVehicleGroupId) {
                                            option.selected = true;
                                        }

                                        vehicleGroupSelect.appendChild(option);
                                    });
                                } else {
                                    vehicleGroupSelect.innerHTML =
                                        '<option value="">No vehicle group found</option>';
                                }
                            });
                        } else {
                            console.error('No vehicle_group selects found in DOM');
                        }

                        // Supplier Start Here
                        const supplierdutytypeSelect = document.getElementById(
                            'supplier_duty_type');
                        const suppliervehicleGroup = document.getElementById(
                            'supplier_vehicle_group');
                        if (supplierdutytypeSelect && Array.isArray(response.mst_duty_type)) {
                            supplierdutytypeSelect.innerHTML =
                                '<option value="">Select duty type</option>';
                            const supplierdutytypeSelect = response.booking?.duty_type?.id ||
                                null;
                            response.mst_duty_type.forEach(duty => {
                                const option = document.createElement('option');
                                option.value = duty.id;
                                option.textContent = duty.duty_name;
                                if (duty.id == supplierdutytypeSelect) {
                                    option.selected = true;
                                }
                                supplierdutytypeSelect.appendChild(option);

                            });
                        } else {
                            console.error('Select not found or invalid response');
                        }

                    },
                    error: function() {
                        $('#edit-duty-detail-content').html(
                            '<p class="text-danger">Failed to load details.</p>');
                    }
                });
            });
            // Edit Duty Modal End Here

            // Update Duty Details Start Here
            $(document).on('click', '#updateDutyDetail', function() {
                // alert("Button clicked");
                const bookingId = $('#booking_id_up').val();
                const payload = {
                    _token: '{{ csrf_token() }}', // for Laravel
                    reporting_time: $('#rep_time').val(),
                    drop_time: $('#drop_time').val(),
                    garage_time: $('#garage_time')
                        .val(), // give this input a name="garage_time" in HTML
                    vehicle_group: $('#vehicle_group').val(),
                    duty_type: $('#duty_type').val(),
                    per_extra_km_rate: $('#km_rate').val(),
                    per_extra_hr_rate: $('#hr_rate').val(),
                    reporting_address: $('#reporting_address').val(),
                    drop_address: $('#drop_address_up').val(), // fix duplicate id in HTML
                    short_reporting_address: $('#short_reporting_address').val(),
                    remarks: $('#remarks').val(),
                    ticket_number: $('#flight_train_number').val(),
                    supplier_vehicle_group: $('#supplier_vehicle_group').val(),
                    supplier_duty_type: $('#supplier_duty_type').val(),
                    booking_id: bookingId,
                    // Add more fields as needed
                };
                // console.log(payload);
                var updateDutyBooking = "{{ route('update.duty.booking', ['id' => ':id']) }}";
                const particularDutyBooking = updateDutyBooking.replace(':id', bookingId);
                $.ajax({
                    url: particularDutyBooking, // Replace with your actual update route
                    type: 'POST', // or PUT
                    data: payload,
                    success: function(response) {
                        // alert('Duty details updated successfully.');
                        $('#edit-duty-detail').modal('hide');
                        window.location.reload();

                        // Optional: Refresh list or update UI
                    },
                    error: function(xhr) {
                        alert('Failed to update duty details.');
                        console.error(xhr.responseText);
                    }
                });
            });
            // Update Duty Details End Here

            // Allot vehicle, driver and supplier
            $('.open-allot-vehicle-driver-modal').on('click', function() {
                // console.log('i m at open-allot-vehicle');
                const dutyId = $(this).data('id');
                console.log(dutyId);
                // Show modal
                $('#allot-vehicle-driver').modal('show');

                // Loading indicator
                $('#allot-duty-detail-content').html('<p>Loading...</p>');

                var dutyDetailsUrl = "{{ route('duty.allot.details', ['id' => ':id']) }}";
                const fetchUrl = dutyDetailsUrl.replace(':id', dutyId);

                $.ajax({
                    url: fetchUrl,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        // console.log(response.booking.vehicle_group.name);

                        // Create modal HTML content
                        let html = `
                        <div class="modal-content rounded-0 border-0">
                            <div class="modal-header px-5 sticky-top bg-white">
                                <div>
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Allot Duty</h1>
                                </div>
                            </div>
                            <div class="modal-body px-5 bg-white">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="fw-medium">ID</th>
                                            <td>${response.booking.id}</td>
                                            <th class="fw-medium">Status</th>
                                            <td class="text-warning">Allotting</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Start Date</th>
                                            <td>${formatDate(response.booking.start_date)}</td>
                                            <th class="fw-medium">End Date</th>
                                            <td>${formatDate(response.booking.end_date)}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Garage Start Time</th>
                                            <td>${response.booking.garage_time}</td>
                                            <th class="fw-medium">Reporting Time</th>
                                            <td>${response.booking.reporting_time}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">From City</th>
                                            <td>${response.booking.from_service}</td>
                                            <th class="fw-medium">To City</th>
                                            <td>${response.booking.to_service}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Duty Type</th>
                                            <td colspan="3">${response.booking.duty_type.duty_name}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Vehicle Group</th>
                                            <td colspan="3">${response.booking.vehicle_group.name}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Reporting Address</th>
                                            <td colspan="3">${response.booking.reporting_address}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-medium">Drop Address</th>
                                            <td colspan="3"><span class="text-secondary">${response.booking.drop_address}</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button type="reset" class="btn btn-light border">Send to Associate</button>

                                <ul class="nav nav-tabs border-0 w-100" id="tabs-nav">
                                    <li class="nav-item w-50 mb-3 active" id="details-tab">
                                        <a href="#duty-my-vehicles" class="p-3 d-block text-center text-decoration-none duties-nav-tabs active" data-bs-toggle="tab">My Vehicles</a>
                                    </li>
                                    <li class="nav-item w-50 mb-3" id="activity-tab">
                                        <a href="#duty-my-suppliers" class="p-3 d-block text-center text-decoration-none duties-nav-tabs" data-bs-toggle="tab">My Suppliers</a>
                                    </li>
                                </ul>

                            <div class="tab-content">
                            <!-- My Vehicles -->
                            <div id="duty-my-vehicles" class="tab-pane fade show active" role="tabpanel" aria-labelledby="tab-my-vehicles">
                                <select class="form-select border-bottom" name="vehicles[]" id="vehicles" multiple="multiple"></select>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-striped table-hover datatable" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Vehicle Number</th>
                                                    <th scope="col">Group</th>
                                                    <th scope="col">City</th>
                                                    <th style="display:none">Vehicle Id</th>
                                                    <th style="display:none">Driver Id</th>
                                                    <th style="display:none">Vehicle Group Id</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Vehicle Number</th>
                                                    <th>Group</th>
                                                    <th>City</th>
                                                    <th style="display:none">Vehicle Id</th>
                                                    <th style="display:none">Driver Id</th>
                                                    <th style="display:none">Vehicle Group Id</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <!-- My Suppliers -->
                                <div id="duty-my-suppliers" class="tab-pane fade" role="tabpanel" aria-labelledby="tab-my-suppliers">
                                <select class="form-select border-bottom" name="suppliers[]" id="suppliers" multiple="multiple"></select>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-striped table-hover datatable" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Vehicle Number</th>
                                                    <th scope="col">Group</th>
                                                    <th scope="col">City</th>
                                                    <th scope="col">Document Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Vehicle Number</th>
                                                    <th>Group</th>
                                                    <th>City</th>
                                                    <th>Document Status</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                                <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        `;

                        $('#allot-duty-detail-content').html(html);

                        // Process vehicle data after modal HTML is ready
                        let vehicleOptions = '';
                        let vehicleTableRows = '';
                        let supplierOption = '';
                        let suppliervehicleTableRows = '';
                        // console.log(response);
                        if (Array.isArray(response.supplier)) {
                            response.supplier.forEach(s => {
                                const supplierName = s.name ?? 'N/A';
                                const phoneNo = s.phone_no ?? 'N/A';
                                const vehNo = 'N/A';
                                const supplierGroup = s.supplier_groups ?? 'N/A';
                                const cities = s.cities ?? 'N/A';
                                const documentStatus = 'N/A';
                                // console.log(response.supplier, 'i m response supplier');
                                suppliervehicleTableRows += `
                                <tr data-id="${s.id}">
                                    <td>${supplierName}</td>
                                    <td>${phoneNo}</td>
                                    <td>${vehNo}</td>
                                    <td>${supplierGroup}</td>
                                    <td>${cities}</td>
                                    <td>${documentStatus}</td>
                                </tr>`;
                            });
                        }
                        if (Array.isArray(response.vehicle)) {
                            response.vehicle.forEach(v => {
                                // console.log(v, 'response v', v.vehicle_group_id);
                                const vehicleId = v.id ?? 'N/A';
                                const driverId = v.driver_id ?? 'N/A';
                                const vehiclegroupId = v.vehicle_group_id ?? 'N/A';

                                // const vehicleNo = v.vehicle_no ?? 'N/A';
                                // const vehicleNo = v.mst_cat_veh_group?.name ?? 'N/A';
                                const modelName = v.model_name ?? 'N/A';
                                const driverName = v.mst_driver?.name ?? 'N/A';
                                // const driverPhone = v.mst_driver?.mobile_no ?? 'N/A';
                                const vehicleNo = v.vehicle_no ?? 'N/A';
                                const groupName = v.mst_cat_veh_group?.name ?? 'N/A';
                                const availability = v.unavail_for_duty == 0 ?
                                    '<span class="text-success">Available</span>' :
                                    '<span class="text-danger">Unavailable</span>';

                                vehicleOptions +=
                                    `<option value="${v.id}">${groupName} (${modelName})</option>`;

                                vehicleTableRows += `
                                <tr data-id="${v.id}">
                                    <td>${modelName}</td>
                                    <td>${vehicleNo}</td>
                                    <td>${groupName}</td>
                                    <td>${driverName}</td>
                                    <td>${availability}</td>
                                    <td style="display:none">${vehicleId}</td>
                                    <td style="display:none">${driverId}</td>
                                    <td style="display:none">${vehiclegroupId}</td>
                                </tr>`;
                            });
                        }

                        // Populate select options and table rows
                        $('#vehicles').html(vehicleOptions);
                        $('#duty-my-vehicles table tbody').html(vehicleTableRows);
                        $('#duty-my-suppliers table tbody').html(suppliervehicleTableRows);
                        // Destroy previous select2/dataTable instances if any
                        if ($('#vehicles').hasClass("select2-hidden-accessible")) {
                            $('#vehicles').select2('destroy');
                        }

                        if ($.fn.DataTable.isDataTable('#duty-my-vehicles table')) {
                            $('#duty-my-vehicles table').DataTable().destroy();
                        }
                        if ($.fn.DataTable.isDataTable('#duty-my-suppliers table')) {
                            $('#duty-my-suppliers table').DataTable().destroy();
                        }

                        // Reinitialize Select2
                        $('#vehicles').select2({
                            placeholder: "Select an Option",
                            allowClear: true,
                            width: '100%'
                        });
                        $('#suppliers').select2({
                            placeholder: "Select an Option",
                            allowClear: true,
                            width: '100%'
                        });
                        // Reinitialize DataTable

                        // Filter table when select2 changes
                        $('#vehicles').on('change', function() {
                            const selectedText = $(this).find("option:selected").text()
                                .toLowerCase();

                            // If nothing selected, reset search
                            if (!$(this).val()) {
                                vehicleTable.columns(2).search('')
                                    .draw(); // clear group column filter
                                return;
                            }

                            // Extract only the group name (before the first '(')
                            const groupNameOnly = selectedText.split('(')[0].trim();
                            vehicleTable.columns(2).search(groupNameOnly)
                                .draw(); // filter by group (column 2)
                        });
                        let vehicleTable = $('#duty-my-vehicles table').DataTable();

                        $('#duty-my-vehicles table tbody').on('click', 'tr', function() {
                            const storeVehicleDutyBaseUrl =
                                "{{ route('store.vehicle.duty', ['id' => '___ID___']) }}";

                            const bookingId = response.booking.id;
                            const storeUrl = storeVehicleDutyBaseUrl.replace('___ID___',
                                bookingId);

                            const rowData = vehicleTable.row(this).data();
                            // console.log(rowData);
                            if (!rowData) return;

                            // Helper to extract text safely
                            const getText = (cell) => {
                                return typeof cell === 'object' && cell !== null ?
                                    $(cell).text().trim() : String(cell).trim();
                            };

                            const model = getText(rowData[0]);
                            const vehicleNo = getText(rowData[1]);
                            const group = getText(rowData[2]);
                            const driver = getText(rowData[3]);
                            const availability = getText(rowData[4]).toLowerCase() ===
                                "available" ? 1 : 0;

                            // Hidden data columns
                            const vehicleId = getText(rowData[5]);
                            const driverId = getText(rowData[6]);
                            const vehiclegroupId = getText(rowData[7]);


                            // AJAX request (uncomment when ready)
                            $.ajax({
                                url: storeUrl,
                                method: 'POST',
                                data: {
                                    _token: csrfToken,
                                    // model: model,
                                    // vehicle_no: vehicleNo,
                                    // group: group,
                                    // driver: driver,
                                    // availability: availability,
                                    vehicle_id: vehicleId,
                                    driver_id: driverId,
                                    vehicle_group_id: vehiclegroupId
                                },
                                success: function(response) {
                                    window.location.reload();
                                },
                                error: function(xhr) {
                                    alert('Failed to store vehicle');
                                    // console.log(xhr.responseText);
                                }
                            });
                        });


                        let supplierTable = $('#duty-my-suppliers table').DataTable();

                        $('#duty-my-suppliers table tbody').on('click', 'tr', function() {
                            const row = document.querySelector('tr[data-id]');
                            const dataId = row.getAttribute('data-id');
                            // console.log(dataId);
                            const bookingId = response.booking.id;

                            const storeSupplierBaseUrl =
                                "{{ route('store.supplier.duty', ['id' => '___ID___']) }}";

                            const supplierId = response.supplier.id;
                            const storeSupplierUrl = storeSupplierBaseUrl.replace(
                                '___ID___',
                                bookingId);

                            const rowData = supplierTable.row(this).data();
                            // console.log(rowData, 'supplierTable');
                            if (!rowData) return;

                            // Helper to extract text safely
                            const getText = (cell) => {
                                return typeof cell === 'object' && cell !== null ?
                                    $(cell).text().trim() : String(cell).trim();
                            };



                            // AJAX request (uncomment when ready)
                            $.ajax({
                                url: storeSupplierUrl,
                                method: 'POST',
                                data: {
                                    _token: csrfToken,
                                    supplier_id: dataId,
                                },
                                success: function(response) {
                                    window.location.reload();
                                },
                                error: function(xhr) {
                                    alert('Failed to store vehicle');
                                    // console.log(xhr.responseText);
                                }
                            });
                        });

                        $('#duty-my-vehicles table').DataTable();
                        $('#duty-my-suppliers table').DataTable();
                    },
                    error: function() {
                        $('#allot-duty-detail-content').html(
                            '<p class="text-danger">Failed to load details.</p>');
                    }
                });
            });


        });
    </script>
@endsection
