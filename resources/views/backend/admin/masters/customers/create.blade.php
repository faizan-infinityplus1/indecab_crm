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
                <form action="{{route('customers.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label ">Name </label>
                                <input type="text" class="form-control  border-bottom" id="" >
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address </label>
                                <textarea class="form-control" id="" rows="10"></textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Pin Code </label>
                                <input type="text" class="form-control  border-bottom" id="" maxlength="6">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">State</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id="" >
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
                                <label for="" class="form-label ">Customer Group</label>
                                <select class="form-select border-bottom" aria-label="Default select example" name=""
                                    id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">test</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Email Address</label>
                                <input type="email" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">PAN Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">GSTIN Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">TDS Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Invoice's default due date after - enter
                                    number of days</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Default Discount %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Select base city for fuel
                                    surcharge</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
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
                                <label for="" class="form-label ">Sales Commission Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Country (Used for exports class
                                    E-invoice)</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
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
                                <label for="" class="form-label ">Default Tax Classification - Used in
                                    Invoice for Tally</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
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
                                <label for="" class="form-label ">Custom Field - Related customer
                                    Id</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
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
                                    <label for="" class="form-label ">State</label>
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="" >
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
                                <label for="" class="form-label ">Alternate Phone Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Alternate email address</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Service Tax Number</label>
                                <input type="text" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">GST Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Registered</option>
                                    <option value="">Un-registered</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Reverse Charge Applicable</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Surcharge Percentage %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Default Car Hire Charges Discount
                                    %</label>
                                <input type="number" class="form-control  border-bottom" id="">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Forced Fuel Type</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Petrol</option>
                                    <option value="">Diesel</option>
                                    <option value="">CNG</option>
                                    <option value="">Electric</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Default feedback form</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Mumbai Cab Service</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Default Company</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
                                    <option value="selectOne">Select an option</option>
                                    <option value="">Uqaab Graphics</option>
                                    <option value="">Uqaab Holidays</option>
                                </select>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Branches</label>
                                <select class="form-select border-bottom" aria-label="Default select example"
                                    name="" id="" >
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
                                        <label for="" class="form-label ">Cities - Limit ability to add
                                            bookings to these cities</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="" >
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
                                        <label for="" class="form-label ">Duty Types - Limit ability to
                                            add bookings to these Duty Types</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="" >
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
                                            name="" id="" >
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
                                            name="" id="" >
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
                                            name="" id="" >
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
                                            name="" id="" >
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
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>

                                <div class="appli_tax_body" id="appli_tax_body">
                                    {{-- component start --}}
                                    {{-- <div class="d-flex border-bottom">
                                        <div class="p-3">
                                            <button type="button" class="btn btn-primary rounded-1"><i
                                                    class="fa-solid fa-minus"></i></button>
                                        </div>
                                        <div class="p-3 ps-0 w-100">
                                            <div class="panel border rounded">
                                                <div class="panel-heading bg-light p-3">Applicable Taxes</div>
                                                <div class="panel-body p-3">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label ">Tax</label>
                                                        <select class="form-select border-bottom"
                                                            aria-label="Default select example" name=""
                                                            id="" >
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
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="">
                                                        <label class="form-check-label" for="">
                                                            Not to be charged3?
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     --}}

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
                                <label for="" class="form-label">Notes</label>
                                <textarea class="form-control" id="" rows="5"></textarea>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editor" class="form-label">Invoice Terms & Conditions</label>
                                <div id="editor">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-light mb-3 p-3">
                        You could use this field as unique identifier when integrating with another system. This field would
                        be available in Duties & Invoice exports.
                        <div class="mb-3">
                            <label for="" class="form-label ">Customer Code</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact support@indecab.com to
                        learn how to enable this.
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
@section('extrajs')
    <script>
        const toolbarOptions = [
            ['bold', 'italic', 'underline', {
                'color': []
            }, {
                'background': []
            }, 'link', 'image']
        ];
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });

        // Applicable Taxes Start Here

        $(document).on('click', '.remove_appli_tax_body', function() {
            $(this).closest('.d-flex').remove();
        });

        $('#extend_appli_tax').on('click', function() {
            const childCount = $('#appli_tax_body').find('.d-flex').length + 1;
            console.log(childCount);

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
                            <label for="" class="form-label ">Tax</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="appli_tax${childCount}"
                                id="" data-index=${childCount} >
                                <option value="">(Select Tax)</option>
                                <option value="">CGST 2.5%</option>
                                <option value="">SGST 2.5%</option>
                                <option value="">IGST 5%</option>
                                <option value="">CGST 6%</option>
                                <option value="">SGST 6%</option>
                                <option value="">IGST 12%</option>
                            </select>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="appli_tax_n_ch" name="appli_tax_n_ch${childCount}" data-index=${childCount}>
                            <label class="form-check-label" for="appli_tax_n_ch">
                                Not to be charged?
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

            $('#appli_tax_body').append(template);
        });

        // Applicable Taxes End Here

        // Applicable Interstate Taxes Start Here

        $(document).on('click', '.remove_inter_appli_tax_body', function() {
            $(this).closest('.d-flex').remove();
        });

        $('#extend_inter_appli_tax').on('click', function() {
            const childCount = $('#inter_appli_tax_body').find('.d-flex').length + 1;
            console.log(childCount);

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
                                                    <label for="" class="form-label ">Tax</label>
                                                      <select class="form-select border-bottom" aria-label="Default select example" name="inter_appli_tax${childCount}"
                                id="" data-index=${childCount} >
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
                                                    <input class="form-check-input" type="checkbox" value="1" id="appli_tax_n_ch" name="inter_appli_tax_n_ch${childCount}" data-index=${childCount}>
                                                    <label class="form-check-label" for="">
                                                        Not to be charged?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

            $('#inter_appli_tax_body').append(template);
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
                                                        aria-label="Default select example" name="dri_allow_set_city${childCount}" data-index=${childCount} id=""
                                                        >
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
                                                        aria-label="Default select example" name="dri_allow_set_early_time${childCount}" data-index=${childCount} id=""
                                                        >
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
                                                        aria-label="Default select example" name="dri_allow_set_late_time${childCount}" data-index=${childCount} id=""
                                                        >
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
                                                        aria-label="Default select example" name="dri_allow_set_outst_overnig_time${childCount}" data-index=${childCount} id=""
                                                        >
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
                                                    <button type="button" class="btn btn-danger py-0 remove_dri_allow_set">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </td>
                                            </tr>`;

            $('#dri_allow_set_tax_body').append(template);
        });

        // Driver Allowance Settings End Here

        // Duty Type Type Timings Start Here

        $(document).on('click', '.remove_dut_typ_tim', function() {
            $(this).closest('tr').remove();
        });

        $('#extend_dut_typ_tim').on('click', function() {
            const childCount = $('#dut_typ_tim_body').find('tr').length + 1;
            console.log(childCount);

            var template = `      <tr>
                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dut_typ_tim${childCount}" data-index=${childCount} id=""
                                                        >
                                                        <option value="">(Select Duty type type)</option>
                                                        <option value="">HR-KM (Local)</option>
                                                        <option value="">Day-KM (Outstation)</option>
                                                        <option value="">Long Duration - Total KM Daily HR (Monthly
                                                            Bookings)</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dut_typ_tim_str${childCount}" data-index=${childCount} id=""
                                                        >
                                                        <option value="">(Select Duty type type)</option>
                                                        <option value="">HR-KM (Local)</option>
                                                        <option value="">Day-KM (Outstation)</option>
                                                        <option value="">Long Duration - Total KM Daily HR (Monthly
                                                            Bookings)</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name="dut_typ_tim_end${childCount}" data-index=${childCount} id=""
                                                        >
                                                        <option value="">(Select Duty type type)</option>
                                                        <option value="">HR-KM (Local)</option>
                                                        <option value="">Day-KM (Outstation)</option>
                                                        <option value="">Long Duration - Total KM Daily HR (Monthly
                                                            Bookings)</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger py-0 remove_dut_typ_tim" >
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </td>
                                            </tr>`;

            $('#dut_typ_tim_body').append(template);
        });

        // Duty Type Type Timings End Here

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
                                </div>`;

            $('#files_body').append(template);
        });

        // Files End Here
    </script>
@endsection
