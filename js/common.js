setTimeout(function() {
    $('#success-alert').alert('close');
}, 3000);
function confirmDelete() {
    return confirm("Are you sure you want to delete this contact?");
}
$(document).ready(function () {
    var countryCode = $("#country-code").val() || '91';
    var phone_number = window.intlTelInput(document.querySelector("#phone"), {
        separateDialCode: true,
        preferredCountries: ["in"],
        hiddenInput: "full",
        utilsScript: "js/util.js"
    });

    $("#phone").on('countrychange', function (e, countryData) {
        var countryCode = phone_number.getSelectedCountryData().dialCode;
        $("#country-code").val(countryCode);
    });
});