$(document).ready(function() {
    $('#submitRegistration').click(function(event) {
        event.preventDefault();
        $('.text-danger').text('');
        var formData = $('#registrationForm').serialize();
        
        $.ajax({
            type: 'POST',
            url: '/register',
            data: formData,
            dataType: 'json',
            success: function(response) {
                window.location.href = '/thank-you?name=' + response.name;
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(field, message) {
                        $('#' + field).next('.text-danger').text(message);
                    });
                }
            }
        });
    });
});
