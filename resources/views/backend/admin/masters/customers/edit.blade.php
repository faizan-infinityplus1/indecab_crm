@extends ('layouts.admin-master')
@section('content')
    <style>
        .ql-editor {
            min-height: 92px;
        }
    </style>
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Customer</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('customers.update', $particularMstCustomer->id) }}" method="post" id="formCustomer"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label ">Name </label>
                                <input type="text" class="form-control  border-bottom" name="name" id="name"
                                    value="{{ old('name', $particularMstCustomer->name ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address </label>
                                <textarea class="form-control" rows="10" name="address" id="address">
                                     {{ old('name', $particularMstCustomer->address ?? '') }}
                                </textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label ">Pin Code </label>
                                <input type="number" class="form-control  border-bottom" maxlength="6" name="pincode"
                                    id="pincode" value="{{ old('pincode', $particularMstCustomer->pincode ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label ">State</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name="state"
                                    id="state">

                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">

                                <label for="cust_groups_id" class="form-label ">Customer Group</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="cust_groups_id" id="cust_groups_id">
                                    <option style="display:none;" value="">option one</option>
                                    @foreach ($customerGroup as $data)
                                        <option value="{{ $data->id }}"
                                            {{ old('cust_groups_id', $data->id) == ($particularMstCustomer->cust_groups_id ?? '') ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="phone_no" class="form-label">Phone Number</label>
                                <input type="text" class="form-control border-bottom" name="phone_no" id="phone_no"
                                    value="{{ old('phone_no', $particularMstCustomer->phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="email_id" class="form-label ">Email Address</label>
                                <input type="email" class="form-control  border-bottom" name="email_id" id="email_id"
                                    value="{{ old('name', $particularMstCustomer->email_id ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label ">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" name="pan_no" id="pan_no"
                                    value="{{ old('name', $particularMstCustomer->pan_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="gst_no" class="form-label ">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" name="gst_no" id="gst_no"
                                    value="{{ old('gst_no', $particularMstCustomer->gst_no ?? '') }} ">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="tds_perc" class="form-label ">TDS Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="tds_perc" id="tds_perc"
                                    value="{{ old('gst_no', $particularMstCustomer->tds_perc ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="inv_def" class="form-label ">Invoice's default due date after - enter
                                    number of days</label>
                                <input type="number" class="form-control  border-bottom" name="inv_def" id="inv_def"
                                    value="{{ old('inv_def', $particularMstCustomer->inv_def ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="def_disc" class="form-label ">Default Discount %</label>
                                <input type="number" class="form-control  border-bottom" name="def_disc" id="def_disc"
                                    value="{{ old('def_disc', $particularMstCustomer->def_disc ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="base_city_fuel" class="form-label ">Select base city for fuel
                                    surcharge</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="base_city_fuel" id="base_city_fuel">
                                    <option class="d-none" value="">Select an option</option>

                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="sales_comis_perc" class="form-label ">Sales Commission Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="sales_comis_perc"
                                    id="sales_comis_perc"
                                    value="{{ old('sales_comis_perc', $particularMstCustomer->sales_comis_perc ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label ">Country (Used for exports class
                                    E-invoice)</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="country" id="country">
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="def_tax_classif" class="form-label ">Default Tax Classification - Used in
                                    Invoice for Tally</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="def_tax_classif" id="def_tax_classif">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="branch_transfer_outward"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'branch_transfer_outward' ? 'selected' : '' }}>
                                        Branch Transfer Outward</option>
                                    <option value="deemed_exports_exempt"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'deemed_exports_exempt' ? 'selected' : '' }}>
                                        Deemed Exports Exempt</option>
                                    <option value="deemed_exports_nil_rated"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'deemed_exports_nil_rated' ? 'selected' : '' }}>
                                        Deemed Exports Nil Rated</option>
                                    <option value="deemed_exports_taxable"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'deemed_exports_taxable' ? 'selected' : '' }}>
                                        Deemed Exports Taxable</option>
                                    <option value="exports_exempt"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'exports_exempt' ? 'selected' : '' }}>
                                        Exports Exempt</option>
                                    <option value="exports_lut_bond"
                                        {{ old('def_tax_classif', $particularMstCustomer->def_tax_classif ?? '') == 'exports_lut_bond' ? 'selected' : '' }}>
                                        Exports LUT/Bond</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="customer_id" class="form-label ">Custom Field - Related customer
                                    Id</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="customer_id" id="customer_id">
                                    <option class="d-none" value="">Select an option</option>
                                    @foreach ($mstCustomer as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light mb-3 p-3">
                                <b>GSTIN Billing details -</b> Only to be filled if this customer has different GSTIN
                                billing details.
                                <div class="mb-3">
                                    <label for="gst_name" class="form-label">Billing Name </label>
                                    <input type="text" class="form-control  border-bottom" name="gst_name"
                                        id="gst_name"
                                        value="{{ old('gst_name', $particularMstCustomer->gst_name ?? '') }}">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="gst_addr" class="form-label">Billing Address </label>
                                    <textarea class="form-control" rows="10" name="gst_addr" id="gst_addr">
                                        {{ old('gst_addr', $particularMstCustomer->gst_addr ?? '') }}
                                    </textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="gst_state" class="form-label ">State</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="gst_state" id="gst_state">

                                    </select>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_gst_primary"
                                        id="is_gst_primary"
                                        {{ old('is_gst_primary', $particularMstCustomer->is_gst_primary ?? '') ? 'checked' : '' }}
                                        value="1">
                                    <label class="form-check-label" for="is_gst_primary">
                                        Use billing name as primary name on invoice?
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_gst_tally"
                                        id="is_gst_tally"
                                        {{ old('is_gst_tally', $particularMstCustomer->is_gst_tally ?? '') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_gst_tally">
                                        Use billing name in Tally export?
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="altern_phone_no" class="form-label ">Alternate Phone Number</label>
                                <input type="text" class="form-control  border-bottom" name="altern_phone_no"
                                    id="altern_phone_no"
                                    value="{{ old('altern_phone_no', $particularMstCustomer->altern_phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="altern_email_id" class="form-label ">Alternate email address</label>
                                <input type="text" class="form-control  border-bottom" name="altern_email_id"
                                    id="altern_email_id"
                                    value="{{ old('altern_email_id', $particularMstCustomer->altern_email_id ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="serv_tax_no" class="form-label ">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" name="serv_tax_no"
                                    id="serv_tax_no"
                                    value="{{ old('serv_tax_no', $particularMstCustomer->serv_tax_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="gst_type" class="form-label ">GST Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="gst_type" id="gst_type">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="registered"
                                        {{ old('registered', $particularMstCustomer->gst_type ?? '') == 'registered' ? 'selected' : '' }}>
                                        Registered</option>
                                    <option value="un_registered"
                                        {{ old('un_registered', $particularMstCustomer->gst_type ?? '') == 'un_registered' ? 'selected' : '' }}>
                                        Un-registered</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="revrse_chrg" class="form-label ">Reverse Charge Applicable</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="revrse_chrg" id="revrse_chrg">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="no"
                                        {{ old('un_registered', $particularMstCustomer->revrse_chrg ?? '') == 'no' ? 'selected' : '' }}>
                                        No</option>
                                    <option value="yes"
                                        {{ old('un_registered', $particularMstCustomer->revrse_chrg ?? '') == 'yes' ? 'selected' : '' }}>
                                        Yes</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="surcharg_perc" class="form-label ">Surcharge Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="surcharg_perc"
                                    id="surcharg_perc"
                                    value="{{ old('surcharg_perc', $particularMstCustomer->surcharg_perc ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="def_car_chrg_disc" class="form-label ">Default Car Hire Charges Discount
                                    %</label>
                                <input type="number" class="form-control  border-bottom" name="def_car_chrg_disc"
                                    id="def_car_chrg_disc"
                                    value="{{ old('surcharg_perc', $particularMstCustomer->def_car_chrg_disc ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="force_fuel_type" class="form-label ">Forced Fuel Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="force_fuel_type" id="force_fuel_type">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="petrol"
                                        {{ old('force_fuel_type', $particularMstCustomer->force_fuel_type ?? '') == 'petrol' ? 'selected' : '' }}>
                                        Petrol</option>
                                    <option value="diesel"
                                        {{ old('force_fuel_type', $particularMstCustomer->force_fuel_type ?? '') == 'diesel' ? 'selected' : '' }}>
                                        Diesel</option>
                                    <option value="cng"
                                        {{ old('force_fuel_type', $particularMstCustomer->force_fuel_type ?? '') == 'cng' ? 'selected' : '' }}>
                                        CNG</option>
                                    <option value="electric"
                                        {{ old('force_fuel_type', $particularMstCustomer->force_fuel_type ?? '') == 'electric' ? 'selected' : '' }}>
                                        Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="feedback_id" class="form-label ">Default feedback form</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="feedback_id" id="feedback_id">
                                    <option class="d-none" value="">Select an option</option>
                                    @foreach ($feedbackForm as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="company_id" class="form-label ">Default Company</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="company_id" id="company_id">
                                    <option class="d-none" value="">Select an option</option>
                                    @foreach ($myCompany as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="branch" class="form-label">Branches</label>
                                <input type="text" class="form-control border-bottom" name="branch" id="branch"
                                    value="{{ old('branch', $particularMstCustomer->branch ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Booking/Duties Settings</div>
                                <div class="panel-body p-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Cities - Limit ability to add
                                            bookings to these cities</label>
                                        <select class="form-select border-bottom" aria-label="Default select example">
                                            <option class="d-none" value="">Select an option</option>
                                            <option value="">Abohar</option>
                                            <option value="">Abu Dhabi</option>
                                            <option value="">Adilabad</option>
                                            <option value="">Adoni</option>
                                            <option value="">Agartala</option>
                                            <option value="">Agra</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Duty Types - Limit ability to
                                            add bookings to these Duty Types</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">10Hr 80Km</option>
                                            <option value="">10hr100km</option>
                                            <option value="">11Hr 110Km</option>
                                            <option value="">11Hr 80Km</option>
                                            <option value="">12Hr 100</option>
                                            <option value="">12hr 120km</option>
                                            <option value="">12hr 130km</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Vehicle Group - Limit ability to
                                            add bookings to these Vehicle Groups</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">20 Seater</option>
                                            <option value="">25 Seater A/C</option>
                                            <option value="">35 Seater Bus</option>
                                            <option value="">400 Km</option>
                                            <option value="">45 A C Seater Bus</option>
                                            <option value="">49 seater Non AC Bus</option>
                                            <option value="">52 Seater Non Ac Bus</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Applicable Supplier Ids
                                            (Supplier allotment would be restricted to these suppliers only)</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">Abu Huzefa</option>
                                            <option value="">Afzal</option>
                                            <option value="">Airline tour and travels</option>
                                            <option value="">AMIGO ASSOCIATES</option>
                                            <option value="">Amjad Bhai Goa</option>
                                            <option value="">Anil patil</option>
                                            <option value="">Ankush Bhai</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Labels - Applied to
                                            booking</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">Cash Duty</option>
                                            <option value="">Cash Paid By Company</option>
                                            <option value="">Corporate</option>
                                            <option value="">Corporate VIP Guest</option>
                                            <option value="">Singh Duty</option>
                                            <option value="">VIP Guest</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Cities - To only consider extras
                                            that have higher total cost on invoice</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">Abohar</option>
                                            <option value="">Abu Dhabi</option>
                                            <option value="">Adilabad</option>
                                            <option value="">Adoni</option>
                                            <option value="">Agartala</option>
                                            <option value="">Agra</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Minimum garage start time to
                                            consider (in minutes)</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Minimum garage end time to
                                            consider (in minutes)</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Auto-create invoice when duty is completed
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Deny Booked by, Passenger and Additional contact info to be added to Master
                                            while adding a booking
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Enable addition of temporary passenger while creating booking
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Disable route log for duties of this customer
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Do not send SMS, WhatsApp and Email to passengers of this customer
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Do not send Start/End OTP SMS and WhatsApp to passengers of this customer
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Do not send SMS, WhatsApp and Email to this customer & it's additional contacts
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Do not send SMS, WhatsApp and Email to booked by's of this customer
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">

                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                                <div class="appli_tax_body" id="appli_tax_body">
                                    {{-- component start --}}
                                    @foreach ($mstApplicableTaxesCustomer as $data)
                                        <div class="d-flex border-bottom">
                                            <div class="p-3">
                                                <button type="button"
                                                    class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                    data-id={{ $data->id ?? '' }}>
                                                    <i class="fa-solid fa-minus"></i>
                                                </button>
                                            </div>
                                            <div class="p-3 ps-0 w-100">
                                                <div class="panel border rounded">
                                                    <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                                                    <div class="panel-body p-3">
                                                        <div class="mb-3">
                                                            <label for="appli_tax" class="form-label ">Tax</label>
                                                            <select class="form-select border-bottom"
                                                                aria-label="Default select example"
                                                                name="applitax_{{ $data->id }}_update" id="appli_tax"
                                                                data-index={{ $data->id ?? '' }}>
                                                                <option value="">(Select Tax)</option>

                                                                @foreach ($applicableTaxes as $taxesData)
                                                                    <option value="{{ $taxesData->id }}"
                                                                        {{ old('appli_tax', $taxesData->id ?? '') == $data->tax_id ? 'selected' : '' }}>
                                                                        {{ $taxesData->percentage }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="appli_tax_n_ch" value="1"
                                                                name="applitaxnch_{{ $data->id }}_update"
                                                                {{ old('inter_appli_tax_n_ch', $data->not_charged ?? '') ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="appli_tax_n_ch">
                                                                Not to be charged?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- component end --}}

                                </div>
                                <div class="p-3">
                                    <button type="button" id="extend_appli_tax" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>
                                <div class="inter_appli_tax_body" id="inter_appli_tax_body">

                                    {{-- component start --}}
                                    @foreach ($mstInterstateTaxesCustomer as $data)
                                        <div class="d-flex border-bottom">
                                            <div class="p-3">
                                                <button type="button"
                                                    class="btn btn-primary rounded-1 remove_inter_appli_tax_body"
                                                    data-id="{{ $data->id ?? '' }}"><i class="fa-solid fa-minus"></i>
                                                </button>
                                            </div>
                                            <div class="p-3 ps-0 w-100">
                                                <div class="panel border rounded">
                                                    <div class="panel-heading bg-light p-3">Applicable Interstate Taxes
                                                    </div>
                                                    <div class="panel-body p-3">
                                                        <div class="mb-3">
                                                            <label for="inter_appli_tax" class="form-label ">Tax</label>
                                                            <select class="form-select border-bottom"
                                                                aria-label="Default select example"
                                                                name="interapplitax_{{ $data->id }}_update"
                                                                id="inter_appli_tax">
                                                                @foreach ($applicableTaxes as $taxesData)
                                                                    <option value="{{ $taxesData->id }}"
                                                                        {{ old('appli_tax', $taxesData->id ?? '') == $data->tax_id ? 'selected' : '' }}>
                                                                        {{ $taxesData->percentage }}</option>
                                                                @endforeach

                                                            </select>
                                                            <span class="warning-msg-block"></span>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1" id="inter_appli_tax_n_ch"
                                                                name="interapplitaxnch_{{ $data->id }}_update">
                                                            <label class="form-check-label" for="inter_appli_tax_n_ch"
                                                                {{ old('inter_appli_tax_n_ch', $data->not_charged ?? '') ? 'checked' : '' }}>
                                                                Not to be charged?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" id="extend_inter_appli_tax"
                                        class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Driver Allowance Settings</div>
                                <div class="p-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">City Name</th>
                                                <th scope="col">Early Time</th>
                                                <th scope="col">Late Time</th>
                                                <th scope="col">Outstation Overnight Allowance Time</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="dri_allow_set_tax_body" id="dri_allow_set_tax_body">

                                            {{-- component start --}}

                                            {{-- component start --}}
                                            @foreach ($mstDriverCustomerSetting as $data)
                                                <tr>
                                                    <td>
                                                        <select class="form-select border-bottom dri_allow_set_city"
                                                            aria-label="Default select example"
                                                            name="driallowsetcity_{{ $data->id }}_update"
                                                            id="dri_allow_set_city"
                                                            data-dri-city="{{ $data->city_name ?? '' }}">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-select border-bottom dri_allow_set_early_time"
                                                            aria-label="Default select example"
                                                            name="driallowsetearlytime_{{ $data->id }}_update"
                                                            id="dri_allow_set_early_time"
                                                            data-start-dri-time="{{ $data->early_time ?? '' }}">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-select border-bottom dri_allow_set_late_time"
                                                            aria-label="Default select example"
                                                            name="driallowsetlatetime_{{ $data->id }}_update"
                                                            id="dri_allow_set_late_time"
                                                            data-end-dri-time="{{ $data->late_time ?? '' }}">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select
                                                            class="form-select border-bottom dri_allow_set_outst_overnig_time"
                                                            aria-label="Default select example"
                                                            name="driallowsetoutstovernigtime_{{ $data->id }}_update"
                                                            id="dri_allow_set_outst_overnig_time"
                                                            data-over-night-time="{{ $data->outsta_overnig_time ?? '' }}">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-danger py-0 remove_dri_allow_set"
                                                            data-id="{{ $data->id ?? '' }}">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            {{-- component end --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_dri_allow_set"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Duty Type Type Timings</div>
                                <div class="p-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Duty Type Type</th>
                                                <th scope="col">Start Time</th>
                                                <th scope="col">End Time</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="dut_typ_tim_body" id="dut_typ_tim_body">
                                            {{-- component start --}}
                                            @foreach ($mstDutyTypeCustomer as $data)
                                                <tr>
                                                    <td>
                                                        <select class="form-select border-bottom"
                                                            aria-label="Default select example"
                                                            name="duttyptim_{{ $data->id }}_update" id="dut_typ_tim">
                                                            <option value="">(Select Duty type type)</option>
                                                            <option value="hrKmLocal"
                                                                {{ old('dut_typ_tim', $data->duty_type ?? '') == 'hrKmLocal' ? 'selected' : '' }}>
                                                                HR-KM (Local)</option>
                                                            <option value="dayKmOutstation"
                                                                {{ old('dut_typ_tim', $data->duty_type ?? '') == 'dayKmOutstation' ? 'selected' : '' }}>
                                                                Day-KM (Outstation)</option>
                                                            <option value="longDurationDaily"
                                                                {{ old('dut_typ_tim', $data->duty_type ?? '') == 'longDurationDaily' ? 'selected' : '' }}>
                                                                Long Duration - Total KM
                                                                Daily HR (Monthly
                                                                Bookings)</option>
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <select class="form-select border-bottom"
                                                            aria-label="Default select example"
                                                            name="duttyptimstr_{{ $data->id }}_update"
                                                            id="dut_typ_tim_str"
                                                            data-start-time="{{ $data->start_time ?? '' }}">


                                                        </select>
                                                    </td>

                                                    <td>
                                                        <select class="form-select border-bottom"
                                                            aria-label="Default select example"
                                                            name="duttyptimend_{{ $data->id }}_update"
                                                            id="dut_typ_tim_end"
                                                            data-end-time="{{ $data->end_time ?? '' }}">>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-danger py-0 remove_dut_typ_tim"
                                                            data-id="{{ $data->id ?? '' }}">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            {{-- component end --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_dut_typ_tim"><i
                                            class="fa-solid fa-plus"></i> Add Another Timing</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Files</div>
                                <div class="files_body" id="files_body">

                                    {{-- component start --}}
                                    @foreach ($mstFilesCustomer as $data)
                                        <div class="d-flex border-bottom">
                                            <div class="p-3">
                                                <button type="button" class="btn btn-primary rounded-1 remove_files"
                                                    data-id="{{ $data->id ?? '' }}"><i
                                                        class="fa-solid fa-minus"></i></button>
                                            </div>
                                            <div class="p-3 ps-0 w-100">
                                                <div class="panel border rounded">
                                                    <div class="panel-heading bg-light p-3">Files</div>
                                                    <div class="panel-body p-3">
                                                        <div class="mb-3">
                                                            <label for="file_name" class="form-label">File Name </label>
                                                            <input type="text" class="form-control  border-bottom"
                                                                name="filename_{{ $data->id }}_update" id="file_name"
                                                                value="{{ old('name', $data->name ?? '') }}">
                                                            <span class="warning-msg-block"></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Upload </label>
                                                            <div>
                                                                <label for="image"
                                                                    class="btn shadow-sm border rounded-1">Choose
                                                                    File</label>
                                                                <input type="file" class="form-control"
                                                                    style="display: none;"
                                                                    name="image_{{ $data->id }}_update"
                                                                    id="image">
                                                                <a href="{{ asset('storage/' . $data->image) }}"
                                                                    alt="">{{ $data->image }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_files"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes</label>
                                <textarea class="form-control" rows="5" name="notes" id="notes">{{ old('notes', $particularMstCustomer->notes ?? '') }}</textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inv_term_cond" class="form-label">Invoice Terms & Conditions</label>
                                <textarea id="summernote" name="inv_term_cond">{{ old('inv_term_cond', $particularMstCustomer->inv_term_cond ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field would
                        be available in Duties & Invoice exports.
                        <div class="mb-3">
                            <label for="cust_code" class="form-label ">Customer Code</label>
                            <input type="text" class="form-control  border-bottom" name="cust_code" id="cust_code"
                                value="{{ old('cust_code', $particularMstCustomer->cust_code ?? '') }}">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact support@indecab.com to
                        learn how to enable this.
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" name="is_inv_og_hide"
                            id="is_inv_og_hide"
                            {{ old('is_inv_og_hide', $particularMstCustomer->is_inv_og_hide ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_inv_og_hide">
                            Always hide 'Original for recipient' on invoice
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active"
                            {{ old('is_active', $particularMstCustomer->is_active ?? '') ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            In-Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script src="{{ asset('admin/js/cities.js') }}"></script>
    <script src="{{ asset('admin/js/states.js') }}"></script>
    <script src="{{ asset('admin/js/timeslots.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script>
        $(document).ready(function() {

            // Duty Type Type Timings
            const startTimeElement = document.getElementById('dut_typ_tim_str');
            if (startTimeElement) {
                // data-appicable-tax-cross
                const startTime = startTimeElement.dataset.startTime;
                startTimeElement.innerHTML = generateTimeSlots(startTime);

                const endTimeElement = document.getElementById('dut_typ_tim_end');
                const endTime = endTimeElement.dataset.endTime;
                endTimeElement.innerHTML = generateTimeSlots(endTime);
            }

            // Driver Allowance Setting

            document.querySelectorAll('.dri_allow_set_city').forEach((element) => {
                const driCity = element.dataset.driCity;
                element.innerHTML = generateCityOptions(driCity);
            });

            document.querySelectorAll('.dri_allow_set_early_time').forEach((element) => {
                const startDriTime = element.dataset.startDriTime;
                element.innerHTML = generateTimeSlots(startDriTime);
            });

            document.querySelectorAll('.dri_allow_set_late_time').forEach((element) => {
                const endDriTime = element.dataset.endDriTime;
                element.innerHTML = generateTimeSlots(endDriTime);
            });

            document.querySelectorAll('.dri_allow_set_outst_overnig_time').forEach((element) => {
                const overNightTime = element.dataset.overNightTime;
                element.innerHTML = generateTimeSlots(overNightTime);
            });


            let particularMstCustomer = @json($particularMstCustomer);
            var applicableTaxes = @json($applicableTaxes);


            // Function to generate HTML for the options and set the selected attribute based on dynamic variables


            document.getElementById("base_city_fuel").innerHTML = generateCityOptions(particularMstCustomer
                .base_city_fuel);
            document.getElementById("country").innerHTML = generateCityOptions(particularMstCustomer.country);
            document.getElementById("state").innerHTML = generateStateOptions(particularMstCustomer.state);
            document.getElementById("gst_state").innerHTML = generateStateOptions(particularMstCustomer.gst_state);



            // document.getElementById("dut_typ_tim_str").innerHTML = generateStateOptions(startTime);
            // document.getElementById("dut_typ_tim_end").innerHTML = generateStateOptions(endTime);

            $("#formCustomer").validate({
                rules: {
                    name: {
                        required: false
                    }
                },
                messages: {
                    name: {
                        required: "Please Enter Name"
                    }
                },
                errorElement: "div",
                errorClass: "error-message text-danger",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

            $('#summernote').summernote({
                placeholder: '',
                tabsize: 2,
                height: 42
            });

            // Applicable Taxes Start Here
            $(document).on('click', '.remove_appli_tax_body', function() {
                console.log('Clicked delete button');

                let taxId = $(this).data('id'); // Get tax ID
                console.log("Tax ID:", taxId); // Debugging

                let parentDiv = $(this).closest('.d-flex');

                if (taxId === "new") {
                    // Handle dynamic rows (no database record)
                    parentDiv.remove();
                } else if (taxId === undefined || taxId === '' || taxId === null) {
                    // Handle invalid tax ID
                } else {
                    // Handle existing records (send AJAX request to delete from database)
                    $.ajax({
                        url: "{{ route('customers.delete.applicable.taxes', ':id') }}".replace(
                            ':id', taxId),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }
            });


            $('#extend_appli_tax').on('click', function() {
                const childCount = $('#appli_tax_body').find('.d-flex').length + 1;
                console.log(childCount);

                let taxOptions = '<option value="">(Select Tax)</option>';
                applicableTaxes.forEach(tax => {
                    taxOptions += `<option value="${tax.id}">${tax.percentage}</option>`;
                });

                var template = `<div class="d-flex border-bottom">
            <div class="p-3">
                <button type="button" class="btn btn-primary rounded-1 remove_appli_tax_body" data-index=${childCount} data-id="new">
                    <i class="fa-solid fa-minus"></i>
                </button>
            </div>
            <div class="p-3 ps-0 w-100">
                <div class="panel border rounded">
                    <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                    <div class="panel-body p-3">
                        <div class="mb-3">
                            <label for="appli_tax${childCount}" class="form-label ">Tax</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="applitax_${childCount}_new"
                                id="appli_tax${childCount}" data-index=${childCount} >
                                                            ${taxOptions}
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="appli_tax_n_ch${childCount}" value="1" name="applitaxnch_${childCount}_new" data-index=${childCount}>
                            <label class="form-check-label" for="appli_tax_n_ch${childCount}">
                                Not to be charged?
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

                $('#appli_tax_body').append(template);

                // For dynamic select fields
                $(`#appli_tax${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Please select a tax option"
                    }
                });

                // Revalidate the form (to make sure dynamic fields are validated correctly)

            });

            // Applicable Taxes End Here

            // Applicable Interstate Taxes Start Here

            $(document).on('click', '.remove_inter_appli_tax_body', function() {
                console.log('Clicked delete button');

                let taxId = $(this).data('id'); // Get tax ID
                console.log("Tax ID:", taxId); // Debugging

                let parentDiv = $(this).closest('.d-flex');

                if (taxId === "new") {
                    // Handle dynamic rows (no database record)
                    parentDiv.remove();
                } else if (taxId === undefined || taxId === '' || taxId === null) {
                    // Handle invalid tax ID
                } else {
                    // Handle existing records (send AJAX request to delete from database)
                    $.ajax({
                        url: "{{ route('customers.delete.interstate.taxes', ':id') }}".replace(
                            ':id', taxId),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }

            });

            $('#extend_inter_appli_tax').on('click', function() {
                const childCount = $('#inter_appli_tax_body').find('.d-flex').length + 1;
                console.log(childCount);
                let taxOptions = '<option value="">(Select Tax)</option>';
                applicableTaxes.forEach(tax => {
                    taxOptions += `<option value="${tax.id}">${tax.percentage}</option>`;
                });
                var template = `  <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_inter_appli_tax_body" data-id="new"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="inter_appli_tax${childCount}" class="form-label ">Tax</label>
                                                      <select class="form-select border-bottom" aria-label="Default select example" name="interapplitax_${childCount}_new"
                                id="inter_appli_tax${childCount}" data-index=${childCount} >
                                                                                                                   ${taxOptions}
                                                    </select>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="1" id="inter_appli_tax_n_ch${childCount}" name="interapplitaxnch${childCount}_new" data-index=${childCount}>
                                                    <label class="form-check-label" for="interapplitaxnch_${childCount}_new">
                                                        Not to be charged?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                $('#inter_appli_tax_body').append(template);

                $(`#inter_appli_tax${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Please select a tax option"
                    }
                });

            });

            // Applicable Interstate Taxes End Here

            // Driver Allowance Settings Start Here

            $(document).on('click', '.remove_dri_allow_set', function() {
                console.log('Clicked delete button');

                let driverAllowanceId = $(this).data('id'); // Get tax ID
                console.log("Tax ID:", driverAllowanceId); // Debugging

                let parentDiv = $(this).closest('tr');

                if (driverAllowanceId === "new") {
                    parentDiv.remove();
                } else {
                    $.ajax({
                        url: "{{ route('customers.delete.driver.allowance.setting', ':id') }}"
                            .replace(
                                ':id', driverAllowanceId),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }
            });

            $('#extend_dri_allow_set').on('click', function() {
                const childCount = $('#dri_allow_set_tax_body').find('tr').length + 1;
                console.log(childCount);

                var template = `    <tr>
                    <td>
                        <select class="form-select border-bottom"
                            aria-label="Default select example" name="driallowsetcity_${childCount}_new"  id="dri_allow_set_city${childCount}" data-index=${childCount}
                            >
                            ${generateCityOptions(particularMstCustomer.base_city_fuel)}

                        </select>
                    </td>
                    <td>
                        <select class="form-select border-bottom"
                            aria-label="Default select example" name="driallowsetearlytime_${childCount}_new" id="dri_allow_set_early_time${childCount}"
                            data-index=${childCount}
                            >
                                                                                    ${generateTimeSlots()}

                        </select>
                    </td>
                    <td>
                        <select class="form-select border-bottom"
                            aria-label="Default select example" name="driallowsetlatetime_${childCount}_new" id="dri_allow_set_late_time${childCount}"
                            data-index=${childCount}
                            >
                                                                                ${generateTimeSlots()}

                        </select>
                    </td>
                    <td>
                        <select class="form-select border-bottom"
                            aria-label="Default select example" name="driallowsetoutstovernigtime_${childCount}_new" id="driallow_set_outst_overnig_time${childCount}"
                            data-index=${childCount}
                            >
                                                                                    ${generateTimeSlots()}

                        </select>
                    </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger py-0 remove_dri_allow_set" data-id="new">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </td>
                                            </tr>`;

                $('#dri_allow_set_tax_body').append(template);


                $(`#dri_allow_set_city${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select City"
                    }
                });

                $(`#dri_allow_set_early_time${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Early Time"
                    }
                });

                $(`#dri_allow_set_late_time${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Late Time"
                    }
                });

                $(`#dri_allow_set_outst_overnig_time${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

            });

            // Driver Allowance Settings End Here


            $(document).on('click', '.remove_dut_typ_tim', function() {
                console.log('Clicked delete button');

                let dutyType = $(this).data('id'); // Get tax ID
                console.log("Tax ID:", dutyType); // Debugging

                let parentDiv = $(this).closest('tr');

                if (dutyType === "new") {
                    console.log('javascript dom deleted');
                    parentDiv.remove();
                } else {
                    $.ajax({
                        url: "{{ route('customers.delete.duty.type', ':id') }}".replace(
                            ':id', dutyType),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }
            });

            $('#extend_dut_typ_tim').on('click', function() {
                const childCount = $('#dut_typ_tim_body').find('tr').length + 1;
                console.log(childCount);

                var template = `      <tr>
                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="duttyptim_${childCount}_new" 
                                                     id="dut_typ_tim${childCount}"
                                                     data-index=${childCount}
                                                    >
                                                    <option value="">(Select Duty type type)</option>
                                                    <option value="hrKmLocal">HR-KM (Local)</option>
                                                    <option value="dayKmOutstation">Day-KM (Outstation)</option>
                                                    <option value="longDurationDaily">Long Duration - Total KM Daily HR (Monthly
                                                        Bookings)</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="duttyptimstr_${childCount}_new" 
                                                     id="dut_typ_tim_str${childCount}"
                                                     data-index=${childCount}
                                                    >
                                                                                                            ${generateTimeSlots()}

                                                </select>
                                            </td>

                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="duttyptimend_${childCount}_new" 
                                                    data-index=${childCount}
                                                     id="dut_typ_tim_end${childCount}"
                                                    >
                                                                                                           ${generateTimeSlots()}

                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger py-0 remove_dut_typ_tim" data-id="new" >
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </td>
                                        </tr>`;

                $('#dut_typ_tim_body').append(template);



                $(`#dut_typ_tim${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Duty Type"
                    }
                });

                $(`#dut_typ_tim_str${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Start Time"
                    }
                });

                $(`#dut_typ_tim_end${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select End Time"
                    }
                });
            });

            // Duty Type Type Timings End Here

            // Files Start Here

            $(document).on('click', '.remove_files', function() {
                console.log('Clicked delete button');

                let dutyType = $(this).data('id'); // Get tax ID
                console.log("Tax ID:", dutyType); // Debugging

                let parentDiv = $(this).closest('.d-flex');

                if (dutyType === "new") {
                    console.log('javascript dom deleted');
                    parentDiv.remove();
                } else {
                    $.ajax({
                        url: "{{ route('customers.delete.files', ':id') }}".replace(
                            ':id', dutyType),
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            parentDiv.remove();
                        },
                        error: function(response) {}
                    });
                }
            });

            $('#extend_files').on('click', function() {
                const childCount = $('#files_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `      <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_files" data-id="new"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Files</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="filename${childCount}" class="form-label">File Name </label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        name="filename_${childCount}_new"
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
                                                            name="image_${childCount}_new"
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
            $("#formCustomer").valid();

        });

        // Files End Here
    </script>
@endsection
