var method_1 = "";

$(document).ready(function () {
    // Ajax Add dan Edit
    $('#form').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();

        var url;

        url = 'Home_User/saveData/' + method_1;

        $('.btnSimpan')[0].disabled = true;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (r) {

                if (r.Result == true) {
                    alertSuccess(r.Pesan);

                    var delay = 1000;
                    setTimeout(function () {
                        location.reload();
                    }, delay);
                } else {
                    alertFailed(r.Pesan);
                }

                $('.btnSimpan')[0].disabled = false;

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alertFailed("Fatal Error. Hubungin Admin/Programmer");
            }
        });
    });
    // Akhir Ajax
})


$(document).on('click', '#btnTambah', function () {
    method_1 = "Save";
    $('#modal-1').modal('setting', 'closable', false).modal('show');
});

$(document).on('click', '.close-modal-1', function () {
    method_1 = "";
    $('#modal-1').modal('hide');
});

$(document).on('click', '#btnUbah', function () {
    method_1 = "Edit";
    $('#modal-1').modal('setting', 'closable', false).modal('show');
    var Id = $(this).attr('dataId');
    getData(Id);
})

function getData(Id) {
    $.ajax({
        url: 'Home_User/getEdit',
        type: "POST",
        data: { Id: Id },
        dataType: "JSON",
        success: function (result) {
            console.log(result);
            $('input[name="Id"]').val(result[0]['Id']);
            $('input[name="Nama"]').val(result[0]['Nama']);
            $('input[name="Nama_Provinsi"]').val(result[0]['Nama_Provinsi']);
            $('input[name="Nama_Kab"]').val(result[0]['Nama_Kab']);
            $('input[name="Nik"]').val(result[0]['Nik']);
            $('input[name="Tempat_Lahir"]').val(result[0]['Tempat_Lahir']);
            ($('input[name="Tgl_Lahir"]').data('calendarpicker')).val(result[0]['Tgl_Lahir']);
            $('input[name="Agama"]').val(result[0]['Agama']);
            ($('select[name="Jk"]').data('select')).val(result[0]['Jk']);
            ($('select[name="Status_Perkawinan"]').data('select')).val(result[0]['Status_Perkawinan']);
            $('textarea[name="Alamat"]').val(result[0]['Alamat']);
            $('input[name="Pekerjaan"]').val(result[0]['Pekerjaan']);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alertFailed("Fatal Error. Hubungin Admin/Programmer");
        }
    });
}
