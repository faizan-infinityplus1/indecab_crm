@extends('layouts.admin-master')
@section('content')
    <div x-data="block">
        <div class="container-fluid px-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6" x-show="open">
                        <h1>New Tax Type</h1>
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
                        <label for="" class="form-label required">Tax Name </label>
                        <input type="text" class="form-control  border-bottom" name="name"
                            value="{{ old('name', $data->name ?? '') }}" id="name" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label required">Percentage % </label>
                        <input type="number" class="form-control  border-bottom" name="percentage"
                            value="{{ old('percentage', $data->percentage ?? '') }}" 
                            {{ old('percentage', $data->percentage ?? '') ? 'disabled' : '' }}
                            id="percentage" required>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="in_active" name="in_active"
                            {{ old('in_active', $data->in_active ?? '') ? 'checked' : '' }} value="1">
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