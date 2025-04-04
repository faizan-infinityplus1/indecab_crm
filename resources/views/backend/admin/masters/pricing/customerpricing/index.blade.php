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
            <h4>Customer Pricing</h4>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group"><a href="{{ route('supplierpricing.index') }}"
                        class="btn btn-light border">Supplier Pricing</a></div>
            </div>
        </div>
        <div class="card-body px-0">
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3 d-flex">
                        <label for="dutytype" class="form-label me-4 d-inline-block" style="width: 81px;">Duty Type</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name="dutytype"
                            id="dutytype">
                            {{-- default options start --}}
                            <option value="1" selected>Extras</option>
                            <option value="2">Allowances</option>
                            <option value="3">Cost of Fuel</option>
                            <option value="4">Vehicle Average</option>
                            <option value="5">IC - Airport Transfer</option>
                            <option value="6">IC - Outstation one way</option>
                            <option value="7">IC - Outstation Round-trip</option>
                            <option value="8">IC - Hourly Rentals</option>

                            {{-- default options end --}}
                            {{-- options will apear from duty type here --}}
                            @foreach ($mstDutyType as $data)
                                <option value="{{ $data->id }}">{{ $data->duty_type }}</option>
                            @endforeach
                            {{-- options will apear from duty type here --}}
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 d-flex">
                        <label for="" class="form-label me-4">City</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id="">
                            <option value="">All</option>
                            <option value="">Abohar</option>
                            <option value="">Abu Dhabi</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                </div>
            </div>
            @if ($errors->any())
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

            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Vehicle Groups</th>

                            {{-- @switch($value)
                            @case(1)
                            <th>Extra KM</th>
                            <th>Extra HR</th>
                                @break
                            @case(2)
                            <th>Over time per hour</th>
                            <th>Outstation allowance</th>
                            <th>Outstation overnight allowance</th>
                            <th>Sunday allowance</th>
                            <th>Early start allowance</th>
                            <th>Night allowance</th>
                            <th>Extra duty allowance</th>
                            <th>Driver daily allowance</th>
                                @break
                            @case(3)
                            <th>Petrol</th>
                            <th>Diesel</th>
                            <th>CNG</th>
                            <th>Electric</th>
                                @break
                            @case(4)
                            <th>Petrol</th>
                            <th>Diesel</th>
                            <th>CNG</th>
                            <th>Electric</th>
                                @break
                            @case(5)
                            <th>IC - Airport Transfer</th>
                            <th>IC - Airport Transfer Extra KM</th>
                            <th>IC - Airport Transfer Extra HR</th>
                                @break
                            @case(6)
                            <th>IC - Outstation one way</th>
                            <th>IC - Outstation one way Extra KM</th>
                                @break
                            @case(7)
                            <th>IC - Outstation Round-trip</th>
                            <th>IC - Outstation Round-trip Extra KM</th>

                                @break
                            @case(8)
                            <th>IC - Hourly Rentals</th>
                            <th>IC - Hourly Rentals Extra KM</th>
                            <th>IC - Hourly Rentals Extra HR</th>
                                @break
                            @default
                            <th>Extra KM</th>
                            <th>Extra HR</th>
                        @endswitch --}}

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                NAUSHAD CHAND SHAIKH
                            </td>
                            <td>
                                9594576536
                            </td>
                            <td>
                                shaikhnaushad327@gmail.com
                            </td>
                            <td>NA</td>
                            <td>
                                <div class="text-success">Active</div>
                            </td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle py-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#activity-log">View Activity Logs</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Manage Permission</a></li>
                                        <li><a class="dropdown-item" href="#">Reset Password</a></li>
                                        <li><a class="dropdown-item" href="#">Disable Employee User</a></li>
                                        <li><a class="dropdown-item" href="#">Indecall Settings</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email / Username</th>
                            <th>Branches</th>
                            <th>User</th>
                            <th>Permission profile</th>
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
        // Get the select element
        const dutyTypeSelect = document.getElementById('dutytype');
        console.log("Selected Duty Type Value:", dutyTypeSelect.value);

        // Listen for changes on the select element
        dutyTypeSelect.addEventListener('change', function() {
            // Store the selected value in a variable
            let selectedValue = dutyTypeSelect.value;
            console.log("Selected Duty Type Value:", selectedValue);
        });
    </script>
@endsection
