$(document).ready(function () {
    const mainCheckbox = $('#inquiries-main-check');
    const allCheckboxes = $('.inquiries-checkbox').not(mainCheckbox);

    mainCheckbox.on('change', function () {
        allCheckboxes.prop('checked', this.checked);
    });

    allCheckboxes.on('change', function () {
        if (allCheckboxes.length === allCheckboxes.filter(':checked').length) {
            mainCheckbox.prop('checked', true);
        } else {
            mainCheckbox.prop('checked', false);
        }
    });
});