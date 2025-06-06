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

            <h4>Suppliers</h4>


            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('showSuppliersGroups') }}"
                        class="btn btn-light border">Manage Supplier Groups</a></div>
                <div class="btn-group" role="group"><a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add
                        Supplier</a></div>
                <div class="dropdown">
                    <button class="btn border border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#merge-two-suppliers">Merge Two Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Import Company Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Import DCO Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Export Suppliers</a></li>
                        <li><a class="dropdown-item" href="#">Export Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body px-0">
            @if ($errors->any())
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
                            <th>Group</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Vehicle</th>
                            <th>City</th>
                            {{-- <th>Indecab Go - Username</th>
                        <th>Tracking</th> --}}
                            <th>Status</th>
                            <th width="100">setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mstSupplier as $data)
                            <tr>

                                <td>{{ $data->name }}</td>
                                @if ($data->supplierGroups->isNotEmpty())
                                    <td>
                                        @foreach ($data->supplierGroups as $group)
                                            {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!}
                                        @endforeach
                                    </td>
                                @else
                                    <td> {!! !empty($group->name) ? $group->name : '<span>NA</span>' !!} </td>
                                @endif
                                <td>{!! $data->phone_no ?? '<span>NA</span>' !!}</td>
                                <td>{!! $data->email_id ?? '<span>NA</span>' !!}</td>
                                @if ($data->mstSupplierDriverCumOwnerMany->isNotEmpty())
                                    <td>
                                        @foreach ($data->mstSupplierDriverCumOwnerMany as $supplierCumOwners)
                                            {!! !empty($supplierCumOwners->vehicle_model) ? $supplierCumOwners->vehicle_model : '<span>NA</span>' !!}
                                        @endforeach
                                    </td>
                                @else
                                    <td> {!! !empty($supplierCumOwners->vehicle_model) ? $supplierCumOwners->vehicle_model : '<span>NA</span>' !!} </td>
                                @endif
                                <td class="text-capitalize">{!! $data->head_office_city ?? '<span>NA</span>' !!}</td>
                                <td>
                                    <div class="{{ $data->is_active == true ? 'text-success' : 'text-danger' }}">
                                        {{ $data->is_active == false ? 'In Active' : 'Active' }}</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-gear"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('suppliers.edit', $data->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#create-supplier-account">Invite Supplier</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Vehicle</th>
                            <th>City</th>
                            {{-- <th>Indecab Go - Username</th>
                        <th>Tracking</th> --}}
                            <th>Status</th>
                            <th>setting</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    {{-- modal section --}}
    {{-- Merge Two Suppliers --}}
    <div class="modal fade" id="merge-two-suppliers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Merge Two Suppliers</h1>
                        <p class="text-black-50 mb-0">Use this to consolidate two suppliers into single supplier. This is
                            useful when you have accidentally created two suppliers of same name.</p>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Source Supplier</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Destination Supplier</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <p class="text-danger">Note: Pricing would not be copied from source supplier to destination
                            supplier.</p>
                    </form>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Merge Two Supplierss</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Merge Two Suppliers --}}

    {{-- Create Supplier Account --}}
    <div class="modal fade" id="create-supplier-account" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header px-5 sticky-top bg-white">
                    <div>
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Supplier Account</h1>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body px-5">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label ">User Email <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" name="" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Vehicle Group - Limit ability to add bookings to
                                these Vehicle Groups</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Home Address</option>
                                <option value="">Permanent Address</option>
                                <option value="">Temporary Address</option>
                                <option value="">Village Address</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" name=""
                                id="">
                            <label class="form-check-label" for="">
                                Copy Pricing?
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-start px-5">
                    <button type="submit" class="btn btn-primary rounded-1">Send Invitation</button>
                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Create Supplier Account --}}
    {{-- modal section --}}
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });
            $(".dropdown-toggle").dropdown();

        });
    </script>
@endsection
