@extends('layouts.admin-master')
@section('content')

<style>
    .ql-editor {
        min-height: 92px;
    }
</style>
<div>
    <div class="container-fluid px-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h1>New Driver</h1>
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
                <div class="mb-3">
                    <label for="" class="form-label required">Name </label>
                    <input type="text" class="form-control  border-bottom" id="" required>
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

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Mobile Number</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">PAN Card Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Birthdate</label>
                            <input type="date" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Alternate Mobile number</label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Aadhar Card Number</label>
                            <input type="number" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Joining date</label>
                            <input type="date" class="form-control  border-bottom" id="">
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
                            <label for="" class="form-label required">Salary per month</label>
                            <input type="number" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Daily Wages</label>
                            <input type="number" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Branches</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="" >
                        <option value="selectOne">Select an option</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Daily Working Hours</label>
                    <select class="form-select border-bottom" aria-label="Default select example"
                        name="" id="">
                        <option value="00:00">00:00</option>
                        <option value="00:15">00:15</option>
                        <option value="00:30">00:30</option>
                        <option value="00:45">00:45</option>
                        <option value="01:00">01:00</option>
                        <option value="01:15">01:15</option>
                        <option value="01:30">01:30</option>
                        <option value="01:45">01:45</option>
                        <option value="02:00">02:00</option>
                        <option value="02:15">02:15</option>
                        <option value="02:30">02:30</option>
                        <option value="02:45">02:45</option>
                        <option value="03:00">03:00</option>
                        <option value="03:15">03:15</option>
                        <option value="03:30">03:30</option>
                        <option value="03:45">03:45</option>
                        <option value="04:00">04:00</option>
                        <option value="04:15">04:15</option>
                        <option value="04:30">04:30</option>
                        <option value="04:45">04:45</option>
                        <option value="05:00">05:00</option>
                        <option value="05:15">05:15</option>
                        <option value="05:30">05:30</option>
                        <option value="05:45">05:45</option>
                        <option value="06:00">06:00</option>
                        <option value="06:15">06:15</option>
                        <option value="06:30">06:30</option>
                        <option value="06:45">06:45</option>
                        <option value="07:00">07:00</option>
                        <option value="07:15">07:15</option>
                        <option value="07:30">07:30</option>
                        <option value="07:45">07:45</option>
                        <option value="08:00">08:00</option>
                        <option value="08:15">08:15</option>
                        <option value="08:30">08:30</option>
                        <option value="08:45">08:45</option>
                        <option value="09:00">09:00</option>
                        <option value="09:15">09:15</option>
                        <option value="09:30">09:30</option>
                        <option value="09:45">09:45</option>
                        <option value="10:00">10:00</option>
                        <option value="10:15">10:15</option>
                        <option value="10:30">10:30</option>
                        <option value="10:45">10:45</option>
                        <option value="11:00">11:00</option>
                        <option value="11:15">11:15</option>
                        <option value="11:30">11:30</option>
                        <option value="11:45">11:45</option>
                        <option value="12:00">12:00</option>
                        <option value="12:15">12:15</option>
                        <option value="12:30">12:30</option>
                        <option value="12:45">12:45</option>
                        <option value="13:00">13:00</option>
                        <option value="13:15">13:15</option>
                        <option value="13:30">13:30</option>
                        <option value="13:45">13:45</option>
                        <option value="14:00">14:00</option>
                        <option value="14:15">14:15</option>
                        <option value="14:30">14:30</option>
                        <option value="14:45">14:45</option>
                        <option value="15:00">15:00</option>
                        <option value="15:15">15:15</option>
                        <option value="15:30">15:30</option>
                        <option value="15:45">15:45</option>
                        <option value="16:00">16:00</option>
                        <option value="16:15">16:15</option>
                        <option value="16:30">16:30</option>
                        <option value="16:45">16:45</option>
                        <option value="17:00">17:00</option>
                        <option value="17:15">17:15</option>
                        <option value="17:30">17:30</option>
                        <option value="17:45">17:45</option>
                        <option value="18:00">18:00</option>
                        <option value="18:15">18:15</option>
                        <option value="18:30">18:30</option>
                        <option value="18:45">18:45</option>
                        <option value="19:00">19:00</option>
                        <option value="19:15">19:15</option>
                        <option value="19:30">19:30</option>
                        <option value="19:45">19:45</option>
                        <option value="20:00">20:00</option>
                        <option value="20:15">20:15</option>
                        <option value="20:30">20:30</option>
                        <option value="20:45">20:45</option>
                        <option value="21:00">21:00</option>
                        <option value="21:15">21:15</option>
                        <option value="21:30">21:30</option>
                        <option value="21:45">21:45</option>
                        <option value="22:00">22:00</option>
                        <option value="22:15">22:15</option>
                        <option value="22:30">22:30</option>
                        <option value="22:45">22:45</option>
                        <option value="23:00">23:00</option>
                        <option value="23:15">23:15</option>
                        <option value="23:30">23:30</option>
                        <option value="23:45">23:45</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Working Hours</div>
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Start</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="">
                                        <option value="00:00">00:00</option>
                                        <option value="00:15">00:15</option>
                                        <option value="00:30">00:30</option>
                                        <option value="00:45">00:45</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:15">01:15</option>
                                        <option value="01:30">01:30</option>
                                        <option value="01:45">01:45</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:15">02:15</option>
                                        <option value="02:30">02:30</option>
                                        <option value="02:45">02:45</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:15">03:15</option>
                                        <option value="03:30">03:30</option>
                                        <option value="03:45">03:45</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:15">04:15</option>
                                        <option value="04:30">04:30</option>
                                        <option value="04:45">04:45</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:15">05:15</option>
                                        <option value="05:30">05:30</option>
                                        <option value="05:45">05:45</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:15">06:15</option>
                                        <option value="06:30">06:30</option>
                                        <option value="06:45">06:45</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:15">07:15</option>
                                        <option value="07:30">07:30</option>
                                        <option value="07:45">07:45</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:15">08:15</option>
                                        <option value="08:30">08:30</option>
                                        <option value="08:45">08:45</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:15">09:15</option>
                                        <option value="09:30">09:30</option>
                                        <option value="09:45">09:45</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:15">10:15</option>
                                        <option value="10:30">10:30</option>
                                        <option value="10:45">10:45</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:15">11:15</option>
                                        <option value="11:30">11:30</option>
                                        <option value="11:45">11:45</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:15">12:15</option>
                                        <option value="12:30">12:30</option>
                                        <option value="12:45">12:45</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:15">13:15</option>
                                        <option value="13:30">13:30</option>
                                        <option value="13:45">13:45</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:15">14:15</option>
                                        <option value="14:30">14:30</option>
                                        <option value="14:45">14:45</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:15">15:15</option>
                                        <option value="15:30">15:30</option>
                                        <option value="15:45">15:45</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:15">16:15</option>
                                        <option value="16:30">16:30</option>
                                        <option value="16:45">16:45</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:15">17:15</option>
                                        <option value="17:30">17:30</option>
                                        <option value="17:45">17:45</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:15">18:15</option>
                                        <option value="18:30">18:30</option>
                                        <option value="18:45">18:45</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:15">19:15</option>
                                        <option value="19:30">19:30</option>
                                        <option value="19:45">19:45</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:15">20:15</option>
                                        <option value="20:30">20:30</option>
                                        <option value="20:45">20:45</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:15">21:15</option>
                                        <option value="21:30">21:30</option>
                                        <option value="21:45">21:45</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:15">22:15</option>
                                        <option value="22:30">22:30</option>
                                        <option value="22:45">22:45</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:15">23:15</option>
                                        <option value="23:30">23:30</option>
                                        <option value="23:45">23:45</option>
                                    </select>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">End</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="">
                                        <option value="00:00">00:00</option>
                                        <option value="00:15">00:15</option>
                                        <option value="00:30">00:30</option>
                                        <option value="00:45">00:45</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:15">01:15</option>
                                        <option value="01:30">01:30</option>
                                        <option value="01:45">01:45</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:15">02:15</option>
                                        <option value="02:30">02:30</option>
                                        <option value="02:45">02:45</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:15">03:15</option>
                                        <option value="03:30">03:30</option>
                                        <option value="03:45">03:45</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:15">04:15</option>
                                        <option value="04:30">04:30</option>
                                        <option value="04:45">04:45</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:15">05:15</option>
                                        <option value="05:30">05:30</option>
                                        <option value="05:45">05:45</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:15">06:15</option>
                                        <option value="06:30">06:30</option>
                                        <option value="06:45">06:45</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:15">07:15</option>
                                        <option value="07:30">07:30</option>
                                        <option value="07:45">07:45</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:15">08:15</option>
                                        <option value="08:30">08:30</option>
                                        <option value="08:45">08:45</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:15">09:15</option>
                                        <option value="09:30">09:30</option>
                                        <option value="09:45">09:45</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:15">10:15</option>
                                        <option value="10:30">10:30</option>
                                        <option value="10:45">10:45</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:15">11:15</option>
                                        <option value="11:30">11:30</option>
                                        <option value="11:45">11:45</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:15">12:15</option>
                                        <option value="12:30">12:30</option>
                                        <option value="12:45">12:45</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:15">13:15</option>
                                        <option value="13:30">13:30</option>
                                        <option value="13:45">13:45</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:15">14:15</option>
                                        <option value="14:30">14:30</option>
                                        <option value="14:45">14:45</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:15">15:15</option>
                                        <option value="15:30">15:30</option>
                                        <option value="15:45">15:45</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:15">16:15</option>
                                        <option value="16:30">16:30</option>
                                        <option value="16:45">16:45</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:15">17:15</option>
                                        <option value="17:30">17:30</option>
                                        <option value="17:45">17:45</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:15">18:15</option>
                                        <option value="18:30">18:30</option>
                                        <option value="18:45">18:45</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:15">19:15</option>
                                        <option value="19:30">19:30</option>
                                        <option value="19:45">19:45</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:15">20:15</option>
                                        <option value="20:30">20:30</option>
                                        <option value="20:45">20:45</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:15">21:15</option>
                                        <option value="21:30">21:30</option>
                                        <option value="21:45">21:45</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:15">22:15</option>
                                        <option value="22:30">22:30</option>
                                        <option value="22:45">22:45</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:15">23:15</option>
                                        <option value="23:30">23:30</option>
                                        <option value="23:45">23:45</option>
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
                                    <label for="" class="form-label ">Daily Allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Over time per hour</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Outstation allowance per day</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Outstation overnight allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Sunday allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Early start allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Night allowance</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="panel border rounded mb-3">
                                    <div class="panel-heading bg-light p-3">Extra duty allowance</div>
                                    <div class="p-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label ">Second duty</label>
                                            <input type="number" class="form-control  border-bottom" id="">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label ">Third duty</label>
                                            <input type="number" class="form-control  border-bottom" id="">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label ">Fourth duty</label>
                                            <input type="number" class="form-control  border-bottom" id="">
                                            <span class="warning-msg-block"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label ">Fifth duty</label>
                                            <input type="number" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label ">Number</label>
                                    <input type="number" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Valid Upto</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                                    <label for="" class="form-label">Display Card Number</label>
                                    <input type="text" class="form-control  border-bottom" id="" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Display Card Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Verification Number</label>
                                    <input type="text" class="form-control  border-bottom" id="" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Verification Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="" >
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
                                    <label for="" class="form-label ">Badge Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Badge Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
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
                    <label for="" class="form-label">Additional Info</label>
                    <textarea class="form-control" id="" rows="5"></textarea>
                    <span class="warning-msg-block"></span>
                </div>

                {{-- ======================= --}}



                <div class="bg-light mb-3 p-3">
                    You could use this field as unique identifier when integrating with another system.
                    <div class="mb-3">
                        <label for="" class="form-label ">Driver Code</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Is Contractor?
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Enable app logout button
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Is COVID vaccinated
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Active
                    </label>
                </div>
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection