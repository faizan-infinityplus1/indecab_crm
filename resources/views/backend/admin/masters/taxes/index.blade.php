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
                <h1>Taxes</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('createTaxes')}}" class="btn btn-primary">Add Tax Type</a></div>
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
                <p class="text-end">Total <b>33</b> records</p>
            </div>
        </div>
        <div>
            <table class="col-12">
                <thead>
                    <tr role="row">
                        <th colspan="1" >Name
                        </th>
                        <th colspan="1" width="380" class="text-end">Percentage (%)
                        </th>
                        <th colspan="1" class="">Status
                        </th>
                        <th colspan="1"width="50">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td>CGST 2.5%</td>
                        <td class="text-end">2.50</td>
                        <td class="">Active</td>
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