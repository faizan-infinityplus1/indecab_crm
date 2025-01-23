@extends('layouts.admin-master')
@section('content')
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Supplier Group</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label required">Name </label>
                        <input type="text" class="form-control  border-bottom" id="" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
