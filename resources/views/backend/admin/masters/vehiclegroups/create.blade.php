@extends('layouts.admin-master')
@section('content')
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Vehicle Group</h1>
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
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="" class="form-label required">Description </label>
                            <textarea class="form-control" id="" rows="10"></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Avatar </label>
                            <div>
                                <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                <input type="file" name="" id="qwer"
                                    affieldinput="[object Object]" class="form-control" accept="image/png, image/gif, image/jpeg"
                                    style="display: none;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label required">Seating Capacity (excluding driver) </label>
                                <input type="number" class="form-control  border-bottom" id="" required>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label required">Luggage count </label>
                                <input type="number" class="form-control  border-bottom" id="" required>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
