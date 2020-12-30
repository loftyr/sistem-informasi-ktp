var method_1;

// $(document).on('click', '.btnTambah', function () {
//     $('#modal-1').modal('setting', 'closable', false).modal('show');
// });

$(document).ready(function () {
    $(document).on('click', '.close-modal-1', function () {
        $('#modal-1').modal('hide');
    });

    // Reset Modal
    $('#modal-1').modal({
        onHidden: function () {
            method_1 = "";
            $('#form').trigger('reset');
            $('#Jk').data("select").val("");
            $('#Status_Perkawinan').data("select").val("");
        }
    });

    getData();


    $('#form').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var url;

        url = 'Data_Ktp/saveEdit';

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
                        $('#modal-1').modal('hide');
                        $('#table-1').DataTable().ajax.reload();
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


function getData() {
    $('#table-1 thead th').each(function (e) {
        var arr = [10];

        if (!isInArray(e, arr)) {
            var title = $(this).text();
            $(this).html(title + '<input type="text" class="input-small mt-1" placeholder ="Search "' + title + '>');
        }

    });

    var table = $('#table-1').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ordering": true,

        "ajax": {
            "url": "Data_Ktp/getData",
            "type": "POST"
        },

        "columnDefs": [
            {
                "targets": "_all",
                "orderable": false,
            }
        ],

        "language": {
            "decimal": "",
            "emptyTable": "Belum Ada Data",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data",
            "infoEmpty": "Tidak ada data yang cocok",
            "infoFiltered": "(dari _TOTAL_ total baris)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Menampilkan _MENU_ baris",
            "loadingRecords": "Sedang memuat",
            "processing": "<img src='assets/loading/loading.gif' alt=''>",
            "search": "",
            "zeroRecords": "Tidak ada data yang ditemukan",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": ">>",
                "previous": "<<"
            },
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        },
        "drawCallback": function (settings) {
            // callback function
            $('.dataTables_filter input').addClass('d-none');
        }
    });

    table.columns().every(function () {
        var tables = this;
        $('input', this.header()).on('keyup change', function () {
            if (tables.search() !== this.value) {
                tables.search(this.value).draw();
            }
        });
    });

}


$(document).on('click', '.btnUbah', function () {
    method_1 = 'Edit';
    var Id = $(this).attr('dataID');
    $('#modal-1').modal('setting', 'closable', false).modal('show');

    $.ajax({
        url: 'Data_Ktp/getEdit',
        data: { Id: Id },
        type: "POST",
        dataType: "JSON",
        success: function (result) {
            var data = result.Data;

            $('#Id').val(data[0].Id);
            $('#Nama_Provinsi').val(data[0].Nama_Provinsi);
            $('#Nama_Kab').val(data[0].Nama_Kab);
            $('#Tempat_Lahir').val(data[0].Tempat_Lahir);
            $('#Agama').val(data[0].Agama);
            $('#Alamat').val(data[0].Alamat);
            $('#Pekerjaan').val(data[0].Pekerjaan);
            $('#Nik').val(data[0].Nik);
            $('#Nama').val(data[0].Nama);
            ($('#Tgl_Lahir').data('calendarpicker')).val(data[0].Tgl_Lahir);
            $('#Jk').data("select").val(data[0].Jk);
            $('#Status_Perkawinan').data("select").val(data[0].Status_Perkawinan);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alertFailed('Tidak Diketahui, Hubungin Admin/Programmer !!!');
        }
    });
})



$(document).on('click', '.btnHapus', function () {
    var Id = $(this).attr('dataId');

    Swal.fire({
        title: 'Are You Sure?',
        text: 'Delete This Data !!!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: 'Data_Ktp/deleteData',
                data: { Id: Id },
                type: "POST",
                dataType: "JSON",
                success: function (r) {
                    if (r.Result == true) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: r.Pesan,
                            showConfirmButton: false,
                            timer: 1000
                        }).then((r) => {
                            if (r.dismiss === Swal.DismissReason.timer) {
                                $('#table-1').DataTable().ajax.reload();
                            }
                        })
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: r.Pesan,
                            showConfirmButton: false,
                            timer: 1000
                        }).then((r) => {
                            if (r.dismiss === Swal.DismissReason.timer) {
                                $('#table-1').DataTable().ajax.reload();
                            }
                        })
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alertFailed('Tidak Diketahui, Hubungin Admin/Programmer !!!');
                }
            });
        } else {
            alertInfo('Data will be keep . . .');
        }
    });
});