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

    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">Invoice <span>MC2526-000200</span></h1>
                    </div>
                    <div class="col-md-6 text-end d-flex justify-content-end align-items-center gap-2 pb-3">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a>
                        </div> --}}
                        <div class="btn-group " role="group" aria-label="Basic example" id="action-buttons">
                            <button type="button" class="btn btn-light border"> Edit</button>
                            <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                                data-bs-target="#download-pdf"><i class="fa-regular fa-circle-down"></i>
                                Download</button>
                            <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                                data-bs-target="#email-invoice"><i class="fa-solid fa-credit-card"></i> Request
                                Payment</button>
                            <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                                data-bs-target="#email-invoice"><i class="fa-solid fa-print"></i> Print</button>
                            <button type="button" class="btn btn-light border" data-bs-toggle="modal"
                                data-bs-target="#email-invoice"><i class="fa-solid fa-envelope"></i> Email</button>
                        </div>
                        <div class="dropdown">
                            <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-gear"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Approve
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Change Billing Company
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Cancel Invoice
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="" method="post" id="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center justify-content-between bg-danger p-3 bg-opacity-10 mb-3">
                                <div><span class="text-danger"><b>Outstanding: </b></span>₹ 24,722.00</div>
                                <div class="text-end">
                                    <a href="#" class="text-decoration-none">
                                        Apply Receipt
                                    </a>
                                    |
                                    <a href="#" class="text-decoration-none">
                                        Apply Credit/Debit Note
                                    </a>
                                </div>
                            </div>
                            {{-- <div class="">
                            </div> --}}
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                Billed by <span> <b> Mumbai Cab Service.</b></span>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs border-0 w-100" id="tabs-nav">
                        <li class="nav-item mb-3">
                            <a href="#invoice-tab-content"
                                class="p-3 d-block text-center text-decoration-none invoice-nav-tabs active"
                                data-bs-toggle="tab">Invoice</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="#duty-summary-tab-content"
                                class="p-3 d-block text-center text-decoration-none invoice-nav-tabs"
                                data-bs-toggle="tab">Duty Summary</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="#duties-tab-content"
                                class="p-3 d-block text-center text-decoration-none invoice-nav-tabs"
                                data-bs-toggle="tab">Duties</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="#Receipts-tab-content"
                                class="p-3 d-block text-center text-decoration-none invoice-nav-tabs"
                                data-bs-toggle="tab">Receipts</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="#credit-debit-notes-tab-content"
                                class="p-3 d-block text-center text-decoration-none invoice-nav-tabs"
                                data-bs-toggle="tab">Credit/Debit Notes</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="invoice-tab-content" class="tab-pane fade show active">
                            <p>invoice-tab-content</p>
                        </div>
                        <div id="duty-summary-tab-content" class="tab-pane fade">
                            <p>duty-summary-tab-content</p>
                        </div>
                        <div id="duties-tab-content" class="tab-pane fade">
                            <p>duties-tab-content</p>
                        </div>
                        <div id="Receipts-tab-content" class="tab-pane fade">
                            <p class="text-end">
                                Paid Amount: <span class="text-success">₹ 2,500.00</span> | Outstanding Amount: <span
                                    class="text-danger">₹ 0.00</span>
                            </p>
                            <div class="bg-light mb-3 p-3 text-center">
                                No receipts found for this invoice.
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover datatable" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Receipt Number</th>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Status</th>
                                            <th class="text-end">Amount</th>
                                            <th class="text-end">Invoice Ref Amt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>R-MC2526-000130</td>
                                            <td>08-05-2025</td>
                                            <td>Cash</td>
                                            <td><span class="text-success">Confirmed</span></td>
                                            <td class="text-end"
                                                title="
TDS: ₹ 0.00
Adjustment: ₹ 0.00
Bank Charges: ₹ 0.00
                                                ">
                                                ₹ 2,500.00</td>
                                            <td class="text-end"
                                                title="
Includes:
TDS: ₹ 0.00
Adjustment: ₹ 0.00
Bank Charges: ₹ 0.00
                        ">
                                                ₹ 2,500.00</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Receipt Number</th>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Status</th>
                                            <th class="text-end">Amount</th>
                                            <th class="text-end">Invoice Ref Amt</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div id="credit-debit-notes-tab-content" class="tab-pane fade">
                            <div class="bg-light mb-3 p-3 text-center">
                                No notes found for this invoice.
                            </div>
                        </div>
                    </div>






                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea class="form-control" rows="5" name="notes" id="notes"></textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inv_term_cond" class="form-label">Invoice Terms & Conditions</label>
                                <textarea id="summernote" name="inv_term_cond"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field
                        would
                        be available in Duties & Invoice exports.
                        <div class="mb-3">
                            <label for="cust_code" class="form-label ">Customer Code</label>
                            <input type="text" class="form-control  border-bottom" name="cust_code" id="cust_code">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact support@indecab.com to
                        learn how to enable this.
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" name="is_inv_og_hide"
                            id="is_inv_og_hide">
                        <label class="form-check-label" for="is_inv_og_hide">
                            Always hide 'Original for recipient' on invoice
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active"
                            checked>
                        <label class="form-check-label" for="is_active">
                            Active
                        </label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script></script>
@endsection
