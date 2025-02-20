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
                        <h1 class="h3 pb-3">New Booking</h1>
                    </div>
                    <div class="col-md-6 text-end">
                    </div>
                </div>
            </div>

            <form action="" method="post">
                {{-- Create booking for Mumbai Cab Service. Change  --}}
                <div class="row mb-3">
                    <div class="col-md-6 col-12">
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-md-end text-center">
                            Create booking for <b>Mumbai Cab Service</b>. <a href="#">Change</a>
                            <span class="help-block"></span>
                        </p>
                    </div>
                </div>


                {{-- Booking Page Start here --}}
                <div class="row mb-3">
                    <div class="col-md-10 col-12">
                        <label for="name" class="control-label">Customer <span class="text-danger">*</span></label>
                        <select class="form-select border-bottom" name="" id="">
                            <option value="">(Select one)</option>
                            <option value="">Mumbai</option>
                            <option value="">Pune</option>
                            <option value="">Thane</option>
                            <option value="">Byculla</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-12 mt-4 " role="group">
                        <button class="btn btn-light border w-100">Add New Customer</button>
                    </div>
                </div>


                {{-- Pannel Heading --}}
                <div class="panel border rounded mb-3">
                    <div class="panel-heading bg-light p-3">
                        <div class="row">
                            <div class="col-md-8">
                                Booked By / Passenger <span class="text-muted"> -
                                    Loading...</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <a class="text-decoration-none" href="#">Add additional contacts</a>
                            </div>
                        </div>
                    </div>


                    <div class="panel-body p-3 bg-body rounded">
                        <div class="js-booking-form-bookedBy">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="" class="control-label">Booked By Name</label>
                                    <select class="form-select border-bottom" name="" id="">
                                        {{-- <option value="">(Select one)</option>
                                        <option value="">Mumbai</option>
                                        <option value="">Pune</option>
                                        <option value="">Thane</option>
                                        <option value="">Byculla</option> --}}
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Booked By Phone Number
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Booked By Email
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            {{-- component add addtion contact --}}
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="" class="control-label">Additional Contact Name</label>
                                    <select class="form-select border-bottom" name="" id="">
                                        <option value="">(Select one)</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Phone Number
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary rounded-1 mb-3">
                                + Add another passenger
                            </button>
                            {{-- component add addtion contact end here --}}

                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Name <span></span></label>
                                        <div class="awesomplete">
                                            <select class="form-select border-bottom" name="" id="">
                                                {{-- <option value="">(Select one)</option>
                                                <option value="">Mumbai</option>
                                                <option value="">Pune</option>
                                                <option value="">Thane</option>
                                                <option value="">Byculla</option> --}}
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Phone Name
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Email
                                            <span></span></label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-1 hidden-xs" style="margin-top: 22px">
                                    <button class="btn btn-sm btn-danger icon-cancel autoform-remove-item" type="button"
                                        tabindex="-1">X</button>
                                </div>
                            </div>
                            {{-- component start here --}}
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Name</label>
                                        <div class="awesomplete">
                                            <select class="form-select border-bottom" name="" id="">
                                                {{-- <option value="">(Select one)</option>
                                                <option value="">Mumbai</option>
                                                <option value="">Pune</option>
                                                <option value="">Thane</option>
                                                <option value="">Byculla</option> --}}
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Phone Name
                                        </label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Passenger Email
                                        </label>
                                        <input type="text" class="form-control" name="" id="">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-1 hidden-xs" style="margin-top: 22px">
                                    <button class="btn btn-sm btn-danger icon-cancel autoform-remove-item" type="button"
                                        tabindex="-1">X</button>

                                </div>
                            </div>
                            {{-- component end here --}}
                            <button class="btn btn-primary rounded-1 mb-3">
                                + Add another passenger
                            </button>
                        </div>
                    </div>
                </div>



                {{-- Pannel bottom section --}}
                <div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">From (Service Location) <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">To</label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Vehicle Group <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Duty Type <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Start Date <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control  border-bottom">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">End Date <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control  border-bottom">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="control-label">Rep. Time <span class="text-danger">*</span></label>
                                    {{-- <input type="text" class="form-control  border-bottom"> --}}
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="rep_time">

                                    </select>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="control-label">Est. Drop Time</label>
                                    {{-- <input type="text" class="form-control  border-bottom"> --}}
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="" id="drop_time">

                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Start from garage before (in min) <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" min="0" max="1440" value="60">
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="control-label">Reporting Address <span></span></label>
                            <select class="form-select border-bottom" name="" id="">
                                {{-- <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option> --}}
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="control-label">Drop Address<span></span></label>
                            <select class="form-select border-bottom" name="" id="">
                                {{-- <option value="">(Select one)</option>
                                <option value="">Mumbai</option>
                                <option value="">Pune</option>
                                <option value="">Thane</option>
                                <option value="">Byculla</option> --}}
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Short Reporting Address (to be shown in duty
                                listing)</label>
                            <input type="text" name="" id="" class="form-control" maxlength="80">
                            <div class="help-block"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Flight/Train Number</label>
                            <input type="text" name="" id="" class="form-control" maxlength="80">
                            <div class="help-block"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">No branches added.</label>
                            {{-- <label for="" class="control-label">No branches added.</label> --}}
                            {{-- <select class="form-select border-bottom" name="" id="">
                                <option value=""> Company / Customer (Default)</option>
                                <option value="">Company (Credit Card)</option>
                                <option value="">Company (Direct Payment)</option>
                                <option value="">Personal</option>
                            </select> --}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Bill To </label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value=""> Company / Customer (Default)</option>
                                <option value="">Company (Credit Card)</option>
                                <option value="">Company (Direct Payment)</option>
                                <option value="">Personal</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Price <span class="text-danger">*</span></label>
                            <input type="number" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="" class="control-label">Per Extra KM Rate</label>
                            <input type="number" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="" class="control-label">Per Extra Hr Rate</label>
                            <input type="number" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="form-group">
                                <label for="" class="control-label"></label>
                            </div>
                            <button class="btn btn-light border w-100">Get Price</button>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    {{-- Text Component --}}
                    <div class="row ">
                        <div class="col-md-4 mb-3">
                            <label for="" class="from-label">Remarks</label>
                            <textarea class="form-control" name="" id="" rows="4"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-4 mb-3 hideElement">
                            <label for="" class="from-label">Driver/Supplier Remarks </label>
                            <textarea class="form-control" name="" id="" rows="4"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Operator notes</label>
                            <textarea class="form-control" name="" id="" rows="4"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <p class="mb-3">
                        <a class="text-md-start text-center text-decoration-none toggleDivs cursor-pointer">Add
                            separate remarks
                            for
                            driver/supplier.</a>
                    </p>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <b>Booking attachments:</b>
                            <a class="text-md-start text-center text-decoration-none">Upload attachment.</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="control-label">Labels</label>
                            <select class="form-select border-bottom" name="" id="">
                                <option value=""> Company / Customer </option>
                                <option value="">Company </option>
                                <option value="">Company </option>
                                <option value="">Personal</option>
                            </select>
                        </div>
                    </div>
                    {{-- check-box --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" name="is_gst_primary"
                            id="is_gst_primary">
                        <label class="form-check-label" for="is_gst_primary">
                            Mark as unconfirmed booking
                        </label>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact <a href="#"
                            class="text-decoration-none">support@indecab.com</a> to
                        learn how to enable this.
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">SAVE</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extrajs')
    <script>
        $(document).ready(function() {
            $('.hideElement').hide();
            // function toggleDivs() {
            // }
            $(".toggleDivs").on("click", function() {
                $('.hideElement').show();
            })
        })
        document.getElementById("rep_time").innerHTML = generateTimeSlots();
        document.getElementById("drop_time").innerHTML = generateTimeSlots();
    </script>
@endsection

{{-- @section('extrajs')
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
@endsection --}}
