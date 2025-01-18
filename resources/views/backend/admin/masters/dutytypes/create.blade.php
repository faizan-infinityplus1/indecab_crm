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
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            {{-- form start --}}
            <div>
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label required">Type</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id="" @change="changedType($event.target.value)" required>
                            <option value="1">(Select One)</option>
                            <option value="2">HR-KM (Local)</option>
                            <option value="3">Day-KM (Outstation)</option>
                            <option value="4">Long Duration - Total KM Daily HR (Monthly Bookings)</option>
                            <option value="5">Long Duration - Total KM &amp; HR (Monthly Bookings)</option>
                            <option value="6">Flat Rate</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3" >
                        <label for="" class="form-label required">Duty Type Name </label>
                        <input type="text" class="form-control  border-bottom" id="" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    {{-- HR-KM (Local) --}}
                    <div >
                        <div class="mb-3" x-show="maxHours">
                            <label for="" class="form-label required">Maximum Hours </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3" x-show="maxKm">
                            <label for="" class="form-label required">Maximum Kilometers </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    {{-- Day-KM (Outstation) --}}
                    <div>
                        <div class="mb-3" x-show="maxKmPerDay">
                            <label for="" class="form-label required">Maximum kilometers per day </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="form-check mb-3" x-show="applyOutSideAllowance">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Apply outstation allowance always
                            </label>
                        </div>
                    </div>

                    {{-- Long Duration - Total KM Daily HR (Monthly Bookings) --}}
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Maximum Hours per day </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Total Km </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Maximum days </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    {{-- Long Duration - Total KM & HR (Monthly Bookings) --}}
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Total Hours</label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Total Km </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Maximum days </label>
                            <input type="number" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="" class="form-label">Limit this duty type to be selected only for these
                            cities</label>
                        <select multiple class="form-select border-bottom" aria-label="Multiple select example"
                            name="" id="">
                            <option value="">City 1</option>
                            <option value="">City 2</option>
                            <option value="">City 3</option>
                            <option value="">City 4</option>
                            <option value="">City 5</option>
                            <option value="">City 6</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    {{-- Sub Type --}}
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Type</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id="">
                                <option value="">(Select One)</option>
                                <option value="">Airport</option>
                                <option value="">Local</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            Is Point to Point (P2P)? - For use with Indecab Go driver mobile app only
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            Is Garage to Garage (GTG)? - For use with Indecab Go driver mobile app only
                        </label>
                    </div>
                    <div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Don't calculate Garage start KM & Time
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Don't calculate Garage end KM & Time
                            </label>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
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
                totalHourse: false,
                reset() {
                    this.maxHours= false;
                    this.maxKm= false;
                    this.subType= false;
                    this.maxKmPerDay= false;
                    this.applyOutSideAllowance= false;
                    this.maxHoursPerDay= false;
                    this.totalKm= false;
                    this.maxDays= false;
                    this.totalHourse= false;
                },
                changedType(targetValue){
                    console.log("i m called", targetValue);
                    switch (targetValue) {
                        case "2":
                            console.log('i m called');
                            this.hrKmLocal();
                            break;
                    
                        default:
                            break;
                    }
                },
                hrKmLocal() {
                    this.reset();
                    this.maxHours = true;
                    this.maxKm = true;
                    this.subType = true;
                },
            }))
        })
    </script>
@endsection
