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
                        <h1 class="h3 pb-3">New Vehicle</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form method="POST" action={{ route('vehicles.createOrUpdate', $vehicleId) }} id="formManageVehicle">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="model_name" class="form-label required">Model Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="model_name" class="form-control border-bottom" id="model_name"
                                    required>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="vehicle_no" class="form-label required"> Vehicle Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="vehicle_no" class="form-control border-bottom" id="vehicle_no"
                                    required>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Avatar </label>
                        <p>Select a image/png, image/jpeg or image/jpg file to upload</p>
                        <div>
                            <label for="" class="btn shadow-sm border rounded-1">Choose File</label>
                            <input type="file" name="" id="" affieldinput="[object Object]"
                                class="form-control" accept="image/png, image/gif, image/jpeg">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="seat_capacity" class="form-label required">Seating Capacity (including
                                    driver) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control border-bottom" name="seat_capacity"
                                    id="seat_capacity" required>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="fuel_type" class="form-label required">Fuel Type <span
                                        class="text-danger">*</span></label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="fuel_type" id="fuel_type" required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="CNG">CNG</option>
                                    <option value="Electric">Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_group_id" class="form-label required">Category - Vehicle Group <span
                                        class="text-danger">*</span></label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="vehicle_group_id" id="vehicle_group_id" required>
                                    <option value="">Select an option</option>
                                    {{-- <option value="">Sedan</option>
                                    <option value="">innova toyota</option>
                                    <option value="">Tempo Traveler 26 seater</option>
                                    <option value="">Innova Crysta</option>
                                    <option value="">TOYOTA COROLLA ALTIS</option>
                                    <option value="">New Shape Ertiga</option>
                                    <option value="">Honda City</option> --}}
                                    @foreach ($vehicleGroup as $vehicle)
                                        <option value="{{ $vehicle->id }}">
                                            {{ $vehicle->name }}</option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="color" class="form-label required">Colour</label>
                                <input type="text" class="form-control border-bottom" name="color" id="color">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="driver_id" class="form-label required">Assigned Driver</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="driver_id" id="driver_id">
                                    <option value="">Select an option</option>
                                    @foreach ($driver as $drv)
                                        <option value="{{ $drv->id }}">
                                            {{ $drv->name }} ({{ $drv->mobile_no }})
                                        </option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_code" class="form-label required">Vehicle Code</label>
                                <input type="text" class="form-control border-bottom" name="vehicle_code"
                                    id="vehicle_code">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="branches" class="form-label required">Branches</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name="branches"
                            id="branches">
                            <option value="">Select an option</option>
                            <option value="Branch 1">Branch 1</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Loan</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="loan_emi_amt" class="form-label ">EMI Amount</label>
                                        <input type="number" class="form-control border-bottom" name="loan_emi_amt"
                                            id="loan_emi_amt">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="loan_srt_date" class="form-label ">Start Date</label>
                                        <input type="date" class="form-control border-bottom" name="loan_srt_date"
                                            id="loan_srt_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="loan_end_date" class="form-label ">End Date</label>
                                        <input type="date" class="form-control border-bottom" name="loan_end_date"
                                            id="loan_end_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label ">Bank Name</label>
                                        <input type="text" class="form-control border-bottom" name="bank_name"
                                            id="bank_name">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emi_day" class="form-label">EMI Day</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="emi_day" id="emi_day">
                                            <option value="">Select an option</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Registration</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="reg_owner_name" class="form-label ">Registered Owner
                                            Name</label>
                                        <input type="text" class="form-control border-bottom" name="reg_owner_name"
                                            id="reg_owner_name">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reg_data" class="form-label ">Registration Date</label>
                                        <input type="date" class="form-control border-bottom" name="reg_data"
                                            id="reg_data">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Parts</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="parts_chasis_no" class="form-label ">Chassis Number</label>
                                        <input type="text" class="form-control border-bottom" name="parts_chasis_no"
                                            id="parts_chasis_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="parts_engine_no" class="form-label ">Engine Number</label>
                                        <input type="text" class="form-control border-bottom" name="parts_engine_no"
                                            id="parts_engine_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Insurance</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="insaurance_company_name" class="form-label ">Company Name</label>
                                        <input type="text" class="form-control border-bottom"
                                            name="insaurance_company_name" id="insaurance_company_name">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insaurance_policy_no" class="form-label ">Policy Number</label>
                                        <input type="text" class="form-control border-bottom"
                                            name="insaurance_policy_no" id="insaurance_policy_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insaurance_issue_date" class="form-label ">Issue Date</label>
                                        <input type="date" class="form-control border-bottom"
                                            name="insaurance_issue_date" id="insaurance_issue_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insaurance_due_date" class="form-label ">Due Date</label>
                                        <input type="date" class="form-control border-bottom"
                                            name="insaurance_due_date" id="insaurance_due_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insaurance_prem_amt" class="form-label ">Premium Amount</label>
                                        <input type="number" class="form-control border-bottom"
                                            name="insaurance_prem_amt" id="insaurance_prem_amt">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insaurance_cover_amt" class="form-label ">Cover Amount</label>
                                        <input type="number" class="form-control border-bottom"
                                            class="insaurance_cover_amt" id="insaurance_cover_amt">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">RTO</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="rto_address" class="form-label">Address </label>
                                        <textarea class="form-control" name="rto_address" id="rto_address" rows="5"></textarea>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rto_tax_efficiency" class="form-label ">Tax Efficiency</label>
                                        <input type="number" class="form-control border-bottom"
                                            name="rto_tax_efficiency" id="rto_tax_efficiency">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rto_exp_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control border-bottom" name="rto_exp_date"
                                            id="rto_exp_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Fitness</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="fitness_no" class="form-label ">Number</label>
                                        <input type="text" class="form-control border-bottom" name="fitness_no"
                                            id="fitness_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fitness_expiry_date" class="form-label">Expiry Date</label>
                                        <input type="date" class="form-control border-bottom"
                                            name="fitness_expiry_date" id="fitness_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Authorization</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="auth_no" class="form-label ">Number</label>
                                        <input type="text" class="form-control border-bottom" name="auth_no"
                                            id="auth_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="auth_expiry_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control border-bottom" name="auth_expiry_date"
                                            id="auth_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Speed Governer</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="speed_details" class="form-label ">Details</label>
                                        <input type="text" class="form-control border-bottom" name="speed_details"
                                            id="speed_details">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="speed_expiry_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control border-bottom" name="speed_expiry_date"
                                            id="speed_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">PUC</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="puc_no" class="form-label">Number</label>
                                        <input type="text" class="form-control border-bottom" name="puc_no"
                                            id="puc_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="puc_expiry_date" class="form-label">Expiry Date</label>
                                        <input type="date" class="form-control border-bottom" name="puc_expiry_date"
                                            id="puc_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Permits</div>
                                {{-- component start --}}
                                <div id="permitsContainer"></div>
                                {{-- <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                    <div class="p-3  ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div
                                                class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                                                <div>Permit - 1</div>
                                            </div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Type</label>
                                                    <input type="text" class="form-control border-bottom"
                                                        id="">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label ">Expiry Date</label>
                                                    <input type="date" class="form-control border-bottom"
                                                        id="">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" onclick="addPermits()" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Files</div>
                                {{-- component start --}}
                                <div id="fileContainer"></div>
                                {{-- <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
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
                                                    <input type="text" class="form-control border-bottom"
                                                        id="">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Upload </label>
                                                    <p>
                                                        Select a pdf, image/png, image/jpeg, image/jpg, image/gif or word
                                                        file to upload
                                                    </p>
                                                    <div>
                                                        <label for="qwer"
                                                            class="btn shadow-sm border rounded-1">Choose File</label>
                                                        <input type="file" name="" id="qwer"
                                                            affieldinput="[object Object]" class="form-control"
                                                            accept="image/png, image/gif, image/jpeg"
                                                            style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" onclick="addFiles()" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" name="unavail_for_duty"
                            id="unavail_for_duty">
                        <label class="form-check-label" for="unavail_for_duty">
                            Unavailable for duty
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="active" name="active">
                        <label class="form-check-label" for="active">
                            Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>


                    {{-- ================= --}}


                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script>
        //Permit logic start from here
        let permitIndex = 0;

        function addPermits(permit = {}) {

            permitIndex++;
            const permitsContainer = document.getElementById('permitsContainer');
            const permitDiv = document.createElement('div');
            permitDiv.setAttribute("permit-data-index", permitIndex);
            let PermitHtml = `
            <div class="d-flex border-bottom" >
                <div class="p-3">
                    <button type="button" class="btn btn-primary rounded-1" onclick="removePermit(${permitIndex})"><i class="fa-solid fa-minus"></i></button>
                </div>
                <div class="p-3 ps-0 w-100">
                    <div class="panel border rounded">
                        <div class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                            <div>Permit - ${permitIndex}</div>
                        </div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <input type="hidden" name="permits[${permitIndex}][id]" value="${permit.id || ''}" />
                                <label for="permits[${permitIndex}][type]" class="form-label">Type</label>
                                <input type="text" class="form-control border-bottom" name="permits[${permitIndex}][type]" value="${permit.type || ''}" id="permits[${permitIndex}][type]">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="permits[${permitIndex}][expiry_date]" class="form-label ">Expiry Date</label>
                                <input type="date" class="form-control border-bottom"  name="permits[${permitIndex}][expiry_date]" value="${permit.expiry_date || ''}" id="permits[${permitIndex}][expiry_date]">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            permitDiv.innerHTML = PermitHtml;
            permitsContainer.appendChild(permitDiv);
        }
        // Function to remove an address field
        function removePermit(index) {
            document.querySelector(`[permit-data-index="${index}"]`).remove();
        }

        let fileIndex = 0;

        function addFiles(file = {}) {
            // console.log("hello man");
            fileIndex++;
            const fileContainer = document.getElementById('fileContainer');
            const fileDiv = document.createElement('div');
            fileDiv.setAttribute("file-data-index", fileIndex);
            let fileHtml = `
            <div class="d-flex border-bottom">
                <div class="p-3">
                    <button type="button" class="btn btn-primary rounded-1" onclick="removeFile(${fileIndex})"><i class="fa-solid fa-minus"></i></button>
                </div>
                <div class="p-3 ps-0 w-100">
                    <div class="panel border rounded">
                        <div class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                            <div>Files</div>
                        </div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <input type="hidden" name="files[${fileIndex}][id]" value="${file.id || ''}" />
                                <label for="files[${fileIndex}][name]" class="form-label">File Name </label>
                                <input type="text" class="form-control border-bottom" name="files[${fileIndex}][name]" value="${file.name || ''}" id="files[${fileIndex}][name]">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="files[${fileIndex}][file]" class="form-label">Upload </label>
                                <p>Select a pdf, image/png, image/jpeg, image/jpg, image/gif or word file to upload</p>
                                <div>
                                    <label for="files[${fileIndex}][file]" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="files[${fileIndex}][file]" id="files[${fileIndex}][file]" class="form-control" accept="image/png, image/gif, image/jpeg" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
            fileDiv.innerHTML = fileHtml;
            fileContainer.appendChild(fileDiv);
        }
        // Function to remove an file field
        function removeFile(index) {
            document.querySelector(`[file-data-index="${index}"]`).remove();
        }
    </script>
@endsection
