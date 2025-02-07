@extends('layouts.admin-master')
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
                        <h1 class="h3 pb-3">New Supplier</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('suppliers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label ">Name </label>
                                <input type="text" class="form-control  border-bottom" name="name" id="name">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address </label>
                                <textarea class="form-control" rows="10" name="address" id="address"></textarea>
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
                                <label for="type" class="form-label ">Type </label>
                                <select class="form-select border-bottom" aria-label="Default select example" name="type"
                                    id="selectedType" @change="changedType($event.target.value)">
                                    <option value="selectOne">Select One</option>
                                    <option value="driverCumOwners">Driver cum owners (DCO)/Attached</option>
                                    <option value="company">Company</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light mb-3 p-3">
                                <b>GSTIN Billing details -</b> Only to be filled if this supplier has different GSTIN
                                billing details.
                                <div class="mb-3">
                                    <label for="gst_name" class="form-label">Billing Name </label>
                                    <input type="text" class="form-control  border-bottom" name="gst_name"
                                        id="gst_name">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="gst_addr" class="form-label">Billing Address </label>
                                    <textarea class="form-control" rows="10" name="gst_addr" id="gst_addr"></textarea>
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
                                    <input class="form-check-input" type="checkbox" value="1" name="is_gst_tally"
                                        id="is_gst_tally">
                                    <label class="form-check-label" for="is_gst_tally">
                                        Use billing name in Tally export?
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="phone_no" class="form-label ">Phone Number</label>
                                <input type="text" class="form-control  border-bottom" name="phone_no" id="phone_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="email_id" class="form-label ">Email Address</label>
                                <input type="email" class="form-control  border-bottom" name="email_id" id="email_id">
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="gst_no" class="form-label ">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" name="gst_no" id="gst_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="gst_type" class="form-label ">GST Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="gst_type" id="gst_type">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="registered">Registered</option>
                                    <option value="un_registered">Un-registered</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="revrse_chrg" class="form-label ">Reverse Charge Applicable</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="revrse_chrg" id="revrse_chrg">
                                    <option class="d-none" value="">Select an option</option>
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="revenue_share_per" class="form-label ">Revenue Share Percentage</label>
                                <input type="text" class="form-control  border-bottom" name="revenue_share_per"
                                    id="revenue_share_per">
                                <span class="warning-msg-block"></span>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="surcharg_perc" class="form-label ">Surcharge Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="surcharg_perc"
                                    id="surcharg_perc">
                                <span class="warning-msg-block"></span>
                            </div> --}}

                        </div>
                        <div class="col-6">

                            <div class="mb-3">
                                <label for="altern_phone_no" class="form-label ">Alternate Phone Number</label>
                                <input type="number" class="form-control  border-bottom" name="altern_phone_no"
                                    id="altern_phone_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="altern_email_id" class="form-label ">Alternate email address</label>
                                <input type="text" class="form-control  border-bottom" name="altern_email_id"
                                    id="altern_email_id">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label ">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" name="pan_no" id="pan_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="serv_tax_no" class="form-label ">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" name="serv_tax_no"
                                    id="serv_tax_no">
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="tds_perc" class="form-label ">TDS Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="tds_perc"
                                    id="tds_perc">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label ">Pin Code </label>
                                <input type="number" class="form-control  border-bottom" maxlength="6" name="pincode"
                                    id="pincode">
                                <span class="warning-msg-block"></span>
                            </div>


                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="head_office_city" class="form-label ">Head office city</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="head_office_city" id="head_office_city">

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">Supplier Group</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                            id="">
                            <option value="">Select an option</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>

                    {{-- if select Driver cum owners (DCO)/Attached --}}
                    <div class="panel border rounded mb-3" x-show="driver_cum_owners_show">
                        <div class="panel-heading bg-light p-3">Details - Driver cum owners (DCO)/Attached</div>

                        <div class="p-3">
                            <div class="mb-3">
                                <label for="driver_image" class="form-label">Avatar</label>
                                <div>
                                    <label for="driver_image" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="driver_image" id="driver_image" class="form-control"
                                        accept="image/png, image/gif, image/jpeg" style="display: none;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="vehicle_model" class="form-label ">Vehicle Model</label>
                                <input type="text" class="form-control  border-bottom" name="vehicle_model"
                                    id="vehicle_model" value="{{$mstSupplierDriverCum->vehicle_model ?? ''}}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_no" class="form-label ">Vehicle Number</label>
                                <input type="text" class="form-control  border-bottom" name="vehicle_no"
                                    id="vehicle_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_fuel_type" class="form-label">Fuel Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="vehicle_fuel_type" id="vehicle_fuel_type">
                                    <option value="selectOne">Select an option</option>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="cng">CNG</option>
                                    <option value="electric">Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_image" class="form-label">Vehicle Photo</label>
                                <div>
                                    <label for="vehicle_image" class="btn shadow-sm border rounded-1">Choose File</label>
                                    <input type="file" name="vehicle_image" id="vehicle_image"
                                        affieldinput="[object Object]" class="form-control"
                                        accept="image/png, image/gif, image/jpeg" style="display: none;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="owner_name" class="form-label ">Owner Name</label>
                                <input type="text" class="form-control  border-bottom" name="owner_name"
                                    id="owner_name">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="owner_phone_no" class="form-label ">Owner Phone Number</label>
                                <input type="text" class="form-control  border-bottom" name="owner_phone_no"
                                    id="owner_phone_no">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Registration</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="regis_owner_name" class="form-label ">Registered Owner Name</label>
                                        <input type="text" class="form-control  border-bottom" id="regis_owner_name"
                                            name="regis_owner_name">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Registration Date</label>
                                        <input type="date" class="form-control  border-bottom" id="regis_date"
                                            name="regis_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Parts</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="parts_chasis_no" class="form-label ">Chassis Number</label>
                                        <input type="text" class="form-control  border-bottom" name="parts_chasis_no"
                                            id="parts_chasis_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="parts_engine_no" class="form-label ">Engine Number</label>
                                        <input type="text" class="form-control  border-bottom" name="parts_engine_no"
                                            id="parts_engine_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Insurance</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="insaurance_company_name" class="form-label ">Company Name</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="insaurance_company_name" id="insaurance_company_name">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insurance_policy_no" class="form-label ">Policy Number</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="insurance_policy_no" id="insurance_policy_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insurance_issue_date" class="form-label ">Issue Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="insurance_issue_date" id="insurance_issue_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insurance_due_date" class="form-label ">Due Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="insurance_due_date" id="insurance_due_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insurance_premium_account" class="form-label ">Premium Amount</label>
                                        <input type="number" class="form-control  border-bottom"
                                            name="insurance_premium_account" id="insurance_premium_account">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="insurance_cover_account" class="form-label ">Cover Amount</label>
                                        <input type="number" class="form-control  border-bottom"
                                            name="insurance_cover_account" id="insurance_cover_account">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">RTO</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="rto_address" class="form-label">Address </label>
                                        <textarea class="form-control" rows="5" name="rto_address" id="rto_address"></textarea>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rto_tax_efficiency" class="form-label ">Tax Efficiency</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="rto_tax_efficiency" id="rto_tax_efficiency">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rto_expiry_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" name="rto_expiry_date"
                                            id="rto_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Fitness</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="fitness_no" class="form-label ">Number</label>
                                        <input type="text" class="form-control  border-bottom" name="fitness_no"
                                            id="fitness_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fitness_expiry_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="fitness_expiry_date" id="fitness_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Authorization</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="auth_number" class="form-label ">Number</label>
                                        <input type="text" class="form-control  border-bottom" name="auth_number"
                                            id="auth_number">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="auth_expiry_date" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" name="auth_expiry_date"
                                            id="auth_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Speed Governer</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="speed_details" class="form-label ">Details</label>
                                        <input type="text" class="form-control  border-bottom" name="speed_details"
                                            id="speed_details">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="speed_expiry_date" id="speed_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">PUC</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Number</label>
                                        <input type="text" class="form-control  border-bottom" name="puc_number"
                                            id="puc_number">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Expiry Date</label>
                                        <input type="date" class="form-control  border-bottom" name="puc_expiry_date"
                                            id="puc_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Permits</div>
                                {{-- component start --}}
                                <div class="permits_tax_body" id="permits_tax_body">

                                </div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_permits"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>

                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">License Information</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Number</label>
                                        <input type="text" class="form-control  border-bottom" name="license_no"
                                            id="license_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Valid Upto</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="license_expiry_date" id="license_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Police</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Display Card Number</label>
                                        <input type="text" class="form-control  border-bottom" name="police_card_no"
                                            id="police_card_no">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_expiry_date" class="form-label ">Display Card Expiry
                                            Date</label>
                                        <input type="date" class="form-control border-bottom"
                                            name="police_expiry_date" id="police_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_veri_number" class="form-label ">Verification Number</label>
                                        <input type="text" class="form-control  border-bottom"
                                            name="police_veri_number" id="police_veri_number">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="police_veri_expiry_date" class="form-label ">Verification Expiry
                                            Date</label>
                                        <input type="date" class="form-control  border-bottom"
                                            name="police_veri_expiry_date" id="police_veri_expiry_date">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1"
                                    name="is_covid_vaccinated" id="is_covid_vaccinated">
                                <label class="form-check-label" for="is_covid_vaccinated">
                                    Is COVID vaccinated
                                </label>
                            </div>


                        </div>
                    </div>
                    {{-- Driver cum owners (DCO)/Attached end --}}

                    {{-- if select Company --}}
                    <div class="panel border rounded mb-3" x-show="company_show">
                        <div class="panel-heading bg-light p-3">Company - Details</div>
                        <div class="p-3">
                            <div class="mb-3">
                                <label for="owner_name" class="form-label ">Owner Name</label>
                                <input type="text" class="form-control border-bottom" name="owner_name"
                                    id="owner_name">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="vehicle_count" class="form-label ">Vehicle Count</label>
                                <input type="number" class="form-control  border-bottom" name="vehicle_count"
                                    id="vehicle_count">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    {{-- Company end --}}
                    <div class="mb-3">
                        <label for="def_tax_classif" class="form-label ">Default Tax Classification - Used in Purchase
                            Invoice
                            for
                            Tally</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="def_tax_classif" id="def_tax_classif">
                            <option value="" style="display: none">Select an option</option>
                            <option value="branch_transfer_inward">Branch Transfer Inward</option>
                            <option value="import_exempt">Imports Exempt</option>
                            <option value="import_nil_rated">Imports Nil Rated</option>
                            <option value="import_taxable">Imports Taxable</option>
                            <option value="inter_purch_exempt">Interstate Purchase Exempt</option>
                            <option value="inter_purch_nil_rated">Interstate Purchase Nil Rated</option>
                            <option value="inter_purch_taxable_5">Interstate Purchase Taxable - 5%</option>
                            <option value="inter_purch_taxable_12">Interstate Purchase Taxable - 12%</option>
                            <option value="inter_purch_taxable_18">Interstate Purchase Taxable - 18%</option>
                            <option value="inter_purch_unreg_dealer">Interstate Purchase From Unregistered Dealer - Exempt
                            </option>
                            <option value="inter_purch_unreg_deal_nil">Interstate Purchase From Unregistered Dealer - Nil
                                Rated</option>
                            <option value="inter_purch_unreg_deal_serv">Interstate Purchase From Unregistered Dealer -
                                Services</option>
                            <option value="inter_purch_unreg_deal_taxable">Interstate Purchase From Unregistered Dealer -
                                Taxable</option>
                            <option value="inter_purch_deem_export_exempt">Intrastate Purchase Deemed Exports - Exempt
                            </option>
                            <option value="inter_purch_deem_export_nil">Intrastate Purchase Deemed Exports - Nil Rated
                            </option>
                            <option value="inter_purch_deem_export_taxable">Intrastate Purchase Deemed Exports - Taxable
                            </option>
                            <option value="inter_purch_deem_export_exempt">Purchase Deemed Exports - Exempt</option>
                            <option value="inter_purch_deem_export_nil_rated">Purchase Deemed Exports - Nil Rated</option>
                            <option value="inter_purch_deem_export_taxable">Purchase Deemed Exports - Taxable</option>
                            <option value="purch_exempt">Purchase Exempt</option>
                            <option value="purch_nil_rated">Purchase Nil Rated</option>
                            <option value="purch_taxable_5">Purchase Taxable - 5%</option>
                            <option value="purch_taxable_12">Purchase Taxable - 12%</option>
                            <option value="purch_taxable_18">Purchase Taxable - 18%</option>
                            <option value="purch_compos_dealer">Purchase From Composition Dealer</option>
                            <option value="purch_sez_exempt">Purchase From SEZ - Exempt</option>
                            <option value="purch_sez_lut_bond">Purchase From SEZ - LUT/Bond</option>
                            <option value="purch_sez_nil_rated">Purchase From SEZ - Nil Rated</option>
                            <option value="purch_sez_taxable">Purchase From SEZ - Taxable</option>
                            <option value="purch_sez_wibil_exempt">Purchase From SEZ (Without Bill of Entry)- Exempt
                            </option>
                            <option value="purch_sez_wibile_nil_rated">Purchase From SEZ (Without Bill of Entry)- Nil Rated
                            </option>
                            <option value="purch_sez_wibile_taxable">Purchase From SEZ (Without Bill of Entry)- Taxable
                            </option>
                            <option value="purch_unreg_dealer_exempt">Purchase From Unregistered Dealer - Exempt</option>
                            <option value="purch_unreg_dealer_nil_rated">Purchase From Unregistered Dealer - Nil Rated
                            </option>
                            <option value="purch_unreg_dealer_taxable">Purchase From Unregistered Dealer - Taxable</option>
                            <option value="purch_rcm_5">Purchase RCM - 5%</option>
                            <option value="inter_purch_rcm_5">Interstate Purchase RCM - 5%</option>
                            <option value="inter_purch_rcm_12">Interstate Purchase RCM - 12%</option>
                            <option value="inter_purch_rcm-18">Interstate Purchase RCM - 18%</option>

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="tds_ledger_type" class="form-label ">TDS Ledger Type</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="tds_ledger_type" id="tds_ledger_type">
                            <option value="" style="display: none">Select an option</option>
                            <option value="tds_company_supplier">TDS - Company Supplier</option>
                            <option value="tds_individual_supplier">TDS - Individual Supplier</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                                <div class="appli_tax_body" id="appli_tax_body">
                                    {{-- component start --}}
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
                                <div class="panel-heading bg-light p-3">Working hours</div>
                                <div class="p-3">
                                    <div class="mb-3">
                                        <label for="start" class="form-label">Start</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="start" id="start">

                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end" class="form-label">End</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="end" id="end">

                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </div>


                    <div class="mb-3">
                        <label for="limit_allot_booking" class="form-label ">Limit ability to allot bookings to these
                            cities</label>
                        <select class="form-select border-bottom js-states" name="limit_allot_booking[]"
                            name="limit_allot_booking" id="limit_allot_booking" multiple>

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="limit_duty_type" class="form-label ">Duty Types - Limit ability to allot bookings to
                            these
                            Duty
                            Types</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="limit_duty_type[]" id="limit_duty_type" multiple>
                            @foreach ($mstDutyType as $data)
                                <option value="{{ $data->duty_name }}">{{ $data->duty_name }}</option>
                            @endforeach
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="vehi_group_limit" class="form-label ">Vehicle Group - Limit ability to allot bookings
                            to these
                            Vehicle Groups</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="vehi_group_limit" id="vehi_group_limit" multiple>
                            @foreach ($mstCatVehGroup as $data)
                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="branch" class="form-label">Branches</label>
                        <input type="text" class="form-control border-bottom" name="branch" id="branch">
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="cities_ext_hig_cost" class="form-label ">Cities - To only consider extras that have
                            higher total
                            cost on invoice</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="cities_ext_hig_cost[]" id="cities_ext_hig_cost" multiple>

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Bank Accounts</div>
                                <div class="bank_accounts_tax_body" id="bank_accounts_tax_body">

                                </div>
                                {{-- component start --}}

                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_bank_accounts"><i
                                            class="fa-solid fa-plus"></i></button>
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

                                    {{-- component end --}}
                                </div>
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1" id="extend_files"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- =============== --}}



                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field would
                        be available in duties exports.
                        <div class="mb-3">
                            <label for="supplier_code" class="form-label ">Supplier Code</label>
                            <input type="text" class="form-control border-bottom" name="supplier_code"
                                id="supplier_code">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>

                    {{-- <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="is_app_logout">
                        <label class="form-check-label" for="is_app_logout">
                            Enable app logout button
                        </label>
                    </div> --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="is_active" id="is_active">
                        <label class="form-check-label" for="is_active">
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
        document.addEventListener('alpine:init', () => {
            Alpine.data('block', () => ({
                driver_cum_owners_show: false,
                company_show: false,
                reset() {
                    this.driver_cum_owners_show = false;
                    this.company_show = false;
                },
                changedType(targetValue) {
                    console.log("i m called", targetValue);
                    switch (targetValue) {
                        case "selectOne":
                            console.log('i m called');
                            this.selectOne();
                            break;
                        case "driverCumOwners":
                            console.log('i m called');
                            this.driverCumOwners();
                            break;
                        case "company":
                            console.log('i m called');
                            this.company();
                            break;

                        default:
                            break;
                    }
                },
                selectOne() {
                    this.reset();
                },
                driverCumOwners() {
                    this.reset();
                    this.driver_cum_owners_show = true;
                },
                company() {
                    this.reset();
                    this.company_show = true;
                },

                init() {
                    const selectElement = document.getElementById(
                        'selectedType'); // Replace 'select-type' with your actual ID
                    const selectedValue = selectElement.value; // Get the selected value
                    this.changedType(selectedValue); // Pass it to the function
                },

            }))




            var applicableTaxes = @json($applicableTaxes);
            // console.log(cities);
            // document.getElementById("limit_allot_booking").innerHTML = generateCityOptions();
            document.getElementById("cities_ext_hig_cost").innerHTML = generateCityOptions();
            document.getElementById("start").innerHTML = generateTimeSlots();
            document.getElementById("end").innerHTML = generateTimeSlots();
            document.getElementById("state").innerHTML = generateStateOptions();
            document.getElementById("gst_state").innerHTML = generateStateOptions();

            console.log(generateCitySelect2());
            $("#limit_allot_booking").select2({
                placeholder: "Select an Option",
                allowClear: true,
                data: generateCitySelect2()
            });

            $("#limit_duty_type").select2({
                placeholder: "Select an Option",
                allowClear: true
            });
            $("#vehi_group_limit").select2({
                placeholder: "Select an Option",
                allowClear: true
            });
            $("#cities_ext_hig_cost").select2({
                placeholder: "Select an Option",
                allowClear: true
            });


            // Applicable Taxes
            // Applicable Taxes Start Here

            $(document).on('click', '.remove_appli_tax_body', function() {
                $(this).closest('.d-flex').remove();
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
                <button type="button" class="btn btn-primary rounded-1 remove_appli_tax_body" data-index=${childCount}>
                    <i class="fa-solid fa-minus"></i>
                </button>
            </div>
            <div class="p-3 ps-0 w-100">
                <div class="panel border rounded">
                    <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                    <div class="panel-body p-3">
                        <div class="mb-3">
                            <label for="appli_tax${childCount}" class="form-label ">Tax</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="appli_tax${childCount}"
                                id="appli_tax${childCount}" data-index=${childCount} >
                                                            ${taxOptions}
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="appli_tax_n_ch${childCount}" value="1" name="appli_tax_n_ch${childCount}" data-index=${childCount}>
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


            // Applicable Interstate Taxes Start Here

            $(document).on('click', '.remove_inter_appli_tax_body', function() {
                $(this).closest('.d-flex').remove();
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
                                        <button type="button" class="btn btn-primary rounded-1 remove_inter_appli_tax_body"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="inter_appli_tax${childCount}" class="form-label ">Tax</label>
                                                      <select class="form-select border-bottom" aria-label="Default select example" name="inter_appli_tax${childCount}"
                                id="inter_appli_tax${childCount}" data-index=${childCount} >
                                                                                                                   ${taxOptions}
                                                    </select>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="1" id="inter_appli_tax_n_ch${childCount}" name="inter_appli_tax_n_ch${childCount}" data-index=${childCount}>
                                                    <label class="form-check-label" for="inter_appli_tax_n_ch${childCount}">
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
                $(this).closest('tr').remove();
            });

            $('#extend_dri_allow_set').on('click', function() {
                const childCount = $('#dri_allow_set_tax_body').find('tr').length + 1;
                console.log(childCount);

                var template = `    <tr>
                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dri_allow_set_city${childCount}"  id="dri_allow_set_city${childCount}" data-index=${childCount}
                                                        >
                                                       ${generateCityOptions()}
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dri_allow_set_early_time${childCount}" id="dri_allow_set_early_time${childCount}"
                                                        data-index=${childCount}
                                                        >
                                                        ${generateTimeSlots()}
                                                    </select>
                                                </td>
                            <td>
                                <select class="form-select border-bottom"
                                    aria-label="Default select example" name="dri_allow_set_late_time${childCount}" id="dri_allow_set_late_time${childCount}"
                                    data-index=${childCount}
                                    >
                                                                                                ${generateTimeSlots()}

                                </select>
                            </td>
                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dri_allow_set_outst_overnig_time${childCount}" id="dri_allow_set_outst_overnig_time${childCount}"
                                                        data-index=${childCount}
                                                        >
                                                                                                                 ${generateTimeSlots()}

                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger py-0 remove_dri_allow_set">
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

            // Files Start Here
            $(document).on('click', '.remove_files', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_files').on('click', function() {
                const childCount = $('#files_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `      <div class="d-flex border-bottom">
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

            // Bank Accounts Start Here
            $(document).on('click', '.remove_bank_accounts', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_bank_accounts').on('click', function() {
                const childCount = $('#bank_accounts_tax_body').find('tr').length + 1;
                console.log(childCount);

                var template = `    
                 <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_bank_accounts">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Bank Accounts</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="file_name${childCount}" class="form-label">File Name </label>
                                                    <input type="text" class="form-control border-bottom"
                                                        id="file_name${childCount}" name="file_name${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="account_number${childCount}" class="form-label">Account Number</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="account_number${childCount}" name="account_number${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bank_name${childCount}" class="form-label">Bank Name</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="bank_name${childCount}" name="bank_name${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bank_branch${childCount}" class="form-label">Bank Branch</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="bank_branch${childCount}" name="bank_branch${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ifsc_code${childCount}" class="form-label">IFSC Code</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="ifsc_code${childCount}" name="ifsc_code${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cheque_name${childCount}" class="form-label">Cheques in name of</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="cheque_name${childCount}" name="cheque_name${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="upi${childCount}" class="form-label">UPI Address</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="upi${childCount}" name="upi${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                $('#bank_accounts_tax_body').append(template);


                $(`#file_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select City"
                    }
                });

                $(`#account_number${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Early Time"
                    }
                });

                $(`#bank_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Late Time"
                    }
                });

                $(`#bank_branch${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#ifsc_code${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#cheque_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#upi${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });


            });

            // Bank Accounts End Here


            // Permits Start Here
            $(document).on('click', '.remove_permits', function() {
                $(this).closest('.d-flex').remove();
            });

            $('#extend_permits').on('click', function() {
                const childCount = $('#permits_tax_body').find('.d-flex').length + 1;
                console.log(childCount);

                var template = `    
                <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1 remove_permits"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Permits</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="permits_type${childCount}" class="form-label ">Type</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="permits_type${childCount}" name="permits_type${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="permits_expiry_date${childCount}" class="form-label ">Expiry Date</label>
                                                    <input type="date" class="form-control  border-bottom"
                                                        id="permits_expiry_date${childCount}" name="permits_expiry_date${childCount}">
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                $('#permits_tax_body').append(template);


                $(`#file_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select City"
                    }
                });

                $(`#account_number${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Early Time"
                    }
                });

                $(`#bank_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Late Time"
                    }
                });

                $(`#bank_branch${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#ifsc_code${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#cheque_name${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });

                $(`#upi${childCount}`).rules('add', {
                    required: true,
                    messages: {
                        required: "Select Outstation Overnight Time"
                    }
                });


            });









        });
    </script>
@endsection
