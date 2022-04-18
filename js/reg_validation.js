$(document).ready(function () {
    $('#validate_form').parsley();

    $('#validate_form').on('submit', function (event) {
        event.preventDefault();
        if ($('#validate_form').parsley().isValid()) {
            $.ajax({
                url: "reg_action.php",
                method: "POST",
                data: $('#validate_form').serialize(),
                beforeSend: function () {
                    $('#submit').attr('disabled', 'disabled');
                    $('#submit').val('Submitting...');
                },
                success: function (data) {
                    $('#submit').attr('disabled', false);
                    $('#submit').val('Submit');
                    $('#response').show();
                    // $('#response').fadeIn();
                    if (data == 'email allready exist') {
                        $('#message').html(data);
                        $('#response').removeClass('success-msg').addClass('error-msg');
                        // $('#response').fadeOut(10000);
                    }
                    else {
                        // window.location = "login.php";
                        $('#validate_form')[0].reset();
                        $('#validate_form').parsley().reset();
                        $('#message').html(data);
                        $('#response').removeClass('error-msg').addClass('success-msg');
                    }
                }
            });
        }
    });
});  