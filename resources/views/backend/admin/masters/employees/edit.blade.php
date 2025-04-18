@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static" x-show="open">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">Edit Employee</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('employees.update', $particularMstEmployee->id) }}" method="post" id="formEmployee"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label ">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  border-bottom" name="name" id="name"
                                    value="{{ old('name', $particularMstEmployee->name ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone_no" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control  border-bottom" name="phone_no" id="phone_no"
                                    value="{{ old('phone_no', $particularMstEmployee->phone_no ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="alt_phone_no" class="form-label">Alternate phone number</label>
                                <input type="text" class="form-control  border-bottom" name="alt_phone_no"
                                    id="alt_phone_no"
                                    value="{{ old('alt_phone_no', $particularMstEmployee->alt_phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  border-bottom" name="email" id="email"
                                    value="{{ old('email', $particularMstEmployee->email ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="employee_photo" class="form-label">Photo</label>
                                <div>
                                    <label for="employee_photo" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="employee_photo" id="employee_photo"
                                        affieldinput="[object Object]" class="form-control"
                                        accept="image/png, image/gif, image/jpeg" style="display: none;">
                                    <span id="photo_file-name" class="ml-2 text-muted"></span>
                                    <div><img src="{{ asset('/storage/' . $particularMstEmployee->employee_photo) }}"
                                            alt="" class="border mt-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="created_employee_id" class="form-label ">Employee ID</label>
                                <input type="text" class="form-control  border-bottom" name="created_employee_id"
                                    id="created_employee_id"
                                    value="{{ old('created_employee_id', $particularMstEmployee->created_employee_id ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="date_of_joining" class="form-label ">Date of Joining</label>
                                <input type="date" class="form-control  border-bottom" name="date_of_joining"
                                    id="date_of_joining"
                                    value="{{ old('date_of_joining', $particularMstEmployee->date_of_joining ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control  border-bottom" name="designation"
                                    id="designation"
                                    value="{{ old('designation', $particularMstEmployee->designation ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="gender" id="gender">
                                    <option value="selectOne">
                                        Select an option</option>
                                    <option value="male"
                                        {{ old('gender', $particularMstEmployee->gender ?? '') == 'male' ? 'selected' : '' }}>
                                        Male</option>
                                    <option value="female"
                                        {{ old('gender', $particularMstEmployee->gender ?? '') == 'female' ? 'selected' : '' }}>
                                        Female</option>
                                    <option value="transgender"
                                        {{ old('gender', $particularMstEmployee->gender ?? '') == 'transgender' ? 'selected' : '' }}>
                                        Transgender</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Personal Details</div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dob" class="form-label ">Date of Birth</label>
                                        <input type="date" class="form-control  border-bottom" name="dob"
                                            id="dob" value="{{ old('dob', $particularMstEmployee->dob ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="aadhar_no" class="form-label ">Aadhar Number</label>
                                        <input type="text" class="form-control  border-bottom" name="aadhar_no"
                                            id="aadhar_no"
                                            value="{{ old('aadhar_no', $particularMstEmployee->aadhar_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pf_no" class="form-label ">PF Number</label>
                                        <input type="text" class="form-control  border-bottom" name="pf_no"
                                            id="pf_no"
                                            value="{{ old('pf_no', $particularMstEmployee->pf_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="" class="form-label ">ESI Number</label>
                                        <input type="text" class="form-control  border-bottom" id="">
                                        <span class="warning-msg-block"></span>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="dl_no" class="form-label ">DL Number</label>
                                        <input type="text" class="form-control  border-bottom" name="dl_no"
                                            id="dl_no"
                                            value="{{ old('dl_no', $particularMstEmployee->dl_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="badge_no" class="form-label ">Badge Number</label>
                                        <input type="text" class="form-control  border-bottom" name="badge_no"
                                            id="badge_no"
                                            value="{{ old('badge_no', $particularMstEmployee->badge_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address </label>
                                        <textarea class="form-control" name="address" id="address" rows="5">{{ old('address', $particularMstEmployee->address ?? '') }}
                                        </textarea>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="blood_group" class="form-label ">Blood group</label>
                                        <input type="text" class="form-control  border-bottom" name="blood_group"
                                            id="blood_group"
                                            value="{{ old('blood_group', $particularMstEmployee->blood_group ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pan_no" class="form-label ">PAN Number</label>
                                        <input type="text" class="form-control  border-bottom" name="pan_no"
                                            id="pan_no"
                                            value="{{ old('pan_no', $particularMstEmployee->pan_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="uan_no" class="form-label ">UAN Number</label>
                                        <input type="text" class="form-control  border-bottom" name="uan_no"
                                            id="uan_no"
                                            value="{{ old('uan_no', $particularMstEmployee->uan_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="" class="form-label ">ESI Dispensary Code</label>
                                        <input type="text" class="form-control  border-bottom" id="">
                                        <span class="warning-msg-block"></span>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="dl_exp_date" class="form-label ">DL Exp. Date</label>
                                        <input type="date" class="form-control  border-bottom" name="dl_exp_date"
                                            id="dl_exp_date"
                                            value="{{ old('dl_exp_date', $particularMstEmployee->dl_exp_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="badge_exp_date" class="form-label ">Badge Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" name="badge_exp_date"
                                            id="badge_exp_date"
                                            value="{{ old('badge_exp_date', $particularMstEmployee->badge_exp_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="permanent_address" class="form-label">Permanent Address</label>
                                        <textarea class="form-control" name="permanent_address" id="permanent_address" rows="5">{{ old('permanent_address', $particularMstEmployee->permanent_address ?? '') }}
                                        </textarea>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3">
                        <div class="panel-heading bg-light p-3">Family Details</div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="father_name" class="form-label ">Father Name</label>
                                        <input type="text" class="form-control  border-bottom" name="father_name"
                                            id="father_name"
                                            value="{{ old('father_name', $particularMstEmployee->father_name ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mother_name" class="form-label ">Mother Name</label>
                                        <input type="text" class="form-control  border-bottom" name="mother_name"
                                            id="mother_name"
                                            value="{{ old('mother_name', $particularMstEmployee->mother_name ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="marriage_date" class="form-label ">Marriage date</label>
                                        <input type="date" class="form-control  border-bottom" name="marriage_date"
                                            id="marriage_date"
                                            value="{{ old('marriage_date', $particularMstEmployee->marriage_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fathers_dob" class="form-label ">Father's Date of Birth</label>
                                        <input type="date" class="form-control  border-bottom" name="fathers_dob"
                                            id="fathers_dob"
                                            value="{{ old('fathers_dob', $particularMstEmployee->fathers_dob ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mothers_dob" class="form-label ">Mother's Date of Birth</label>
                                        <input type="date" class="form-control  border-bottom" name="mothers_dob"
                                            id="mothers_dob"
                                            value="{{ old('mothers_dob', $particularMstEmployee->mothers_dob ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">License</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="license_issued_by" class="form-label ">Issued By</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="license_issued_by" id="license_issued_by"
                                            value="{{ old('license_issued_by', $particularMstEmployee->license_issued_by ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="license_city" class="form-label ">City</label>
                                        <input type="text" class="form-control  border-bottom" name="license_city"
                                            id="license_city"
                                            value="{{ old('license_city', $particularMstEmployee->license_city ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="license_state" class="form-label ">State</label>
                                        <input type="text" class="form-control border-bottom" name="license_state"
                                            id="license_state"
                                            value="{{ old('license_state', $particularMstEmployee->license_state ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="license_exp_date" class="form-label "> Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" name="license_exp_date"
                                            id="license_exp_date"
                                            value="{{ old('license_exp_date', $particularMstEmployee->license_exp_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Police</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="police_dis_card_no" class="form-label ">Display Card Number</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="police_dis_card_no" id="police_dis_card_no"
                                            value="{{ old('police_dis_card_no', $particularMstEmployee->police_dis_card_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_dis_card_exp_date" class="form-label ">Display Card Expiry
                                            Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="police_dis_card_exp_date" id="police_dis_card_exp_date"
                                            value="{{ old('police_dis_card_exp_date', $particularMstEmployee->police_dis_card_exp_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_verifi_no" class="form-label ">Verification Number</label>
                                        <input type="text" class="form-control  border-bottom" name="police_verifi_no"
                                            id="police_verifi_no"
                                            value="{{ old('police_verifi_no', $particularMstEmployee->police_verifi_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_verifi_exp_date" class="form-label ">Verification Expiry
                                            Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="police_verifi_exp_date" id="police_verifi_exp_date"
                                            value="{{ old('police_verifi_exp_date', $particularMstEmployee->police_verifi_exp_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Bank</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label ">Bank Name</label>
                                        <input type="text" class="form-control  border-bottom" name="bank_name"
                                            id="bank_name"
                                            value="{{ old('bank_name', $particularMstEmployee->bank_name ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_account_number" class="form-label ">Account Number</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="bank_account_number" id="bank_account_number"
                                            value="{{ old('bank_account_number', $particularMstEmployee->bank_account_number ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_ifsc_code" class="form-label ">IFSC Code</label>
                                        <input type="text" class="form-control  border-bottom" name="bank_ifsc_code"
                                            id="bank_ifsc_code"
                                            value="{{ old('bank_ifsc_code', $particularMstEmployee->bank_ifsc_code ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Files</div>
                                {{-- component start --}}
                                @foreach ($mstFilesEmployee as $data)
                                    <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1 remove_files"
                                                data-id="{{ $data->id ?? '' }}"><i
                                                    class="fa-solid fa-minus"></i></button>
                                        </div>
                                        <div class="p-3 ps-0 w-100">
                                            <div class="panel border rounded">
                                                <div
                                                    class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                                                    <div>Files</div>
                                                   
                                                </div>
                                                <div class="panel-body p-3">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">File Name </label>
                                                        <input type="text" class="form-control  border-bottom"
                                                            name="filename_{{ $data->id }}_update" id="file_name"
                                                            value="{{ old('name', $data->name ?? '') }}">
                                                        <span class="warning-msg-block"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Upload </label>
                                                        <div>
                                                            <label for="image"
                                                                class="btn shadow-sm border rounded-1">Choose
                                                                File</label>
                                                            <input type="file" class="form-control"
                                                                style="display: none;"
                                                                name="image_{{ $data->id }}_update" id="image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- component end --}}
                                <div class="files_body" id="files_body">

                                    {{-- component start --}}

                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_files"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Account Access/Visibility & Settings</div>
                                <div class="p-3">
                                    <div class="mb-3 validator-error">
                                        <label for="branches" class="form-label ">Branches</label>
                                        <input type="text" class="form-control  border-bottom" name="branches"
                                            id="branches"
                                            value="{{ old('branches', $particularMstEmployee->branches ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="associate_to_sister_company" class="form-label">Associate to Sister
                                            Company</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="company_id" id="company_id">
                                            <option value="">Select an option</option>
                                            @foreach ($mstCompany as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ old('company_id', optional($particularMstEmployee)->company_id) == $data->id ? 'selected' : '' }}>
                                                    {{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="visible_customers" class="form-label">Visible Customers (keep blank
                                            for all)</label>
                                        <?php
                                        $CustomersId = [];
                                        if (!empty($particularMstEmployee->customers_id)) {
                                            $CustomersId = explode(',', $particularMstEmployee->customers_id);
                                        }
                                        ?>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            id="visible_customers" name="customers_id[]" multiple="multiple">
                                            @foreach ($mstCustomer as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ in_array($data->id, old('customers_id', $CustomersId)) ? 'selected' : '' }}>
                                                    {{ $data->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>

                                    {{-- <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Is API User?
                                        </label>
                                    </div> --}}
                                    {{-- <div class="panel border rounded mb-3">
                                        <div class="panel-heading bg-light p-3">Add list of IP address to whitelist for
                                            this
                                            employee/user (if empty allow access from everywhere)</div> --}}
                                    {{-- component start --}}
                                    {{-- <div class="d-flex border-bottom">
                                            <div class="p-3">
                                                <button type="button"
                                                    class="btn btn-primary rounded-1 remove_ip_addresses"><i
                                                        class="fa-solid fa-minus"></i></button>
                                            </div>
                                            <div class="p-3 ps-0 w-100">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div> --}}
                                    {{-- component end --}}
                                    {{-- <div class="ip_addresses_body" id="ip_addresses_body"> --}}

                                    {{-- component start --}}

                                    {{-- component end --}}
                                    {{-- </div>
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1"
                                                id="extend_ip_addresses"><i class="fa-solid fa-plus"></i></button>
                                        </div> --}}
                                </div>
                                {{-- <div class="bg-light mb-3 p-3">
                                        <b>Employee level email masking,</b> helps in segregating communication between your
                                        customer and your employee (or group of employees).<br>
                                        <i>For example, billing team employees and booking team employees could have
                                            different email masking, thus separating billing/booking related
                                            communication.</i>

                                        <div class="mb-3">
                                            <label for="" class="form-label ">Email address masking (for this
                                                employee)</label>
                                            <select class="form-select border-bottom" aria-label="Default select example"
                                                name="" id="">
                                                <option class="" value="">(Use default email masking)</option>
                                            </select>
                                            <span class="warning-msg-block"></span>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
            </div>

            <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
            {{-- ================== --}}
            </form>
        </div>
    </div>
    </div>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            // code for validation
            $.validator.addMethod("validPhone", function(value, element) {
                return this.optional(element) || /^[0-9]{10}$/.test(value);
            }, "Please enter a valid 10-digit number");

            $.validator.addMethod("validEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(
                    value);
            }, "Please enter a valid email address");

            $.validator.addMethod("validAadhaar", function(value, element) {
                return this.optional(element) || /^[0-9]{12}$/.test(value);
            }, "Please enter a valid 12-digit aadhar number");

            $("#formEmployee").validate({
                rules: {
                    name: {
                        required: true
                    },
                    phone_no: {
                        required: false,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                        validPhone: true
                    },
                    alt_phone_no: {
                        required: false,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                        validPhone: true
                    },
                    aadhar_no: {
                        required: false,
                        digits: true,
                        minlength: 12,
                        maxlength: 12,
                        validAadhaar: true
                    },
                    pan_no: {
                        required: false,
                        minlength: 10,
                        maxlength: 10,
                    },
                    email: {
                        required: true,
                        validEmail: true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter name"
                    },
                    phone_no: {
                        digits: "Please enter only numbers",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits",
                        regex: "Please enter a valid 10-digit mobile number"
                    },
                    alt_phone_no: {
                        digits: "Please enter only numbers",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits"

                    },
                    aadhar_no: {
                        digits: "Please enter only numbers",
                        minlength: "Aadhar number must be exactly 12 digits",
                        maxlength: "Aadhar number must be exactly 12 digits"

                    },
                    pan_no: {
                        minlength: "PAN number must be exactly 10 characters",
                        maxlength: "PAN number must be exactly 10 characters"

                    },
                    email: {
                        required: "Please enter an email"
                    }
                },
                errorElement: "div",
                errorClass: "error-message text-danger",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color",
                        "red"); // Fixed selector
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color",
                        "black"); // Fixed selector
                },
                invalidHandler: function(event, validator) {
                    if (validator.errorList.length) {
                        showAlert('error', validator.errorList[0].message);
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

            $("#visible_customers").select2({
                placeholder: "Select an Option",
                allowClear: true
            });

            // Files Component Start Here
            $(document).on('click', '.remove_files', function() {
                let Id = $(this).data('id'); // Get tax ID

                let parentDiv = $(this).closest('.d-flex');

                if (Id === "new") {
                    parentDiv.remove();
                } else {
                    $.ajax({
                        url: "{{ route('employees.delete.files', ':id') }}".replace(
                            ':id', Id),
                        type: 'delete',
                        data: {
                            _method: 'delete',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }
            });

            $('#extend_files').on('click', function() {
                const childCount = $('#files_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `<div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_files" data-index=${childCount} data-id="new"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Files</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="file_name${childCount}" class="form-label">File Name </label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        name="file_name_${childCount}_new"
                                                        id="file_name${childCount}"
                                                        data-index=${childCount}>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image${childCount}" class="form-label">Upload </label>
                                                    <div>
                                                        <label for="image${childCount}"
                                                            class="btn shadow-sm border rounded-1">Choose File</label>
                                                        <input type="file"
                                                            class="form-control"
                                                            style="display: none;"
                                                            name="image_${childCount}_new"
                                                        id="image${childCount}"
                                                        data-index=${childCount}
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#files_body').append(template);
                $(`#file_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Enter File Name"
                    }
                });

                $(`#image${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Upload File"
                    }
                });
            });

            $(document).on('click', '.remove_ip_addresses', function() {
                $(this).closest('.d-flex').remove();
            });


            $('#extend_ip_addresses').on('click', function() {
                const childCount = $('#ip_addresses_body').find('.d-flex').length + 1;
                console.log(childCount);
                var template = `
                                    <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button"
                                                class="btn btn-primary rounded-1 remove_ip_addresses"><i
                                                    class="fa-solid fa-minus"></i></button>
                                        </div>
                                        <div class="p-3 ps-0 w-100">
                                            <div class="mb-3">
                                                <input type="text" class="form-control  border-bottom"
                                                    id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                        </div>
                                    </div>`;

                $('#ip_addresses_body').append(template);

            });
        });
        const fileInput = document.getElementById('employee_photo');
        const fileNameDisplay = document.getElementById('photo_file-name');

        // Add event listener for when the file is chosen
        fileInput.addEventListener('change', function() {
            // Get the name of the selected file
            const fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';

            // Update the text content of the file name display element
            fileNameDisplay.textContent = fileName;
        });
    </script>
@endsection
