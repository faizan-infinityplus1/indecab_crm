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
                        <h1 class="h3 pb-3">New Person</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <div class="btn-group" role="group"><a href="#" class="btn btn-primary">Add Duty Type</a></div>
                    --}}
                    </div>
                </div>
            </div>
            {{-- page heading end --}}
            <div>
                <form method="POST" action={{ route('customers.people.createOrUpdate', $customerId) }}>
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label ">Name <span class="text-danger">*</span></label>
                        <input type="number" hidden class="form-control  border-bottom" id=""
                            name="customerPeopleId" value="{{ old('customerPeopleId', $customerPeople->id ?? -1) }}">
                        <input type="text" class="form-control  border-bottom" id="" name="name"
                            value="{{ old('name', $customerPeople->name ?? '') }}" required>
                        <span class="warning-msg-block"></span>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label ">Phone number</label>
                                <input type="text" class="form-control  border-bottom" id="" name="phone_no"
                                    value="{{ old('phone_no', $customerPeople->phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Alternate phone number</label>
                                <input type="text" class="form-control  border-bottom" id=""
                                    name="alternate_phone_no"
                                    value="{{ old('alternate_phone_no', $customerPeople->alternate_phone_no ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label ">Email</label>
                                <input type="text" class="form-control  border-bottom" id="" name="email"
                                    value="{{ old('email', $customerPeople->email ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label ">Alternate email</label>
                                <input type="text" class="form-control  border-bottom" id=""
                                    name="alternate_email"
                                    value="{{ old('alternate_email', $customerPeople->alternate_email ?? '') }}">
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Notes (This note will only visible in invoice & booking if
                            passenger has email id) </label>
                        <textarea class="form-control" id="" rows="5" name="notes">{{ old('notes', $customerPeople->notes ?? '') }}</textarea>
                        <span class="warning-msg-block"></span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Labels - Applied to booking</label>
                        <select class="form-select border-bottom" aria-label="Default select example" name="labels[]"
                            id="labels" multiple="multiple">
                            @foreach ($labels as $label)
                                <option value="{{ $label->id }}">{{ $label->label_name }}</option>
                            @endforeach
                        </select>
                        <span class="warning-msg-block"></span>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Addresses</div>
                                {{-- component start --}}
                                <div id="addressContainer"></div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" onclick="addAddress()" class="btn btn-primary rounded-1"><i
                                        class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel border rounded mb-3">
                                <div class="panel-heading bg-light p-3">Custom Fields</div>
                                {{-- component start --}}
                                <div class="d-flex border-bottom">
                                    <div class="p-3">
                                        <button type="button" class="btn btn-primary rounded-1"><i
                                                class="fa-solid fa-minus"></i></button>
                                    </div>
                                    <div class="p-3 ps-0 w-100">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <select class="form-select border-bottom"
                                                        aria-label="Default select example" name=""
                                                        id="">
                                                        <option value="selectOne">[Select Custom Field]</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control  border-bottom"
                                                        id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- component end --}}
                                <div class="p-3">
                                    <button type="button" class="btn btn-primary rounded-1">Add another field</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id=""
                            name="isPassenger"
                            {{ old('isPassenger', $customerPeople->isPassenger ?? 0) ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Passenger
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="" name="isBookedBy"
                            {{ old('isBookedBy', $customerPeople->isBookedBy ?? 0) ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Booked By
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id=""
                            name="isAdditionalContact"
                            {{ old('isAdditionalContact', $customerPeople->isAdditionalContact ?? 0) ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Additional Contact
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id=""
                            name="isEmergencyContact"
                            {{ old('isEmergencyContact', $customerPeople->isEmergencyContact ?? 0) ? 'checked' : '' }}>
                        <label class="form-check-label" for="">
                            Emergency Contact
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
        // address logic start from here
        let addressIndex = 0;

        function addAddress(address = {}) {
            // console.log(' i m here');
            addressIndex++;
            const addressContainer = document.getElementById("addressContainer");
            const addressDiv = document.createElement("section");
            addressDiv.setAttribute("address-data-index", addressIndex);
            let addressHtml = `
                                <div class="d-flex border-bottom" >

                <div class="p-3">
                    <button type="button" onclick="removeAddress(${addressIndex})" class="btn btn-primary rounded-1"><i
                            class="fa-solid fa-minus"></i></button>
                </div>
                <div class="p-3 ps-0 w-100">
                    <div class="panel border rounded">
                        <div class="panel-heading bg-light p-3">Addresses</div>
                        <div class="panel-body p-3">
                            <div class="mb-3">
                                <input type="hidden" name="addresses[${addressIndex}][id]" value="${address.id || ''}" />
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control  border-bottom"
                                    id="" name="addresses[${addressIndex}][name]" value="${address.name || ''}"  placeholder="Type your address" required>
                                <span class="warning-msg-block"></span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input type="text" class="form-control  border-bottom"
                                    id="" name="addresses[${addressIndex}][full_address]" value="${address.full_address || ''}"  placeholder="Type your address" required>
                                <span class="warning-msg-block"></span>
                            </div>
                        </div>
                    </div>
            </div>
            </div>`;
            addressDiv.innerHTML = addressHtml;
            addressContainer.appendChild(addressDiv);
        }
        // Function to remove an address field
        function removeAddress(index) {
            document.querySelector(`[address-data-index="${index}"]`).remove();
        }

        const customerPeople = {!! json_encode($customerPeople) !!};
        if (customerPeople && customerPeople.addresses) {
            customerPeopleAddresses = customerPeople.addresses;
            customerPeopleAddresses.forEach(address => addAddress(address));
        }
        $(document).ready(function() {
            $('#labels').select2({
                placeholder: "Select an option",
            });
            const labels = "{{ $customerPeople->labels ?? '' }}".split(',');
            if (labels) {
                $('#labels').val(labels).trigger('change');
            }
        });
    </script>
@endsection
