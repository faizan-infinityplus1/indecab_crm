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

            <form action={{ route('booking.createOrUpdate', $bookingId) }} method="post" enctype="multipart/form-data"
                id="formBooking">
                {{-- Create booking for Mumbai Cab Service. Change  --}}
                @csrf
                <input type="number" hidden class="form-control  border-bottom" id="booking_id" name="booking_id"
                    value="{{ old('booking_id', $booking->id ?? -1) }}">
                <input type="number" hidden class="form-control  border-bottom" id="company_id" name="company_id"
                    value="{{ old('company_id', $booking->company_id ?? $defaultCompanyId) }}">
                <div class="row mb-3">
                    <div class="col-md-6 col-12">
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-md-end text-center">
                            Create booking for <b><span id="company_name">Mumbai Cab Service</span></b>. <button
                                href="" data-bs-toggle="modal" data-bs-target="#sister-companies">Change</button>
                            <span class="help-block"></span>
                        </p>
                    </div>
                </div>


                {{-- Booking Page Start here --}}
                <div class="row mb-3">
                    <div class="col-md-10 col-12">
                        <label for="name" class="control-label">Customer <span class="text-danger">*</span></label>
                        {{-- <div>{{ old('customer_id') }}</div> --}}
                        <select class="form-select border-bottom" name="customer_id" id="customer"
                            value="{{ old('customer_id', $booking->customer_id ?? '') }}">

                            <option></option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}" data-name="{{ $customer->name }}"
                                    data-gstNo="{{ $customer->gst_no }}" data-address="{{ $customer->address }}"
                                    {{ $customer->id == old('customer_id', $booking->customer_id ?? '') ? 'selected' : '' }}>
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
                <div class="panel border rounded mb-3" id="bookingFormBookedBy" style="display: none;">
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
                                    <input type="hidden" name="type" value="bookedBy">
                                    <input type="hidden" name="booked_by_customer_id" id="booked_by_customer_id">
                                    <input type="hidden" name="booked_by_id" id="booked_by_id"
                                        value="{{ old('id', $bookedByCustomer->id ?? '') }}">
                                    <label for="" class="control-label">Booked By Name</label>
                                    <select class="form-select border-bottom" name="booked_by_customer_name"
                                        id="booked_by_customer_name"
                                        value="{{ old('booked_by_customer_name', $bookedByCustomer->booked_by_customer_name ?? '') }}">

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Booked By Phone Number
                                            <span></span></label>
                                        <input type="text" class="form-control" name="booked_by_customer_phone"
                                            id="booked_by_customer_phone"
                                            value="{{ old('booked_by_customer_phone', $bookedByCustomer->booked_by_customer_phone ?? '') }}">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Booked By Email
                                            <span></span></label>
                                        <input type="text" class="form-control" name="booked_by_customer_email"
                                            id="booked_by_customer_email"
                                            value="{{ old('booked_by_customer_email', $bookedByCustomer->booked_by_customer_email ?? '') }}">
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
                            {{-- <div>{{ old('from_service') }}</div> --}}
                            <select class="form-select border-bottom" name="from_service" id="fromservice"
                                value="{{ old('from_service', $booking->from_service ?? '') }}" required>

                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">To</label>
                            <select class="form-select border-bottom" name="to_service" id="toservice"
                                value="{{ old('to_service', $booking->to_service ?? '') }}" required>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Vehicle Group <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="vehicle_group" id="vehicleGroup"
                                value="{{ old('vehicle_group', $booking->vehicle_group ?? '') }}" required>
                                <option value="">(Select one)</option>
                                @foreach ($vehicleGroup as $vehicle)
                                    <option value="{{ $vehicle->id }}"
                                        {{ $vehicle->id == old('vehicle_group', $booking->vehicle_group ?? '') ? 'selected' : '' }}>
                                        {{ $vehicle->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Duty Type <span
                                    class="text-danger">*</span></label>
                            <select class="form-select border-bottom" name="duty_type" id="dutyType"
                                value="{{ old('duty_type', $booking->duty_type ?? '') }}" required>
                                <option value="">(Select one)</option>
                                @foreach ($dutyTypes as $dutyType)
                                    <option value="{{ $dutyType->id }}"
                                        {{ $dutyType->id == old('duty_type', $booking->duty_type ?? '') ? 'selected' : '' }}>
                                        {{ $dutyType->duty_name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Start Date <span
                                    class="text-danger">*</span></label>

                            <input type="date" class="form-control  border-bottom" name="start_date"
                                value="{{ old('start_date', $booking->start_date ?? now()->format('Y-m-d')) }}"
                                min="<?= date('Y-m-d') ?>" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">End Date <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control  border-bottom" name="end_date"
                                value="{{ old('end_date', $booking->end_date ?? now()->format('Y-m-d')) }}"
                                min="<?= date('Y-m-d') ?>" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="control-label">Rep. Time <span class="text-danger">*</span></label>
                                    {{-- <input type="text" class="form-control  border-bottom"> --}}
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="reporting_time" id="rep_time"
                                        value="{{ old('from_service', $booking->from_service ?? '') }}" required>

                                    </select>
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="control-label">Est. Drop Time</label>
                                    {{-- <input type="text" class="form-control  border-bottom"> --}}
                                    <select class="form-select border-bottom" aria-label="Default select example"
                                        name="drop_time" id="drop_time"
                                        value="{{ old('from_service', $booking->from_service ?? '') }}">

                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Start from garage before (in min) <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" min="0" max="1440" name="garage_time"
                                id="garage_time" value="{{ old('garage_time', $booking->garage_time ?? '60') }}"
                                required>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="control-label">Reporting Address <span></span></label>
                            <textarea class="form-control" name="reporting_address" id="reportinAddress" rows="4"
                                value="{{ old('reporting_address', $booking->reporting_address ?? '') }}"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="control-label">Drop Address<span></span></label>
                            <textarea class="form-control" name="drop_address" id="dropAddress" rows="4"
                                value="{{ old('drop_address', $booking->drop_address ?? '') }}"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Short Reporting Address (to be shown in duty
                                listing)</label>
                            <input type="text" name="short_reporting_address" id="" class="form-control"
                                maxlength="80"
                                value="{{ old('short_reporting_address', $booking->short_reporting_address ?? '') }}" />
                            <div class="help-block"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Flight/Train Number</label>
                            <input type="text" name="ticket_number" id="" class="form-control"
                                maxlength="80" value="{{ old('ticket_number', $booking->ticket_number ?? '') }}">
                            <div class="help-block"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">No branches added.</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Bill To </label>
                            <select class="form-select border-bottom" name="bill_to" id=""
                                value="{{ old('from_service', $booking->from_service ?? '') }}">
                                @php
                                    $selectedBillTo = old(
                                        'bill_to',
                                        $booking->bill_to ?? 'Company / Customer (Default)',
                                    );
                                @endphp

                                <option value="Company / Customer (Default)"
                                    {{ $selectedBillTo == 'Company / Customer (Default)' ? 'selected' : '' }}>Company /
                                    Customer (Default)</option>
                                <option value="Company (Credit Card)"
                                    {{ $selectedBillTo == 'Company (Credit Card)' ? 'selected' : '' }}>Company (Credit
                                    Card)</option>
                                <option value="Company (Direct Payment)"
                                    {{ $selectedBillTo == 'Company (Direct Payment)' ? 'selected' : '' }}>Company (Direct
                                    Payment)</option>
                                <option value="Personal" {{ $selectedBillTo == 'Personal' ? 'selected' : '' }}>Personal
                                </option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="" class="control-label">Price <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="price" id="price"
                                value="{{ old('price', $booking->price ?? '') }}" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="" class="control-label">Per Extra KM Rate</label>
                            <input type="number" class="form-control" name="per_km_rate"
                                value="{{ old('per_km_rate', $booking->per_km_rate ?? '') }}">
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="" class="control-label">Per Extra Hr Rate</label>
                            <input type="number" class="form-control" name="per_extra_hr_rate"
                                value="{{ old('per_extra_hr_rate', $booking->per_extra_hr_rate ?? '') }}">
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
                            <textarea class="form-control" name="remarks" id="" rows="4"
                                value="{{ old('remarks', $booking->remarks ?? '') }}"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="from-label">Driver/Supplier Remarks </label>
                            <textarea class="form-control" name="driver_remark" id="" rows="4"
                                value="{{ old('driver_remark', $booking->driver_remark ?? '') }}"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="control-label">Operator notes</label>
                            <textarea class="form-control" name="operator_notes" id="" rows="4"
                                value="{{ old('operator_notes', $booking->operator_notes ?? '') }}"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="row">
                        {{-- <div class="col-md-4 mb-3">
                            <b>Booking attachments:</b>
                            <label for="booking_attachments" class="text-primary">Upload attachment</label>.
                            <input type="file" name="booking_attachments[]" id="booking_attachments" class="d-none">
                            <div>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
                            </div>
                        </div> --}}
                        <div class="col-md-4 mb-3">
                            <b>Booking attachments:</b>
                            <label for="booking_attachments" class="text-primary">Upload attachment</label>
                            <input type="file" name="booking_attachments[]" id="booking_attachments" class="d-none"
                                multiple>

                            <div id="fileList"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="labels" class="control-label">Labels</label>
                            <select class="form-select border-bottom" name="labels[]" id="labels" multiple="multiple"
                                value="{{ old('from_service', $booking->from_service ?? '') }}">
                                @foreach ($labels as $label)
                                    <option value="{{ $label->id }}"
                                        {{ $label->id == old('labels', $label->labels ?? '') ? 'selected' : '' }}>
                                        {{ $label->label_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- check-box --}}
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox"
                            value="{{ old('from_service', $booking->from_service ?? 1) }}" name="is_confirmed_booking"
                            id="is_confirmed_booking">
                        <label class="form-check-label" for="is_confirmed_booking">
                            Mark as unconfirmed booking
                        </label>
                    </div>
                    <div class="bg-light mb-3 p-3">
                        If you would like to enable booking insurance for your customers contact <a href="#"
                            class="text-decoration-none">support@infinityplus1.in</a> to
                        learn how to enable this.
                    </div>
                    <div class="upload-section">
                        <label for="fileUpload">Booking Attachments:</label>
                        <!-- 'Upload Attachment' button triggers the hidden file input -->
                        <label class="upload-btn" for="fileUpload">Upload Attachment</label>

                        <!-- Multiple files allowed -->
                        <input type="file" id="fileUpload" name="attachments[]" multiple>

                        <!-- Display list of selected files -->
                        <ul id="fileList" class="file-list"></ul>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-1">Submit</button>
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

    <!-- Sister Companies Modal Start-->
    <div class="modal fade" id="sister-companies" tabindex="-1" aria-labelledby="sister-companiesLabel"
        aria-hidden="true">
        <div class="modal-dialog float-end activity-logs-modal my-0 h-100 bg-white">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sister-companiesLabel">Sister Companies</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>
                            Showing list of active sister companies.
                        </p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover datatable" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mstMyCompany as $company)
                                    <tr onclick="selectCompany({{ $company->id }}, '{{ $company->name }}')"
                                        data-bs-dismiss="modal">
                                        <td>
                                            {{ $company->name }}
                                        </td>
                                        <td>
                                            {{ $company->code }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div>
                        <i class="text-black-50">
                            Please click on the company name to select.
                        </i>
                    </div>
                </div>

                <div class="modal-footer justify-content-start position-sticky bottom-0  bg-white">
                    <div>
                        <button type="button" class="btn btn-danger rounded-1" data-bs-dismiss="modal">Close</button>
                    </div>
                    {{-- <button type="button" class="btn btn-light border border-secondary-subtle rounded-1" data-bs-dismiss="modal">Download Import Format</button> --}}
                </div>

            </div>
        </div>
    </div>
    <!-- Activity logs Modal End-->
   {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  --}} 
@endsection

@section('extrajs')
    <script src="{{ asset('admin/js/timeslots.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script src="{{ asset('admin/js/cities.js') }}"></script>
    <script>
        const customers = {!! json_encode($customers) !!};
        const booking = {!! json_encode($booking) !!};
        const defaultCompanyId = {!! json_encode($defaultCompanyId) !!};
        const companies = {!! json_encode($mstMyCompany) !!};
        const fromService = {!! json_encode(old('from_service')) !!};
        const toService = {!! json_encode(old('to_service')) !!};
        const repTime = {!! json_encode(old('reporting_time')) !!};
        const dropTime = {!! json_encode(old('drop_time')) !!};
    </script>
    <script src="{{ asset('admin/js/bookingcab.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true
            });

            $("#formBooking").validate({
                rules: {
                    customer_id: {
                        required: true,
                    },
                    from_service: {
                        required: true,
                    },
                    to_service: {
                        required: true,
                    },
                    vehicle_group: {
                        required: true,
                    },
                    duty_type: {
                        required: true,
                    },
                    start_date: {
                        required: true,
                    },
                    end_date: {
                        required: true,
                    },
                    rep_time: {
                        required: true,
                    },
                    garage_time: {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                },
                messages: {
                    customer_id: {
                        required: "", // Do not show error text
                    },
                    from_service: {
                        required: "From is required",
                    },
                    to_service: {
                        required: "To is required",
                    },
                    vehicle_group: {
                        required: "Vehicle Group is required",
                    },
                    duty_type: {
                        required: "Duty Type is required",
                    },
                    start_date: {
                        required: "Start Date is required",
                    },
                    end_date: {
                        required: "End Date is required",
                    },
                    rep_time: {
                        required: "Rep. Time is required",
                    },
                    garage_time: {
                        required: "Start from garage before (in min) is required",
                    },
                    price: {
                        required: "Price is required",
                    },
                },
                errorElement: "div",
                errorClass: "error-message text-danger",
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color", "red");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                    $(element).closest(".validator-error").find("label").css("color", "black");
                },
                showErrors: function(errorMap, errorList) {
                    // Prevent displaying error message for customer_id
                    errorList = errorList.filter(function(error) {
                        return error.element.name !== "customer_id";
                    });

                    this.defaultShowErrors();
                },
                invalidHandler: function(event, validator) {
                    if (validator.errorList.length) {
                        const firstError = validator.errorList.find(e => e.element.name !==
                            "customer_id");
                        if (firstError) {
                            showAlert('error', firstError.message);
                        }
                    }
                },
                submitHandler: function(form) {
                    $('.btnSubmit').attr('disabled', 'disabled');
                    $(".btnSubmit").html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    form.submit();
                }
            });


        });
      
        const fileUpload = document.getElementById('fileUpload');
        const fileList = document.getElementById('fileList');

        // We'll maintain an array of selected files here
        let selectedFiles = [];

        // Listen for changes in the file input
        fileUpload.addEventListener('change', (e) => {
            // Convert the FileList to an array
            const newFiles = Array.from(e.target.files);

            // Merge newly selected files with previously selected files
            selectedFiles = selectedFiles.concat(newFiles);

            // Render the file list in the UI
            renderFileList();
        });

        // Display file names and a "Remove" button for each
        function renderFileList() {
            fileList.innerHTML = '';

            selectedFiles.forEach((file, index) => {
                const li = document.createElement('li');
                li.textContent = file.name;

                // Remove button
                const removeBtn = document.createElement('span');
                removeBtn.textContent = 'Remove';
                removeBtn.classList.add('remove-file');
                removeBtn.addEventListener('click', () => removeFile(index));

                li.appendChild(removeBtn);
                fileList.appendChild(li);
            });
        }

        // Remove file from the array and re-render
        function removeFile(index) {
            selectedFiles.splice(index, 1);
            renderFileList();
            rebuildFileInput();
        }

        // Rebuild the underlying FileList in the <input> after removing files
        function rebuildFileInput() {
            // Create a new DataTransfer to build the updated FileList
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => {
                dataTransfer.items.add(file);
            });
            fileUpload.files = dataTransfer.files;
        }
    </script>
@endsection
