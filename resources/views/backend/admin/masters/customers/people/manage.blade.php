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
                    <h1 class="h3 pb-3">New Person</h1>
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
                    <label for="" class="form-label ">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control  border-bottom" id="" >
                    <span class="warning-msg-block"></span>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label ">Phone number</label>
                            <input type="text" class="form-control  border-bottom" id="" >
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Alternate phone number</label>
                            <input type="text" class="form-control  border-bottom" id="" >
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label ">Email</label>
                            <input type="text" class="form-control  border-bottom" id="" >
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Alternate email</label>
                            <input type="number" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Notes (This note will only visible in invoice & booking if passenger has email id) </label>
                    <textarea class="form-control" id="" rows="5"></textarea>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Labels - Applied to booking</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="selectOne">Select an option</option>
                        <option value="">Cash Duty</option>
                        <option value="">Cash Paid By Company</option>
                        <option value="">Corporate</option>
                        <option value="">Corporate  VIP Guest</option>
                        <option value="">Singh Duty</option>
                        <option value="">VIP Guest</option>
                    </select>
                    <span class="warning-msg-block"></span>
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
                                                <label for="" class="form-label">Name</label>
                                                <input type="text" class="form-control  border-bottom" id="" placeholder="Type your address">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Address</label>
                                                <input type="text" class="form-control  border-bottom" id="" placeholder="Type your address">
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
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Custom Fields</div>
                            {{-- component start --}}
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                                    <option value="selectOne">[Select Custom Field]</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <input type="text" class="form-control  border-bottom" id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- component end --}}
                            <div class="p-3">
                                <button type="button" class="btn btn-primary rounded-1">Add another field</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Passenger
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Booked By
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Additional Contact
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Emergency Contact
                    </label>
                </div>

                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection