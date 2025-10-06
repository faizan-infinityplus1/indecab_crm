@extends('layouts.admin-master')
@section('content')
    <div class="card rounded-0 border-0 p-5">
        <div class="card-header d-flex justify-content-between py-2 px-0 bg-transparent page-heading-container flex-wrap">
            <div>
                <h4>Settings</h4>
            </div>
            <div class="text-end d-flex justify-content-end align-items-center gap-2">
                <div class="btn-group" role="group">
                    <a href="{{ route('showCustomersGroups') }}" class="btn btn-light border">Developer Controls</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="duties-nav-container">
                <div class="row">
                    <ul class="nav nav-tabs border-0" role="tablist">
                        <li role="presentation" class="">
                            <a class="p-3 text-decoration-none d-inline-block active" href="#settings-duties"
                                aria-controls="Duties" role="tab" data-bs-toggle="tab">
                                Duties / Bookings
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-billing"
                                aria-controls="Billing" role="tab" data-bs-toggle="tab">
                                Billing
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-purchase"
                                aria-controls="Purchase" role="tab" data-bs-toggle="tab">
                                Purchase
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-driver-allowance"
                                aria-controls="Driver Allowance" role="tab" data-bs-toggle="tab">
                                Driver Allowance
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-notifications"
                                aria-controls="Notifications" role="tab" data-bs-toggle="tab">
                                Notifications
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-email-templates"
                                aria-controls="Email Templates" role="tab" data-bs-toggle="tab">
                                Email Templates
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-sms-templates"
                                aria-controls="SMS Templates" role="tab" data-bs-toggle="tab">
                                SMS Templates
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-wapp-templates"
                                aria-controls="Whatsapp Templates" role="tab" data-bs-toggle="tab">
                                WhatsApp Templates
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="p-3 text-decoration-none d-inline-block" href="#settings-others" aria-controls="Misc"
                                role="tab" data-bs-toggle="tab">
                                Others
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="tab-content">
                        <!-- Duties / Bookings settings content here -->
                        <div role="tabpanel" class="tab-pane active show" id="settings-duties">
                            <form action="" class="mt-3">
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Allow bookings to be added without any pricing
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="use_booking_id_in_sms"
                                                id="">
                                            Use Booking Id in SMS
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="round_off_duty_slip_time"
                                                id="">
                                            Round off duty slip time to nearest hour
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="auto_send_allotment_notification"
                                                id="">
                                            Auto send allotment notification to driver app (Indecab Go) users
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="hide_cust_name_in_go"
                                                id="">
                                            Hide customer name for driver/supplier in mobile app
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="allow_allot_to_exp_doc"
                                                id="">
                                            Allow allotment to the driver/vehicle with expired documents
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="enable_close_duty_link"
                                                id="">
                                            Enable close duty link auto generation
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="auto_sel_comp_from_city"
                                                id="">
                                            Auto select company based on selected from city while adding the booking
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="def_mark_unconfirmed"
                                                id="">
                                            Mark new bookings as unconfirmed by default
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="allow_allot_no_price_sup"
                                                id="">
                                            Allow allotment to the supplier with no pricing
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="show_charge_sum_on_dS"
                                                id="">
                                            Show charge summary on customer duty slip
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="allow_allot_another_duty"
                                                id="">
                                            Allow allotment to the driver/vehicle/supplier when driver/vehicle/supplier is
                                            allotted to another duty at same time.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="duty_type_vehicle_group"
                                                id="">
                                            Display duty type, vehicle group in booking/duty form based on customer pricing
                                        </label>
                                    </div>
                                </div>
                                {{-- Note: The selected billing custom.... --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-light mb-3 p-3">
                                            <p class="">
                                                <i>
                                                    Note: The selected billing customer's pricing, chargeable driver
                                                    allowances and fuel surcharges will apply. All other booking
                                                    restrictions,
                                                    validations, and configurations will still use the booking customer's
                                                    profile.
                                                </i>
                                            </p>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="true"
                                                            name="use_booking_id_in_sms" id="">
                                                        Enable billing customer selection when editing booking.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Once the interval is set, add... --}}
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-light mb-3 p-3">
                                            <p class="">
                                                Once the interval is set, address of driver's location would be fetched at
                                                selected interval
                                                for all duties completed via Indecab Go - Driver app. Addresses would then
                                                be visible in
                                                duty slip. Each each request for fetching address of location is charged at
                                                Rs. 1.5..
                                                For example: If you set interval to 30 min, then 8hr duty would require 17
                                                requests for
                                                fetching driver's location every 30 minute. For such a duty you would be
                                                charged 17 address
                                                conversion credits (i.e. Rs. 25.50).
                                            </p>
                                            <div class="form-group">
                                                <div class="mb-3 validator-error">
                                                    <label for="" class="form-label">Duty Route Log Fetch
                                                        Interval</label>
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name=""
                                                        id="">
                                                        <option value="">(Select One)</option>
                                                        <option value="">Off</option>
                                                        <option value="start-end">Only start and end location</option>
                                                        <option value="15">15 min</option>
                                                        <option value="30">30 min</option>
                                                        <option value="60">1 Hour</option>
                                                        <option value="120">2 Hour</option>
                                                    </select>
                                                    <span class="warning-msg-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Default "Start from ga... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Default "Start from garage before (in
                                                min)"</label>
                                            <input type="number" class="form-control  border-bottom" id="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Printed duty slip's info section font
                                                size in px
                                                (min: 10, max: 20).</label>
                                            <input type="number" class="form-control  border-bottom" id="">
                                        </div>
                                    </div>
                                </div>
                                {{-- Booking Form - Customisation --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Booking Form - Customisation
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide field "start from garage before (in min)"
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide dispatch center
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide bill to
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Make reporting address mandatory
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Duties Listing - Columns to b... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Duties Listing - Columns to be displayed
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show garage start time instead of reporting time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show from city
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show drop address
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show remarks
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show operator notes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show vehicle group
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show labels
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show Estimated Drop-off Time
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Default options for book... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Default options for booking confirmation sms/email
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add customer name & address to email
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add booking remarks to email
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add booking base and extras pricing.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Default options for duty sm... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Default options for duty sms/emails
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="col-12">
                                                    <div class="panel border rounded mb-3">
                                                        <div class="panel-heading bg-light p-3">
                                                            To Supplier
                                                        </div>
                                                        <div class="panel-body p-3 bg-body rounded">
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add remarks
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add customer name in email
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Hide passenger phone number to sms/email
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Attach duty slip in email
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add entire booking dates
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="panel border rounded mb-3">
                                                        <div class="panel-heading bg-light p-3">
                                                            To Driver
                                                        </div>
                                                        <div class="panel-body p-3 bg-body rounded">
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add vehicle details to SMS
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add garage start time to SMS
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add booking remarks to SMS
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add entire booking dates
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="panel border rounded mb-3">
                                                        <div class="panel-heading bg-light p-3">
                                                            To Customer
                                                        </div>
                                                        <div class="panel-body p-3 bg-body rounded">
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Hide vehicle name from email and sms
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add booking remarks to email and sms
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Add text Details updated
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="true"
                                                                            name="" id="">
                                                                        Send as a single email to selected email IDs
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Default options for duty sli... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Default options for duty slip printing
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add customer name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add booked by name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add all passenger names and numbers
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide duty type name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide vehicle group name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide vehicle name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide remarks
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add garage start time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add released km/time section
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add entire booking date range
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Add printed by information to footer (with date/time)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Always use full page design
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide business letter head
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide billing items
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide allowances
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show speed-o-meter km row
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Hide Fuel Surcharge
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Print associate duty slip
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Briefing Sheet - Ter... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="" class="form-label">Briefing Sheet - Terms &
                                                Conditions</label>
                                            <textarea class="form-control" rows="3" name="" id=""></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="true" name="" id="">
                                                    Enable start duty OTP verification
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="true" name="" id="">
                                                    Enable stop duty OTP verification
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Garage time settings for a du... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Garage time settings for a duty
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Minimum garage start time
                                                            to consider (in
                                                            minutes)</label>
                                                        <input type="number" class="form-control  border-bottom"
                                                            name="" id="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label for="" class="form-label">Minimum garage end time
                                                            to consider (in
                                                            minutes)</label>
                                                        <input type="number" class="form-control  border-bottom"
                                                            name="" id="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Enable duty enrou... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="bg-light mb-3 p-3">
                                            <div class="form-group mb-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="true" name=""
                                                            id="">
                                                        Enable duty enroute button for drivers
                                                    </label>
                                                </div>
                                            </div>
                                            <p class="text-danger mb-3">
                                                Enroute button would only be available for drivers/suppliers who have an
                                                active tracking
                                                license.
                                            </p>
                                            <p>
                                                If you haven't yet bought the license, you could request for it from <a
                                                    href="#">here</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">Save Changes</button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Billing settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-billing">
                            <form action="" class="mt-3">
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Invoice dates & numbering <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Receipt dates & numbering</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Credit/Debit Note Numbering</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Round off extra time of every duty while displaying on invoice
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Show per kilometer rate on invoice for day km duties
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Hide Vehicle Number from Invoice
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Show duty summary at the top of the invoice always
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Tally > Sales Voucher - Export ref for GST
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="booking_without_price"
                                                id="">
                                            Show Non-Chargeable (RCM) Taxes in E-Invoice
                                        </label>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    <i>
                                        Note: Please keep duty summary columns count to minimum, else duty summary table in
                                        print/pdf/email might break.
                                    </i>
                                </p>
                                {{-- Invoice duty summ... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Invoice duty summary columns
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty id
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty type
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show booked by name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show passenger names
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show vehicle group name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show vehicle number
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start date
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end date
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show total hour
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show speed-o-meter start km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show speed-o-meter end km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show total km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour rate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km rate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour cost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km cost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show consolidated billing items
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show separated billing items
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show allowances
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show price
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show quantity - Number of days
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show total price
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show car hire charges
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty subtotal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty subtotal - including allowances
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Adjust font size of t... --}}
                                <div class="row">
                                    <div class="form-group">
                                        <div class="">
                                            <label for="" class="form-label">Adjust font size of the invoice
                                                description (choose a size between 10 to 20)</label>
                                            <input type="number" class="form-control  border-bottom" name=""
                                                id="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                            <label for="" class="form-label">Adjust font size of the duty summary
                                                (choose a size between 9 to 14)</label>
                                            <input type="number" class="form-control  border-bottom" name=""
                                                id="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Disable editing for Invoice
                                                before</label>
                                            <input type="text" class="form-control  border-bottom" name=""
                                                id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">Save Changes</button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Purchase settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-purchase">
                            <form action="" class="mt-3">
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="" id="">
                                            Show purchase duty summary at the top of the purchase always
                                        </label>
                                    </div>
                                </div>
                                <p class="text-muted mb-3">
                                    <i>
                                        Note: Please keep duty summary columns count to minimum, else duty summary table in
                                        email might break.
                                    </i>
                                </p>
                                {{-- Purchase duty summary col... --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Purchase duty summary columns
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty id
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty type
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show customer name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show booked by name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show passenger names
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show vehicle group name
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show vehicle number
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start date
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end date
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end time
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show total hours
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show start km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show end km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show total km
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour rate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km rate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra hour cost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show extra km cost
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show consolidated billing items
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show separated billing items
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show allowances
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show price
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show duty subtotal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show customer car hire charges
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show customer car hire charges - including allowances
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show customer duty subtotal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Show customer duty subtotal - including allowances
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">Save Changes</button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Driver Allowance settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-driver-allowance">
                            <form action="" class="mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">Driver Allowances</div>
                                            <div class="panel-body bg-body rounded">
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="panel border rounded">
                                                                <div class="panel-heading bg-light p-3">
                                                                    Driver Allowances
                                                                </div>
                                                                <div class="panel-body p-3">
                                                                    <div class="form-group">
                                                                        <div class="mb-3 validator-error">
                                                                            <label for=""
                                                                                class="form-label">Select
                                                                                allowance type</label>
                                                                            <select class="form-select border-bottom"
                                                                                aria-label="Default select example"
                                                                                name="" id="">
                                                                                <option value="">(Select One)
                                                                                </option>
                                                                                <option value="overTimePerHour">Over time
                                                                                    per
                                                                                    hour</option>
                                                                                <option value="outstationAllowancePerDay"
                                                                                    shortlabel="Out.Day"
                                                                                    invoicelabel="Outstation allowance">
                                                                                    Outstation allowance</option>
                                                                                <option value="outstationNightAllowance"
                                                                                    shortlabel="Out.Night">Outstation
                                                                                    overnight allowance</option>
                                                                                <option value="sundayAllowance"
                                                                                    shortlabel="Sun">Sunday allowance
                                                                                </option>
                                                                                <option value="early"
                                                                                    shortlabel="Early">
                                                                                    Early start allowance</option>
                                                                                <option value="late"
                                                                                    shortlabel="Late">
                                                                                    Night allowance</option>
                                                                                <option value="extraDuty"
                                                                                    shortlabel="Ex.Duty">Extra duty
                                                                                    allowance
                                                                                </option>
                                                                                <option value="dailyAllowance"
                                                                                    shortlabel="DA">Driver daily allowance
                                                                                </option>
                                                                            </select>
                                                                            <span class="warning-msg-block"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" value="true"
                                                                                    name="" id="">
                                                                                Charged to customer
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for=""
                                                                            class="form-label">Amount</label>
                                                                        <input type="number"
                                                                            class="form-control  border-bottom"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <button type="button" id="extend_inter_appli_tax"
                                                    class="btn btn-primary rounded-1">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="rep_time" class="form-label">Early start time</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            id="early_start_time" name="early_start_time">

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rep_time" class="form-label">Late end time</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            id="late_end_time" name="late_end_time">

                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">Save Changes</button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Notifications settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-notifications">
                            <form action="" class="mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">SMS</div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Enabled
                                                        </label>
                                                    </div>
                                                </div>
                                                <p class="text-muted">
                                                    Note: SMSes received would be chargeable and would
                                                    be added to your monthly invoice.
                                                </p>
                                                {{-- Phone Numbers --}}
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="panel border rounded">
                                                            <div class="panel-heading bg-light p-3">Phone Numbers
                                                            </div>
                                                            <div class="panel-body bg-body rounded">
                                                                <div class="" id="">
                                                                    <div class="d-flex border-bottom">
                                                                        <div class="p-3">
                                                                            <button type="button"
                                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                                data-index="1">
                                                                                <svg class="svg-inline--fa fa-minus"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                                                                    </path>
                                                                                </svg><!-- <i class="fa-solid fa-minus"></i> Font Awesome fontawesome.com -->
                                                                            </button>
                                                                        </div>
                                                                        <div class="p-3 ps-0 w-100">
                                                                            <div class="mb-3">
                                                                                <input type="number"
                                                                                    class="form-control  border-bottom"
                                                                                    id="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3">
                                                                <button type="button" id="extend_inter_appli_tax"
                                                                    class="btn btn-primary rounded-1">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">Email</div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Enabled
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- Email Address --}}
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="panel border rounded">
                                                            <div class="panel-heading bg-light p-3">
                                                                Email Address
                                                            </div>
                                                            <div class="panel-body bg-body rounded">
                                                                <div class="" id="">
                                                                    <div class="d-flex border-bottom">
                                                                        <div class="p-3">
                                                                            <button type="button"
                                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                                data-index="1">
                                                                                <svg class="svg-inline--fa fa-minus"
                                                                                    aria-hidden="true" focusable="false"
                                                                                    data-prefix="fas" data-icon="minus"
                                                                                    role="img"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 448 512"
                                                                                    data-fa-i2svg="">
                                                                                    <path fill="currentColor"
                                                                                        d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z">
                                                                                    </path>
                                                                                </svg><!-- <i class="fa-solid fa-minus"></i> Font Awesome fontawesome.com -->
                                                                            </button>
                                                                        </div>
                                                                        <div class="p-3 ps-0 w-100">
                                                                            <div class="mb-3">
                                                                                <input type="number"
                                                                                    class="form-control  border-bottom"
                                                                                    id="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="p-3">
                                                                <button type="button" id="extend_inter_appli_tax"
                                                                    class="btn btn-primary rounded-1">
                                                                    <i class="fa-solid fa-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">Save Changes</button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Email Templates settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-email-templates">
                            <form action="" class="mt-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Booking Confirmation
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote1" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Duty Allotment - To Customer
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote2" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote3" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Duty Allotment - To Supplier
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote4" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote5" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Duty/Booking Cancellation
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote6" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote7" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Invoice To Customer
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote8" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote9" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Payment Request
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote10" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote11" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Receipt To Customer
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote12" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote13" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Purchase Invoice To Supplier
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote14" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote15" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Duty - Request Feedback
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Header</label>
                                                    <textarea id="summernote16" name=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Footer</label>
                                                    <textarea id="summernote17" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bg-light mb-3 p-3">
                                            <p class="mb-3">
                                                <strong>
                                                    What is header/footer for email?
                                                </strong>
                                            </p>
                                            <p>
                                                While sending different types of email to your customer if you would like to
                                                add the custom salutation, message etc, then use header/footer fields for
                                                respective email types.
                                            </p>
                                            <p>
                                                Below is the previw of where in email your custom header/footer would be
                                                placed.
                                            </p>
                                            <img src="{{ asset('admin/images/email_template_explaination.jpg') }}"
                                                alt="" class="mb-3">
                                            <p>
                                                <i>
                                                    Default header/footer text in emails generated by Indecab are based on
                                                    industry standard and have been tested across various segment of
                                                    audiences.
                                                </i>
                                            </p>
                                            <p class="mb-3">
                                                <strong>
                                                    Where should I add email signature?
                                                </strong>
                                            </p>
                                            <p>
                                                For different companies of yours, there might be different signature, hence
                                                we encourage you to enter signature under <a href="#"
                                                    class="text-decoration-none">company profiles over here</a>.
                                            </p>
                                            <p>
                                                Please <strong>DO NOT</strong> add signature in the footer field.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">
                                            Save Changes
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- SMS Templates settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-sms-templates">
                            h7
                        </div>
                        <!-- WhatsApp Templates settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-wapp-templates">
                            h8
                        </div>
                        <!-- Others settings content here -->
                        <div role="tabpanel" class="tab-pane" id="settings-others">
                            <form action="" class="mt-3">
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="" id="">
                                            Force OTP verification while login for all members of the business
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="control-label">Default customer</label>
                                    <select class="form-select border-bottom" name="customer_id" id="customer"
                                        value="{{ old('customer_id', $booking->customer_id ?? '') }}">

                                        <option>Select customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}" data-name="{{ $customer->name }}"
                                                {{ $customer->id == old('customer_id', $booking->customer_id ?? '') ? 'selected' : '' }}>
                                                {{ $customer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Default dispatch center</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Default feedback form</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Mumbai Cab Service </option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Fuel dates & numbering</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Petty Cash Numbering</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3 validator-error">
                                        <label for="" class="form-label">Vehicle Expenses Numbering</label>
                                        <select class="form-select border-bottom" aria-label="Default select example"
                                            name="" id="">
                                            <option value="">(Select One)</option>
                                            <option value="automatic">Automatic</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                        <span class="warning-msg-block"></span>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="true" name="" id="">
                                            Auto select all contacts when sending sms/whatsapp/email
                                        </label>
                                    </div>
                                </div>

                                {{-- Auto CC emails --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Auto CC emails
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Enter an email ID</label>
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            CC all confirmation & cancellation emails
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            CC all allotment emails
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            CC all invoice emails
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Automatically send sms/whatsapp/email alerts --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Automatically send sms/whatsapp/email alerts
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Booking confirmation to customer
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Duty allotment information to customer
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Duty allotment information to driver
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Duty allotment information to supplier
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Send feedback form to passenger when duty is marked as stopped
                                                            or completed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Booking confirmation to customer when supplier accepts request
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Duty allotment information to customer when supplier allot duty
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Tracking information to customer/passenger/booked by and
                                                            additional contacts when supplier marks the duty as en route
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Driver arrived information to customer/passenger/booked by and
                                                            additional contacts when supplier marks duty as arrived
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Print Settings --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Print Settings
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Letter head gap</label>
                                                    <input type="number" class="form-control  border-bottom"
                                                        id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Network Options --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Network Options
                                            </div>
                                            <div class="panel-body p-3 bg-body rounded">
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Automatically create missing masters, when accepting duty slip
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Auto cancel rejected duties
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Auto accept incoming duty slip
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Enforce strict vehicle group name matching
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="true" name=""
                                                                id="">
                                                            Enforce strict duty type name matching (when accepting booking
                                                            request)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Allowed IP --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="panel border rounded mb-3">
                                            <div class="panel-heading bg-light p-3">
                                                Allowed IP
                                            </div>
                                            <div class="panel-body bg-body rounded">
                                                <div class="" id="">
                                                    <div class="d-flex border-bottom">
                                                        <div class="p-3">
                                                            <button type="button"
                                                                class="btn btn-primary rounded-1 remove_appli_tax_body"
                                                                data-index="1">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="p-3 ps-0 w-100">
                                                            <div class="mb-3">
                                                                <input type="number"
                                                                    class="form-control  border-bottom" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <button type="button" id="extend_inter_appli_tax"
                                                    class="btn btn-primary rounded-1">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-primary rounded-1">
                                            Save Changes
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-1"
                                            data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extrajs')
    <script src="{{ asset('admin/js/timeslots.js') }}"></script>
    <script src="{{ asset('admin/js/options.js') }}"></script>
    <script>
        $(document).ready(function() {
            document.getElementById("early_start_time").innerHTML = generateTimeSlots();
            document.getElementById("late_end_time").innerHTML = generateTimeSlots();

            $('.datatable').DataTable({
                responsive: true,
                "order": [
                    ['id', "desc"]
                ]
            });
            $(".dropdown-toggle").dropdown();
            for (let i = 0; i <= 17; i++) {
                $('#summernote' + (i === 0 ? '' : i)).summernote({
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['color', ['color']],
                        ['media', ['picture', 'link']]
                    ],
                    placeholder: 'Type your text...',
                    tabsize: 2,
                    height: 80
                });
            }
        });
    </script>
@endsection
