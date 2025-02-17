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
            <form action="{{ route('mydrivers.store') }}" method="post" id="formMyDrivers" enctype="multipart/form-data"> 
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label ">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control  border-bottom" id="name" name="name" >
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Avatar </label>
                    <div>
                        <label for="image" class="btn shadow-sm border rounded-1">Choose File</label>
                        <input type="file" name="image" id="image"  class="form-control"
                            accept="image/png, image/gif, image/jpeg" style="display: none;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mobile_no" class="form-label ">Mobile Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" id="mobile_no" name="mobile_no" >
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="pan_no" class="form-label ">PAN Card Number</label>
                            <input type="text" class="form-control  border-bottom" id="pan_no" name="pan_no">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label ">Birthdate</label>
                            <input type="date" class="form-control  border-bottom" id="birth_date" name="birth_date">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alternate_mobile_no" class="form-label ">Alternate Mobile number</label>
                            <input type="text" class="form-control  border-bottom" id="alternate_mobile_no" name="alternate_mobile_no" >
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="aadhar_no" class="form-label ">Aadhar Card Number</label>
                            <input type="number" class="form-control  border-bottom" id="aadhar_no" name="aadhar_no">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="joining_date" class="form-label ">Joining date</label>
                            <input type="date" class="form-control  border-bottom" id="joining_date" name="joining_date">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Addresses</div>
                            {{-- component start --}}
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light p-3">Addresses</div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">File Name </label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Type</label>
                                                <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                                    <option value="selectOne">Select an option</option>
                                                    <option value="">Home Address</option>
                                                    <option value="">Permanent Address</option>
                                                    <option value="">Temporary Address</option>
                                                    <option value="">Village Address</option>
                                                </select>
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Address </label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                                <span class="warning-msg-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            {{-- component end --}}
                            <div class="p-3">
                                <button type="button" class="btn btn-primary rounded-1"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="salary_per_month" class="form-label ">Salary per month</label>
                            <input type="number" class="form-control  border-bottom" id="salary_per_month" name="salary_per_month">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="daily_wages" class="form-label ">Daily Wages</label>
                            <input type="number" class="form-control  border-bottom" id="daily_wages" name="daily_wages">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="branches" class="form-label">Branches</label>
                    <input type="string" class="form-control  border-bottom" id="branches" name="branches">
                    <span class="warning-msg-block"></span>
                </div>

                <div class="mb-3">
                    <label for="daily_working_hours" class="form-label">Daily Working Hours</label>
                    <select class="form-select border-bottom" aria-label="Default select example"
                         id="daily_working_hours" name="daily_working_hours">
                      
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
                                        id="working_hours_start"  name="working_hours_start">
                                        
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
                                    <input type="number" class="form-control  border-bottom" id="daily_allowance" name="daily_allowance">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="allowance_over_time" class="form-label ">Over time per hour</label>
                                    <input type="number" class="form-control  border-bottom" id="allowance_over_time" name="allowance_over_time">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="allowance_outstation_per_day" class="form-label ">Outstation allowance per day</label>
                                    <input type="number" class="form-control  border-bottom" id="allowance_outstation_per_day" name="allowance_outstation_per_day">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="allowance_outstation_overnight" class="form-label ">Outstation overnight allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="allowance_outstation_overnight" name="allowance_outstation_overnight">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Sunday allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="sunday_allowance" name="sunday_allowance">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="early_start_allowance" class="form-label ">Early start allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="early_start_allowance"
                                    name="early_start_allowance">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="night_allowance" class="form-label ">Night allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="night_allowance"
                                    name="night_allowance">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="panel border rounded mb-3">
                                    <div class="panel-heading bg-light p-3">Extra duty allowance</div>
                                    <div class="p-3">
                                        <div class="mb-3">
                                            <label for="extra_duty_second" class="form-label ">Second duty</label>
                                            <input type="number" class="form-control  border-bottom" id="extra_duty_second" name="extra_duty_second">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="extra_duty_third" class="form-label ">Third duty</label>
                                            <input type="number" class="form-control  border-bottom" id="extra_duty_third" name="extra_duty_third"> 
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="extra_duty_fourth" class="form-label ">Fourth duty</label>
                                            <input type="number" class="form-control  border-bottom" id="extra_duty_fourth" name="extra_duty_fourth">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="extra_duty_fifth" class="form-label ">Fifth duty</label>
                                            <input type="number" class="form-control  border-bottom" id="extra_duty_fifth" name="extra_duty_fifth">
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
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light p-3">Deductions</div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Name</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label ">Amount</label>
                                                <input type="number" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- component end --}}
                            <div class="p-3">
                                <button type="button" class="btn btn-primary rounded-1"><i
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
                                    <input type="number" class="form-control  border-bottom" id="license_no" name="license_no">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="license_valid_upto" class="form-label ">Valid Upto</label>
                                    <input type="date" class="form-control  border-bottom" id="license_valid_upto" name="license_valid_upto">
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
                                    <input type="text" class="form-control  border-bottom" id="police_card_number" name="police_card_number" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="police_card_expiry_date" class="form-label">Display Card Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="police_card_expiry_date" name="police_card_expiry_date" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="police_veri_no" class="form-label">Verification Number</label>
                                    <input type="text" class="form-control  border-bottom" id="police_veri_no" name="police_veri_no" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="police_veri_expiry_date" class="form-label">Verification Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="police_veri_expiry_date" name="police_veri_expiry_date" >
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
                                    <input type="text" class="form-control  border-bottom" id="badge_number" name="badge_number">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="badge_expiry_date" class="form-label ">Badge Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="badge_expiry_date"
                                    name="badge_expiry_date">
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
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                                            <div>Files</div>
                                            <div>
                                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">File Name </label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Upload </label>
                                                <div>
                                                    <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                                    <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                                                        accept="image/png, image/gif, image/jpeg" style="display: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- component end --}}
                            <div class="p-3">
                                <button type="button" class="btn btn-primary rounded-1"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="additional_info" class="form-label">Additional Info</label>
                    <textarea class="form-control" id="additional_info" name="additional_info" rows="5"></textarea>
                    <span class="warning-msg-block"></span>
                </div>

                {{-- ======================= --}}



                <div class="bg-light mb-3 p-3">
                    You could use this field as unique identifier when integrating with another system.
                    <div class="mb-3">
                        <label for="driver_code" class="form-label ">Driver Code</label>
                        <input type="text" class="form-control  border-bottom" id="driver_code" name="driver_code">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="is_contract" name="is_contract">
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
                    <input class="form-check-input" type="checkbox" value="1" id="is_covid_vacinated" name="is_covid_vacinated">
                    <label class="form-check-label" for="is_covid_vacinated">
                        Is COVID vaccinated
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
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
                document.getElementById("daily_working_hours").innerHTML = generateTimeSlots();
            document.getElementById("working_hours_start").innerHTML = generateTimeSlots();
            document.getElementById("working_hours_end").innerHTML = generateTimeSlots();

</script>
@endsection