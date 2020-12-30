<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ShiroNeko">
    <meta name="category" content="">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="<?= base_url('include/metro4/css/metro-all.css') ?>">
    <!-- Semantic UI CSS -->
    <link rel="stylesheet" href="<?= base_url('include/semantic-ui/components/transition.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/semantic-ui/components/dimmer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/semantic-ui/components/modal.css') ?>">

    <!-- Sweet Alert 2 CSS -->
    <link rel="stylesheet" href="<?= base_url('include/sweetAlert2/sweetalert2.min.css') ?>">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('include/animate.css') ?>">
    <!-- Icon Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url('include/fontawesome/css/all.min.css') ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('include/select2/css/select2.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/select2/css/select2-bootstrap4.css') ?>">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?= base_url('include/DataTables/css/buttons.dataTables.min.css') ?>">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="<?= base_url('include/jquery-ui-1.12.1.custom/jquery-ui.css') ?>">
    <!-- Costum CSS -->
    <link rel="stylesheet" href="<?= base_url('include/css/base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('include/css/app.css') ?>">

    <?php if ($css != '') : ?>
        <link rel="stylesheet" href="<?= base_url('include/css/' . $css . '') ?>">
    <?php endif ?>

    <title><?= $judul ?></title>
</head>

<body class="">
    <div class="asside-left">
        <div class="asside-menu">
            <ul class="sidenav-m3 full-width">
                <li class="stick-left">
                    <a class="" href="<?= base_url('Home_Admin') ?>"><span class="icon mif-home"></span>Home</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="asside-top grid">
        <div class="row">
            <div class="cell-lg-4 cell-md-6 cell-sm-6 cell-xsm-4 p-0 d-flex">
                <div class="burger-icon active mr-4">
                    <span></span>
                </div>
                <div class="brand">
                    <h4>Sistem Informasi</h4>
                    <span>Kartu Tanda Penduduk</span>
                </div>
            </div>
            <div class="offset-lg-4 cell-lg-4 offset-md-2 cell-md-4 offset-sm-2 cell-sm-4 offset-xsm-2 cell-xsm-4 p-0">
                <div class="row">
                    <div class="cell-4">
                    </div>
                    <div class="cell-8">
                        <a class="button light w-100" id="context_toggle"><?= $this->session->userdata['logged_in']['Nama'] ?> <i class="mif-arrow-drop-down icon"></i></a>
                        <ul class="d-menu context w-100" data-role="dropdown" data-toggle-element="#context_toggle">
                            <!-- <li><a href="#"><span class="mif-user icon"></span>Profile</a></li> -->
                            <!-- <li><a href="#" id="btn-change-password"><span class="mif-key icon"></span>Change Password</a></li> -->
                            <li class="divider"></li>
                            <li><a href="<?= base_url('Login/Out') ?>"><span class="mif-switch icon"></span> Log Out</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Modal Ganti Password-->
    <div class="ui small modal" id="modal-change-password">
        <i class="close close-change-password mif-cross"></i>
        <div class="header">
            Ganti Password
        </div>
        <div class="content">
            <form method="POST" data-role="validator" id="form-change-password">
                <div class="row">
                    <div class="cell-12">
                        <p>Password Lama</p>
                        <input type="password" data-role="input" name="Old-Password" autocomplete="off" data-validate="required">
                        <span class="invalid_feedback">
                            Masukan Password Lama
                        </span>
                    </div>

                    <div class="cell-12">
                        <p>Password Baru</p>
                        <input type="password" data-role="input" name="New-Password" autocomplete="off" data-validate="required">
                        <span class="invalid_feedback">
                            Masukan Password Baru
                        </span>
                    </div>

                    <div class="cell-12">
                        <p>Ulang Password</p>
                        <input type="password" data-role="input" name="Re-Password" autocomplete="off" data-validate="required">
                        <span class="invalid_feedback">
                            Ulang Password Baru
                        </span>
                        <div class="msg-error">

                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="actions">
            <button type="submit" class="btn-change-password ui button primary" id="btn-change-password" form="form-change-password">Simpan Perubahan</button>
        </div>
    </div>
    <!-- Akhir Modal -->