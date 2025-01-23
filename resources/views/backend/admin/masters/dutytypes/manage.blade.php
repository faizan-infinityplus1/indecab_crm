@extends('layouts.admin-master')
@section('content')
    <style>

    </style>
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Duty Types</h1>
                    </div>
                </div>
            </div>
            {{-- page heading end --}}

            {{-- form start --}}
            <div>
                <form action="{{ $data ? route('dutytype.update', $data->id) : route('dutytype.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label required">Type</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id="selectedType" @change="changedType($event.target.value)" required>
                            <option value="selectOne">(Select One)</option>
                            <option value="hrKmLocal">HR-KM (Local)</option>
                            <option value="dayKmOutstation">Day-KM (Outstation)</option>
                            {{-- <option value="longDurationDaily" {{ $data->type == 'longDurationDaily' ? 'selected' : '' }}>Long
                                Duration - Total KM Daily HR (Monthly Bookings)</option> --}}
                            <option value="longDurationDaily"
                                {{ old('selectedType', $data->type ?? '') == 'longDurationDaily' ? 'selected' : '' }}>Long
                                Duration - Total KM Daily HR (Monthly Bookings)</option>

                            <option value="longDurationMonthly">Long Duration - Total KM &amp; HR (Monthly Bookings)
                            </option>
                            <option value="flatRate">Flat Rate</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Duty Type Name </label>
                        <input type="text" name="name" value="{{ old('name', $data->name ?? '') }}"
                            class="form-control  border-bottom" id="typeName" placeholder="Type Name" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    {{-- HR-KM (Local) --}}
                    <div>
                        <div class="mb-3" x-show="maxHours">
                            <label for="max_hours" class="form-label required">Maximum Hours </label>
                            <input type="number" class="form-control  border-bottom" id="max_hours" name="max_hours"
                                value="{{ old('maxHours', $data->max_hours ?? '') }}" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3" x-show="maxKm">
                            <label for="max_km" class="form-label required">Maximum Kilometers </label>
                            <input type="number" class="form-control  border-bottom" id="max_km" name="max_km"
                                value="{{ old('max_km', $data->max_km ?? '') }}" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    {{-- Day-KM (Outstation) --}}
                    <div>
                        <div class="mb-3" x-show="max_kmper_day">
                            <label for="max_kmper_day" class="form-label required">Maximum kilometers per day </label>
                            <input type="number" class="form-control  border-bottom" id="max_kmper_day"
                                name="max_kmper_day" value="{{ old('max_kmper_day', $data->max_kmper_day ?? '') }}"
                                required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="form-check mb-3" x-show="applyOutSideAllowance">
                            <input class="form-check-input" type="checkbox" id="applyOutSideAllowance"
                                name="applyOutSideAllowance"
                                {{ old('disdutroute', $data->disdutroute ?? '') ? 'checked' : '' }}>
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
                                value="{{ old('max_days', $data->max_days ?? '') }}" id="max_days" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3" x-show="maxHoursPerDay">
                            <label for="max_hours_per_day" class="form-label required">Maximum Hours per day </label>
                            <input type="number" class="form-control  border-bottom" id="max_hours_per_day"
                                name="max_hours_per_day"
                                value="{{ old('max_hours_per_day', $data->max_hours_per_day ?? '') }}" required>
                            <span class="warning-msg-block"></span>
                        </div>

                        <div class="mb-3" x-show="totalKm">
                            <label for="total_km" class="form-label required">Total Km </label>
                            <input type="number" class="form-control  border-bottom" id="total_km" name="total_km"
                                value="{{ old('total_km', $data->total_km ?? '') }}" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    {{-- Long Duration - Total KM & HR (Monthly Bookings) --}}
                    <div>
                        <div class="mb-3" x-show="totalHours">
                            <label for="total_hours" class="form-label required">Total Hours</label>
                            <input type="number" class="form-control  border-bottom" id="total_hours"
                                name="total_hours" value="{{ old('total_hours', $data->total_hours ?? '') }}" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    {{-- Long Duration - Total KM & HR (Monthly Bookings) --}}
                    <div class="mb-3">
                        <label for="city_limit" class="form-label">Limit this duty type to be selected only for these
                            cities</label>
                        <select id="city_limit" class="js-states form-control" name="city_limit[]" multiple>
                            <option>Agra</option>
                            <option>Delhi</option>
                            <option>Mumbai</option>
                            <option>Pune</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    <div x-show="subType">
                        <div class="mb-3">
                            <label for="subType" class="form-label required">Sub Type</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="subType"
                                id="subType">
                                <option value="">(Select One)</option>
                                <option value="">Airport</option>
                                <option value="">Local</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="p2p" name="P2P"
                            {{ old('p2p', $data->p2p ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="p2p">
                            Is Point to Point (P2P)? - For use with Indecab Go driver mobile app only
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="" name="g2g"
                            {{ old('g2g', $data->g2g ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="g2g">
                            Is Garage to Garage (GTG)? - For use with Indecab Go driver mobile app only
                        </label>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="g_strkmtim" name="g_strkmtim"
                                {{ old('g_strkmtim', $data->g_strkmtim ?? '') ? 'checked' : '' }}>
                            <label class="form-check-label" for="g_strkmtim">
                                Don't calculate Garage start KM & Time
                            </label>
                        </div>
                        <div class="form-check mb-3">

                            <input class="form-check-input" type="checkbox" id="g_endkmtim" name="g_endkmtim"
                                {{ old('g_endkmtim', $data->g_endkmtim ?? '') ? 'checked' : '' }}>
                            <label class="form-check-label" for="g_endkmtim">
                                Don't calculate Garage end KM & Time
                            </label>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="disdutroute" name="disdutroute"
                            {{ old('disdutroute', $data->disdutroute ?? '') ? 'checked' : '' }}>
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

            let columnValue = @json($data->city_limit ?? ''); // Pass it as JSON to avoid escaping issues

            // Split the value into an array
            let selectedValues = columnValue ? columnValue.split(',') : [];

            // Set the selected values
            $('#city_limit').val(selectedValues).trigger('change');
    </script>
@endsection
