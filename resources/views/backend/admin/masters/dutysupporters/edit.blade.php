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
                <form action="" method="post" id="formDutySupporter" enctype="multipart/form-data">
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
                                <div class="address_body" id="address_body">
                                    {{-- component start --}}
                                    {{-- <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
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
                                    </div> --}}
                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" id="extend_address" class="btn btn-primary rounded-1"><i
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
                                <div class="files_body" id="files_body">

                                    {{-- component start --}}

                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_files"><i
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
@section('extrajs')
    <script>
        $(document).ready(function() {


            $(document).on('click', '.remove_address_body', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_address').on('click', function() {
                const childCount = $('#address_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `    
                    <div class="d-flex border-bottom">
                        <div class="p-3">
                            <button type="button" class="btn btn-primary rounded-1 remove_address_body" data-index=${childCount}>
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>
                        <div class="p-3 ps-0 w-100">
                            <div class="panel border rounded">
                                <div class="panel-heading bg-light p-3">Addresses</div>
                                <div class="panel-body p-3">
                                    <div class="mb-3">
                                        <label for="duty_supporter_address_type" class="form-label">Type</label>
                                        <select class="form-select border-bottom"
                                            aria-label="Default select example" name="duty_supporter_address_type${childCount}"
                                            id="duty_supporter_address_type" data-index=${childCount}>
                                            <option value="selectOne">Select an option</option>
                                            <option value="home">Home Address</option>
                                            <option value="permanent">Permanent Address</option>
                                            <option value="temporary">Temporary Address</option>
                                            <option value="village">Village Address</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="duty_supporter_address${childCount}" class="form-label">Address </label>
                                        <textarea class="form-control" id="duty_supporter_address${childCount}" name="duty_supporter_address${childCount}" rows="5" data-index=${childCount}></textarea>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                $('#address_body').append(template);


                $(`#duty_supporter_address${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Add Address"
                    }
                });


            });


            // Files Start Here
            $(document).on('click', '.remove_files', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_files').on('click', function() {
                const childCount = $('#files_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `<div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_files"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Files</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="file_name${childCount}" class="form-label">File Name </label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        name="file_name${childCount}"
                                                        id="file_name${childCount}"
                                                        data-index=${childCount}>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image${childCount}" class="form-label">Upload </label>
                                                    <div>
                                                        <label for="image${childCount}"
                                                            class="btn shadow-sm border rounded-1">Choose File</label>
                                                        <input type="file" 
                                                            class="form-control"
                                                            style="display: none;"
                                                            name="image${childCount}"
                                                        id="image${childCount}"
                                                        data-index=${childCount}
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#files_body').append(template);
                $(`#file_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Enter File Name"
                    }
                });

                $(`#image${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Upload File"
                    }
                });


            });
        });
    </script>
@endsection
