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
        <h4>Bank Accounts</h4>
        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            <div class="btn-group" role="group"><a href="{{route('bankaccounts.manage')}}" class="btn btn-primary">Add Bank Account</a></div>
        </div>
    </div>
    <div class="card-body px-0">
        @if($errors->any())
        <div class="alert alert-danger ">
            <span class="close" onclick="this.parentElement.style.display='none';"
                style="cursor: pointer;">&times;</span>
            @foreach ($errors->all() as $error)
            <li>
                <span class="text-white"py-1 px-3 rounded-5>{{ $error }}</span>
            </li>
            @endforeach
        </div>
        @endif
        <div class="bg-light mb-3 p-3 text-center">
            Get started by adding <a href="{{route('bankaccounts.manage')}}" class="text-decoration-none">bank accounts</a> for your business.
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover datatable" style="width:100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Account Number</th>
                        <th>Bank Name</th>
                        <th>Bank Branch</th>
                        <th>IFSC Code</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        
                       
                        
                        
                        
                        <td>{{ $data->account_name }}</td>
                        <td>{{ $data->account_number }}</td>
                        <td>{{ $data->bank_name }}</td>
                        <td>{{ $data->bank_branch }}</td>
                        <td>{{ $data->ifsc_code }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#activity-log">View Activity Logs</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('bankaccounts.manage', $data->id) }}">Edit</a>
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
                        <th>Account Number</th>
                        <th>Bank Name</th>
                        <th>Bank Branch</th>
                        <th>IFSC Code</th>
                        <th>setting</th>
                    </tr>
                </tfoot>
            </table>
        </div>
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
                <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Import Employees</button>
                <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
            </div>
            <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button>
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
                <button type="button" class="btn btn-primary rounded-1" data-bs-dismiss="modal">Setup Indecall</button>
                <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
            </div>
            {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button> --}}
        </div>
      </div>
    </div>
</div>
<!-- Manage Call Settings Modal End-->

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