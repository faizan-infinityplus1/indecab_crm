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
                        <h1 class="h3 pb-3">New Driver</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('mydrivers.update', $particularMstDriver->id) }}" method="post" id="formCustomer"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" id="name" name="name"
                            value="{{ old('name', $particularMstDriver->name ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Avatar </label>
                        <div>
                            <label for="image" class="btn shadow-sm border rounded-1">Choose File</label>
                            <input type="file" name="image" id="image" class="form-control"
                                accept="image/png, image/gif, image/jpeg" style="display: none;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="mobile_no" class="form-label ">Mobile Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control  border-bottom" id="mobile_no" name="mobile_no"
                                    value="{{ old('mobile_no', $particularMstDriver->mobile_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label ">PAN Card Number</label>
                                <input type="text" class="form-control  border-bottom" id="pan_no" name="pan_no"
                                    value="{{ old('pan_no', $particularMstDriver->pan_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label ">Birthdate</label>
                                <input type="date" class="form-control  border-bottom" id="birth_date" name="birth_date"
                                    value="{{ old('birth_date', $particularMstDriver->birth_date ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="alternate_mobile_no" class="form-label ">Alternate Mobile number</label>
                                <input type="text" class="form-control  border-bottom" id="alternate_mobile_no"
                                    name="alternate_mobile_no"
                                    value="{{ old('alternate_mobile_no', $particularMstDriver->alternate_mobile_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="aadhar_no" class="form-label ">Aadhar Card Number</label>
                                <input type="number" class="form-control  border-bottom" id="aadhar_no" name="aadhar_no"
                                    value="{{ old('aadhar_no', $particularMstDriver->aadhar_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="joining_date" class="form-label ">Joining date</label>
                                <input type="date" class="form-control  border-bottom" id="joining_date"
                                    name="joining_date"
                                    value="{{ old('joining_date', $particularMstDriver->joining_date ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Addresses</div>
                                {{-- component start --}}
                                <div class="address_tax_body" id="address_tax_body">
                                    @foreach ($mstDriverAddress as $data)
                                        <div class="d-flex border-bottom">
                                            <div class="p-3">
                                                <button type="button"
                                                    class="btn btn-primary rounded-1 remove_address_tax_body"><i
                                                        class="fa-solid fa-minus"></i></button>
                                            </div>
                                            <div class="p-3 ps-0 w-100">
                                                <div class="panel border rounded">
                                                    <div class="panel-heading bg-light p-3">Addresses</div>
                                                    <div class="panel-body p-3">
                                                        <div class="mb-3">
                                                            <label for="address_file_name${childCount}"
                                                                class="form-label">File Name </label>
                                                            <input type="text" class="form-control  border-bottom"
                                                                id="address_file_name${childCount}"
                                                                name="address_file_name_{{ $data->id }}_update"
                                                                data-index=${childCount}
                                                                value="{{ old('address_file_name', $data->address_file_name ?? '') }}">
                                                            <span class="warning-msg-block"></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="address_type${childCount}"
                                                                class="form-label">Type</label>
                                                            <select class="form-select border-bottom"
                                                                aria-label="Default select example"
                                                                name="address_type__{{ $data->id }}_update"
                                                                id="address_type${childCount}" data-index=${childCount}>
                                                                <option value="">Select an option</option>
                                                                <option value="home_address"
                                                                    {{ old('home_address', $data->address_type ?? '') == 'home_address' ? 'selected' : '' }}>
                                                                    Home Address</option>
                                                                <option value="permanent_address"
                                                                    {{ old('permanent_address', $data->address_type ?? '') == 'permanent_address' ? 'selected' : '' }}>
                                                                    Permanent Address</option>
                                                                <option value="temporary_address"
                                                                    {{ old('temporary_address', $data->address_type ?? '') == 'temporary_address' ? 'selected' : '' }}>
                                                                    Temporary Address</option>
                                                                <option value="village_address"
                                                                    {{ old('village_address', $data->address_type ?? '') == 'village_address' ? 'selected' : '' }}>
                                                                    Village Address</option>
                                                            </select>
                                                            <span class="warning-msg-block"></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="address${childCount}" class="form-label">Address
                                                            </label>
                                                            <textarea class="form-control" name="address_{{ $data->id }}_update" id="address${childCount}" data-index=address${childCount} rows="5">
                                                        {{ old('address', $data->address ?? '') }}
                                                    </textarea>
                                                            <span class="warning-msg-block"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_address"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="salary_per_month" class="form-label ">Salary per month</label>
                                <input type="number" class="form-control  border-bottom" id="salary_per_month"
                                    name="salary_per_month"
                                    value="{{ old('salary_per_month', $particularMstDriver->salary_per_month ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="daily_wages" class="form-label ">Daily Wages</label>
                                <input type="number" class="form-control  border-bottom" id="daily_wages"
                                    name="daily_wages"
                                    value="{{ old('daily_wages', $particularMstDriver->daily_wages ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="branches" class="form-label">Branches</label>
                        <input type="string" class="form-control  border-bottom" id="branches" name="branches"
                            value="{{ old('branches', $particularMstDriver->branches ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="mb-3">
                        <label for="daily_working_hours" class="form-label">Daily Working Hours</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            id="daily_working_hours" name="daily_working_hours"
                            value="{{ old('daily_working_hours', $particularMstDriver->daily_working_hours ?? '') }}">

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Working Hours</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="working_hours_start" class="form-label">Start</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            id="working_hours_start" name="working_hours_start">

                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="working_hours_end" class="form-label">End</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            id="working_hours_end" name="working_hours_end">

                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Allowances</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="daily_allowance" class="form-label ">Daily Allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="daily_allowance"
                                            name="daily_allowance"
                                            value="{{ old('daily_allowance', $particularMstDriver->daily_allowance ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="allowance_over_time" class="form-label ">Over time per hour</label>
                                        <input type="number" class="form-control  border-bottom"
                                            id="allowance_over_time" name="allowance_over_time"
                                            value="{{ old('allowance_over_time', $particularMstDriver->allowance_over_time ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="allowance_outstation_per_day" class="form-label ">Outstation allowance
                                            per day</label>
                                        <input type="number" class="form-control  border-bottom"
                                            id="allowance_outstation_per_day" name="allowance_outstation_per_day"
                                            value="{{ old('allowance_outstation_per_day', $particularMstDriver->allowance_outstation_per_day ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="allowance_outstation_overnight" class="form-label ">Outstation
                                            overnight allowance</label>
                                        <input type="number" class="form-control  border-bottom"
                                            id="allowance_outstation_overnight" name="allowance_outstation_overnight"
                                            value="{{ old('allowance_outstation_overnight', $particularMstDriver->allowance_outstation_overnight ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Sunday allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="sunday_allowance"
                                            name="sunday_allowance"
                                            value="{{ old('sunday_allowance', $particularMstDriver->sunday_allowance ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="early_start_allowance" class="form-label ">Early start
                                            allowance</label>
                                        <input type="number" class="form-control  border-bottom"
                                            id="early_start_allowance" name="early_start_allowance"
                                            value="{{ old('early_start_allowance', $particularMstDriver->early_start_allowance ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="night_allowance" class="form-label ">Night allowance</label>
                                        <input type="number" class="form-control  border-bottom" id="night_allowance"
                                            name="night_allowance"
                                            value="{{ old('night_allowance', $particularMstDriver->night_allowance ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="panel border rounded mb-3">
                                        <div class="panel-heading bg-light p-3">Extra duty allowance</div>
                                        <div class="p-3">
                                            <div class="mb-3">
                                                <label for="extra_duty_second" class="form-label ">Second duty</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="extra_duty_second" name="extra_duty_second"
                                                    value="{{ old('extra_duty_second', $particularMstDriver->extra_duty_second ?? '') }}">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="extra_duty_third" class="form-label ">Third duty</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="extra_duty_third" name="extra_duty_third"
                                                    value="{{ old('extra_duty_third', $particularMstDriver->extra_duty_third ?? '') }}">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="extra_duty_fourth" class="form-label ">Fourth duty</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="extra_duty_fourth" name="extra_duty_fourth"
                                                    value="{{ old('extra_duty_fourth', $particularMstDriver->extra_duty_fourth ?? '') }}">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="extra_duty_fifth" class="form-label ">Fifth duty</label>
                                                <input type="number" class="form-control  border-bottom"
                                                    id="extra_duty_fifth" name="extra_duty_fifth"
                                                    value="{{ old('extra_duty_fifth', $particularMstDriver->extra_duty_fifth ?? '') }}">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Deductions</div>
                                {{-- component start --}}
                                <div id="deduction_tax_body" class="deduction_tax_body">

                                </div>

                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_deduction"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">License Information</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="license_no" class="form-label ">Number</label>
                                        <input type="number" class="form-control  border-bottom" id="license_no"
                                            name="license_no"
                                            value="{{ old('license_no', $particularMstDriver->license_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="license_valid_upto" class="form-label ">Valid Upto</label>
                                        <input type="date" class="form-control  border-bottom" id="license_valid_upto"
                                            name="license_valid_upto"
                                            value="{{ old('license_valid_upto', $particularMstDriver->license_valid_upto ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Police</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="police_card_number" class="form-label">Display Card Number</label>
                                        <input type="text" class="form-control  border-bottom" id="police_card_number"
                                            name="police_card_number"
                                            value="{{ old('police_card_number', $particularMstDriver->police_card_number ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_card_expiry_date" class="form-label">Display Card Expiry
                                            Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            id="police_card_expiry_date" name="police_card_expiry_date"
                                            value="{{ old('police_card_expiry_date', $particularMstDriver->police_card_expiry_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_veri_no" class="form-label">Verification Number</label>
                                        <input type="text" class="form-control  border-bottom" id="police_veri_no"
                                            name="police_veri_no"
                                            value="{{ old('police_veri_no', $particularMstDriver->police_veri_no ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_veri_expiry_date" class="form-label">Verification Expiry
                                            Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            id="police_veri_expiry_date" name="police_veri_expiry_date"
                                            value="{{ old('police_veri_expiry_date', $particularMstDriver->police_veri_expiry_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Badge</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="badge_number" class="form-label ">Badge Number</label>
                                        <input type="text" class="form-control  border-bottom" id="badge_number"
                                            name="badge_number"
                                            value="{{ old('badge_number', $particularMstDriver->badge_number ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="badge_expiry_date" class="form-label ">Badge Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" id="badge_expiry_date"
                                            name="badge_expiry_date"
                                            value="{{ old('badge_expiry_date', $particularMstDriver->badge_expiry_date ?? '') }}">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Files</div>
                                {{-- component start --}}
                                <div id="driver_file_body" class="driver_file_body">

                                </div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_driver_file"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="additional_info" class="form-label">Additional Info</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="5">{{ old('additional_info', $particularMstDriver->additional_info ?? '') }}</textarea>
                        <span class="warning-msg-block"></span>
                    </div>

                    {{-- ======================= --}}



                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system.
                        <div class="mb-3">
                            <label for="driver_code" class="form-label ">Driver Code</label>
                            <input type="text" class="form-control  border-bottom" id="driver_code"
                                name="driver_code"
                                value="{{ old('driver_code', $particularMstDriver->driver_code ?? '') }}">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="is_contract"
                            name="is_contract"
                            {{ old('is_contract', $particularMstDriver->is_contract ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_contract">
                            Is Contractor?
                        </label>
                    </div>
                    {{-- <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="is_covid_vacinated" name="is_covid_vacinated">
                    <label class="form-check-label" for="is_covid_vacinated">
                        Enable app logout button
                    </label>
                </div> --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="is_covid_vacinated"
                            name="is_covid_vacinated"
                            {{ old('is_covid_vacinated', $particularMstDriver->is_covid_vacinated ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_covid_vacinated">
                            Is COVID vaccinated
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active"
                            {{ old('is_active', $particularMstDriver->is_active ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            // address_tax_body
            let particularmstDriver = @json($particularMstDriver);
            document.getElementById("daily_working_hours").innerHTML = generateTimeSlots(particularmstDriver
                .daily_working_hours);
            document.getElementById("working_hours_start").innerHTML = generateTimeSlots(particularmstDriver
                .working_hours_start);
            document.getElementById("working_hours_end").innerHTML = generateTimeSlots(particularmstDriver
                .working_hours_end);

            $("#formMyDrivers").validate({
                rules: {
                    name: {
                        required: true
                    },
                    mobile_no: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please Enter Name"
                    },
                    mobile_no: {
                        required: "Please Enter Mobile No"
                    }
                },
                errorElement: "div",
                errorClass: "error-message",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
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

            // Driver Address Start Here

            $(document).on('click', '.remove_address_tax_body', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_address').on('click', function() {
                const childCount = $('#address_tax_body').find('.d-flex').length + 1;
                console.log(childCount);



                var template = ` <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1 remove_address_tax_body"><i
                                                    class="fa-solid fa-minus"></i></button>
                                        </div>
                                        <div class="p-3 ps-0 w-100">
                                            <div class="panel border rounded">
                                                <div class="panel-heading bg-light p-3">Addresses</div>
                                                <div class="panel-body p-3">
                                                    <div class="mb-3">
                                                        <label for="address_file_name${childCount}" class="form-label">File Name </label>
                                                        <input type="text" class="form-control  border-bottom"
                                                            id="address_file_name${childCount}" name="address_file_name_${childCount}"
                                                            data-index=${childCount} >
                                                        <span class="warning-msg-block"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="address_type${childCount}" class="form-label">Type</label>
                                                        <select class="form-select border-bottom"
                                                            aria-label="Default select example" name="address_type_${childCount}"
                                                            id="address_type${childCount}"
                                                            data-index=${childCount}>
                                                            <option value="">Select an option</option>
                                                            <option value="home_address">Home Address</option>
                                                            <option value="permanent_address">Permanent Address</option>
                                                            <option value="temporary_address">Temporary Address</option>
                                                            <option value="village_address">Village Address</option>
                                                        </select>
                                                        <span class="warning-msg-block"></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="address${childCount}" class="form-label">Address </label>
                                                        <textarea class="form-control" 
                                                        name="address_${childCount}"
                                                        id="address${childCount}"
                                                        data-index=address${childCount} rows="5"></textarea>
                                                        <span class="warning-msg-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;

                $('#address_tax_body').append(template);


            });

            // Driver Address End Here

            // Driver Dedcution Start Here

            $(document).on('click', '.remove_deduction_body', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_deduction').on('click', function() {
                const childCount = $('#deduction_tax_body').find('.d-flex').length + 1;
                console.log(childCount);



                var template = `  <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_deduction_body"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Deductions</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="deduction_name${childCount}" class="form-label">Name</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                    name="deduction_name_${childCount}"
                                                        id="deduction_name${childCount}"
                                                        data-index=${childCount}>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deduction_amount${childCount}" class="form-label ">Amount</label>
                                                    <input type="number" class="form-control border-bottom"
                                                    name="deduction_amount_${childCount}"    
                                                    id="deduction_amount${childCount}"
                                                    data-index=${childCount}>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#deduction_tax_body').append(template);


            });

            // Driver Deduction End Here

            // Driver File Start Here
            $(document).on('click', '.remove_driver_file_body', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_driver_file').on('click', function() {
                const childCount = $('#driver_file_body').find('.d-flex').length + 1;
                console.log(childCount);



                var template = `   <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_driver_file_body"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                          
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="driver_file_name${childCount}" class="form-label">File Name </label>
                                                    <input type="text" class="form-control  border-bottom"
                                                    name=driver_file_name_${childCount}    
                                                    id="driver_file_name${childCount}"
                                                    data-index=${childCount}>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Upload </label>
                                                    <div>
                                                        <label for="qwer"
                                                            class="btn shadow-sm border rounded-1">Choose File</label>
                                                        <input type="file" 
                                                            class="form-control"
                                                            accept="image/png, image/gif, image/jpeg"
                                                            name="driver_file_${childCount}"
                                                            id="driver_file${childCount}"
                                                            data-index=${childCount}>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#driver_file_body').append(template);


            });

            // Driver File End Here

        });
    </script>
@endsection
