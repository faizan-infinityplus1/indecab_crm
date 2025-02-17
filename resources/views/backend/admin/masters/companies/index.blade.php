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



<div class="card rounded-0 border-0 p-5">
    <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
        <h4>My Companies</h4>
        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            <div class="btn-group" role="group"><a href="{{route('companiesprofiles.index')}}"
                    class="btn btn-light border">Manage Company Profiles</a></div>
            <div class="btn-group" role="group"><a href="{{route('companies.manage')}}" class="btn btn-primary">Add
                    Company</a></div>
        </div>
    </div>
    <div class="card-body">
        {{-- company data start --}}
        <div class="row">
            <div class="col-md-3 text-center d-flex align-items-center">
                <img src="{{ asset('admin/images/company_logo.jpeg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-9 mt-3 mt-md-0">
                <span class="bg-success text-light bg-opacity-75 px-2 py-0 rounded">Primary</span>
                <h4 class="-title">
                    Mumbai Cab Service <small class="text-black-50">MC</small>
                </h4>
                <p>mumbaicabservice76@gmail.com
                    <br>
                    Phone: 9619900011
                    <br>
                    Alternate Phone: 9167700011
                </p>
                <p>
                    Plot No 8, Durga Sewa sang, Shivaji Nagar, ​Govandi, Mumbai - 400043
                </p>
                <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Edit</a></div>
            </div>
        </div>
        <hr>
        {{-- company data end --}}
        {{-- company data start --}}
        <div class="row">
            <div class="col-md-3 text-center d-flex align-items-center">
                <img src="{{ asset('admin/images/company_logo.jpeg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-9 mt-3 mt-md-0">
                <h4 class="-title">
                    Mumbai Cab Service <small class="text-black-50">MC</small>
                </h4>
                <p>mumbaicabservice76@gmail.com
                    <br>
                    Phone: 9619900011
                    <br>
                    Alternate Phone: 9167700011
                </p>
                <p>
                    Plot No 8, Durga Sewa sang, Shivaji Nagar, ​Govandi, Mumbai - 400043
                </p>
                <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Edit</a></div>
            </div>
        </div>
        <hr>
        {{-- company data end --}}
    </div>
</div>
<!-- Activity logs Modal Start-->
<div class="modal fade" id="activity-log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Activity logs</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <p>
                        you have created Duty type at 14:06 on 04-07-2024
                    </p>
                </div>
                <div class="bg-light p-3">
                    <p class="text-center m-0">
                        No log records found.
                    </p>
                </div>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Activity logs Modal End-->
<!-- Import Employees Modal End-->
<div class="modal fade" id="import-employees" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Import Employees</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="qwer" class="form-label">Select File</label>
                    <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

                </div>
                <p class="text-secondary">
                    Select .csv file from which you need to import data.
                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Import
                        Employees</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
                <button type="button" class="btn btn-light border border-secondary-subtle rounded-1"
                    data-bs-dismiss="modal">Download Import Format</button>
            </div>
        </div>
    </div>
</div>
<!-- Import Employees Modal End-->
<!-- Manage Call Settings Modal End-->
<div class="modal fade" id="call-settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-header ">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Manage Indecall Settings</h1>
                    <p class="text-secondary mb-0">
                        For You
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Indecall Phone Number</label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div>
                    <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Setup
                        Indecall</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
                {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1"
                    data-bs-dismiss="modal">Download Import Format</button> --}}
            </div>
        </div>
    </div>
</div>
<!-- Manage Call Settings Modal End-->

@endsection