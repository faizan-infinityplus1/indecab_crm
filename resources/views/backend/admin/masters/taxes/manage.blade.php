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
                        <h1 class="h3 pb-3">New Tax Type</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div> --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form action="{{ $data ? route('taxes.update', $data->id) : route('taxes.store') }}" method="post"
                    id="formTaxes">
                    @csrf
                    <div class="bg-light mb-3 p-3">
                        Note: You will not be able to edit the percentage once this Tax type is created.
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label ">Tax Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  border-bottom" name="name"
                            value="{{ old('name', $data->name ?? '') }}" id="name" >
                        <span class="warning-msg-block"></span>
                    </div>
                    
                    @if(optional($data)->name)
                    <div class="mb-3">
                        <label for="percentage" class="form-label ">Percentage % <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control  border-bottom" name="percentage"
                            value="{{$data->percentage }}" >
                        <input type="number" class="form-control  border-bottom" name="percentage"
                        value="{{$data->percentage}}" 
                        {{ old('percentage', $data->percentage ?? '') ? 'disabled' : '' }}
                        id="percentage" >
                    </div>
                        <input type="hidden" name="name" value="{{ $data->name }}">
                    @else
                    <div class="mb-3">
                        <label for="percentage" class="form-label ">Percentage % <span class="text-danger">*</span></label>
                        <input type="number" class="form-control  border-bottom" name="percentage"
                            value="{{ old('percentage', $data->percentage ?? '') }}" 
                            {{ old('percentage', $data->percentage ?? '') ? 'disabled' : '' }}
                            id="percentage" >
                        <span class="warning-msg-block"></span>
                    </div>
                    @endif
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="active" name="active" 
                            {{ old('active', $data->active ?? 'checked') ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="active">
                            Active
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


        $(document).ready(function() {
            $("#formTaxes").validate({
                rules: {
                    name: {
                        required: true
                    },
                    percentage: {
                        required: true
                    }
                },
                messages: {

                    name: {
                        required: "Please Enter Tax Name"
                    },

                    percentage: {
                        required: "Please Enter Tax Percentage"
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