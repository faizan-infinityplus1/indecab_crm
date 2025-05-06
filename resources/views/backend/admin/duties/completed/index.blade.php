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
                <li class="active"><a href="{{ route('duties.completed') }}"
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

                                    {{-- Completed --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#details">Details</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#view-duty-slip">View duty slip</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#edit-duty-slip">Edit duty slip</a></li>
                                        <li><a href="#" class="dropdown-item"
                                                onclick="clearDutySlip()">Clear
                                                duty slip</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#add-remove-lable">Add/Remove labels</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#allot-supporters">Allot supporters</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#print-duty-slip">Print duty slip</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#advance-purchase-payment">Add Advance Purchase
                                                Payment</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#request-customer-feedback">Request customer
                                                feedback</a></li>
                                        <li><a href="{{ route('bookings.specific-bookings') }}" class="dropdown-item">View Booking</a></li>
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
                <div class="modal-footer justify-content-start px-5">
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- details close --}}
    {{-- View duty slip --}}
    <div class="modal fade" id="view-duty-slip" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white d-flex justify-content-between">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Duty #86751150-2</h1>
                        <small class="text-white bg-success p-1">Status: completed</small>
                    </div>
                    <button type="button" class="btn btn-light border" id="">Edit</button>
                </div>
                <div class="modal-body px-5">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <b>Date</b>: 22-03-2025<br>
                                <b>Reporting Time</b>: 10:30<br>
                                <b>Customer</b>: Mukund. H R Doshi<br>
                                <b>Booked By</b>: Mukund. H R Doshi
                                (+65 9655 5052) <br>
                                <b>Passengers</b>: Yeoh jo Ann (+6591914248) and Kon TSIN Zhen <br>
                                <b>Reporting Address</b>: Mumbai Airport T2<br>
                                <b>Drop Address</b>: Hayyat Juhu<br>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <b>Duty Id</b>: #33240541-1<br>
                                <b>Duty Type</b>: Transfer<br>
                                <b>Vehicle Group</b>: Innova Crysta<br>
                                <b>Vehicle</b>: Innova Crysta <mark>MH03DK2539</mark><br>
                                <b>Driver</b>: Nadeem Shah<br>
                            </p>
                        </div>
                    </div>
                    <table class="w-100 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-1">
                                    Start
                                </th>
                                <th class="p-1">
                                    End
                                </th>
                                <th class="p-1">
                                    Total
                                </th>
                                <th class="p-1">
                                    Extra
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="p-1">KM</th>
                                <td class="p-1">109359</td>
                                <td class="p-1">109411</td>
                                <td class="p-1">52</td>
                                <td class="p-1">0</td>
                            </tr>
                            <tr>
                                <th class="p-1">Time</th>
                                <td class="p-1">0930 <span> 22/03</span></td>
                                <td class="p-1">1230 <span> 22/03</span></td>
                                <td class="p-1">03:00</td>
                                <td class="p-1">00:00</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-3">
                        Additional Charges:
                    </p>
                    <table class="w-50 table-bordered mb-3">
                        <thead>
                            <tr>
                                <th class="p-1"><i class="fa-solid fa-camera"></i> Charges</th>
                                <th class="p-1">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-1"><i class="fa-solid fa-camera"></i> Toll & Parking (T)</td>
                                <td class="p-1">400.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-3">
                        <a href="#" class="text-decoration-none">
                            View Scanned Duty Slip
                        </a>
                    </p>
                    <p class="mb-3">Customer signature not available.</p>
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3 d-flex justify-content-between">
                            <p class="m-0">Customer Feedback (via Feedback Form)</p>
                            <a href="#" id="showFeedback">
                                Show Feedback
                            </a>
                            <a href="#" id="hideFeedback" style="display: none;">
                                Hide Feedback
                            </a>
                        </div>
                        <div class="p-3 panel-body" style="display: none;">
                        </div>
                    </div>
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">
                            <p class="m-0">Print Settings</p>
                        </div>
                        <div class="p-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide business letter head
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide billing items
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide allowances
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Hide remarks
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <div>
                        <button type="button" class="btn btn-light border" id=""><i
                                class="fa-solid fa-print"></i> Print</button>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- View duty slip close --}}
    {{-- Edit duty slip --}}
    <div class="modal fade" id="edit-duty-slip" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                <div class="modal-body ps-0 pe-2">
                    <div class="d-flex justify-content-start">
                        <div class="ps-5 pe-4" style="width: 900px">
                            <div class="d-flex justify-content-end" style="height: 40px;">
                                <p><a href="#" id="edit-supplier-duty-btn">Edit Supplier Duty <i
                                            class="fa-solid fa-angle-right"></i></a></p>
                            </div>
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
                                            <p><a href="#" class="text-decoration-none">View customer notes</a>
                                            </p>
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
                                                    <input type="number" class="form-control border-bottom"
                                                        id="">
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
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Over time</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Outstation allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Outstation overnight
                                                    allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Sunday allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Early start allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Night allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Extra duty allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                                <select class="form-select border-bottom" name=""
                                                    id="">
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
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                                <select class="form-select border-bottom" name=""
                                                    id="">
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
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                <button type="button" class="btn btn-light border" id="">Choose
                                    file</button>
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
                            <p class="mb-3 text-warning">
                                Changes made now will not affect the purchase duty slip. Please make changes to the purchase
                                duty slip from the Purchase duties section as well, if needed.
                            </p>
                            <div class="modal-footer d-flex justify-content-between px-0">
                                <div>
                                    <button type="button" class="btn btn-light border w-100" id="">Clear
                                        Duty Slip</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger rounded-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary rounded-1" id="">Update &
                                        View Duty Slip</button>
                                </div>
                            </div>
                        </div>
                        <div id="edit-supplier-duty-form" class="ps-4 pe-3 "
                            style="display:none; width: 900px; border-left: 1px dashed black;">
                            <div class="d-flex justify-content-end">
                                <p><a href="#" id="close-supplier-duty-btn">Close Supplier Duty <i
                                            class="fa-solid fa-angle-right"></i></a></p>
                            </div>
                            <table class="w-100 table-bordered border-secondary-subtle mb-3">
                                <thead>
                                    <tr>
                                        <th class="p-1">Supplier</th>
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
                                            <p><a href="#" class="text-decoration-none">View customer notes</a>
                                            </p>
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
                                                    <input type="number" class="form-control border-bottom"
                                                        id="">
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
                            <table class="w-100 table-bordered border-secondary-subtle mb-3">
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
                                <div class="panel-heading bg-light p-3">Supplier allowances</div>
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Daily allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Over time</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Outstation allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Outstation overnight
                                                    allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Sunday allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Early start allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Night allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Extra duty allowance</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                                <select class="form-select border-bottom" name=""
                                                    id="">
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
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                                <select class="form-select border-bottom" name=""
                                                    id="">
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
                                                <input type="number" class="form-control  border-bottom"
                                                    id="">
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
                                <button type="button" class="btn btn-light border" id="">Choose
                                    file</button>
                            </div>
                            <div class="mb-3 d-none">
                                <div class="scanned-duty-Slip-image-container"></div>
                                <button type="button" class="btn btn-light border" id="">Remove</button>
                            </div>
                            <div class="mb-3">
                                <label for="cancellation_reason" class="form-label">Remarks </label>
                                <textarea class="form-control" rows="3" name="" id=""></textarea>
                            </div>
                            <div class="modal-footer justify-content-end px-0">
                                <div>
                                    <button type="button" class="btn btn-danger rounded-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary rounded-1" id="">Update &
                                        View Duty Slip</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer justify-content-end px-5">
                    <div>
                        <button type="button" class="btn btn-light border w-100" id="">Clear Duty Slip</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary rounded-1" id="">Update & View Duty Slip</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- Edit duty slip close --}}
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
                            <option value="">label 1</option>
                            <option value="">label 2</option>
                            <option value="">label 3</option>
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
    {{-- Advance Purchase Payment --}}
    <div class="modal fade" id="advance-purchase-payment" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Advance Purchase Payment</h1>
                        <small>Booking Id: <span> #16331828-5</span></small>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
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
                <div class="modal-footer justify-content-start px-5">
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
    {{-- Request Customer Feedback --}}
    <div class="modal fade" id="request-customer-feedback" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Request Customer Feedback for <span>
                                #12359423-1</span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <p class="mb-3">
                        Use this to send feedback form link to customer/passenger.
                    </p>
                    <div class="bg-light p-3 mb-3">
                        <p class="mb-0 text-warning">
                            Please set default feedback form in business settings to be able to send the feedback form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Request Customer Feedback close --}}
    {{-- modal form --}}

@endsection


@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });
        function confirmDelete(url) {
            if (confirm('Are you sure you want to delete this duty type?')) {
                window.location.href = url; // Proceed with the delete action if confirmed
            }
        }
        function clearDutySlip() {
            let clearDutySlip = confirm("Are you sure you want to clear this duty slip? This is irreverisble operation.");
            if (clearDutySlip == true) {
                console.log('clear Duty Slip');

            } else {
                console.log('cancel');
            }
        }
    </script>
@endsection
