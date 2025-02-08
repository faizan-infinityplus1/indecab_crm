@extends ('layouts.admin-master')
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
                        <h1 class="h3 pb-3">New Feedback Form</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Edit</a></div>
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <p><b>Display Name:</b> Mumbai Cab Service</p>
                <p><b>Description:</b> https://g.page/r/CYy_5eqH-HcTEAg/review</p>
                <p>Note: Please don't create fields for passenger Name, Phone Numer or Email address, we record these details automatically based on who you send link to.</p>
                <table class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Field Type</th>
                            <th>Required</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Question <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control  border-bottom" id="" >
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea class="form-control" id="" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label ">Field Type <span class="text-danger">*</span></label>
                                        <select class="form-select border-bottom" aria-label="Default select example" name="type"
                                            id="">
                                            <option value="selectOne">Select One</option>
                                            <option value="driverCumOwners">Singleline Text</option>
                                            <option value="company">Multiline Text</option>
                                            <option value="company">Select</option>
                                            <option value="company">Multi Select</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label ">Options (Comma Separated)</label>
                                        <input type="text" class="form-control  border-bottom" id="" >
                                        <span class="warning-msg-block"></span>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            Required
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="">
                                        <label class="form-check-label" for="">
                                            In-active
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-1">SUBMIT</button>
                                    <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="">
                                <button type="button" class="btn btn-light border">Add Field</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

