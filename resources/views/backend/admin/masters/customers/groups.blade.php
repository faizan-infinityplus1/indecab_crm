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
                <h1>Customer Groups</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('createCustomersGroups')}}" class="btn btn-primary">Add Customer Group</a></div>
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
                    Total <b>1</b> record
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
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td>test</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection --}}

<div class="card rounded-0 border-0 p-3">
    <div class="card-header d-flex justify-content-between py-2 bg-transparent page-heading-container flex-wrap">

        <h4>Customer Groups</h4>

        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            {{-- <div class="btn-group" role="group"><a href="{{route('showCustomersGroups')}}"
                    class="btn btn-light border">Manage Customer Groups</a></div> --}}
            <div class="btn-group" role="group"><a href="{{route('createCustomersGroups')}}" class="btn btn-primary">Add Customer Group</a></div>
            {{-- <div class="dropdown">
                <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Merge Two Customers</a></li>
                    <li><a class="dropdown-item" href="#">Import</a></li>
                    <li><a class="dropdown-item" href="#">Export Customers</a></li>
                    <li><a class="dropdown-item" href="#">Export Pricing</a></li>
                </ul>
            </div> --}}
        </div>
        {{-- <h4>Taxes</h4>
        <div class="col-md-6 text-end">
            <div class="btn-group" role="group"><a href="{{route('showCustomersGroups')}}"
                    class="btn btn-light border">Manage Customer Groups</a></div>
            <div class="btn-group" role="group"><a href="{{route('customers.create')}}" class="btn btn-primary">Add
                    Customer</a></div>
        </div> --}}
        {{-- <div class="btn-group" role="group"><a href="{{route('taxes.manage')}}" class="btn btn-primary">Add Tax
                Type</a></div> --}}
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A Das</td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                    </tr>
                    <tr>
                        <td>A Das</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
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