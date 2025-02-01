function generateStateOptions(selectedState) {
    return [
        `<option value="" disabled ${!selectedState ? "selected" : ""}>-- Select a State --</option>`,
        ...states.map(state =>
            `<option value="${state.value}" ${state.value === selectedState ? 'selected' : ''}>${state.name}</option>`
        )
    ].join("\n");
}

function generateCityOptions(selectedCity) {
    console.log(selectedCity);
    return [
        `<option value="" disabled ${!selectedCity ? "selected" : ""}>-- Select a City --</option>`,
        ...cities.map(city =>
            `<option value="${city.value}" ${city.value === selectedCity ? 'selected' : ''}>${city.name}</option>`
        )
    ].join("\n");
}
    function generateTimeSlots(selectedTime) {
        return [
            `<option value="" disabled ${!selectedTime ? "selected" : ""}>-- Select a Time Slot --</option>`,
            ...timeSlots.map(slot =>
                `<option value="${slot.value}" ${slot.value === selectedTime ? 'selected' : ''}>${slot.name}</option>`
            )
        ].join("\n");
    }


