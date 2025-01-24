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
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label required">Name </label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address </label>
                            <textarea class="form-control" id="" rows="10"></textarea>
                            <span class="warning-msg-block"></span>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label required">State</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id=""
                                required>
                                <option value="selectOne">Select an option</option>
                                <option value="">01-Jammu and Kashmir</option>
                                <option value="">02-Himachal Pradesh</option>
                                <option value="">03-Punjab</option>
                                <option value="">04-Chandigarh</option>
                                <option value="">05-Uttarakhand</option>
                                <option value="">06-Haryana</option>
                                <option value="">07-Delhi</option>
                                <option value="">08-Rajasthan</option>
                                <option value="">09-Uttar Pradesh</option>
                                <option value="">10-Bihar</option>
                                <option value="">11-Sikkim</option>
                                <option value="">12-Arunachal Pradesh</option>
                                <option value="">13-Nagaland</option>
                                <option value="">14-Manipur</option>
                                <option value="">15-Mizoram</option>
                                <option value="">16-Tripura</option>
                                <option value="">17-Meghalaya</option>
                                <option value="">18-Assam</option>
                                <option value="">19-West Bengal</option>
                                <option value="">20-Jharkhand</option>
                                <option value="">21-Odisha</option>
                                <option value="">22-Chhattisgarh</option>
                                <option value="">23-Madhya Pradesh</option>
                                <option value="">24-Gujarat</option>
                                <option value="">25-Daman and Diu</option>
                                <option value="">26-Dadra and Nagar Haveli</option>
                                <option value="">27-Maharashtra</option>
                                <option value="">28-Andhra Pradesh</option>
                                <option value="">29-Karnataka</option>
                                <option value="">30-Goa</option>
                                <option value="">31-Lakshadweep</option>
                                <option value="">32-Kerala</option>
                                <option value="">33-Tamil Nadu</option>
                                <option value="">34-Puducherry</option>
                                <option value="">35-Andaman and Nicobar Islands</option>
                                <option value="">36-Telangana</option>
                                <option value="">37-Andhra Pradesh</option>
                                <option value="">38-Ladakh</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Type </label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id=""
                                required>
                                <option value="">(Select One)</option>
                                <option value="">Driver cum owners (DCO)/Attached</option>
                                <option value="">Company</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light mb-3 p-3">
                            <b>GSTIN Billing details -</b> Only to be filled if this customer has different GSTIN
                            billing details.
                            <div class="mb-3">
                                <label for="" class="form-label">Billing Name </label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Billing Address </label>
                                <textarea class="form-control" id="" rows="10"></textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">State</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id="" required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">01-Jammu and Kashmir</option>
                                    <option value="">02-Himachal Pradesh</option>
                                    <option value="">03-Punjab</option>
                                    <option value="">04-Chandigarh</option>
                                    <option value="">05-Uttarakhand</option>
                                    <option value="">06-Haryana</option>
                                    <option value="">07-Delhi</option>
                                    <option value="">08-Rajasthan</option>
                                    <option value="">09-Uttar Pradesh</option>
                                    <option value="">10-Bihar</option>
                                    <option value="">11-Sikkim</option>
                                    <option value="">12-Arunachal Pradesh</option>
                                    <option value="">13-Nagaland</option>
                                    <option value="">14-Manipur</option>
                                    <option value="">15-Mizoram</option>
                                    <option value="">16-Tripura</option>
                                    <option value="">17-Meghalaya</option>
                                    <option value="">18-Assam</option>
                                    <option value="">19-West Bengal</option>
                                    <option value="">20-Jharkhand</option>
                                    <option value="">21-Odisha</option>
                                    <option value="">22-Chhattisgarh</option>
                                    <option value="">23-Madhya Pradesh</option>
                                    <option value="">24-Gujarat</option>
                                    <option value="">25-Daman and Diu</option>
                                    <option value="">26-Dadra and Nagar Haveli</option>
                                    <option value="">27-Maharashtra</option>
                                    <option value="">28-Andhra Pradesh</option>
                                    <option value="">29-Karnataka</option>
                                    <option value="">30-Goa</option>
                                    <option value="">31-Lakshadweep</option>
                                    <option value="">32-Kerala</option>
                                    <option value="">33-Tamil Nadu</option>
                                    <option value="">34-Puducherry</option>
                                    <option value="">35-Andaman and Nicobar Islands</option>
                                    <option value="">36-Telangana</option>
                                    <option value="">37-Andhra Pradesh</option>
                                    <option value="">38-Ladakh</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Use billing name in Tally export?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">GSTIN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">GST Type</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id=""
                                required>
                                <option value="selectOne">Select an option</option>
                                <option value="">Registered</option>
                                <option value="">Un-registered</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Reverse Charge Applicable</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id=""
                                required>
                                <option value="selectOne">Select an option</option>
                                <option value="">No</option>
                                <option value="">Yes</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">Revenue Share Percentage %</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>

                    </div>
                    <div class="col-6">

                        <div class="mb-3">
                            <label for="" class="form-label">Alternate Phone Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alternate Email Addresses (Separate by ;)</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PAN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Service Tax Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">TDS Percentage %</label>
                            <input type="number" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pin Code </label>
                            <input type="text" class="form-control  border-bottom" id="" maxlength="6">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Head office city</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
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
                    <label for="" class="form-label ">Supplier Group</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Default Tax Classification - Used in Purchase Invoice for
                        Tally</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">Branch Transfer Inward</option>
                        <option value="">Imports Exempt</option>
                        <option value="">Imports Nil Rated</option>
                        <option value="">Imports Taxable</option>
                        <option value="">Interstate Purchase Exempt</option>
                        <option value="">Interstate Purchase Nil Rated</option>
                        <option value="">Interstate Purchase Taxable - 5%</option>
                        <option value="">Interstate Purchase Taxable - 12%</option>
                        <option value="">Interstate Purchase Taxable - 18%</option>
                        <option value="">Interstate Purchase From Unregistered Dealer - Exempt</option>
                        <option value="">Interstate Purchase From Unregistered Dealer - Nil Rated</option>
                        <option value="">Interstate Purchase From Unregistered Dealer - Services</option>
                        <option value="">Interstate Purchase From Unregistered Dealer - Taxable</option>
                        <option value="">Intrastate Purchase Deemed Exports - Exempt</option>
                        <option value="">Intrastate Purchase Deemed Exports - Nil Rated</option>
                        <option value="">Intrastate Purchase Deemed Exports - Taxable</option>
                        <option value="">Purchase Deemed Exports - Exempt</option>
                        <option value="">Purchase Deemed Exports - Nil Rated</option>
                        <option value="">Purchase Deemed Exports - Taxable</option>
                        <option value="">Purchase Exempt</option>
                        <option value="">Purchase Nil Rated</option>
                        <option value="">Purchase Taxable - 5%</option>
                        <option value="">Purchase Taxable - 12%</option>
                        <option value="">Purchase Taxable - 18%</option>
                        <option value="">Purchase From Composition Dealer</option>
                        <option value="">Purchase From SEZ - Exempt</option>
                        <option value="">Purchase From SEZ - LUT/Bond</option>
                        <option value="">Purchase From SEZ - Nil Rated</option>
                        <option value="">Purchase From SEZ - Taxable</option>
                        <option value="">Purchase From SEZ (Without Bill of Entry)- Exempt</option>
                        <option value="">Purchase From SEZ (Without Bill of Entry)- Nil Rated</option>
                        <option value="">Purchase From SEZ (Without Bill of Entry)- Taxable</option>
                        <option value="">Purchase From Unregistered Dealer - Exempt</option>
                        <option value="">Purchase From Unregistered Dealer - Nil Rated</option>
                        <option value="">Purchase From Unregistered Dealer - Taxable</option>
                        <option value="">Purchase RCM - 5%</option>
                        <option value="">Interstate Purchase RCM - 5%</option>
                        <option value="">Interstate Purchase RCM - 12%</option>
                        <option value="">Interstate Purchase RCM - 18%</option>

                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">TDS Ledger Type</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">TDS - Company Supplier</option>
                        <option value="">TDS - Individual Supplier</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                            {{-- component start --}}
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label required">Tax</label>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="" required>
                                                    <option value="">(Select Tax)</option>
                                                    <option value="">CGST 2.5%</option>
                                                    <option value="">SGST 2.5%</option>
                                                    <option value="">IGST 5%</option>
                                                    <option value="">CGST 6%</option>
                                                    <option value="">SGST 6%</option>
                                                    <option value="">IGST 12%</option>
                                                </select>
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="" id="">
                                                <label class="form-check-label" for="">
                                                    Not to be charged?
                                                </label>
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
                            <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>

                            {{-- component start --}}
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i
                                            class="fa-solid fa-minus"></i></button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label required">Tax</label>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="" required>
                                                    <option value="">(Select Tax)</option>
                                                    <option value="">CGST 2.5%</option>
                                                    <option value="">SGST 2.5%</option>
                                                    <option value="">IGST 5%</option>
                                                    <option value="">CGST 6%</option>
                                                    <option value="">SGST 6%</option>
                                                    <option value="">IGST 12%</option>
                                                </select>
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="" id="">
                                                <label class="form-check-label" for="">
                                                    Not to be charged?
                                                </label>
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
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Working hours</div>
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
                                    <tbody>
                                        {{-- component start --}}
                                        <tr>
                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
                                                    <option value="">All</option>
                                                    <option value="">Abohar</option>
                                                    <option value="">Abu Dhabi</option>
                                                    <option value="">Adilabad</option>
                                                    <option value="">Adoni</option>
                                                    <option value="">Agartala</option>
                                                    <option value="">Agra</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
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
                                            </td>
                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
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
                                            </td>
                                            <td>
                                                <select class="form-select border-bottom"
                                                    aria-label="Default select example" name="" id="">
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
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger py-0">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        {{-- component end --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3">
                                <button type="button" class="btn btn-primary rounded-1"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label ">Limit ability to allot bookings to these cities</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
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
                    <label for="" class="form-label ">Duty Types - Limit ability to allot bookings to these Duty
                        Types</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">10Hr 80Km</option>
                        <option value="">10hr100km</option>
                        <option value="">11Hr 110Km</option>
                        <option value="">11Hr 80Km</option>
                        <option value="">12Hr 100</option>
                        <option value="">12hr 120km</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Vehicle Group - Limit ability to allot bookings to these
                        Vehicle Groups</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">20 Seater</option>
                        <option value="">25 Seater A/C</option>
                        <option value="">35 Seater Bus</option>
                        <option value="">400 Km</option>
                        <option value="">45 A C Seater Bus</option>
                        <option value="">49 seater Non AC Bus</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Branches</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Cities - To only consider extras that have higher total cost on invoice</label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">Abohar</option>
                        <option value="">Abu Dhabi</option>
                        <option value="">Adilabad</option>
                        <option value="">Adoni</option>
                        <option value="">Agartala</option>
                        <option value="">Agra</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="panel border rounded mb-3">
                            <div class="panel-heading bg-light p-3">Bank Accounts</div>
                            {{-- component start --}}
                            <div class="d-flex border-bottom">
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </div>
                                <div class="p-3 ps-0 w-100">
                                    <div class="panel border rounded">
                                        <div class="panel-heading bg-light p-3">Bank Accounts</div>
                                        <div class="panel-body p-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">File Name </label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Account Number</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Bank Name</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Bank Branch</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">IFSC Code</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Cheques in name of</label>
                                                <input type="text" class="form-control  border-bottom" id="">
                                                <span class="warning-msg-block"></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">UPI Address</label>
                                                <input type="text" class="form-control  border-bottom" id="">
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


                    {{-- =============== --}}



                <div class="bg-light mb-3 p-3">
                    You could use this field as unique identifier when integrating with another system. This field would be available in duties exports.
                    <div class="mb-3">
                        <label for="" class="form-label">Supplier Code</label>
                        <input type="text" class="form-control  border-bottom" id="">
                        <span class="warning-msg-block"></span>
                    </div>
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
                        Active
                    </label>
                </div>
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
@endsection