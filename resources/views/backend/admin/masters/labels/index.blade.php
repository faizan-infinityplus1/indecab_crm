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



<div class="card rounded-0 border-0 p-3">
    <div class="card-header d-flex justify-content-between py-2 bg-transparent page-heading-container flex-wrap">
        <h4 >Labels</h4>
        <div class="btn-group" role="group"><a href="{{route('labels.manage')}}" class="btn btn-primary">Add Label</a></div>
    </div>
    <div class="card-body">
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
            Get started by adding <a href="{{route('labels.manage')}}" class="text-decoration-none">labels</a> for your business.
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover datatable" style="width:100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Hide from listing?</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="text-white py-1 px-3 rounded-5" style="background-color:red;" style="background-color: #f8d7da; color: #721c24;">
                                Cash Duty
                            </span>
                        </td>
                        <td>No</td>
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
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-white py-1 px-3 rounded-5" style="background-color:red;">
                                Cash Paid By Company
                            </span>
                        </td>
                        <td>No</td>
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
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-white py-1 px-3 rounded-5" style="background-color:red;">
                                Corporate
                            </span>
                        </td>
                        <td>No</td>
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
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-white py-1 px-3 rounded-5" style="background-color:red;">
                                Corporate  VIP Guest
                            </span>
                        </td>
                        <td>No</td>
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
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-white py-1 px-3 rounded-5" style="background-color:red;">
                                Singh Duty
                            </span>
                        </td>
                        <td>No</td>
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
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Hide from listing?</th>
                        <th>setting</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
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