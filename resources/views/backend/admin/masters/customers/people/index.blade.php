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

        <h4>People</h4>

        <div class="text-end d-flex justify-content-end align-items-center gap-2">
            <div class="btn-group" role="group"><a href="{{route('customers.people.manage')}}" class="btn btn-primary">Add Person</a></div>
            <div class="dropdown">
                <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Import</a></li>
                    <li><a class="dropdown-item" href="#">Export Drivers</a></li>
                </ul>
            </div>
        </div>
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
                        <th>Phone</th>
                        <th>Indecab Go - Username</th>
                        <th>Tracking</th>
                        <th>Status</th>
                        <th width="100">setting</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adil Patel</td>
                        <td>7738373502</td>
                        <td>User not created</td>
                        <td>Not Enabled</td>
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">View Activity Logs</a></li>
                                    <li><a class="dropdown-item" href="#">Create User</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Irshad Khan</td>
                        <td>7017616157</td>
                        <td>User not created</td>
                        <td>Not Enabled</td>
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">View Activity Logs</a></li>
                                    <li><a class="dropdown-item" href="#">Create User</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Joshua</td>
                        <td>9757414625</td>
                        <td>User not created</td>
                        <td>Not Enabled</td>
                        <td><div class="text-success">Active</div></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">View Activity Logs</a></li>
                                    <li><a class="dropdown-item" href="#">Create User</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Indecab Go - Username</th>
                        <th>Tracking</th>
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