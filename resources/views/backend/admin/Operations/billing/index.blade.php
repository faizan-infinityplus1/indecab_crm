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
            <h4>Billing</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('booking.create') }}" class="btn btn-primary">Add
                        Invoice</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Export Invoices</a></li>
                        <li><a class="dropdown-item" href="#">Export Invoice Duties</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <form action="">
            <div class="row my-3">
                <div class="col-md-7 mb-3">
                    <div class="position-relative">
                        <label for="" class="form-label position-absolute mb-1 bottom-0"><i
                                class="fa-solid fa-magnifying-glass"></i></label>
                        <input type="text" name="" value="" class="form-control  border-bottom ps-4"
                            id="" placeholder="Type here to filter by company name, city or request status...">
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
        <div class="d-flex">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger border"> X(Selected)</button>
                <button type="button" class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#download-pdf"><i
                        class="fa-regular fa-circle-down"></i>
                    Download</button>
                <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                    data-bs-target="#email-invoice"><i class="fa-solid fa-envelope"></i> Email</button>
                <button type="button" class="btn btn-light border"><i class="fa-solid fa-check"></i> Approve</button>
                <button type="button" class="btn btn-light border">Disapprove</button>
                <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                    data-bs-target="#mark-as-dispatched">Mark as Dispatched</button>
                <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                    data-bs-target="#cancel-invoice"><i class="fa-solid fa-xmark"></i> Cancel</button>
            </div>
        </div>
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


            {{--
            status:-
            Generated
            Cancelled
            Downloaded
            Payment Received
            --}}


            <div class="table-responsive">
                <table class="table table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th width="70">
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" title="Select All"
                                        onclick="toggleAll(this)">
                                </div>
                            </th>
                            <th>Number</th>
                            <th>Date</th>
                            <th>Booking Id</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Total Amount</th>
                            <th>Amount Paid</th>
                            <th>Outstanding</th>
                            <th width="100">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Generated --}}
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            <td>
                                <span class="py-1">
                                    Generated
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{route('')}}" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Unapprove</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#download-pdf">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#email-invoice">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#cancel-invoice">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item" data-bs-toggle="modal"
                                        data-bs-target="#export-invoice-duties">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {{-- Generated Close --}}
                        {{-- Cancelled --}}
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 text-danger" title="Cancelled at 02-05-2025 00:47">
                                    Cancelled
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Remove Cancellation</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {{-- Cancelled Close --}}
                        {{-- Downloaded --}}
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {{-- Downloaded Close --}}
                        {{-- Payment Received --}}
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {{-- Payment Received Close --}}
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check d-flex align-items-center ps-0">
                                    <input type="checkbox" name="" id="" class="item">
                                </div>
                            </td>
                            <td>MC2526-000184</td>
                            <td>02-05-2025</td>
                            <td>#18446122 + 10</td>
                            <td>CIEL HR SERVICES LIMITED</td>
                            {{-- Downloaded --}}
                            <td>
                                <span class="py-1 px-3 rounded-5 bg-secondary-subtle"
                                    title="Downloaded at 02-05-2025 00:47">
                                    Downloaded
                                </span>
                            </td>
                            <td>₹ 82,486.00</td>
                            <td>₹ 0.00</td>
                            <td>₹ 82,486.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    {{-- Booked --}}
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Edit Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Approve</a></li>
                                        <li><a href="#" class="dropdown-item">Download PDF</a></li>
                                        <li><a href="#" class="dropdown-item">Email Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">View Customer</a></li>
                                        <li><a href="#" class="dropdown-item">Mark as dispatched</a></li>
                                        <li><a href="#" class="dropdown-item">Cancel Invoice</a></li>
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                            </th>
                            <th>Number</th>
                            <th>Date</th>
                            <th>Booking Id</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Total Amount</th>
                            <th>Amount Paid</th>
                            <th>Outstanding</th>
                            <th>Setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    {{-- Download PDF --}}
    <div class="modal fade" id="download-pdf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Download Invoice</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <form action="">
                    <div class="modal-body px-5">
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Without letter head (Add gap for letter head)</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Add full invoice</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Add duty summary</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Add duty slip</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Show cover invoice</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Add digital signature</label>
                        </div>
                    </div>
                    <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                        <div>
                            <button type="button" class="btn btn-primary border" id=""><i
                                    class="fa-regular fa-circle-down"></i> Download</button>
                            <button type="button" class="btn btn-danger rounded-1"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Download PDF close --}}

    {{-- Email Invoice --}}
    <div class="modal fade" id="email-invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Email Invoice</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <form action="">
                    <div class="modal-body px-5">
                        <table class="w-100 table-bordered mb-3">
                            <thead>
                                <tr>
                                    <th class="p-1">Name</th>
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
                                </tr>
                                {{-- component end here --}}
                            </tbody>
                        </table>
                        <p>
                            <span class="bg-danger text-white p-1 rounded-1">New</span> <i> Separate multiple email, phone
                                & whatsapp numbers by comma [ , ] or semi-colon [ ; ] in custom row to send the details to
                                all of them in one click.</i>
                        </p>

                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Add duty summary</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for="">Add duty slip</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Send a single email to selected email IDs</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Add digital signature</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Add booking attachments to the email</label>
                        </div>
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Add invoice attachments to the email</label>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" name="">
                            <label for=""> Send to passenger</label>
                        </div>
                    </div>
                    <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                        <div>
                            <button type="button" class="btn btn-primary border" id=""> Send Email</button>
                            <button type="button" class="btn btn-danger rounded-1"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Email Invoice close --}}

    {{-- Cancel Invoice --}}
    <div class="modal fade" id="cancel-invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Invoice</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <form action="">
                    <div class="modal-body px-5">
                        <p class="text-danger"><b>Are you sure you want to cancel this invoice?</b></p>
                        <p class="text-secondary">Note: All duties/bookings would be removed from the invoice.</p>
                        <div class="mb-3">
                            <label for="" class="control-label">Cancellation reason</label>
                            <textarea class="form-control" name="" id="" rows="4"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Type Cancel to confirm before you proceed with
                                cancelling multiple invoices</label>
                            <input type="text" class="form-control" name="" id=""
                                placeholder="Type 'Cancel' here">
                        </div>
                    </div>
                    <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                        <div>
                            <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Cancel
                                Invoice</button>
                            <button type="button" class="btn btn-primary border" id="">Keep Invoice</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Cancel Invoice close --}}

    {{-- Mark As Dispatched --}}
    <div class="modal fade" id="mark-as-dispatched" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dispatch Information for Invoice <span></span>
                        </h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <form action="">
                    <div class="modal-body px-5">
                        <div class="mb-3">
                            <label for="" class="control-label">Courier Tracking Company</label>
                            <input type="text" class="form-control" name="" id=""
                                placeholder="Enter courier tracking company">
                        </div>
                        <div class="mb-3">
                            <label for="" class="control-label">Courier Tracking Number</label>
                            <input type="text" class="form-control" name="" id=""
                                placeholder="Enter courier tracking number">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Comments</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer sticky-bottom justify-content-start px-5 bg-white">
                        <div>
                            <button type="button" class="btn btn-primary border" id="">Update</button>
                            <button type="button" class="btn btn-danger rounded-1"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Mark As Dispatched close --}}

    {{-- Export Invoice Duties --}}
    <div class="modal fade" id="export-invoice-duties" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Export Duties - Invoice <span>MC2526-000199</span>
                        </h1>
                    </div>
                </div>
                <form action="">
                    <div class="modal-body px-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Feedback Form</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Export Duties</option>
                                        <option value="1">Export Duties 1</option>
                                        <option value="1">Export Duties 1</option>
                                        <option value="1">Export Duties 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Select Billing Items</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="billing_item[]" id="billing-items" multiple="multiple">
                                        <option value="qwe">qwe</option>
                                        <option value="qwe">qwe</option>
                                        <option value="qwe">qwe</option>
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
                        <div class="d-flex">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary border">
                                    <i class="fa-solid fa-download"></i> Get Statement
                                </button>
                                <button type="button" class="btn btn-success border">
                                    <i class="fa-solid fa-file-import"></i> View
                                </button>
                                <button type="button" class="btn btn-light border "><i
                                    class="fa-solid fa-upload"></i> Export</button>
                            <button type="button" class="btn btn-danger"
                                data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Export Invoice Duties Close --}}


@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();
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

        });

        function toggleAll(source) {
            const checkboxes = document.querySelectorAll('.item');
            checkboxes.forEach(checkbox => checkbox.checked = source.checked);
        }
    </script>
@endsection
