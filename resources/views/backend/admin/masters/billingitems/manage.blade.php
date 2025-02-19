@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static" x-show="open">
                        <div class="position-absolute" style="top: 96px; left: 0px;">
                            <button type="button" class="btn" onclick="window.history.back()"><i
                                    class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <h1 class="h3 pb-3">New Billing Item</h1>
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
                <form action="{{ $data ? route('billingitems.update', $data->id) : route('billingitems.store') }}"
                    method="post" id="formBillingItemS">
                    @csrf
                    {{-- <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control  border-bottom" id="name" name="name"
                        value="{{ old('name', $data->name ?? '') }}">
                    </div>  --}}
                    @if (optional($data)->name)
                        <input type="hidden" name="name" value="{{ $data->name }}">
                    @else
                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-bottom" id="name" name="name"
                                value="{{ old('name', $data->name ?? '') }}">
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="short_name" class="form-label">Short name</label>
                        <input type="text" class="form-control  border-bottom" id="short_name" name="short_name"
                            value="{{ old('short_name', $data->short_name ?? '') }}">
                    </div>

                    @if (optional($data)->name)
                        <input type="hidden" name="taxable" {{ old('taxable', $data->taxable ?? '') ? 'checked' : '' }}
                            value="1">
                    @else
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="taxable" name = "taxable"
                                {{ old('taxable', $data->taxable ?? '') ? 'checked' : '' }} value="1">
                            <label class="form-check-label" for="taxable">
                                Taxable
                            </label>
                        </div>
                    @endif
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="allow_driver_to_add" name="allow_driver_to_add"
                            name = "allow_driver_to_add"
                            {{ old('allow_driver_to_add', $data->allow_driver_to_add ?? '') ? 'checked' : '' }}
                            value="1">
                        <label class="form-check-label" for="allow_driver_to_add">
                            Allow driver to add?
                        </label>
                        <input type="hidden" name="allow_driver_to_add" value="0">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="req_bef_strt_duty" name="req_bef_strt_duty"
                            name = "req_bef_strt_duty"
                            {{ old('req_bef_strt_duty', $data->req_bef_strt_duty ?? '') ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="req_bef_strt_duty">
                            Required before starting duty - Only applicable for driver (Indecab Go App)
                        </label>
                    </div>
                    @if (optional($data)->name)
                        <input type="hidden" name="n_charged_on_customer_invoice"
                            {{ old('n_charged_on_customer_invoice', $data->n_charged_on_customer_invoice ?? '') ? 'checked' : '' }}
                            value="{{ old('n_charged_on_customer_invoice', $data->n_charged_on_customer_invoice ?? '') }}">
                    @else
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="n_charged_on_customer_invoice"
                                name = "n_charged_on_customer_invoice"
                                {{ old('n_charged_on_customer_invoice', $data->n_charged_on_customer_invoice ?? '') ? 'checked' : '' }}
                                value="1">
                            <label class="form-check-label" for="n_charged_on_customer_invoice">
                                Not charged on customer invoice
                            </label>
                        </div>
                    @endif
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="active" checked name = "active"
                            {{ old('active', $data->active ?? '') ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="active">
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

{{-- extra js code --}}
@section('extrajs')
    <script>
        $(document).ready(function() {
            let alreadyChecked = false;
            $('#req_bef_strt_duty').click(function() {
                if ($(this).prop("checked") == true) {
                    if ($('#allow_driver_to_add').prop("checked") == true) {
                        alreadyChecked = true;
                        $('#allow_driver_to_add').prop("disabled", true);
                        $("input[name='allow_driver_to_add']").val("1");
                    } else {
                        alreadyChecked = false;
                        $('#allow_driver_to_add').prop("checked", true);
                        $('#allow_driver_to_add').prop("disabled", true);
                        $("input[name='allow_driver_to_add']").val("1");
                    }
                    console.log('checked');
                } else if ($(this).prop("checked") == false) {
                    if (alreadyChecked == true) {
                        $('#allow_driver_to_add').prop("disabled", false);
                        $("input[name='allow_driver_to_add']").val("1");
                    } else {
                        $('#allow_driver_to_add').prop("checked", false);
                        $('#allow_driver_to_add').prop("disabled", false);
                        $("input[name='allow_driver_to_add']").val("0");
                    }
                    console.log('unchecked');
                }
            });
        });
    </script>
@endsection
