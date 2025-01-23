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


<div class="container-fluid">
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
</div>
@endsection