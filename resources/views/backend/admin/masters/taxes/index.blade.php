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
                <h1>Taxes</h1>
            </div>
            <div class="col-md-6 text-end">
                <div class="btn-group" role="group"><a href="{{route('taxes.manage')}}" class="btn btn-primary">Add Tax Type</a></div>
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
@endsection --}}
<div class="card rounded-0 border-0 p-5">
    <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
        <h4 >Taxes</h4>
        <div class="btn-group" role="group"><a href="{{route('taxes.manage')}}" class="btn btn-primary">Add Tax Type</a></div>
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
                        <th>Percentage (%)</th>
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->percentage}}</td>
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
                                    <li>
                                        <a class="dropdown-item view-activity-logs" href="#"  data-bs-toggle="modal" 
                                            data-bs-target="#activity-log"  
                                            data-id="{{ $data->id }}"
                                            data-name="{{ $data->name }}"
                                            data-created="{{ $data->created_at?->format('H:i d-m-Y') }}"
                                            data-updates="{{ $data->updated_at?->format('H:i d-m-Y') }}">
                                            View Activity Logs
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Edit</a>
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
                        <th>Percentage (%)</th>
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