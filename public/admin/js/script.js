// nav_menu_item
// nav_parent_link
// dropdown-menu
// const navparentlink = document.querySelectorAll('.nav_parent_link');
// const dropdownmenu = document.querySelectorAll('.dropdown-menu');
// addEventListenerAll(navparentlink, 'click', function() {
//     this.nextElementSibling.classList.toggle('active');
//     this.classList.toggle('active');
// });

const navparentlink = document.querySelectorAll('.nav_parent_link');
const dropdownmenu = document.querySelectorAll('.dropdown-menu');

// navparentlink.forEach(link => {
//     link.addEventListener('mouseover', function() {
//         this.nextElementSibling.classList.add('show');
//         this.classList.add('show');
//     });
//     link.addEventListener('mouseout', function() {
//         this.nextElementSibling.classList.remove('show');
//         this.classList.remove('show');
//     });
// });

navparentlink.forEach(link => {
    link.addEventListener('mouseover', function () {
        this.nextElementSibling.classList.add('show');
        this.classList.add('show');
    });
    link.addEventListener('mouseout', function () {
        if (!this.nextElementSibling.matches(':hover')) {
            this.nextElementSibling.classList.remove('show');
            this.classList.remove('show');
        }
    });
});

dropdownmenu.forEach(menu => {
    menu.addEventListener('mouseover', function () {
        this.classList.add('show');
        this.previousElementSibling.classList.add('show');
    });
    menu.addEventListener('mouseout', function () {
        if (!this.previousElementSibling.matches(':hover')) {
            this.classList.remove('show');
            this.previousElementSibling.classList.remove('show');
        }
    });
});


$(document).ready(function () {
    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy" // Matches display format
    });

    var table = $('.datatable').DataTable({
        responsive: true
    });

    // Global search
    $('#globalSearch').on('keyup', function () {
        table.search(this.value).draw();
    });

    // 🟢 Date range filter for `end_date` column (displayed as DD/MM/YYYY)
    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        const min = $('#min-date').val();
        const max = $('#max-date').val();
        const endDateStr = data[1]; // 👈 Adjust if "end_date" is at a different index

        // Helper to parse DD/MM/YYYY to JS Date
        const parseDDMMYYYY = (str) => {
            if (!str) return null;
            const [dd, mm, yyyy] = str.split('/');
            return new Date(`${yyyy}-${mm}-${dd}`);
        };

        const rowDate = parseDDMMYYYY(endDateStr);
        const minDate = parseDDMMYYYY(min);
        const maxDate = parseDDMMYYYY(max);

        if (!rowDate) return false; // Exclude rows with invalid date

        if (minDate && rowDate < minDate) return false;
        if (maxDate && rowDate > maxDate) return false;

        return {
            minDate,
            maxDate
        };
    });

    // Trigger redraw on date change
    $('#min-date, #max-date').on('change', function () {
        table.draw();
    });

    // Clear filters
    $('button[type="reset"]').on('click', function () {
        $('#globalSearch, #min-date, #max-date').val('');
        table.search('').draw();
        table.draw();
    });
});

