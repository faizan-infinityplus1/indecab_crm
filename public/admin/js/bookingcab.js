let selectedCustomer = null;
let passengerDetails = null;
let bookedByCustomerDetails = null;
let additionalContactDetails = null;
let emergencyContactDetails = null;

let selectedCompany = booking?.company_id ?? defaultCompanyId;

function people(customer) {
    const passengers = [];
    const bookedByCustomers = [];
    const additionalContacts = [];
    const emergencyContacts = [];
    if (customer && customer.people) {
        customer.people.forEach((person) => {
            if (person.isAdditionalContact) {
                additionalContacts.push(person);
            }
            if (person.isBookedBy) {
                bookedByCustomers.push(person);
            }
            if (person.isEmergencyContact) {
                emergencyContacts.push(person);
            }
            if (person.isPassenger) {
                passengers.push(person);
            }
        });
    }
    return { passengers, bookedByCustomers, additionalContacts, emergencyContacts };
}

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
}

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
}
$("#customer").select2({
    placeholder: "Type here to search by customer name, GST number or Address.",
    templateResult: formatState,
    templateSelection: formatTemplateState,
});

$("#customer").on("change", function () {
    selectedCustomer = customers.find((customer) => customer.id == this.value);
    $("#bookingFormBookedBy").show();
    const { additionalContacts, bookedByCustomers, emergencyContacts, passengers } = people(selectedCustomer);
    passengerDetails = passengers;
    additionalContactDetails = additionalContacts;
    emergencyContactDetails = emergencyContacts;
    bookedByCustomerDetails = bookedByCustomers;
    // console.log("additionalContacts", additionalContacts);
    const bookedByCustomerOptions = `${bookedByCustomers
        .map((customer) => `<option value="${customer.name}" data-value="${customer.id}">${customer.name}</option>`)
        .join("")}`;
    $("#booked_by_customer_name").html(`<option></option>${bookedByCustomerOptions}`);
});

$(".hideElement").hide();

// Booked by dom logic

$("#booked_by_customer_name").select2({
    tags: true,
});

$("#booked_by_customer_name").on("change", function () {
    const dataValue = $(this).find("option:selected").attr("data-value");
    const bookedByCustomer = selectedCustomer.people.find((person) => person.id == dataValue);
    console.log("bookedByCustomer", bookedByCustomer);
    $("#booked_by_customer_id").val(bookedByCustomer?.id || "");
    $("#booked_by_customer_phone").val(bookedByCustomer?.phone_no || "");
    $("#booked_by_customer_email").val(bookedByCustomer?.email || "");
});

$(".toggleDivs").on("click", function () {
    $(".hideElement").show();
});

document.getElementById("rep_time").innerHTML = generateTimeSlots(repTime);
document.getElementById("drop_time").innerHTML = generateTimeSlots(dropTime);

// =========== Add Passenger Start ==============
let contactIndex = 0;

function addContact(contact = {}) {
    const contacts = additionalContactDetails;
    contactIndex++;
    const contactContainer = document.getElementById("contactContainer");
    const contactDiv = document.createElement("section");
    contactDiv.setAttribute("contact-data-index", contactIndex);
    let contactHtml = `
    <div class="row mb-3">
        <div class="col-md-3">
            <input type="hidden" name="contacts[${contactIndex}][type]" value="contact">
            <input type="hidden" name="contacts[${contactIndex}][id]" value="">
            <label for="" class="control-label">Additional Contact Name</label>
            <select class="form-select border-bottom" name="contacts[${contactIndex}][name]" value="${
        contact.name || ""
    }" id="contacts_${contactIndex}">
                <option></option>
                ${contacts.map((contact) => `<option value="${contact.name}" data-value="${contact.id}">${contact.name}</option>`).join("")}
            </select>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="" class="control-label">Phone Number
                    <span></span></label>
                <input type="text" class="form-control" name="contacts[${contactIndex}][phone_no]" value="${contact.phone_no || ""}" id="">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="" class="control-label">Email
                    <span></span></label>
                <input type="text" class="form-control" name="contacts[${contactIndex}][email]" value="${contact.email || ""}" id="">
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
    initializeSelect2(`#contacts_${contactIndex}`);
    $(`#contacts_${contactIndex}`).on("change", function () {
        const dataValue = $(this).find("option:selected").attr("data-value");
        const selectedContact = additionalContactDetails.find((contact) => contact.id == dataValue);
        const contactDiv = document.querySelector(`[contact-data-index="${contactIndex}"]`);
        contactDiv.querySelector('input[name="contacts[' + contactIndex + '][phone_no]"]').value = selectedContact?.phone_no || "";
        contactDiv.querySelector('input[name="contacts[' + contactIndex + '][email]"]').value = selectedContact?.email || "";
    });
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
    let passengerHtml = `
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="form-group">
                <input type="hidden" name="passengers[${passengerIndex}][type]" value="passenger">
                <input type="hidden" name="passengers[${passengerIndex}][id]" value="">
                <label for="" class="control-label">Passenger Name <span></span></label>
                <div class="awesomplete">
                    <select class="form-select border-bottom passenger_name${passengerIndex}" name="passengers[${passengerIndex}][name]" value="${
        passenger.name || ""
    }" id="passengers_${passengerIndex}">
                        <option></option>
                        ${passengerDetails
                            .map((passenger) => `<option value="${passenger.name}" data-value="${passenger.id}">${passenger.name}</option>`)
                            .join("")}
                    </select>
                    <span class="help-block"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="" class="control-label">Passenger Phone Number
                    <span></span></label>
                <input type="text" class="form-control" name="passengers[${passengerIndex}][phone_no]" value="${passenger.phone_no || ""}" id="">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="" class="control-label">Passenger Email
                    <span></span></label>
                <input type="text" class="form-control" name="passengers[${passengerIndex}][email]" value="${passenger.email || ""}" id="">
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
    initializeSelect2(`#passengers_${passengerIndex}`);
    $(`#passengers_${passengerIndex}`).on("change", function () {
        const dataValue = $(this).find("option:selected").attr("data-value");
        const selectedPassenger = passengerDetails.find((passenger) => passenger.id == dataValue);
        const passengerDiv = document.querySelector(`[passenger-data-index="${passengerIndex}"]`);
        passengerDiv.querySelector('input[name="passengers[' + passengerIndex + '][phone_no]"]').value = selectedPassenger?.phone_no || "";
        passengerDiv.querySelector('input[name="passengers[' + passengerIndex + '][email]"]').value = selectedPassenger?.email || "";
    });
}
// Function to remove an Passenger field
function removePassenger(index) {
    document.querySelector(`[passenger-data-index="${index}"]`).remove();
}
// =========== Add Passenger End ==============

$("#fromservice").html(generateCityOptions(fromService));
$("#toservice").html(generateCityOptions(toService));

// function initializeSelect2(passengerIndex) {
//     $(`.passenger_name${passengerIndex}`).select2({
//         tags: true,
//         placeholder: "",
//     });
// }

function initializeSelect2(querySelector) {
    $(querySelector).select2({
        tags: true,
        placeholder: "",
    });
}

$(document).ready(function () {
    initializeSelect2(`#passenger_name${passengerIndex}`);
    $("#toggleLink").click(function () {
        // Hide the link
        $(this).hide();

        // Show the container
        $("#addContactId").show();
        // const selectedContact = additionalContactDetails[0];
        addContact();
    });
});

// for labels

$("#labels").select2({
    multiple: true,
});

// for company selection
function selectCompany(companyId, companyName) {
    selectedCompany = companyId;
    $("#company_id").val(companyId);
    $("#company_name").html(companyName);
    // $("#sister-companies").modal("hide");
    // $(".modal").modal("hide");
    // $("body").removeAttr("style");
    // $("body").removeClass("modal-open");
    // $(".modal-backdrop").remove();
}

$("#customer").trigger("change");
