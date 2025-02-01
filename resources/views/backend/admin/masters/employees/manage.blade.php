@extends('layouts.admin-master')
@section('content')


<div>
    <div class="container-fluid px-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h1>New Employee</h1>
                </div>
                <div class="col-md-6 text-end">
                    {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                </div>
            </div>
        </div>
        {{-- page heading end --}}
        <div>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Name </label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alternate phone number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Email</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Photo</label>
                            <div>
                                <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                                    accept="image/png, image/gif, image/jpeg" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Employee ID</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Date of Joining</label>
                            <input type="date" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Employee ID</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Gender</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Transgender</option>
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
                                    <label for="" class="form-label ">Date of Joining</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Aadhar Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">PF Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">ESI Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">DL Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Badge Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Address </label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Blood group</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">PAN Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">UAN Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">ESI Dispensary Code</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">DL Exp. Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Badge Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Permanent Address</label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
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
                                    <label for="" class="form-label ">Father Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Mother Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Marriage date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Father's Date of Birth</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Mother's Date of Birth</label>
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
                            <div class="panel-heading bg-light p-3">License</div>
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Issued By</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">City</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">State</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label "> Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Display Card Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Display Card Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Verification Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Verification Expiry Date</label>
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
                            <div class="panel-heading bg-light p-3">Bank</div>
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Bank Name</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Account Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">IFSC Code</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
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
                                        <div
                                            class="panel-heading bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                                            <div>Files</div>
                                            <div>
                                                <button type="button" class="btn btn-danger"><i
                                                        class="fa-solid fa-xmark"></i></button>
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
                                                    <label for="qwer" class="btn shadow-sm border rounded-1">Choose
                                                        File</label>
                                                    <input type="file" name="" id="qwer" affieldinput="[object Object]"
                                                        class="form-control" accept="image/png, image/gif, image/jpeg"
                                                        style="display: none;">
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
                <div class="row">
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Account Access/Visibility & Settings</div>
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Branches</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="">
                                        <option value="selectOne">Select an option</option>
                                    </select>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Associate to Sister Company</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="">
                                        <option value="selectOne">Select an option</option>
                                    </select>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Visible Customers (keep blank for all)</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="">
                                        <option value="selectOne">Select an option</option>
                                    </select>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="">
                                    <label class="form-check-label" for="">
                                        Is API User?
                                    </label>
                                </div>
                                <div class="panel border rounded mb-3">
                                    <div class="panel-heading bg-light p-3">Add list of IP address to whitelist for this
                                        employee/user (if empty allow access from everywhere)</div>
                                    {{-- component start --}}
                                    <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1"><i
                                                    class="fa-solid fa-minus"></i></button>
                                        </div>
                                        <div class="p-3 ps-0 w-100">
                                            <div class="mb-3">
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- component end --}}
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1"><i
                                                class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="bg-light mb-3 p-3">
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
                                </div>
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