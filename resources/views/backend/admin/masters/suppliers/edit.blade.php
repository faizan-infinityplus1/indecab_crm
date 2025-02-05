@extends('layouts.admin-master')
@section('content')
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Supplier</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ route('suppliers.update', $particularMstSupplier->id) }}" method="post" id="formCustomer">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label ">Name </label>
                                <input type="text" class="form-control  border-bottom" name="name" id="name"
                                    value="{{ old('name', $particularMstSupplier->name ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address </label>
                                <textarea class="form-control" rows="10" name="address" id="address">
                                    {{ old('name', $particularMstSupplier->address ?? '') }}
                                </textarea>
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
                                    id="type">
                                    <option style="display:none;" value="">Select One</option>
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
                                    <input type="text" class="form-control  border-bottom" name="gst_name" id="gst_name"
                                        value="{{ old('gst_name', $particularMstSupplier->gst_name ?? '') }}">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="gst_addr" class="form-label">Billing Address </label>
                                    <textarea class="form-control" rows="10" name="gst_addr" id="gst_addr">{{ old('gst_addr', $particularMstSupplier->gst_addr ?? '') }}</textarea>
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
                                        id="is_gst_tally"
                                        {{ old('is_gst_tally', $particularMstSupplier->is_gst_tally ?? '') ? 'checked' : '' }}>
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
                                <input type="text" class="form-control  border-bottom" name="phone_no" id="phone_no"
                                    value="{{ old('phone_no', $particularMstSupplier->phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="email_id" class="form-label ">Email Address</label>
                                <input type="email" class="form-control  border-bottom" name="email_id" id="email_id"
                                    value="{{ old('email_id', $particularMstSupplier->email_id ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="gst_no" class="form-label ">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" name="gst_no" id="gst_no"
                                    value="{{ old('gst_no', $particularMstSupplier->gst_no ?? '') }}">
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
                                    <option value="no"
                                        {{ old('un_registered', $particularMstSupplier->revrse_chrg ?? '') == 'no' ? 'selected' : '' }}>
                                        No</option>
                                    <option value="yes"
                                        {{ old('un_registered', $particularMstSupplier->revrse_chrg ?? '') == 'yes' ? 'selected' : '' }}>
                                        Yes</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="revenue_share_per" class="form-label ">Revenue Share Percentage</label>
                                <input type="text" class="form-control  border-bottom" name="revenue_share_per"
                                    id="revenue_share_per"
                                    value="{{ old('revenue_share_per', $particularMstSupplier->revenue_share_per ?? '') }}">
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
                                    id="altern_phone_no"
                                    value="{{ old('altern_phone_no', $particularMstSupplier->altern_phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="altern_email_id" class="form-label ">Alternate email address</label>
                                <input type="text" class="form-control  border-bottom" name="altern_email_id"
                                    id="altern_email_id"
                                    value="{{ old('altern_email_id', $particularMstSupplier->altern_email_id ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pan_no" class="form-label ">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" name="pan_no" id="pan_no"
                                    value="{{ old('pan_no', $particularMstSupplier->pan_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="serv_tax_no" class="form-label ">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" name="serv_tax_no"
                                    id="serv_tax_no"
                                    value="{{ old('serv_tax_no', $particularMstSupplier->serv_tax_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>

                            <div class="mb-3">
                                <label for="tds_perc" class="form-label ">TDS Percentage %</label>
                                <input type="number" class="form-control  border-bottom" name="tds_perc" id="tds_perc"
                                    value="{{ old('tds_perc', $particularMstSupplier->tds_perc ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label ">Pin Code </label>
                                <input type="number" class="form-control  border-bottom" maxlength="6" name="pincode"
                                    id="pincode" value="{{ old('pincode', $particularMstSupplier->pincode ?? '') }}">
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
                    <div class="mb-3">
                        <label for="def_tax_classif" class="form-label ">Default Tax Classification - Used in Purchase
                            Invoice
                            for
                            Tally</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="def_tax_classif" id="def_tax_classif">
                            <option value="" style="display: none">Select an option</option>
                            <option value="branch_transfer_inward"
                                {{ old('branch_transfer_inward', $particularMstSupplier->def_tax_classif ?? '') == 'branch_transfer_inward' ? 'selected' : '' }}>
                                Branch Transfer Inward</option>
                            <option value="import_exempt"
                                {{ old('import_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'import_exempt' ? 'selected' : '' }}>
                                Imports Exempt</option>
                            <option value="import_nil_rated"
                                {{ old('import_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'import_nil_rated' ? 'selected' : '' }}>
                                Imports Nil Rated</option>
                            <option value="import_taxable"
                                {{ old('import_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'import_taxable' ? 'selected' : '' }}>
                                Imports Taxable</option>
                            <option value="inter_purch_exempt"
                                {{ old('inter_purch_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_exempt' ? 'selected' : '' }}>
                                Interstate Purchase Exempt</option>
                            <option value="inter_purch_nil_rated"
                                {{ old('inter_purch_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_nil_rated' ? 'selected' : '' }}>
                                Interstate Purchase Nil Rated</option>
                            <option value="inter_purch_taxable_5"
                                {{ old('inter_purch_taxable_5', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_taxable_5' ? 'selected' : '' }}>
                                Interstate Purchase Taxable - 5%</option>
                            <option value="inter_purch_taxable_12"
                                {{ old('inter_purch_taxable_12', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_taxable_12' ? 'selected' : '' }}>
                                Interstate Purchase Taxable - 12%</option>
                            <option value="inter_purch_taxable_18"
                                {{ old('inter_purch_taxable_18', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_taxable_18' ? 'selected' : '' }}>
                                Interstate Purchase Taxable - 18%</option>
                            <option value="inter_purch_unreg_dealer"
                                {{ old('inter_purch_unreg_dealer', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_unreg_dealer' ? 'selected' : '' }}>
                                Interstate Purchase From Unregistered Dealer - Exempt
                            </option>
                            <option value="inter_purch_unreg_deal_nil"
                                {{ old('inter_purch_unreg_deal_nil', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_unreg_deal_nil' ? 'selected' : '' }}>
                                Interstate Purchase From Unregistered Dealer - Nil
                                Rated</option>
                            <option value="inter_purch_unreg_deal_serv"
                                {{ old('inter_purch_unreg_deal_serv', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_unreg_deal_serv' ? 'selected' : '' }}>
                                Interstate Purchase From Unregistered Dealer -
                                Services</option>
                            <option value="inter_purch_unreg_deal_taxable"
                                {{ old('inter_purch_unreg_deal_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_unreg_deal_taxable' ? 'selected' : '' }}>
                                Interstate Purchase From Unregistered Dealer -
                                Taxable</option>
                            <option value="inter_purch_deem_export_exempt"
                                {{ old('inter_purch_deem_export_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_exempt' ? 'selected' : '' }}>
                                Intrastate Purchase Deemed Exports - Exempt
                            </option>
                            <option value="inter_purch_deem_export_nil"
                                {{ old('inter_purch_deem_export_nil', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_nil' ? 'selected' : '' }}>
                                Intrastate Purchase Deemed Exports - Nil Rated
                            </option>
                            <option value="inter_purch_deem_export_taxable"
                                {{ old('inter_purch_deem_export_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_taxable' ? 'selected' : '' }}>
                                Intrastate Purchase Deemed Exports - Taxable
                            </option>
                            <option value="inter_purch_deem_export_exempt"
                                {{ old('inter_purch_deem_export_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_exempt' ? 'selected' : '' }}>
                                Purchase Deemed Exports - Exempt</option>
                            <option value="inter_purch_deem_export_nil_rated"
                                {{ old('inter_purch_deem_export_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_nil_rated' ? 'selected' : '' }}>
                                Purchase Deemed Exports - Nil Rated</option>
                            <option value="inter_purch_deem_export_taxable"
                                {{ old('inter_purch_deem_export_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_deem_export_taxable' ? 'selected' : '' }}>
                                Purchase Deemed Exports - Taxable</option>
                            <option value="purch_exempt"
                                {{ old('purch_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'purch_exempt' ? 'selected' : '' }}>
                                Purchase Exempt</option>
                            <option value="purch_nil_rated"
                                {{ old('purch_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'purch_nil_rated' ? 'selected' : '' }}>
                                Purchase Nil Rated</option>
                            <option value="purch_taxable_5"
                                {{ old('purch_taxable_5', $particularMstSupplier->def_tax_classif ?? '') == 'purch_taxable_5' ? 'selected' : '' }}>
                                Purchase Taxable - 5%</option>
                            <option value="purch_taxable_12"
                                {{ old('purch_taxable_12', $particularMstSupplier->def_tax_classif ?? '') == 'purch_taxable_12' ? 'selected' : '' }}>
                                Purchase Taxable - 12%</option>
                            <option value="purch_taxable_18"
                                {{ old('purch_taxable_18', $particularMstSupplier->def_tax_classif ?? '') == 'purch_taxable_18' ? 'selected' : '' }}>
                                Purchase Taxable - 18%</option>
                            <option value="purch_compos_dealer"
                                {{ old('purch_compos_dealer', $particularMstSupplier->def_tax_classif ?? '') == 'purch_compos_dealer' ? 'selected' : '' }}>
                                Purchase From Composition Dealer</option>
                            <option value="purch_sez_exempt"
                                {{ old('purch_sez_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_exempt' ? 'selected' : '' }}>
                                Purchase From SEZ - Exempt</option>
                            <option value="purch_sez_lut_bond"
                                {{ old('purch_sez_lut_bond', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_lut_bond' ? 'selected' : '' }}>
                                Purchase From SEZ - LUT/Bond</option>
                            <option value="purch_sez_nil_rated"
                                {{ old('purch_sez_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_nil_rated' ? 'selected' : '' }}>
                                Purchase From SEZ - Nil Rated</option>
                            <option value="purch_sez_taxable"
                                {{ old('purch_sez_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_taxable' ? 'selected' : '' }}>
                                Purchase From SEZ - Taxable</option>
                            <option value="purch_sez_wibil_exempt"
                                {{ old('purch_sez_wibil_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_wibil_exempt' ? 'selected' : '' }}>
                                Purchase From SEZ (Without Bill of Entry)- Exempt
                            </option>
                            <option value="purch_sez_wibile_nil_rated"
                                {{ old('purch_sez_wibile_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_wibile_nil_rated' ? 'selected' : '' }}>
                                Purchase From SEZ (Without Bill of Entry)- Nil Rated
                            </option>
                            <option value="purch_sez_wibile_taxable"
                                {{ old('purch_sez_wibile_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'purch_sez_wibile_taxable' ? 'selected' : '' }}>
                                Purchase From SEZ (Without Bill of Entry)- Taxable
                            </option>
                            <option value="purch_unreg_dealer_exempt"
                                {{ old('purch_unreg_dealer_exempt', $particularMstSupplier->def_tax_classif ?? '') == 'purch_unreg_dealer_exempt' ? 'selected' : '' }}>
                                Purchase From Unregistered Dealer - Exempt</option>
                            <option value="purch_unreg_dealer_nil_rated"
                                {{ old('purch_unreg_dealer_nil_rated', $particularMstSupplier->def_tax_classif ?? '') == 'purch_unreg_dealer_nil_rated' ? 'selected' : '' }}>
                                Purchase From Unregistered Dealer - Nil Rated
                            </option>
                            <option value="purch_unreg_dealer_taxable"
                                {{ old('purch_unreg_dealer_taxable', $particularMstSupplier->def_tax_classif ?? '') == 'purch_unreg_dealer_taxable' ? 'selected' : '' }}>
                                Purchase From Unregistered Dealer - Taxable</option>
                            <option value="purch_rcm_5"
                                {{ old('purch_rcm_5', $particularMstSupplier->def_tax_classif ?? '') == 'purch_rcm_5' ? 'selected' : '' }}>
                                Purchase RCM - 5%</option>
                            <option value="inter_purch_rcm_5"
                                {{ old('inter_purch_rcm_5', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_rcm_5' ? 'selected' : '' }}>
                                Interstate Purchase RCM - 5%</option>
                            <option value="inter_purch_rcm_12"
                                {{ old('inter_purch_rcm_12', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_rcm_12' ? 'selected' : '' }}>
                                Interstate Purchase RCM - 12%</option>
                            <option value="inter_purch_rcm_18"
                                {{ old('inter_purch_rcm_18', $particularMstSupplier->def_tax_classif ?? '') == 'inter_purch_rcm_18' ? 'selected' : '' }}>
                                Interstate Purchase RCM - 18%</option>

                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="tds_ledger_type" class="form-label ">TDS Ledger Type</label>
                        <select class="form-select border-bottom" aria-label="Default select example"
                            name="tds_ledger_type" id="tds_ledger_type">
                            <option value="" style="display: none">Select an option</option>
                            <option value="tds_company_supplier"
                                {{ old('tds_company_supplier', $particularMstSupplier->tds_ledger_type ?? '') == 'tds_company_supplier' ? 'selected' : '' }}>
                                TDS - Company Supplier</option>
                            <option value="tds_individual_supplier"
                                {{ old('tds_individual_supplier', $particularMstSupplier->tds_ledger_type ?? '') == 'tds_individual_supplier' ? 'selected' : '' }}>
                                TDS - Individual Supplier</option>
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                                <div class="appli_tax_body" id="appli_tax_body">
                                    {{-- component start --}}
                                    @foreach ($mstApplicableTaxesSupplier as $data)
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
                                    @foreach ($mstInterstateTaxesSupplier as $data)
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
                                            @foreach ($mstDriverSupplierSetting as $data)
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
                                                        <select class="form-select border-bottom dri_allow_set_outst_overnig_time"
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
                                <option value="{{ $data->duty_name }}"
                                    {{ old('limit_duty_type', $data->duty_name ?? '') == $particularMstSupplier->limit_duty_type ? 'selected' : '' }}>
                                    {{ $data->duty_name }}</option>
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
                                <option value="{{ $data->name }}"
                                    {{ old('vehi_group_limit', $data->name ?? '') == $particularMstSupplier->vehi_group_limit ? 'selected' : '' }}>
                                    {{ $data->name }}</option>
                            @endforeach
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="branch" class="form-label">Branches</label>
                        <input type="text" class="form-control border-bottom" name="branch" id="branch"
                            value="{{ old('branch', $particularMstSupplier->branch ?? '') }}">
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

                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field would
                        be available in duties exports.
                        <div class="mb-3">
                            <label for="supplier_code" class="form-label ">Supplier Code</label>
                            <input type="text" class="form-control border-bottom" name="supplier_code"
                                id="supplier_code"
                                value="{{ old('supplier_code', $particularMstSupplier->supplier_code ?? '') }}">
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
                        <input class="form-check-input" type="checkbox" value="is_active" id="is_active"
                            {{ old('is_active', $particularMstSupplier->is_active ?? '') ? 'checked' : '' }}>
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
        $(document).ready(function() {



            let particularMstSupplier = @json($particularMstSupplier);
            var applicableTaxes = @json($applicableTaxes);
            var limitAllotBooking = particularMstSupplier.limit_allot_booking;
            if (limitAllotBooking != null) {
                limitAllotBookingArray = limitAllotBooking.split(',');
            }
            let citiesExtHigCost = particularMstSupplier.cities_ext_hig_cost;
            if (citiesExtHigCost != null) {
                citiesExtHigCostArray = citiesExtHigCost.split(',');
            }



            document.getElementById("cities_ext_hig_cost").innerHTML = generateCityOptions();
            document.getElementById("start").innerHTML = generateTimeSlots();
            document.getElementById("end").innerHTML = generateTimeSlots();
            document.getElementById("state").innerHTML = generateStateOptions(particularMstSupplier.state);
            document.getElementById("head_office_city").innerHTML = generateStateOptions(particularMstSupplier
                .head_office_city);
            document.getElementById("gst_state").innerHTML = generateStateOptions(particularMstSupplier.gst_state);
            document.getElementById("start").innerHTML = generateTimeSlots(particularMstSupplier.start);
            document.getElementById("end").innerHTML = generateTimeSlots(particularMstSupplier.end);

            $("#limit_allot_booking").select2({
                placeholder: "Select an Option",
                allowClear: true,
                data: generateCitySelect2(limitAllotBookingArray)
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











        });
    </script>
@endsection
