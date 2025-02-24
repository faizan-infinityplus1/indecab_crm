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


    {{-- <div class="container-fluid">
    <div class="page-header page-header-sticky bg-white">
        <div class="row">
            <div class="col-md-6">
                <h1>Customers</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('customers.index')}}"
                        class="btn btn-light border">Manage Customer Groups</a></div>
                <div class="btn-group" role="group"><a href="{{route('customers.create')}}" class="btn btn-primary">Add
                        Customer</a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="form-group ic-list-simple-filter">
            <div class="input-group">
                <div class="search-block"><i class="icon icon-search"></i></div>
                <input type="search" class="form-control" placeholder="Search by duty type" value="">
            </div>
        </div>
        <div class="row pagination-row">
            <div class="col">
                <p class="text-end">
                    Total <b>30</b> records
                    <span class="btn-group" role="group" aria-label="..." style="margin-left: 10px;">
                        <button class="btn btn-default btn-sm" type="button" title="Go to previous page">&lt;</button>
                        <button class="btn btn-default btn-sm" type="button" title="Go to next page">&gt;</button>
                    </span>
                </p>
            </div>
        </div>
        <div>
            <table class="col-12">
                <thead>
                    <tr role="row">
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Name
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" width="250">
                            Group Name
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="text-end"
                            width="200">
                            Phone Number
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" width="200">
                            GSTIN Number
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" width="150">
                            Status
                        </th>
                        <th colspan="1" scope="col" role="columnheader" class="" width="50">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td>Holiday wala</td>
                        <td>NA</td>
                        <td>
                            <div class="text-end">70000 61492</div>
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td class="-action-cell">
                            <div class="dropdown"><span class="dropdown-toggle icon-cog -action-cell-btn" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a>View Activity Logs</a></li>
                                    <li><a><span class="text-danger">Delete</span></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection --}}

    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <div class=>
                <h4>Customers</h4>
            </div>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('showCustomersGroups') }}"
                        class="btn btn-light border">Manage Customer Groups</a></div>
                <div class="btn-group" role="group"><a href="{{ route('customers.create') }}" class="btn btn-primary">Add
                        Customer</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#merge-two-customer">Merge Two Customers</a></li>
                        <li><a class="dropdown-item" href="#">Import</a></li>
                        <li><a class="dropdown-item" href="#">Export Customers</a></li>
                        <li><a class="dropdown-item" href="#">Export Pricing</a></li>
                    </ul>
                </div>
            </div>
            {{-- <h4 >Taxes</h4>
        <div class="col-md-6 text-end">
            <div class="btn-group" role="group"><a href="{{route('showCustomersGroups')}}"
                    class="btn btn-light border">Manage Customer Groups</a></div>
            <div class="btn-group" role="group"><a href="{{route('customers.create')}}" class="btn btn-primary">Add
                    Customer</a></div>
        </div> --}}
            {{-- <div class="btn-group" role="group"><a href="{{route('taxes.manage')}}" class="btn btn-primary">Add Tax Type</a></div> --}}
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
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Group Name</th>
                            <th>Phone Number</th>
                            <th>Gst Number</th>
                            <th>Status</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mstCustomer as $data)
                            <tr>

                                <td>{{ $data->name }}</td>
                                @if ($data->customerGroups->isNotEmpty())
                                    <td>
                                        @foreach ($data->customerGroups as $group)
                                            {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!}
                                        @endforeach
                                    </td>
                                @else
                                    <td> {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!} </td>
                                @endif


                                <td>{!! $data->phone_no ?? '<span>NA</span>' !!}</td>
                                <td>{!! $data->gst_no ?? '<span>NA</span>' !!}</td>

                                <td>
                                    <div class="{{ $data->is_active == true ? 'text-success' : 'text-danger' }}">
                                        {{ $data->is_active == false ? 'In Active' : 'Active' }}</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('customers.edit', $data->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('customers.people.index', $data->id) }}">Manage
                                                    people</a></li>
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
                            <th>Name</th>
                            <th>Group Name</th>
                            <th>Phone Number</th>
                            <th>Group Name</th>
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    {{-- modal section --}}
    {{-- Merge Two Customer --}}
    <div class="modal fade" id="merge-two-customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Merge Two Customer</h1>
                        <p class="text-black-50 mb-0">Use this to consolidate two customers into single customer. This is
                            useful when you have accidentally created two customers of same name.</p>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Source Customers</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Destination Customer</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <p class="text-danger">Note: Pricing would not be copied from source customer to destination
                            customer.</p>
                    </form>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Merge Two Customers</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Merge Two Customer --}}

    {{-- Create Corporate Account --}}
    <div class="modal fade" id="create-corporate-account" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Corporate Account</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label ">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" name="" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Duty Types - Limit ability to add bookings to these
                                Duty Types</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Vehicle Group - Limit ability to add bookings to
                                these Vehicle Groups</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" name=""
                                id="">
                            <label class="form-check-label" for="">
                                Copy Pricing?
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Send Invitation</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Create Corporate Account --}}
    {{-- modal section --}}
@endsection


@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true,
                "order": [
                    ['id', "desc"]
                ]

            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
