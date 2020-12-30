<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 1px 1px 0px #fff;
        border: #ccc 1px solid;
        width: 100%;
    }

    table th {
        font-size: 13px;
        padding: 10px 5px;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child {
        border-left: none;
    }

    table tr {
        padding-left: 5px;
    }

    table td:first-child {
        text-align: left;
        border-left: 0;
    }

    table td {
        padding: 7px 4px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        font-size: 12px;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .text-center {
        text-align: center;
    }

    /* .ttd {
        float: right;
        width: 180px;
        text-align: center;
    } */

    .row {
        margin-top: 30px;
    }

    .col-4 {
        display: inline-block;
        width: 33%;
    }
</style>

<head>
    <title>Laporan Data KTP</title>
</head>

<body>
    <div class="result">
        <h3 class="text-center">Data Kartu Tanda Penduduk</h3>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center" style="max-width: 16px">No</th>
                    <th class="text-center">Nama Penduduk</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Nama Provinsi</th>
                    <th class="text-center">Nama Kabupaten</th>
                    <th class="text-center">Tempat Lahir</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Status Perkawinan</th>
                    <th class="text-center">Pekerjaan</th>
                </tr>
            </thead>
            <tbody id="tabel-body-1">
                <?php $no = 1; ?>
                <?php foreach ($Data as $val) : ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $val['Nama'] ?></td>
                        <td><?= $val['Nik'] ?></td>
                        <td><?= $val['Jk'] ?></td>
                        <td><?= $val['Nama_Provinsi'] ?></td>
                        <td><?= $val['Nama_Kab'] ?></td>
                        <td><?= $val['Tempat_Lahir'] ?></td>
                        <td><?= $val['Tgl_Lahir'] ?></td>
                        <td><?= $val['Jk'] ?></td>
                        <td><?= $val['Alamat'] ?></td>
                        <td><?= $val['Agama'] ?></td>
                        <td><?= $val['Status_Perkawinan'] ?></td>
                        <td><?= $val['Pekerjaan'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div class="row">
        <div class="col-4 buat text-center">
            <br>
            <p>Di Buat</p>
            <br><br>
            <p class="underline"><?= $this->session->logged_in['Nama'] ?></p>
        </div>

        <div class="col-4 periksa text-center">
            <!-- <br>
            <p>Di Periksa</p>
            <br><br>
            <p class="underline">Verawati Chandra</p> -->
        </div>

        <div class="col-4 ketahui text-center">
            <br>
            <p>Diketahui</p>
            <br><br>
            <p class="underline">.....................</p>
        </div>
    </div>
</body>

</html>