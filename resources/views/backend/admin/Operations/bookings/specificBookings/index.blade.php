@extends('layouts.admin-master')
@section('content')
    <div class="container-fluid p-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="position-static">
                    <div class="position-absolute" style="top: 96px; left: 0px;">
                        <button type="button" class="btn" onclick="window.history.back()"><i
                                class="fa-solid fa-angle-left"></i></button>
                    </div>
                    <h1 class="h3 pb-3">Booking <span>#78866454</span></h1>
                </div>
                <div class="d-flex gap-2 pb-3">
                    <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Edit</a></div>
                    <div class="dropdown">
                        <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#send-confirmation">Send
                                    confirmation</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#print-confirmation">Print
                                    confirmation</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#allot-all-duties">Allot all
                                    duties</a></li>
                            <li><a class="dropdown-item" onclick="markAsUnconfirm()">Mark as
                                    unconfirmed</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#export-duties">Export
                                    Duties</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#attach-file">Attach
                                    File</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#add-advance-payment-receipt">Add
                                    Advance Payment Receipt</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#create-briefing-sheet">Create
                                    briefing sheet</a></li>
                            <li><a class="dropdown-item" href="#">Generate Invoice</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#delete-booking">Delete</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- page heading end --}}
        {{-- page content start --}}
        <div class="d-flex gap-2">
            <span class="py-1 px-3 rounded-5 bg-success text-white">
                Cash Duty
            </span>
            <span class="py-1 px-3 rounded-5 bg-success text-white">
                Cash Duty
            </span>
            <span class="py-1 px-3 rounded-5 bg-success text-white">
                Cash Duty
            </span>
        </div>

        {{-- booking table start --}}
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
                        <th>Rep. Address</th>
                        <th>Drop Address</th>
                        <th>Remarks</th>
                        <th>Operator Notes</th>
                        <th>City</th>
                        <th>Rep.Time</th>
                        <th>Labels</th>
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <i class="fa-solid fa-phone text-success"></i>
                        </td>
                        <td>
                            <span data-title="ends on 31-03">31-03</span>
                        </td>
                        <td>
                            <span data-title="Vijay Vaidyanathan Booked by Vijay Vaidyanathan (98408 72950)">Vijay
                                Vaidyanathan</span>
                        </td>
                        <td>
                            <span data-title="Phone: 98408 72950">Vijay
                                Vaidyanathan</span>
                        </td>
                        <td>
                            <small>Sedan</small>
                        </td>
                        <td>
                            <span data-title="Vehicle Model: Swift Dzire">
                                MH02FG2161
                            </span>
                        </td>
                        <td>
                            <span
                                data-title="Supplier Driver Name: Dharam | Phone: 8552006559<br/>Supplier Phone: 9821651431">
                                UTTAM SAW
                            </span>
                        </td>
                        <td>
                            <span data-title="Within Mumbai">
                                8H 80KMs
                            </span>
                        </td>
                        <td>
                            <span data-title="121 buena vista.  Gen bhonsle marg.  Building 12 th floor, Churchgate"
                                class="table-address-column">
                                121 buena vista. Gen bhonsle marg. Building 12 th floor, Churchgate
                            </span>
                        </td>
                        <td>
                            <span class="text-secondary table-address-column">
                                NA
                            </span>
                        </td>
                        <td>
                            <span class="text-secondary">
                                NA
                            </span>
                        </td>
                        <td></td>
                        <td>
                            <span data-title="City">
                                Mumbai
                            </span>
                        </td>
                        <td>
                            <span data-title="Garage start time: 08:45">
                                09:45
                            </span>
                        </td>
                        <td>
                            <span data-title="Multi-Duty booking">
                                MD
                            </span>
                            <span class="py-1 px-3 rounded-5 bg-success text-white m-1">
                                Cash Duty
                            </span>
                            <span class="py-1 px-3 rounded-5 bg-success text-white m-1">
                                Cash Duty
                            </span>
                        </td>
                        <td>
                            <span class="text-warning">Allotted</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn border border-0 dropdown-toggle py-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Send
                                            confirmation</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Print
                                            confirmation</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Allot all
                                            duties</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Mark as
                                            unconfirmed</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Export
                                            Duties</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Attach
                                            File</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Add
                                            Advance Payment Receipt</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Create
                                            briefing sheet</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Generate
                                            Invoice</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#">Delete</a>
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
                        <th>Rep. Address</th>
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
                <div class="d-flex justify-content-end">
                    <button></button>
                </div>
            </table>
        </div>
        {{-- booking table end --}}
        <div class="d-flex justify-content-end gap-2 mt-3">
            <button class="btn btn-light border">Add another
                Booking</button>
            <button class="btn btn-light border">Extend
                Booking</button>
        </div>
        {{-- page content end --}}
    </div>

    {{-- modal section strat --}}
    {{-- Send confirmation --}}
    <div class="modal fade" id="send-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send Booking Confirmation</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <p class="text-danger"><i>Confirmation was last sent to customer on 06/04/2025 19:22 by you</i></p>
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
                                        Weinberg
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Customer</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="">
                                            9910044211
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="">
                                            ahanda@hjweinberg.org
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1">
                                    <p class="mb-1">
                                        Atul Handa
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Booked
                                            by</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="">
                                            9910044211
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="" disabled>
                                            <span class="text-secondary">No email</span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-1">
                                    <p class="mb-1">
                                        Ananya Handa
                                        <small
                                            class="bg-secondary bg-gradient text-white bg-opacity-50 p-1 rounded-1">Passenger</small>
                                    </p>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="">
                                            +1 5136550329 (WhatsApp) +91 98211 30433 (Calling)
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="" disabled>
                                            <span class="text-secondary">No email</span>
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
                            <small class="mb-0">
                                Booking #47324958 confirmed for 15/04 to 16/04 for
                                <br>
                                Passenger: Ananya Handa(+1 5136550329 (WhatsApp) +91 98211 30433 (Ca
                                <br>
                                Vehicle group: Innova Crysta
                                <br>
                                Reporting time: 08:00
                                <br>
                                Reporting address: Mumbai Airport
                                <br>
                                Flight/Train Number: NA
                                <br>
                                Vehicle and driver details will be sent to you before the pickup time.
                                <br>
                                Regards Mumbai Cab Service
                                <br>
                                Contact 9619900011
                                <br>
                                - Sent via Indecab
                            </small>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 d-flex justify-content-between">
                        <button type="button" class="btn btn-light border mx-auto" id="">Copy SMS
                            Text</button>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="">
                            Add customer name & address to email
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="">
                            Remarks not added in booking.
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="">
                            Add booking base and extras pricing.
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="">
                            Send a single email to selected email IDs.
                        </label>
                    </div>

                </div>
                <div class="modal-footer justify-content-between px-5">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary rounded-1">Send</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-light rounded-1 border">Copy Email</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Send confirmation close --}}
    {{-- Print confirmation --}}
    <div class="modal fade" id="print-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Print Booking Confirmation #47324958</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="form-check mb-2 d-flex align-items-end gap-2">
                        <input class="form-check-input big-checkbox" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Include child bookings
                        </label>
                    </div>
                    <div class="form-check mb-2 d-flex align-items-end gap-2">
                        <input class="form-check-input big-checkbox" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="">
                            Remarks not added to booking
                        </label>
                    </div>
                    <div class="form-check mb-2 d-flex align-items-end gap-2">
                        <input class="form-check-input big-checkbox" type="checkbox" id="">
                        <label class="form-check-label" for="">
                            Add booking base and extras pricing
                        </label>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Print</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Print confirmation close --}}

    {{-- Allot All Duties  --}}
    <div class="modal fade" id="allot-all-duties" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                <td>#78866454</td>
                                <th class="fw-medium">Duties</th>
                                <td>1</td>
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
                                <td colspan="3">300KM per day</td>
                            </tr>
                            <tr>
                                <th class="fw-medium">Vehicle Group</th>
                                <td colspan="3">Sedan</td>
                            </tr>
                        </tbody>
                    </table>

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
                                            <th>Vehicle No.</th>
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
                            <select class="form-select border-bottom" name="suppliers[]" id="suppliers">
                                <option value="asdasdasdsd">Suppliers 1 </option>
                                <option value="asdasdasdsd">Suppliers 2 </option>
                                <option value="asdasdasdsd">Suppliers 3 </option>
                            </select>
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
                                            <td> <span>Document status</span> </td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>Phone Number</td>
                                            <td>Vehicle Number</td>
                                            <td>Group</td>
                                            <td>City</td>
                                            <td> <span class="text-success">Valid documents.</span> </td>
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
    {{-- Allot All Duties  close --}}
    {{-- Export Duties --}}
    <div class="modal fade" id="export-duties" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Export Duties - Booking <span>
                                #18326801</span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Feedback Form</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Export Duties</option>
                                    <option value="1">Export Duties 1</option>
                                    <option value="2">Export Duties 2</option>
                                    <option value="3">Export Duties 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Select Billing Items</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="billing_item[]" id="billing-items" multiple="multiple">
                                    <option value="qwe">qwe</option>
                                    <option value="asd">asd</option>
                                    <option value="zxc">zxc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="d-flex justify-content-start align-items-center mb-3 gap-2">
                                <h3 class="modal-title fs-6" id="exampleModalLabel">Columns</h3>
                                <button type="button" class="btn btn-light border">Re-order</button>
                            </div>
                            <div>
                                <p>
                                    <span class="bg-danger text-white p-1 rounded-1">New</span> Click on "Re-order" button
                                    and drag/drop the column names to re-arrange them as you like.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="bg-light mb-3 p-3">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="Select Export Profile">[Select Export Profile]</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <button type="button" class="btn btn-light border w-100">Save as new</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Id">
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Associate Duty Id">
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer Code">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer Billing Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer GST Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer Group">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Booked by Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Booked by Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Booked by Email">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Booked by Fields</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Passengers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Passenger Phone Numbers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Passenger Emails">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Passenger Fields</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Additional Contacts Names">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Additional Contacts Phone Numbers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Additional Contacts Emails">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Status">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Status Info">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Cancellation Reason">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="From city">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="To city">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle Group">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Garage Start Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Start Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="End Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Reporting Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Short Reporting Address">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Reporting Address">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Drop Address">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Dispatch Center">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle Code">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle Fuel type">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Vehicle CO2 per kg">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver Phone Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver Code">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supporters">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supporters Phone Numbers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Type">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Type Type">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Price">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Amount to collect">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Amount collected">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Quantity - Number of Days">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total Price">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Car Hire Charges">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Car Hire Charges (incl. Allowances)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Subtotal">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Subtotal + Taxes (As per Invoice)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Subtotal (incl. Allowances)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Number Of Passengers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Cost Per Passenger">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Subtotal (incl. Allowances) + Taxes (As per Invoice)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Remarks">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Flight/Train Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Operator Notes">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Labels">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Petty Cash Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Advance Purchase Payment Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Advance Purchase Payment Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Purchase Invoice Payment Numbers">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver App Used (DDS)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver Slip Approved">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty slip approved by">
                                </label>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Garage Start Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Reporting KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Releasing KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Garage End Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty slip accepted by">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Booked KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Speed-o-meter Start Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Speed-o-meter End Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total Speed-o-meter Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Dead KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Verified Via">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Actual Start Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Actual Garage Start Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Actual Reporting Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Releasing Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Garage End Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total Hours">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Extra KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Extra KM Charge">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer Extra KM cost/KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Extra Hours">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Extra Hours Cost">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Customer Extra Time cost/HR">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Fuel Surcharge">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver OT Hours">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Driver Daily Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Driver OT Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Outstation allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Outstation overnight allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Sunday allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Early start allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Night allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Extra Duty allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver Daily Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Driver OT Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Outstation allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Outstation overnight allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Sunday allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Early start allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Night allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Extra Duty allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Slip Closing Remarks">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Slip Rejection Reason">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Billing Items</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Non-Taxable Billing Items Total">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Chargeable Taxable Billing Items Total">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total Billing Items Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Scanned Duty Slip">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Customer Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Print Customer Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Customer GST Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Total Fuel Surcharge">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Custom Row Total (Taxable)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Custom Row Total (Non-Taxable)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Discount Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Discount Percent">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Card Surcharge">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Card Surcharge %">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Payment Status">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Payment Mode">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Invoice Tax Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Group">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Code">
                                </label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Phone Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Vehicle Group">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Duty Type">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Remarks">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Base Price">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier estimated amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier estimated amount (with tax)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Car Hire Charges (incl. allowances)">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Earnings From Supplier">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Agent Commission amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Car hire charges after commission">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra KM cost/KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra KM cost">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra Time cost/HR">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra Time cost">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Reporting Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Releasing Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Total Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Reporting KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Releasing KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Speed-o-meter Start Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Speed-o-meter End Km">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Total KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Extra KM">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Duty Slip Rejection Reason">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Driver Daily Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Driver OT Allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Outstation allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Outstation overnight allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Sunday allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Early start allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Night allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Chargeable Extra Duty allowance">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Billing Items">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Supplier Individual Billing
                                        Items</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Submission status">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Submission date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoiced">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Billing Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Purchase Invoice Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice Number">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Tax Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Total Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Invoice - Created By">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Allotment By">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Allotment Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Reallotment Reason">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Dispatched Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Cancelled By">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Cancelled On">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Slip - Approved by Passenger At">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty Slip Entry Date">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Feedback - Star Rating">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Feedback - Comment">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Feedback Form - Entries">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty created at">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Duty created by">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Invoice Taxes</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Supplier Invoice Taxes</span>
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Rejections - Name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Rejections - Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Supplier Rejections - Reason">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Estimated Drop-off Time">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="No Show">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Business name">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <input type="text" name="" class="form-control" id=""
                                        value="Non-Chargeable Invoice Tax Amount">
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <label class="form-check-label d-flex justify-content-start align-items-center"
                                    for="">
                                    <input class="form-check-input big-checkbox" type="checkbox" id="">
                                    <span class="py-2 px-3 w-100 border-bottom fs-6">Non-Chargeable Taxes</span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between align-items-end px-5">

                    <div class="col-md-5 mb-3">
                        <div class="input-group">
                            <div class="d-flex justify-content-center align-items-center me-2">
                                <i class="bi bi-search fs-5"></i>
                            </div>
                            <input type="text" class="form-control border-bottom" name="name" id="name"
                                placeholder="Type here to filter by name, number, city, duty type, company name or booking ID">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-download"></i>
                            Get Statement</button>
                        <button type="button" class="btn btn-success rounded-1"><i
                                class="fa-solid fa-file-import"></i> View</button>
                        <button type="button" class="btn btn-light border rounded-1"><i
                                class="fa-solid fa-upload"></i> Export</button>
                        <button type="button" class="btn btn-danger rounded-1"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Export Duties close --}}

    {{-- Attach File --}}
    <div class="modal fade" id="attach-file" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Attach File</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="mb-3">
                        <label for="qwer" class="form-label">Select File</label>
                        <input type="file" name="" id="qwer" affieldinput="[object Object]"
                            class="form-control"
                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

                    </div>
                    <p>
                        Select a PDF, Excel, Word Document (doc/docx), MSG or EML file to upload
                    </p>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Attach File</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Attach File close --}}

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
                                <input type="text" class="form-control  border-bottom" name=""
                                    id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Bank Name </label>
                                <input type="text" class="form-control  border-bottom" name=""
                                    id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Cheque Date </label>
                                <input type="date" class="form-control  border-bottom" name=""
                                    id="">
                            </div>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3 shadow-sm">
                        <div class="panel-heading bg-light p-3">NEFT Info</div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Transaction Number </label>
                                <input type="text" class="form-control  border-bottom" name=""
                                    id="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Bank Name </label>
                                <input type="text" class="form-control  border-bottom" name=""
                                    id="">
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
                        <button type="button" class="btn btn-danger rounded-1"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Advance Payment Receipt close --}}
    {{-- Create briefing sheet --}}
    <div class="modal fade" id="create-briefing-sheet" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Print Briefing Sheet <span> #78866454
                            </span></h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control  border-bottom" id="" name=""
                            value="Briefing Sheet">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Subtitle</label>
                        <input type="text" class="form-control  border-bottom" id="" name=""
                            value="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Flight/Train Number</label>
                        <input type="text" class="form-control  border-bottom" id="" name=""
                            value="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Representative</label>
                        <input type="text" class="form-control  border-bottom" id="" name=""
                            value="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="control-label">Notes </label>
                        <textarea class="form-control" name="" id="" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Print</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Create briefing sheet close --}}
    {{-- Delete Booking --}}
    <div class="modal fade" id="delete-booking" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Booking <span> #78866454</span></h1>
                    </div>
                </div>
                <div class="modal-body px-5">
                    <p class="mb-3 text-danger">
                        Are you sure you want to delete this booking?
                    </p>
                    <p class="mb-3">
                        All duties, duty slips and invoice associated with this booking willl be deleted as well. This is
                        irreversible operation.
                    </p>
                    <div>
                        <label class="form-check-label">
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            Send cancellation SMS to customer ( 9830044173), booked by, additional contacts and passenger
                            (if added)
                        </label><br>
                        <label class="form-check-label">
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            Send cancellation email to customer ( prasunneogy@gmail.com) booked by, additional contacts and
                            passenger (if added)
                        </label><br>
                        <label class="form-check-label">
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            Send cancellation email & SMS to suppliers (for duties alotted to supplier)
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                            Send a single email to all emails of customer, booked by, additional contacts and passengers.
                        </label>
                    </div>
                </div>
                <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Delete
                            Booking</button>
                        <button type="button" class="btn btn-light border" id="">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Delete Booking close --}}

    {{-- modal section end --}}
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $("#billing-items").select2({
                placeholder: "Select an Option",
                allowClear: true
            });
            // code for details option from setting
            $('.duties-nav-tabs').on('click', function() {
                // Remove 'active' class from all <li> elements
                $('#tabs-nav li').removeClass('active');

                // Add 'active' class to the parent <li> of the clicked tab
                $(this).closest('li').addClass('active');
            });


        });

        function markAsUnconfirm() {
            let markAsUnconfirm = confirm("Are you sure you want to unconfirm this booking");
            if (markAsUnconfirm == true) {
                console.log('Mark As Unconfirm');

            } else {
                console.log('cancel');
            }
        }
    </script>
@endsection
