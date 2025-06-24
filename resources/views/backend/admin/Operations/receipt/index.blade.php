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
            <h4>Receipts</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add New
                        Receipt</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Export Receipts</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <form action="">
            <div class="row mt-3">
                <div class="col-md-7 mb-3">
                    <div class="position-relative">
                        <label for="" class="form-label position-absolute mb-1 bottom-0"><i
                                class="fa-solid fa-magnifying-glass"></i></label>
                        <input type="text" name="" value="" class="form-control  border-bottom ps-4"
                            id=""
                            placeholder="Type here to filter by customer name, customer group or receipt number">
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
        <p class="text-right mb-0"><a href="#" class="view-total">View Totals</a></p>
        <p class="text-right view-less" style="display: none">Total Amount: <b>₹ 34,088,616.36</b> | TDS Deducted: <b class="text-success">₹ 4,960.00</b> |
            Adjusments: <b class="text-danger">₹ 1,000.00</b></p>

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
                            <th>Receipt Number</th>
                            <th>Entry Date ▼ </th>
                            <th>Customer</th>
                            <th>Mode</th>
                            <th>Status</th>
                            <th>Bank Cr. Date</th>
                            <th>Amount</th>
                            <th>Unsettled Amt</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Receipt Number</th>
                            <th>Entry Date ▼ </th>
                            <th>Customer</th>
                            <th>Mode</th>
                            <th>Status</th>
                            <th>Bank Cr. Date</th>
                            <th>Amount</th>
                            <th>Unsettled Amt</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    @endsection
    @section('extrajs')
        <script>
            console.log('Receipt index page loaded');
            document.querySelector('.view-total').addEventListener('click', function(e) {
                e.preventDefault();

                this.style.display = 'none'; // hide the clicked link
                document.querySelector('.view-less').style.display = 'inline'; // show the other link
            });
        </script>
    @endsection
