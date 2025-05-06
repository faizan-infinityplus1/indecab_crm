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
                                        <li><a href="#" class="dropdown-item">View Invoice</a></li>
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
                                        <li><a href="#" class="dropdown-item">Export invoice duties</a></li>
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



    Duty Id
    Associate Duty Id
    Customer
    Customer Code
    Customer Billing Name
    Customer GST Number
    Customer Group
    Booked by Name
    Booked by Number
    Booked by Email
    Booked by Fields
    Passengers
    Passenger Phone Numbers
    Passenger Emails
    Passenger Fields
    Additional Contacts Names
    Additional Contacts Phone Numbers
    Additional Contacts Emails
    Status
    Status Info
    Cancellation Reason
    From city
    To city
    Vehicle Group
    Garage Start Time
    Start Date
    End Date
    Reporting Time
    Short Reporting Address
    Reporting Address
    Drop Address
    Dispatch Center
    Vehicle Number
    Vehicle Name
    Vehicle Code
    Vehicle Fuel type
    Vehicle CO2 per kg
    Driver
    Driver Phone Number
    Driver Code
    Supporters
    Supporters Phone Numbers
    Duty Type
    Duty Type Type
    Price
    Amount to collect
    Amount collected
    Quantity - Number of Days
    Total Price
    Car Hire Charges
    Car Hire Charges (incl. Allowances)
    Duty Subtotal
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });

        function toggleAll(source) {
            const checkboxes = document.querySelectorAll('.item');
            checkboxes.forEach(checkbox => checkbox.checked = source.checked);
        }
    </script>
@endsection
