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
                <div class="btn-group" role="group"><a href="{{route('customers.index')}}" class="btn btn-light border">Manage Customer Groups</a></div>
                <div class="btn-group" role="group"><a href="{{route('customers.manage')}}" class="btn btn-primary">Add Customer</a></div>
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
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" width="250">
                            Group Name
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="text-end" width="200">
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
</div>
@endsection --}}

<div class="card rounded-0">
    <div class="card-header d-flex justify-content-between ">
        <h4 >Taxes</h4>
        <div class="col-md-6 text-end">
            <div class="btn-group" role="group"><a href="{{route('showCustomersGroups')}}" class="btn btn-light border">Manage Customer Groups</a></div>
            <div class="btn-group" role="group"><a href="{{route('createCustomers')}}" class="btn btn-primary">Add Customer</a></div>
        </div>
        {{-- <div class="btn-group" role="group"><a href="{{route('taxes.manage')}}" class="btn btn-primary">Add Tax Type</a></div> --}}
    </div>
    <div class="card-body">
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
                        <th>Group Name</th>
                        <th>Phone Number</th>
                        <th>Group Name</th>
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A Das</td>
                        <td>NA</td>
                        <td>9840729952</td>
                        <td>NA</td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                        <td>NA</td>
                        <td>9840729952</td>
                        <td>NA</td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                        <td>NA</td>
                        <td>9840729952</td>
                        <td>NA</td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                        <td>NA</td>
                        <td>9840729952</td>
                        <td>NA</td>
                        <td>
                            <div class="text-success">Active</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

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