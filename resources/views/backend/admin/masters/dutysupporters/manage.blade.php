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
                        <h1 class="h3 pb-3">New Duty Supporter</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('dutysupporters.store') }}" method="post" id="formDutySupporter"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" name="name" id="name">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label ">Type <span class="text-danger">*</span></label>
                        <select class="form-select border-bottom" aria-label="Default select example" name="type"
                            id="type">
                            <option value="">Select an option</option>
                            <option value="cleaner">Cleaner</option>
                            <option value="guide">Guide</option>
                            <option value="representative">Representative</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone_no" class="form-label ">Mobile Number</label>
                                <input type="text" class="form-control  border-bottom" name="phone_no" id="phone_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label ">PAN Card Number</label>
                                <input type="text" class="form-control  border-bottom" name="pan_no" id="pan_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label ">Birthdate</label>
                                <input type="date" class="form-control  border-bottom" name="birth_date" id="birth_date">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="alt_phone_no" class="form-label ">Alternate Mobile number</label>
                                <input type="text" class="form-control  border-bottom" name="alt_phone_no"
                                    id="alt_phone_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="aadhar_card" class="form-label ">Aadhar Card Number</label>
                                <input type="number" class="form-control  border-bottom" name="aadhar_card"
                                    id="aadhar_card">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="joining_date" class="form-label ">Joining date</label>
                                <input type="date" class="form-control  border-bottom" name="joining_date"
                                    id="joining_date">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="branches" class="form-label">Branches</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name="branches"
                            id="branches">
                            <option value="selectOne">Select an option</option>
                            <option value="selectOne">Select an option</option>
                            <option value="selectOne">Select an option</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    {{-- ======================= --}}

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
                                                    <label for="" class="form-label">Type</label>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name=""
                                                        id="">
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


                    <div class="mb-3">
                        <label for="ref_details" class="form-label">Reference Details</label>
                        <textarea class="form-control" name="ref_details" id="ref_details" rows="5"></textarea>
                        <span class="warning-msg-block"></span>
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
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Upload </label>
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
                        <input class="form-check-input" type="checkbox" value="1" name="active" id="active"
                            checked>
                        <label class="form-check-label" for="active">
                            Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
