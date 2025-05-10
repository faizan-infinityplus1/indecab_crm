function generateStateOptions(selectedState) {
    return [
        `<option value="" ${!selectedState ? "selected" : ""}>-- Select a State --</option>`,
        ...states.map((state) => `<option value="${state.value}" ${state.value === selectedState ? "selected" : ""}>${state.name}</option>`),
    ].join("\n");
}

function generateCityOptions(selectedCity = "") {
    return [
        `<option value="" style="display:none;"  >-- Select a City --</option>`,
        ...cities.map((city) => `<option value="${city.value}" ${city.value === selectedCity ? "selected" : ""}>${city.name}</option>`),
    ].join("\n");
}
function generateCitySelect2(selectedValues = []) {
    return cities.map((city) => {
        return {
            id: city.value,
            text: city.name,
            selected: selectedValues.includes(city.value),
        };
    });
}
function generateTimeSlots(selectedTime = "") {
    return [
        `<option value="" disabled ${!selectedTime ? "selected" : ""}>-- Select a Time Slot --</option>`,
        ...timeSlots.map((slot) => `<option value="${slot.value}" ${slot.value === selectedTime ? "selected" : ""}>${slot.name}</option>`),
    ].join("\n");
}
