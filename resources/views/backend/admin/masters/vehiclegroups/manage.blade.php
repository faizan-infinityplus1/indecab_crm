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
                <form action="{{ $data ? route('vehiclegroups.update', $data->id) : route('vehiclegroups.store') }}" method="post"
                    id="formVehiclGroup" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label required">Name </label>
                        <input type="text" class="form-control  border-bottom" name="name"
                            value="{{ old('name', $data->name ?? '') }}" id="name" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="" class="form-label required">Description </label>
                            <textarea class="form-control" rows="10" name="description"
                                value="{{ old('description', $data->description ?? '') }}" id="description" ></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Avatar </label>
                            <div>
                                <label for="qwer" class="btn shadow-sm border rounded-1">Choose File</label>
                                <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg"
                                    name="image" value="{{ old('image', $data->image ?? '') }}"
                                    id="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label required">Seating Capacity (excluding driver)
                                </label>
                                <input type="number" class="form-control  border-bottom" name="seat_capacity"
                                    value="{{ old('seat_capacity', $data->seat_capacity ?? '') }}" id="seat_capacity">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label required">Luggage count </label>
                                <input type="number" class="form-control  border-bottom" name="lug_count"
                                    value="{{ old('lug_count', $data->lug_count ?? '') }}" id="lug_count">
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


@section('extrajs')
    <script>
        $("#city_limit").select2({
            placeholder: "Select an Option",
            allowClear: true
        });
        // Laravel variable containing the comma-separated value from the database


        $(document).ready(function() {
            $("#formVehiclGroup").validate({
                rules: {
                    name: {
                        required: true
                    },
                  
                },
                messages: {

                    name: {
                        required: "Please Enter Vehicle Group Name"
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });

        });
    </script>
@endsection
