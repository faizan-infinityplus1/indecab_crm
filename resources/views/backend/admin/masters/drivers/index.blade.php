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


@endsection