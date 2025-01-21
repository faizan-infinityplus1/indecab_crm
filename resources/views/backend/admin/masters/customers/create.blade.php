@extends('layouts.admin-master')
@section('content')
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
                                <label for="" class="form-label required">Pin Code </label>
                                <input type="text" class="form-control  border-bottom" id="" maxlength="6">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">State</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
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
                                <label for="" class="form-label required">Customer Group</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">test</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Email Address</label>
                                <input type="email" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">TDS Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Invoice's default due date after - enter number of days</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Default Discount %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Select base city for fuel surcharge</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
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
                                <label for="" class="form-label required">Sales Commission Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Country (Used for exports class E-invoice)</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Afghanistan</option>
                                    <option value="">Aland Islands</option>
                                    <option value="">Albania</option>
                                    <option value="">Algeria</option>
                                    <option value="">AmericanSamoa</option>
                                    <option value="">Andorra</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Default Tax Classification - Used in Invoice for Tally</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Branch Transfer Outward</option>
                                    <option value="">Deemed Exports Exempt</option>
                                    <option value="">Deemed Exports Nil Rated</option>
                                    <option value="">Deemed Exports Taxable</option>
                                    <option value="">Exports Exempt</option>
                                    <option value="">Exports LUT/Bond</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Custom Field - Related customer Id</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">- Holiday wala</option>
                                    <option value="">- Ravi Thakkar</option>
                                    <option value="">-Vasundara Singh</option>
                                    <option value="">A Das</option>
                                    <option value="">A Hazarika</option>
                                    <option value="">A K Mishra</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light mb-3 p-3">
                                <b>GSTIN Billing details -</b> Only to be filled if this customer has different GSTIN billing details.
                                <div class="mb-3">
                                    <label for="" class="form-label">Billing Name </label>
                                    <input type="text" class="form-control  border-bottom" id="" >
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Billing Address </label>
                                    <textarea class="form-control" id="" rows="10"></textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label required">State</label>
                                    <select class="form-select border-bottom" aria-label="Default select example" name=""
                                        id=""  required>
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
                                        Use billing name as primary name on invoice?
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="">
                                    <label class="form-check-label" for="">
                                        Use billing name in Tally export?
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Alternate Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Alternate email address</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">GST Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Registered</option>
                                    <option value="">Un-registered</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Reverse Charge Applicable</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Surcharge Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Default Car Hire Charges Discount %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Forced Fuel Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Petrol</option>
                                    <option value="">Diesel</option>
                                    <option value="">CNG</option>
                                    <option value="">Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Default feedback form</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Mumbai Cab Service</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Default Company</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Uqaab Graphics</option>
                                    <option value="">Uqaab Holidays</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Branches</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id=""  required>
                                    <option value="selectOne">Select an option</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Booking/Duties Settings</div>
                                <div class="panel-body p-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Cities - Limit ability to add bookings to these cities</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
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
                                        <label for="" class="form-label required">Duty Types - Limit ability to add bookings to these Duty Types</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
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
                                        <label for="" class="form-label required">Vehicle Group - Limit ability to add bookings to these Vehicle Groups</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
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
                                        <label for="" class="form-label required">Applicable Supplier Ids (Supplier allotment would be restricted to these suppliers only)</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
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
                                        <label for="" class="form-label required">Labels - Applied to booking</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
                                            <option value="">Cash Duty</option>
                                            <option value="">Cash Paid By Company</option>
                                            <option value="">Corporate</option>
                                            <option value="">Corporate  VIP Guest</option>
                                            <option value="">Singh Duty</option>
                                            <option value="">VIP Guest</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Cities - To only consider extras that have higher total cost on invoice</label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name=""
                                            id=""  required>
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
                                        <label for="" class="form-label required">Minimum garage start time to consider (in minutes)</label>
                                        <input type="number" class="form-control  border-bottom" id="">
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Minimum garage end time to consider (in minutes)</label>
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
                                            Deny Booked by, Passenger and Additional contact info to be added to Master while adding a booking
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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                                {{-- component start --}}
                                <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label required">Tax</label>
                                                    <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                        id=""  required>
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
                                                        Not to be charged3?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- component end --}}

                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>

                                {{-- component start --}}
                                <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Applicable Interstate Taxes</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label required">Tax</label>
                                                    <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                        id=""  required>
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
                                                        Not to be charged3?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- component end --}}

                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i></button>
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
                                        <tbody>
                                            {{-- component start --}}
                                            <tr>
                                              <td>
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
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
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
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
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
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
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
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
                                    <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Duty type type timings</div>
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
                                        <tbody>
                                            {{-- component start --}}
                                            <tr>
                                              <td>
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
                                                    <option value="">(Select Duty type type)</option>
                                                    <option value="">HR-KM (Local)</option>
                                                    <option value="">Day-KM (Outstation)</option>
                                                    <option value="">Long Duration - Total KM Daily HR (Monthly Bookings)</option>
                                                </select>
                                              </td>

                                              <td>
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
                                                    <option value="">(Select Duty type type)</option>
                                                    <option value="">HR-KM (Local)</option>
                                                    <option value="">Day-KM (Outstation)</option>
                                                    <option value="">Long Duration - Total KM Daily HR (Monthly Bookings)</option>
                                                </select>
                                              </td>
                                              
                                              <td>
                                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                                    id=""  required>
                                                    <option value="">(Select Duty type type)</option>
                                                    <option value="">HR-KM (Local)</option>
                                                    <option value="">Day-KM (Outstation)</option>
                                                    <option value="">Long Duration - Total KM Daily HR (Monthly Bookings)</option>
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
                                    <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i> Add Another Timing</button>
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
                                        <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="panel border rounded">
                                            <div class="panel-heading bg-light p-3">Files</div>
                                            <div class="panel-body p-3">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">File Name </label>
                                                    <input type="text" class="form-control  border-bottom" id="" >
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Upload </label>
                                                    <div>
                                                        <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                                        <input type="file" name="" id="qwer"
                                                            affieldinput="[object Object]" class="form-control" accept="image/png, image/gif, image/jpeg"
                                                            style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>  
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Notes</label>
                                <textarea class="form-control" id="" rows="10"></textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>


                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field would be available in Duties & Invoice exports.
                        <div class="mb-3">
                            <label for="" class="form-label required">Customer Code</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact support@indecab.com to learn how to enable this.
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            Always hide 'Original for recipient' on invoice
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            In-Active
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
 