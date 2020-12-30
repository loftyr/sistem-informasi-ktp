$(document).ready(function () {
    $(document).on('click', '.burger-icon', function () {
        $(this).toggleClass('active');
        $('.asside-left').toggleClass('non-active');
        $('.asside-top').toggleClass('non-active');
        $('.body-wrapper').toggleClass('non-active');
    });
});


$('#form-change-password').submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    var url;

    url = 'Home/ChangePassword';

    // $('.btn-save')[0].disabled = true;
    $.ajax({
        url: url,
        type: "POST",
        dataType: "JSON",
        data: formData,
        success: function (result) {
            if (result.Status == true) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    width: 400,
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1000
                });
                var delay = 100;
                setTimeout(function () {
                    $('#modal-change-password').modal('hide');
                }, delay);
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    width: 400,
                    title: result.Msg,
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Tidak Diketahui, Hubungin Admin !!!',
                showConfirmButton: false,
                timer: 1000
            });
        }
    });
});
// Akhir Ajax



function alertInfo($Msg) {
    Swal.fire({
        position: 'top-end',
        icon: 'info',
        width: 400,
        title: 'Info',
        text: $Msg,
        showConfirmButton: false,
        timer: 1000
    });
}

function alertSuccessConfirm($Msg) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        width: 400,
        text: $Msg,
        showConfirmButton: true
    });
}

function alertSuccess($Msg) {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        width: 400,
        title: 'Success',
        text: $Msg,
        showConfirmButton: false,
        timer: 1000
    });
}

function alertFailed($Msg) {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        width: 400,
        title: 'Error',
        html: $Msg,
        showConfirmButton: true
    });
}

function isInArray(value, array) {
    return array.indexOf(value) > -1;
}