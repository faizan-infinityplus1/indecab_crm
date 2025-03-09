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
                        <h1 class="h3 pb-3">New Company</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ $mstMyCompany ? route('companies.update', $mstMyCompany->id) : route('companies.store') }}"
                    method="post" id="formMyCompany" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Company Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control  border-bottom" id="name" name="name"
                                    value="{{ old('name', $mstMyCompany->name ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Supplier</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="supplier_id" id="supplier_id">
                                    <option value="">Select an Option</option>
                                    @foreach ($mstSupplier as $data)
                                        <option value="{{ $data->id }}"
                                            {{ old('supplier_id', optional($mstMyCompany)->supplier_id) == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach


                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label required">Code <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control  border-bottom" id="code" name="code"
                                    value="{{ old('code', $mstMyCompany->code ?? '') }}" required>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Business Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    id="business_type" name="business_type">
                                    <option value="selectOne">Select an option</option>
                                    <option value="proprietorship"
                                        {{ old('proprietorship', $mstMyCompany->business_type ?? '') == 'proprietorship' ? 'selected' : '' }}>
                                        Proprietorship</option>
                                    <option value="partnership"
                                        {{ old('partnership', $mstMyCompany->business_type ?? '') == 'partnership' ? 'selected' : '' }}>
                                        Partnership</option>
                                    <option value="llp"
                                        {{ old('llp', $mstMyCompany->business_type ?? '') == 'llp' ? 'selected' : '' }}>
                                        Limited Liability Partnership (LLP)</option>
                                    <option value="pvt_ltd"
                                        {{ old('pvt_ltd', $mstMyCompany->business_type ?? '') == 'pvt_ltd' ? 'selected' : '' }}>
                                        Private Limited</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="phone_no" name="phone_no"
                                    value="{{ old('phone_no', $mstMyCompany->phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Address </label>
                                <textarea class="form-control" id="address" name="address" rows="5">{{ old('address', $mstMyCompany->address ?? '') }}</textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 validator-error">
                                <label for="logo" class="form-label">Logo</label>
                                <div>
                                    <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="logo" id="logo" class="form-control"
                                        accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Digital Signature</label>
                                <div>
                                    <label for="digital_sign" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="digital_sign" id="digital_sign" class="form-control"
                                        accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Alternate Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="alternate_phone_no"
                                    name="alternate_phone_no"
                                    value="{{ old('alternate_phone_no', $mstMyCompany->alternate_phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">City</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="city" id="city">

                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="vat" class="form-label">VAT TIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="vat" name="vat"
                                    value="{{ old('vat', $mstMyCompany->vat ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="service_tax_no" class="form-label">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" id="service_tax_no"
                                    name="service_tax_no"
                                    value="{{ old('service_tax_no', $mstMyCompany->service_tax_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="cin_no" class="form-label">CIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="cin_no" name="cin_no"
                                    value="{{ old('cin_no', $mstMyCompany->cin_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="sac_hsn_code" class="form-label">SAC/HSN/Accounting code</label>
                                <input type="text" class="form-control  border-bottom" id="sac_hsn_code"
                                    name="sac_hsn_code"
                                    value="{{ old('sac_hsn_code', $mstMyCompany->sac_hsn_code ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 validator-error">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control  border-bottom" id="email" name="email"
                                    value="{{ old('email', $mstMyCompany->email ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="state" class="form-label ">States of operations</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="state" id="state">

                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" class="form-control  border-bottom" id="pincode" name="pincode"
                                    value="{{ old('pincode', $mstMyCompany->pincode ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="cst_tin_no" class="form-label">CST TIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="cst_tin_no"
                                    name="cst_tin_no" value="{{ old('cst_tin_no', $mstMyCompany->cst_tin_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="pan_no" class="form-label">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" id="pan_no" name="pan_no"
                                    value="{{ old('pan_no', $mstMyCompany->pan_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="gst_no" class="form-label">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="gst_no" name="gst_no"
                                    value="{{ old('gst_no', $mstMyCompany->gst_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel border rounded mb-3 validator-error">
                        <div class="panel-heading bg-light p-3">Settings</div>
                        <div class="p-3">
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Default profile</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="company_profile_id" id="company_profile_id">
                                    <option value="">Select an Option</option>
                                    @foreach ($mstCompanyProfile as $data)
                                        <option value="{{ $data->id }}"
                                            {{ old('company_profile_id', optional($mstMyCompany)->company_profile_id) == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach

                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3 validator-error">
                                <label for="" class="form-label">Duty Slip - Terms & Conditions</label>
                                <textarea class="form-control" id="term_condition" name="term_condition" rows="5">{{ old('term_condition', $mstMyCompany->term_condition ?? '') }}</textarea>
                                <span class="warning-msg-block"></span>
                            </div>

                        </div>
                    </div>
                    <div class="form-check mb-3 validator-error">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active"
                            {{ old('is_active', $mstMyCompany->is_active ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Active
                        </label>
                    </div>
                    <div class="form-check mb-3 validator-error">
                        <input class="form-check-input" type="checkbox" value="1" name="is_inv_company"
                            id="is_inv_company"
                            {{ old('is_inv_company', $mstMyCompany->is_inv_company ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Is Proforma Invoice Company?
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                    <a href="{{ route('companies.index') }}" class="btn btn-danger rounded-1">CANCEL</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script src="{{ asset('admin/js/cities.js') }}"></script>
    <script src="{{ asset('admin/js/states.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script>
        let mstMyCompany = @json($mstMyCompany) || {}; // Set default empty object if null

        $(document).ready(function() {

            $.validator.addMethod("validPhone", function(value, element) {
                return this.optional(element) || /^[0-9]{10}$/.test(value);
            }, "Please enter a valid 10-digit number");

            $.validator.addMethod("validEmail", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(
                    value);
            }, "Please enter a valid email address");

            $("#formMyCompany").validate({
                rules: {
                    name: {
                        required: true
                    },
                    code: {
                        required: true,

                    },
                    phone_no: {
                        required: false,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                        validPhone: true
                    },
                    alternate_phone_no: {
                        required: false,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                        validPhone: true
                    },
                    pincode: {
                        required: false,
                        digits: true,
                        minlength: 6,
                        maxlength: 6
                    },
                    email: {
                        required: false,
                        validEmail: true
                    },
                    pan_no: {
                        required: false,
                        minlength: 10,
                        maxlength: 10,
                    },
                    aadhar_no: {
                        required: false,
                        minlength: 12,
                        maxlength: 12,
                    },
                    gst_no: {
                        required: false,
                        minlength: 15,
                        maxlength: 15,
                    }

                },
                messages: {
                    name: {
                        required: "Name is required"
                    },
                    code: {
                        required: "Code is required",
                    },
                    phone_no: {
                        required: "Mobile number is required",
                        digits: "Please enter only numbers",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits", // Fixed typo
                        validMobile: "Please enter a valid 10-digit mobile number"
                    },
                    alternate_phone_no: {
                        required: "Alternate mobile number is required",
                        digits: "Please enter only numbers",
                        minlength: "Alternate mobile number must be exactly 10 digits",
                        maxlength: "Alternate mobile number be exactly 10 digits",
                        validMobile: "Please enter a valid 10-digit alternate mobile number"
                    },
                    pincode: {
                        required: "Pincode is required",
                        digits: "Please enter only numbers",
                        minlength: "Pincode must be exactly 6 digits",
                        maxlength: "Pincode must be exactly 6 digits"
                    },
                    email: {
                        required: "Email is required",
                        email: "Please enter a valid email address"
                    },
                    pan_no: {
                        minlength: "PAN Card number must be at least 10 characters",
                        maxlength: "PAN Card number must be at least 10 characters",
                    },
                    aadhar_no: {
                        minlength: "Aadhaar Card number must be at least 12 characters",
                        maxlength: "Aadhaar Card number must be at least 12 characters",
                    },
                    gst_no: {
                        minlength: "Gst number must be at least 15 characters",
                        maxlength: "Gst Card number must be at least 15 characters",
                    }
                },
                errorElement: "div",
                errorClass: "error-message text-danger",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color",
                        "red"); // Fixed selector
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color",
                        "black"); // Fixed selector
                },
                invalidHandler: function(event, validator) {
                    if (validator.errorList.length) {
                        showAlert('error', validator.errorList[0].message);
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });


            let city = mstMyCompany.city || "";
            document.getElementById("city").innerHTML = generateCityOptions(city);

            let state = mstMyCompany.state || "";
            document.getElementById("state").innerHTML = generateStateOptions(state);
        });
    </script>
@endsection
