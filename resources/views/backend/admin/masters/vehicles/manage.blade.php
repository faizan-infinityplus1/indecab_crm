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
                            <label for="model_name" class="form-label required">Model Name <span class="text-danger">*</span></label>
                            <input type="text" name="model_name" class="form-control  border-bottom" id="model_name" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required"> Vehicle Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Avatar </label>
                    <p>Select a image/png, image/jpeg or image/jpg file to upload</p>
                    <div>
                        <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                        <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                            accept="image/png, image/gif, image/jpeg" style="display: none;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Seating Capacity (including driver) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Fuel Type <span class="text-danger">*</span></label>
                            <select class="form-select border-bottom" aria-label="Default select example" name=""
                                id=""  required>
                                <option value="selectOne">Select an option</option>
                                <option value="">Petrol</option>
                                <option value="">Diesel</option>
                                <option value="">CNG</option>
                                <option value="">Electric</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Category - Vehicle Group <span class="text-danger">*</span></label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="" required>
                                <option value="">Select an option</option>
                                <option value="">Sedan</option>
                                <option value="">innova toyota</option>
                                <option value="">Tempo Traveler 26 seater</option>
                                <option value="">Innova Crysta</option>
                                <option value="">TOYOTA COROLLA ALTIS</option>
                                <option value="">New Shape Ertiga</option>
                                <option value="">Honda City</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Colour</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Assigned Driver</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="" required>
                                <option value="">Select an option</option>
                                <option value="">Umar Shaikh (7507170274)</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Vehicle Code</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label required">Branches</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="" required>
                        <option value="">Select an option</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Loan</div>
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="" class="form-label ">EMI Amount</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Start Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">End Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Bank Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">EMI Day</label>
                                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                        <option value="">Select an option</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                        <option value="">13</option>
                                        <option value="">14</option>
                                        <option value="">15</option>
                                        <option value="">16</option>
                                        <option value="">17</option>
                                        <option value="">18</option>
                                        <option value="">19</option>
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                        <option value="">28</option>
                                        <option value="">29</option>
                                        <option value="">30</option>
                                        <option value="">31</option>
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
                                    <label for="" class="form-label ">Registered Owner Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Registration Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Chassis Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Engine Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Company Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Policy Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Issue Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Due Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Premium Amount</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Cover Amount</label>
                                    <input type="number" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label">Address </label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Tax Efficiency</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Details</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                            <div class="border-bottom">
                                <div class="p-3">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                                            <div>Permit - 1</div>
                                            <div>
                                                <button type="button" class="btn btn-danger d-flex"><i class="fa-solid fa-xmark"></i></button>
                                            </div>
                                        </div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Type</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label ">Expiry Date</label>
                                                <input type="date" class="form-control  border-bottom" id="">
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
                    <div class="col-md-6">
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
                                                <button type="button" class="btn btn-danger d-flex"><i class="fa-solid fa-xmark"></i></button>
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
                                                <p>
                                                    Select a pdf, image/png, image/jpeg, image/jpg, image/gif or word file to upload
                                                </p>
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

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Unavailable for duty
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
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
