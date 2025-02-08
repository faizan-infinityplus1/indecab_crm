@extends ('layouts.admin-master')
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
                        </div>
                        <h1 class="h3 pb-3">New Report</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="" method="">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label ">Select Report Type <span
                                class="text-danger">*</span></label>
                        {{-- use value of options as a class in index page label --}}
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id=""
                            @change="changedType($event.target.value)>
                            <option value="selectOne">Select
                            an option</option>
                            <option value="">Business report - Based on duty date</option>
                            <option value="">Business report - Based on invoice date</option>
                            <option value="">Customer Group Invoice Ageing</option>
                            <option value="">Customer Invoice Ageing</option>
                            <option value="">Number of Duties</option>
                            <option value="">Supplier Group Invoice Ageing</option>
                            <option value="">Supplier Invoice Ageing</option>
                            <option value="">Vehicle Profitability by Vehicle</option>
                            <option value="">Vehicle Profitability by Vehicle Group</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
                <form action="">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="p-3 ps-0 w-100">
                                <div class="panel border rounded mb-3">
                                    <div class="panel-heading bg-light p-3">Configure Report <span
                                            class="text-secondary">Business report - Based on invoice date</span> <span><a
                                                href="#">Change Report Type</a></span> </div>
                                    <div class="panel-body p-3">
                                        {{-- different type of slect group --}}

                                        {{-- Business report - Based on duty date --}}
                                        <div class="mb-3">
                                            <label for="" class="form-label">Select Group</label>
                                            <select class="form-select border-bottom" aria-label="Default select example"
                                                name="" id="">
                                                <option value="" disabled="" selected="">Select a property to
                                                    group the report by...</option>
                                                <option value="group_customers">Customers</option>
                                                <option value="group_customerGroups">Customer Groups</option>
                                                <option value="group_vehicles">Vehicles</option>
                                                <option value="group_vehicleGroups">Vehicle Groups</option>
                                                <option value="group_suppliers">Suppliers</option>
                                                <option value="group_supplierGroups">Supplier Groups</option>
                                                <option value="group_drivers">Drivers</option>
                                                <option value="group_dutySupporters">Duty Supporters</option>
                                                <option value="group_dutyTypes">Duty Types</option>
                                                <option value="group_cities">Cities</option>
                                                <option value="group_sisterCompanies">Sister Companies</option>
                                                <option value="group_labels">Labels</option>
                                                <option value="group_dispatchCenters">Branches</option>
                                            </select>
                                        </div>
                                        {{-- Business report - Based on duty date --}}
                                        {{-- =================== --}}
                                        {{-- Business report - Based on invoice date --}}
                                        <div class="mb-3">
                                            <label for="" class="form-label">Select Group</label>
                                            <select class="form-select border-bottom" aria-label="Default select example"
                                                name="" id="">
                                                <option value="" disabled="" selected="">Select a property to
                                                    group the report by...</option>
                                                <option value="group_customers">Customers</option>
                                                <option value="group_customerGroups">Customer Groups</option>
                                                <option value="group_suppliers">Suppliers</option>
                                                <option value="group_supplierGroups">Supplier Groups</option>
                                                <option value="group_sisterCompanies">Sister Companies</option>
                                            </select>
                                        </div>
                                        {{-- Business report - Based on invoice date --}}
                                        {{-- =================== --}}
                                        {{-- Customer Group Invoice Ageing --}}
                                        <div class="mb-3">
                                            <label for="" class="form-label">Select Group</label>
                                            <select class="form-select border-bottom" aria-label="Default select example"
                                                name="" id="">
                                                <option value="">[Select One]</option>
                                                <option value="today">As on today - Up to 1 year</option>
                                                <option value="prev_financial">Last Financial Year</option>
                                                <option value="custom">Custom</option>
                                            </select>
                                        </div>
                                        {{-- Customer Group Invoice Ageing --}}
                                        {{-- different type of slect group --}}

                                        <div class="mb-3">
                                            <label for="" class="form-label">Select filters</label>
                                            <select class="form-select border-bottom" aria-label="Default select example"
                                                name="" id="">
                                                <option value="selectOne">Select an option</option>
                                            </select>
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="row">
                                            {{-- different type of Date Range --}}
                                            <div class="col-md-4 mb-3">
                                                <label for="" class="form-label">Date Range</label>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
                                                    <option value="">[Select One]</option>
                                                    <option value="prev_month">Last Month</option>
                                                    <option value="prev_3_month">Last 3 Months</option>
                                                    <option value="prev_6_month">Last 6 Months</option>
                                                    <option value="prev_12_month">Last 12 Months</option>
                                                    <option value="prev_24_month">Last 2 Years</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </div>
                                            {{-- =================== --}}
                                            <div class="col-md-4 mb-3">
                                                <label for="" class="form-label">Date Range</label>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
                                                    <option value="">[Select One]</option>
                                                    <option value="today">As on today - Up to 1 year</option>
                                                    <option value="prev_financial">Last Financial Year</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </div>
                                            {{-- different type of Date Range --}}
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="" class="form-label ">Date of Joining</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <input type="date" class="form-control  border-bottom"
                                                            id="">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                        <input type="date" class="form-control  border-bottom"
                                                            id="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label ">Name Your Report</label>
                                            <input type="text" class="form-control  border-bottom" name="name"
                                                value="Business report - Based on invoice date" id="name">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-1">Get Report</button>
                                        <button type="submit" class="btn btn-light border rounded-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <script>
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
                            case "selcetOne":
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
                    withSelectGroup() {
                        this.reset();
                        this.maxHours = true;
                        this.maxKm = true;
                        this.subType = true;
                    },
                    withOutSelectGroup() {
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
    
    </script> --}}
@endsection
