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
                    <h1 class="h3 pb-3">New Bank Accounts</h1>
                </div>
                <div class="col-md-6 text-end">
                    {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                </div>
            </div>
        </div>
        {{-- page heading end --}}
        <div>
            <form action="{{ $data ? route('bankaccounts.update', $data->id) : route('bankaccounts.store') }}" method="post"
                id="formBankAccount">
                @csrf
                <div class="mb-3">
                    <label for="account_name" class="form-label">Account Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control  border-bottom" id="account_name" name="account_name"
                    value="{{ old('account_name', $data->account_name ?? '') }}">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="account_number" class="form-label">Account Number <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control  border-bottom" id="account_number" name="account_number"
                    value="{{ old('account_number', $data->account_number ?? '') }}">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="ifsc_code" class="form-label">IFSC Code <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control  border-bottom" id="ifsc_code" name="ifsc_code"
                    value="{{ old('ifsc_code', $data->ifsc_code ?? '') }}">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="bank_name" class="form-label">Bank Name <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control  border-bottom" id="bank_name" name="bank_name"
                            value="{{ old('bank_name', $data->bank_name ?? '') }}">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="bank_branch" class="form-label">Bank Branch <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control  border-bottom" id="bank_branch" name="bank_branch"
                            value="{{ old('bank_branch', $data->bank_branch ?? '') }}">
                            <span class="warning-msg-block"></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cheques_in_name" class="form-label">Cheques in name of <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control  border-bottom" id="cheques_in_name" name="cheques_in_name"
                    value="{{ old('cheques_in_name', $data->cheques_in_name ?? '') }}">
                    <span class="warning-msg-block"></span>
                </div>
                <div class="mb-3">
                    <label for="upi_address" class="form-label">UPI Address</label>
                    <input type="text" class="form-control  border-bottom" id="upi_address" name="upi_address"
                    value="{{ old('upi_address', $data->upi_address ?? '') }}">
                    <span class="warning-msg-block"></span>
                </div>
                <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                {{-- ================== --}}
            </form>
        </div>
    </div>
</div>
@endsection