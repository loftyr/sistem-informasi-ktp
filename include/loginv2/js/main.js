
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function () {
        if (showPass == 0) {
            $(this).next('input').attr('type', 'text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type', 'password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }

    });


})(jQuery);

$(document).ready(function () {
    $('#login').submit(function (e) {
        e.preventDefault();
        $.toast({
            heading: 'Information',
            text: 'Loading Auth. . .',
            position: 'top-right'
        });

        var formData = $(this).serialize();

        $.ajax({
            url: 'login/authLogin',
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (result) {
                if (result.Status == true) {
                    $.toast({
                        heading: 'Information',
                        text: result.Msg,
                        position: 'top-right'
                    });
                    var delay = 1000;
                    setTimeout(function () {
                        window.location = 'Home';
                    }, delay);
                } else {
                    // generateCaptcha();
                    $.toast({
                        heading: 'Error',
                        text: result.Msg,
                        position: 'top-right'
                    });

                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $.toast({
                    heading: 'Error',
                    text: 'Tidak Diketahui, Hubungin Admin !!!',
                    position: 'top-right'
                });
            }
        });
    });
});

// function generateCaptcha() {
//     $.ajax({
//         url: 'login/generateCaptcha',
//         type: "POST",
//         dataType: "JSON",
//         cache: false,
//         success: function (result) {
//             console.log(result.);
//             $('.Captcha').html(result);
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             $.toast({
//                 heading: 'Error',
//                 text: 'Tidak Diketahui, Hubungin Admin !!!',
//                 position: 'top-right'
//             });
//         }
//     });
// }