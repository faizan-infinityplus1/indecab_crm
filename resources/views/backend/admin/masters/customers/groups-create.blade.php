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
                        <h1 class="h3 pb-3">New Customer Group</h1>
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
                        <label for="" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" id="" >
                        <span class="warning-msg-block"></span>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
