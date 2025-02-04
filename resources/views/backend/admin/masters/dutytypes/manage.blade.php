@extends('layouts.admin-master')
@section('content')
<div x-data="block">
    <div class="container-fluid p-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6 position-static" x-show="open">
                    <div class="position-absolute" style="top: 96px; left: 0px;">
                        <button type="button" class="btn" onclick="window.history.back()"><i
                            class="fa-solid fa-angle-left"></i></button>
                        {{-- <a href="{{route('')}}" class="text-decoration-none py-2 px-3 text-black-50 fw-light"><i
                                class="fa-solid fa-angle-left"></i></a> --}}
                    </div>
                    <h1 class="h3 pb-3">New Duty Type</h1>
                </div>
            </div>
        </div>
        {{-- page heading end --}}

        {{-- form start --}}
        <div>
            <form action="{{ $data ? route('dutytype.update', $data->id) : route('dutytype.store') }}" method="post"
                id="formDutyType">
                @csrf
                <div class="mb-3">
                    <label for="duty_type" class="form-label">Type <span class="text-danger">*</span></label>
                    <select class="form-select border-bottom" name="duty_type" id="selectedType"
                        @change="changedType($event.target.value)">
                        <option style="display:none;" value="">(Select One)</option>
                        <option value="hrKmLocal" {{ old('selectedType', $data->duty_type ?? '') == 'hrKmLocal' ?
                            'selected' : '' }}>HR-KM
                            (Local)
                        </option>
                        <option value="dayKmOutstation" {{ old('selectedType', $data->duty_type ?? '') ==
                            'dayKmOutstation' ? 'selected' : '' }}>
                            Day-KM
                            (Outstation)</option>
                        <option value="longDurationDaily" {{ old('selectedType', $data->duty_type ?? '') ==
                            'longDurationDaily' ? 'selected' : '' }}>
                            Long
                            Duration - Total KM Daily HR (Monthly Bookings)</option>

                        <option value="longDurationMonthly" {{ old('selectedType', $data->duty_type ?? '') ==
                            'longDurationMonthly' ? 'selected' : '' }}>
                            Long
                            Duration - Total KM &amp; HR (Monthly Bookings)
                        </option>
                        <option value="flatRate" {{ old('selectedType', $data->duty_type ?? '') == 'flatRate' ?
                            'selected' : '' }}>Flat Rate</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="duty_name" class="form-label">Duty Type Name <span class="text-danger">*</span></label>
                    <input type="text" name="duty_name" value="{{ old('name', $data->duty_name ?? '') }}"
                        class="form-control  border-bottom" id="duty_name" placeholder="">
                    <span class="warning-msg-block"></span>
                </div>
                {{-- HR-KM (Local) --}}
                <div>
                    <div class="mb-3" x-show="maxHours">
                        <label for="max_hours" class="form-label ">Maximum Hours </label>
                        <input type="number" class="form-control border-bottom" id="max_hours" name="max_hours"
                            value="{{ old('maxHours', $data->max_hours ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3" x-show="maxKm">
                        <label for="max_km" class="form-label ">Maximum Kilometers </label>
                        <input type="number" class="form-control  border-bottom" id="max_km" name="max_km"
                            value="{{ old('max_km', $data->max_km ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>
                {{-- Day-KM (Outstation) --}}
                <div>
                    <div class="mb-3" x-show="maxKmPerDay">
                        <label for="max_kmper_day" class="form-label ">Maximum kilometers per day </label>
                        <input type="number" class="form-control  border-bottom" id="max_kmper_day" name="max_kmper_day"
                            value="{{ old('max_kmper_day', $data->max_kmper_day ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="form-check mb-3" x-show="applyOutSideAllowance">
                        <input class="form-check-input" type="checkbox" id="applyOutSideAllowance"
                            name="apply_outside_allowance" {{ old('disdutroute', $data->disdutroute ?? '') ? 'checked' :
                        '' }} value="1">
                        <label class="form-check-label" for="applyOutSideAllowance">
                            Apply outstation allowance always
                        </label>
                    </div>
                </div>


                {{-- Long Duration - Total KM Daily HR (Monthly Bookings) --}}
                <div>


                    <div class="mb-3" x-show="maxDays">
                        <label for="max_days" class="form-label">Maximum days </label>
                        <input type="number" class="form-control  border-bottom" name="max_days"
                            value="{{ old('max_days', $data->max_days ?? '') }}" id="max_days">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3" x-show="maxHoursPerDay">
                        <label for="max_hours_per_day" class="form-label ">Maximum Hours per day </label>
                        <input type="number" class="form-control  border-bottom" id="max_hours_per_day"
                            name="max_hours_per_day"
                            value="{{ old('max_hours_per_day', $data->max_hours_per_day ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="mb-3" x-show="totalKm">
                        <label for="total_km" class="form-label ">Total Km </label>
                        <input type="number" class="form-control  border-bottom" id="total_km" name="total_km"
                            value="{{ old('total_km', $data->total_km ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>

                {{-- Long Duration - Total KM & HR (Monthly Bookings) --}}
                <div>
                    <div class="mb-3" x-show="totalHours">
                        <label for="total_hours" class="form-label ">Total Hours</label>
                        <input type="number" class="form-control  border-bottom" id="total_hours" name="total_hours"
                            value="{{ old('total_hours', $data->total_hours ?? '') }}">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>

                {{-- Long Duration - Total KM & HR (Monthly Bookings) --}}
                <div class="mb-3">
                    <label for="city_limit" class="form-label">Limit this duty type to be selected only for these
                        cities</label>
                    <select id="city_limit" class="js-states form-control" name="city_limit[]" multiple>
                        <?php
                            if($data->city_limit??''){
                            $selectedCities = explode(',',$data->city_limit);
                        }
                            ?>
                        <option value="Agra" {{ in_array('Agra', old('city_limit', $selectedCities ?? [])) ? 'selected'
                            : '' }}>Agra
                        </option>
                        <option value="Delhi" {{ in_array('Delhi', old('city_limit', $selectedCities ?? []))
                            ? 'selected' : '' }}>Delhi
                        </option>
                        <option value="Mumbai" {{ in_array('Mumbai', old('city_limit', $selectedCities ?? []))
                            ? 'selected' : '' }}>Mumbai
                        </option>
                        <option value="Pune" {{ in_array('Pune', old('city_limit', $selectedCities ?? [])) ? 'selected'
                            : '' }}>Pune
                        </option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>

                <div x-show="subType">
                    <div class="mb-3">
                        <label for="sub_type" class="form-label ">Sub Type</label>
                        <select class="form-select border-bottom" name="sub_type" id="sub_type">
                            <option value="select_one" {{ old('sub_type', $data->sub_type ?? '') == 'select_one' ?
                                'selected' : '' }}>(Select One)</option>
                            <option value="airport" {{ old('sub_type', $data->sub_type ?? '') == 'airport' ? 'selected'
                                : '' }}>Airport</option>
                            <option value="local" {{ old('sub_type', $data->sub_type ?? '') == 'local' ? 'selected' : ''
                                }}>Local</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="p2p" name="p2p" {{ old('p2p', $data->p2p ?? '')
                    ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="p2p">
                        Is Point to Point (P2P)? - For use with Indecab Go driver mobile app only
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="g2g" name="g2g" {{ old('g2g', $data->g2g ?? '')
                    ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="g2g">
                        Is Garage to Garage (GTG)? - For use with Indecab Go driver mobile app only
                    </label>
                </div>
                <div class="bg-light mb-3 p-3" id="toggleDiv">
                    {{-- <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="g_strkmtim" name="g_strkmtim" {{
                            old('g_strkmtim', $data->g_strkmtim ?? '') ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="g_strkmtim">
                            Don't calculate Garage start KM & Time
                        </label>
                    </div>
                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" id="g_endkmtim" name="g_endkmtim" {{
                            old('g_endkmtim', $data->g_endkmtim ?? '') ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="g_endkmtim">
                            Don't calculate Garage end KM & Time
                        </label>
                    </div> --}}
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="disdutroute" name="disdutroute" {{
                        old('disdutroute', $data->disdutroute ?? '') ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="disdutroute">
                        Disable Duty Route Log
                    </label>
                </div>


                <button type="submit" class="btn btn-primary rounded-1">SAVE</button>


            </form>

        </div>
        {{-- form end --}}
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
            Alpine.data('block', () => ({
                maxHours: false,
                maxKm: false,
                subType: false,
                maxKmPerDay: false,
                applyOutSideAllowance: false,
                maxHoursPerDay: false,
                totalKm: false,
                maxDays: false,
                totalHours: false,
                reset() {
                    this.maxHours = false;
                    this.maxKm = false;
                    this.subType = false;
                    this.maxKmPerDay = false;
                    this.applyOutSideAllowance = false;
                    this.maxHoursPerDay = false;
                    this.totalKm = false;
                    this.maxDays = false;
                    this.totalHours = false;
                },
                changedType(targetValue) {
                    console.log("i m called", targetValue);
                    switch (targetValue) {
                        case "selectOne":
                            console.log('i m called');
                            this.selectOne();
                            break;
                        case "hrKmLocal":
                            console.log('i m called');
                            this.hrKmLocal();
                            break;
                        case "dayKmOutstation":
                            console.log('i m called');
                            this.dayKmOutstation();
                            break;
                        case "longDurationDaily":
                            console.log('i m called');
                            this.longDurationDaily();
                            break;
                        case "longDurationMonthly":
                            console.log('i m called');
                            this.longDurationMonthly();
                            break;
                        case "flatRate":
                            console.log('i m called');
                            this.flatRate();
                            break;

                        default:
                            break;
                    }
                },
                selectOne() {
                    this.reset();
                },
                hrKmLocal() {
                    this.reset();
                    this.maxHours = true;
                    this.maxKm = true;
                    this.subType = true;
                },
                dayKmOutstation() {
                    this.reset();
                    this.maxKmPerDay = true;
                    this.applyOutSideAllowance = true;
                },
                longDurationDaily() {
                    this.reset();
                    this.maxHoursPerDay = true;
                    this.maxDays = true;
                    this.totalKm = true;
                },
                longDurationMonthly() {
                    this.reset();
                    this.maxHoursPerDay = true;
                    this.maxDays = true;
                    this.totalHours = true;
                },
                flatRate() {
                    this.reset();
                    this.subType = true;

                },

                init() {
                    const selectElement = document.getElementById(
                        'selectedType'); // Replace 'select-type' with your actual ID
                    const selectedValue = selectElement.value; // Get the selected value
                    this.changedType(selectedValue); // Pass it to the function
                },

            }))
        })

</script>
@endsection


@section('extrajs')
<script>
    $("#city_limit").select2({
            placeholder: "Select an Option",
            allowClear: true
        });
        // Laravel variable containing the comma-separated value from the database


        $(document).ready(function() {
            $("#formDutyType").validate({
                rules: {
                    duty_type: {
                        required: true
                    },
                    duty_name: {
                        required: true
                    }
                },
                messages: {

                    duty_type: {
                        required: "Please Select Select Type"
                    },

                    duty_name: {
                        required: "Please Enter Duty Type Name"
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });


            function toggleContent() {
                if($('#g2g').prop('checked')){
                    let content = `
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="g_strkmtim" name="g_strkmtim"
                                {{ old('g_strkmtim', $data->g_strkmtim ?? '') ? 'checked' : '' }} value="1">
                            <label class="form-check-label" for="g_strkmtim">
                                Don't calculate Garage start KM & Time
                            </label>
                        </div>
                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" id="g_endkmtim" name="g_endkmtim"
                                {{ old('g_endkmtim', $data->g_endkmtim ?? '') ? 'checked' : '' }} value="1">
                            <label class="form-check-label" for="g_endkmtim">
                                Don't calculate Garage end KM & Time
                            </label>
                        </div>
                    `;
                    $('#toggleDiv').html(content);
                    $('#toggleDiv').show();
                }
                else{
                    let content = ``;
                    $('#toggleDiv').html(content);
                    $('#toggleDiv').hide();
                }
            }

            // Initial check on page load
            toggleContent();

            // Add event listener to handle changes when the checkboxes are toggled
            $('#g2g').change(function () {
                toggleContent();
            });

        });
</script>
@endsection