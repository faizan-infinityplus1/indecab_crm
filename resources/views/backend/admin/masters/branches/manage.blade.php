@extends('layouts.admin-master')
@section('content')


<div>
    <div class="container-fluid px-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h1>New Branch</h1>
                </div>
                <div class="col-md-6 text-end">
                    {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                </div>
            </div>
        </div>
        {{-- page heading end --}}

        <div class="bg-light p-3 mb-3">
            <p class="m-0">
                Note: Name and ability to select Taxable will not be possible after the Billing Item is created.
            </p>
        </div>
        <div>
            <form>
                <div class="mb-3">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">Type <span class="text-danger">*</span></label>
                    <select class="form-select border-bottom" aria-label="Default select example" name="" id="">
                        <option value="">Select an option</option>
                        <option value="">Office & Dispatch Center</option>
                        <option value="">Office</option>
                        <option value="">Dispatch Center</option>
                    </select>
                    <span class="warning-msg-block"></span>
                </div>

                {{-- map start--}}

                {{-- map end--}}
                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="5" name="address" id="address"></textarea>
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label ">City of operations</label>
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
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                {{-- ================== --}}
            </form>
        </div>
    </div>
</div>
@endsection

