@extends('layouts.admin-master')
@section('content')


<div>
    <div class="container-fluid px-5">
        {{-- page heading start --}}
        <div class="page-header border-bottom bg-white mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h1>New Billing Item</h1>
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
                    <label for="" class="form-label">Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Short name</label>
                    <input type="text" class="form-control  border-bottom" id="">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Taxable
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Allow driver to add?
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Required before starting duty - Only applicable for driver (Indecab Go App)
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Not charged on customer invoice
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        Active
                    </label>
                </div>
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                {{-- ================== --}}
            </form>
        </div>
    </div>
</div>
@endsection