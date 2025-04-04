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
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Send
                                    confirmation</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Print
                                    confirmation</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Allot all
                                    duties</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Mark as
                                    unconfirmed</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Export
                                    Duties</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Attach
                                    File</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Add
                                    Advance Payment Receipt</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Create
                                    briefing sheet</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Generate
                                    Invoice</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#">Delete</a>
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
        {{-- page content end --}}
    </div>
@endsection
@section('extrajs')
    <script></script>
@endsection
