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
                <h1>Drivers</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('createDrivers')}}" class="btn btn-primary">Add
                        Driver</a></div>
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
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
                            Phone
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="">
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
                        <td>Rahul Shah</td>
                        <td>+919967101191</td>
                        <td>
                            <div class="">User not created</div>
                        </td>
                        <td>
                            Not Enabled
                        </td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td class="-action-cell">
                            <div class="dropdown"><span class="dropdown-toggle icon-cog -action-cell-btn" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa-solid fa-gear"></i></span>
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

        <h4>Drivers</h4>

        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            <div class="btn-group" role="group"><a href="{{route('mydrivers.create')}}" class="btn btn-primary">Add Driver</a></div>
            <div class="dropdown">
                <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Import</a></li>
                    <li><a class="dropdown-item" href="#">Export Drivers</a></li>
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
                        <th>Phone</th>
                        {{-- <th>Indecab Go - Username</th>
                        <th>Tracking</th> --}}
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adil Patel</td>
                        <td>7738373502</td>
                        {{-- <td>User not created</td>
                        <td>Not Enabled</td> --}}
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" 
                                        data-bs-target="#activity-log"
                                        data-id="1"
                                        data-name="asdqwe"
                                        data-created="asd"
                                        data-updates="asd"
                                        {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}
                                        >View Activity Logs</a></li>
                                    {{-- <li><a class="dropdown-item" href="#">Create User</a></li> --}}
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Irshad Khan</td>
                        <td>7017616157</td>
                        {{-- <td>User not created</td>
                        <td>Not Enabled</td> --}}
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" 
                                        data-bs-target="#activity-log"
                                        data-id="1"
                                        data-name="asdqwe"
                                        data-created="asd"
                                        data-updates="asd"
                                        {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}
                                        >View Activity Logs</a></li>
                                    {{-- <li><a class="dropdown-item" href="#">Create User</a></li> --}}
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Joshua</td>
                        <td>9757414625</td>
                        {{-- <td>User not created</td>
                        <td>Not Enabled</td> --}}
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" 
                                        data-bs-target="#activity-log"
                                        data-id="1"
                                        data-name="asdqwe"
                                        data-created="asd"
                                        data-updates="asd"
                                        {{-- data-id="{{ $data->id }}"
                                        data-name="{{ $data->duty_name }}"
                                        data-created="{{ $data->created_at->format('H:i d-m-Y') }}"
                                        data-updates="{{ $data->updated_at->format('H:i d-m-Y') }}" --}}
                                        >View Activity Logs</a></li>
                                    {{-- <li><a class="dropdown-item" href="#">Create User</a></li> --}}
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
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
    $(document).ready( function () {
    $('.datatable').DataTable({
        responsive: true
    });
    $(".dropdown-toggle").dropdown();

} );
</script>
@endsection