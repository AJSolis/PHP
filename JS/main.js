$(document).ready(function () {
    // Define months
    var months = [
        { value: 1, text: 'January' },
        { value: 2, text: 'February' },
        { value: 3, text: 'March' },
        { value: 4, text: 'April' },
        { value: 5, text: 'May' },
        { value: 6, text: 'June' },
        { value: 7, text: 'July' },
        { value: 8, text: 'August' },
        { value: 9, text: 'September' },
        { value: 10, text: 'October' },
        { value: 11, text: 'November' },
        { value: 12, text: 'December' }
    ];

    // Populate month dropdown
    $.each(months, function (index, month) {
        $('#month').append(
            $('<option></option>').val(month.value).text(month.text)
        );
    });

    // Populate day dropdown (1-31)
    for (var day = 1; day <= 31; day++) {
        $('#day').append(
            $('<option></option>').val(day).text(day)
        );
    }

    // Populate year dropdown (last 125 years)
    var currentYear = new Date().getFullYear();
    var oldestYear = currentYear - 125;
    for (var year = currentYear; year >= oldestYear; year--) {
        $('#year').append(
            $('<option></option>').val(year).text(year)
        );
    }
});
