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
                <h1>Suppliers</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('showSuppliersGroups')}}" class="btn btn-light border">Manage Supplier Groups</a></div>
                <div class="btn-group" role="group"><a href="{{route('createSuppliers')}}" class="btn btn-primary">Add Supplier</a></div>
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
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >
                            Name
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >
                            Group
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="text-end">
                            Phone Number
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Email
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Vehicle
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >
                            City
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >
                            Indecab Go - Username
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Tracking
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Status
                        </th>
                        <th colspan="1" scope="col" role="columnheader" class="" width="50">
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td>Abu Huzefa</td>
                        <td>NA</td>
                        <td>
                            <div class="text-end">98196 86828</div>
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            NA
                        </td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td class="-action-cell">
                            <div class="dropdown"><span class="dropdown-toggle icon-cog -action-cell-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
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
</div> --}}

<div class="card rounded-0 border-0 p-5">
    <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">

            <h4>Suppliers</h4>

            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('suppliers.index') }}"
                        class="btn btn-light border">Manage Supplier Groups</a></div>
                <div class="btn-group" role="group"><a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add
                        Supplier</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Merge Two Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Import Company Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Import DCO Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Export Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Export Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
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
                            <th>Group</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Vehicle</th>
                            <th>City</th>
                            <th>Indecab Go - Username</th>
                            <th>Tracking</th>
                            <th>Status</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mstSupplier as $data)
                            <tr>
        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            <div class="btn-group" role="group"><a href="{{route('showSuppliersGroups')}}"
                    class="btn btn-light border">Manage Supplier Groups</a></div>
            <div class="btn-group" role="group"><a href="{{route('suppliers.create')}}" class="btn btn-primary">Add Supplier</a></div>
            <div class="dropdown">
                <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Merge Two Suppliers</a></li>
                    <li><a class="dropdown-item" href="#">Import Company Suppliers</a></li>
                    <li><a class="dropdown-item" href="#">Import DCO Suppliers</a></li>
                    <li><a class="dropdown-item" href="#">Export Suppliers</a></li>
                    <li><a class="dropdown-item" href="#">Export Pricing</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body px-0">
        @if($errors->any())
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
                        <th>Group</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Vehicle</th>
                        <th>City</th>
                        {{-- <th>Indecab Go - Username</th>
                        <th>Tracking</th> --}}
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mstSupplier as $data)
                    <tr>

                                <td>{{ $data->name }}</td>
                                @if ($data->supplierGroups->isNotEmpty())
                                    <td>
                                        @foreach ($data->supplierGroups as $group)
                                            {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!}
                                        @endforeach
                                    </td>
                                @else
                                    <td> {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!} </td>
                                @endif
                                <td>{!! $data->phone_no ?? '<span>NA</span>' !!}</td>
                                <td>{!! $data->email ?? '<span>NA</span>' !!}</td>
                                <td>NA</td>
                                <td>{!! $data->city ?? '<span>NA</span>' !!}</td>
                                <td>NA</td>
                                <td>NA</td>
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
                                                <a class="dropdown-item" href="{{ route('suppliers.edit', $data->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Vehicle</th>
                        <th>City</th>
                        {{-- <th>Indecab Go - Username</th>
                        <th>Tracking</th> --}}
                        <th>Status</th>
                        <th>setting</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
