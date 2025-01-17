@extends('layouts.admin-master')
@section('content')

<style>
    .page-header-sticky {
        margin-top: 0;
        padding-top: 10px;
        position: sticky;
        top: 54px;
        z-index: 3;
    }
</style>


<div class="container-fluid">
    <div class="page-header page-header-sticky bg-white">
        <div class="row">
            <div class="col-md-6">
                <h1>Duty Types</h1>
            </div>
            <div class="col-md-6 text-right">
                <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
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
                <p class="text-right">Total <b>30</b> records</p>
            </div>
        </div>
        <div>
            <table>
                <thead>
                    <tr role="row">
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >Name<div>
                                <div></div>
                            </div>
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="" >Type<div>
                                <div></div>
                            </div>
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="text-right" >Max. Kilometers<div>
                                <div></div>
                            </div>
                        </th>
                        <th colspan="1" scope="col" role="columnheader" title="Toggle SortBy" class="text-right" >Max. Hours<div>
                                <div></div>
                            </div>
                        </th>
                        <th colspan="1" scope="col" role="columnheader" class="" width="" style="min-width: 0px;">
                            <div>
                                <div></div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row">
                        <td>10Hr 80Km</td>
                        <td>HR-KM (Local)</td>
                        <td>
                            <div class="text-right">80</div>
                        </td>
                        <td>
                            <div class="text-right">10</div>
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
                    <tr role="row">
                        <td>10Hr 80Km</td>
                        <td>HR-KM (Local)</td>
                        <td>
                            <div class="text-right">80</div>
                        </td>
                        <td>
                            <div class="text-right">10</div>
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