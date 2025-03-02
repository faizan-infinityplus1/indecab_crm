@extends('layouts.admin-master')
@section('content')
    <div>
        <div class="container-fluid p-5">
            {{-- page heading start --}}
            <div class="page-header border-bottom bg-white mb-3">
                <div class="row">
                    <div class="col-md-6 position-static">
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
                        <select class="form-select border-bottom" name="customer" id="customer">
                            <option value="">(Select one)</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}" data-name="{{ $customer->name }}"
                                    data-gstNo="{{ $customer->gst_no }}" data-address="{{ $customer->address }}">
                                    {{ $customer->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-12 mt-4 " role="group">
                        <button type="button" class="btn btn-light border w-100" data-bs-toggle="modal"
                            data-bs-target="#rightSidePanel">Add New Customer</button>
                    </div>

                </div>


                {{-- Pannel Heading --}}
                <div class="panel border rounded mb-3">
                    <div class="panel-heading bg-light p-3">
                        <div class="row">
                            <div class="col-md-8">
                                Booked By / Passenger <span class="text-muted"></span>
                            </div>
                            <div class="col-md-4 text-end">
                                <a class="text-decoration-none" id="toggleLink">Add additional contacts</a>
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
                            <div id="mainContactContainer">
                                <div id="contactContainer">

                                </div>
                                <button type="button" id="addContactId" onclick="addContact()"
                                    class="btn btn-primary rounded-1 mb-3" style="display: none;">
                                    + Add another Contact
                                </button>
                            </div>
                            {{-- component add addtion contact end here --}}
                            <div>
                                <div id="passengerContainer">
                                    {{-- <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group">
                                                <label for="" class="control-label">Passenger Name <span></span></label>
                                                <div class="awesomplete">
                                                    <select class="form-select border-bottom" name="" id="">

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
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <div class="form-group">
                                                <label for="" class="control-label">Passenger Name</label>
                                                <div class="awesomplete">
                                                    <select class="form-select border-bottom" name="" id="">

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
                                    </div> --}}
                                </div>
                                <button type="button" onclick="addPassenger()" class="btn btn-primary rounded-1 mb-3">
                                    + Add another passenger
                                </button>
                            </div>

                        </div>
                    </div>
                </div>



                {{-- Pannel bottom section --}}
                <div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">From (Service Location) <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="fromservice" id="fromservice">
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">To</label>
                            <select class="form-select border-bottom" name="toservice" id="toservice">
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Vehicle Group <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="vehicleGroup" id="vehicleGroup">
                                <option value="">(Select one)</option>
                                @foreach ($vehicleGroup as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Duty Type <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="dutyType" id="dutyType">
                                <option value="">(Select one)</option>
                                @foreach ($dutyTypes as $dutyType)
                                    <option value="{{ $dutyType->id }}">{{ $dutyType->duty_name }}</option>
                                @endforeach
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
    <div class="modal fade come-from-modal right" id="rightSidePanel" tabindex="-1"
        aria-labelledby="rightSidePanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen"> <!-- Added 'modal-fullscreen' for full height -->
            <div class="modal-content h-100">
                <div class="modal-body p-0 h-100">
                    <iframe src="{{ route('customers.create') }}/?hide_menu=1" frameborder="0"
                        class="w-100 h-100"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrajs')
    <script src="{{ asset('admin/js/timeslots.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script src="{{ asset('admin/js/cities.js') }}"></script>
    <script>
        $(document).ready(function() {

            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }
                const name = $(state.element).attr("data-name");
                const gstNo = $(state.element).attr("data-gstNo") || "N/A";
                const address = $(state.element).attr("data-address");
                // var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    `<div >
                        <div>- ${name}
                            <small class="text-black-50">
                                <strong>(GST:</strong> ${gstNo} <strong>| Address:</strong> ${address})
                            </small>
                        </div>
                    </div>`
                );
                return $state;
            };

            function formatTemplateState(state) {
                if (!state.id) {
                    return state.text;
                }
                const name = $(state.element).attr("data-name");
                const gstNo = $(state.element).attr("data-gstNo") || "N/A";
                const address = $(state.element).attr("data-address");
                // var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    `<div >
                        <div>- ${name}
                            <small class="text-black-50">
                                <strong>(GST:</strong> ${gstNo} <strong>| Address:</strong> ${address})
                            </small>
                        </div>
                    </div>`
                );
                return $state;
            };
            $('#customer').select2({
                templateResult: formatState,
                templateSelection: formatTemplateState,
            });
            $('.hideElement').hide();
            // function toggleDivs() {
            // }
            $(".toggleDivs").on("click", function() {
                $('.hideElement').show();
            })



            $("#toggleLink").click(function() {
                // Hide the link
                $(this).hide();

                // Show the container
                $("#addContactId").show();
                addContact();
            });
        })
        document.getElementById("rep_time").innerHTML = generateTimeSlots();
        document.getElementById("drop_time").innerHTML = generateTimeSlots();


        // =========== Add Passenger Start ==============
        let contactIndex = 0;

        function addContact(contact = {}) {
            console.log("i am here");

            contactIndex++;
            const contactContainer = document.getElementById("contactContainer");
            const contactDiv = document.createElement("section");
            contactDiv.setAttribute("contact-data-index", contactIndex);
            let contactHtml = `<div class="row mb-3">
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
                                    <div class="col-md-1 hidden-xs" style="margin-top: 22px">
                                            <button  type="button" onclick="removeContact(${contactIndex})" class="btn btn-sm btn-danger icon-cancel autoform-remove-item" type="button"
                                                tabindex="-1">X</button>
                                        </div>
                                </div>`;
            contactDiv.innerHTML = contactHtml;
            contactContainer.appendChild(contactDiv);
        }
        // Function to remove an contact field
        function removeContact(index) {
            document.querySelector(`[contact-data-index="${index}"]`).remove();
        }
        // =========== Add Passenger End ==============


        // =========== Add Passenger Start ==============
        let passengerIndex = 0;

        function addPassenger(passenger = {}) {
            passengerIndex++;
            const passengerContainer = document.getElementById("passengerContainer");
            const passengerDiv = document.createElement("section");
            passengerDiv.setAttribute("passenger-data-index", passengerIndex);
            let passengerHtml = `<div class="row">
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
                                        <button type="button" onclick="removePassenger(${passengerIndex})"  class="btn btn-sm btn-danger icon-cancel autoform-remove-item" type="button"
                                            tabindex="-1">X</button>
                                    </div>
                                </div>`;
            passengerDiv.innerHTML = passengerHtml;
            passengerContainer.appendChild(passengerDiv);
        }
        // Function to remove an Passenger field
        function removePassenger(index) {
            document.querySelector(`[passenger-data-index="${index}"]`).remove();
        }
        // =========== Add Passenger End ==============

        $('#fromservice').html(generateCityOptions());
        $('#toservice').html(generateCityOptions());
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
