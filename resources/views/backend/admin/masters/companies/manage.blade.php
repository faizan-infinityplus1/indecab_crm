@extends('layouts.admin-master')
@section('content')


<div>
    <div class="container-fluid px-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h1>New Company</h1>
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
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Company Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Supplier</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">V Cab</option>
                                <option value="">Saima Tours And Travels</option>
                                <option value="">Tousif Shaikh</option>
                                <option value="">Sharad travels House</option>
                                <option value="">Shanu Shaikh</option>
                                <option value="">Weekend Travelers</option>
                                <option value="">Umar Shaikh</option>
                                <option value="">VR Travels</option>
                                <option value="">Jai Bajrang Tours and Travels</option>
                                <option value="">Apple Travels Solutions</option>
                                <option value="">Jayesh Ahmedabad</option>
                                <option value="">TripOpedia</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label required">Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control  border-bottom" id="" required>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Business Type</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Proprietorship</option>
                                <option value="">Partnership</option>
                                <option value="">Limited Liability Partnership (LLP)</option>
                                <option value="">Private Limited</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address </label>
                            <textarea class="form-control" id="" rows="5"></textarea>
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Logo</label>
                            <div>
                                <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                                    accept="image/png, image/gif, image/jpeg" style="display: none;">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Digital Signature</label>
                            <div>
                                <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                <input type="file" name="" id="qwer" affieldinput="[object Object]" class="form-control"
                                    accept="image/png, image/gif, image/jpeg" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Alternate Phone Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">City</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
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
                            <label for="" class="form-label">VAT TIN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Service Tax Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">CIN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">SAC/HSN/Accounting code</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label ">States of operations</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="state"
                                id="state">
                                <option class="d-none" value="">Select an option</option>
                                <option value="jammu_and_kashmir">01-Jammu and Kashmir</option>
                                <option value="himachal_pradesh">02-Himachal Pradesh</option>
                                <option value="punjab">03-Punjab</option>
                                <option value="chandigar">04-Chandigarh</option>
                                <option value="uttarakhand">05-Uttarakhand</option>
                                <option value="haryana">06-Haryana</option>
                                <option value="delhi">07-Delhi</option>
                                <option value="rajastan">08-Rajasthan</option>
                                <option value="uttar_pradesh">09-Uttar Pradesh</option>
                                <option value="bihar">10-Bihar</option>
                                <option value="sikkim">11-Sikkim</option>
                                <option value="arrunachal_pradesh">12-Arunachal Pradesh</option>
                                <option value="nagaland">13-Nagaland</option>
                                <option value="manipur">14-Manipur</option>
                                <option value="mizorm">15-Mizoram</option>
                                <option value="tripura">16-Tripura</option>
                                <option value="meghalaya">17-Meghalaya</option>
                                <option value="assam">18-Assam</option>
                                <option value="west_bengal">19-West Bengal</option>
                                <option value="jharkhand">20-Jharkhand</option>
                                <option value="odisha">21-Odisha</option>
                                <option value="chattisgarh">22-Chhattisgarh</option>
                                <option value="madhya_pradesh">23-Madhya Pradesh</option>
                                <option value="gujrat">24-Gujarat</option>
                                <option value="daman_and_diu">25-Daman and Diu</option>
                                <option value="dadra_and_nagar_haveli">26-Dadra and Nagar Haveli</option>
                                <option value="maharashtra">27-Maharashtra</option>
                                <option value="andra_pradesh">28-Andhra Pradesh</option>
                                <option value="karnataka">29-Karnataka</option>
                                <option value="goa">30-Goa</option>
                                <option value="lakshadweep">31-Lakshadweep</option>
                                <option value="kerala">32-Kerala</option>
                                <option value="tamil_nadu">33-Tamil Nadu</option>
                                <option value="paducherry">34-Puducherry</option>
                                <option value="andaman_and_nico_islands">35-Andaman and Nicobar Islands</option>
                                <option value="telengana">36-Telangana</option>
                                <option value="andra_pradesh">37-Andhra Pradesh</option>
                                <option value="ladakh">38-Ladakh</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pincode</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">CST TIN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">PAN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">GSTIN Number</label>
                            <input type="text" class="form-control  border-bottom" id="">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>
                <div class="panel border rounded mb-3">
                    <div class="panel-heading bg-light p-3">Settings</div>
                    <div class="p-3">
                        <div class="mb-3">
                            <label for="" class="form-label">Default profile</label>
                            <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                                <option value="selectOne">Select an option</option>
                                <option value="">Arbaaz Chougle</option>
                            </select>
                            <span class="warning-msg-block"></span>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Duty Slip - Terms & Conditions</label>
                            <textarea class="form-control" id="" rows="5"></textarea>
                            <span class="warning-msg-block"></span>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Date of Joining</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Aadhar Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">PF Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">ESI Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">DL Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Badge Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Address </label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label ">Blood group</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">PAN Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">UAN Number</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">ESI Dispensary Code</label>
                                    <input type="text" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">DL Exp. Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Badge Expiry Date</label>
                                    <input type="date" class="form-control  border-bottom" id="">
                                    <span class="warning-msg-block"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Permanent Address</label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                    <span class="warning-msg-block"></span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Active
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Is Proforma Invoice Company?
                    </label>
                </div>

                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                <a href="{{route('companies.index')}}" class="btn btn-danger rounded-1">CANCEL</a>
                {{-- ================== --}}
            </form>
        </div>
    </div>
</div>
@endsection