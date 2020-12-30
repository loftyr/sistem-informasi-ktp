<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Sistem Informasi KTP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('include/loginv2/images/icons/favicon.ico') ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/animate/animate.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/css-hamburgers/hamburgers.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/animsition/css/animsition.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/select2/select2.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/vendor/daterangepicker/daterangepicker.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?= base_url('include/plugin/toast/jquery.toast.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('include/loginv2/css/main.css') ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" id="daftar" method="POST">

                    <span class="login100-form-title p-b-26">
                        Daftar Sistem Informasi KTP
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan Nama">
                        <input class="input100" type="text" name="Nama">
                        <span class="focus-input100" data-placeholder="Nama"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan Email">
                        <input class="input100" type="email" name="Username">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="Password" id="Password" autocomplete="off">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Repeat Password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="re-pass" id="Re_Pass" autocomplete="off">
                        <span class="focus-input100" data-placeholder="Repeat Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="btnSimpan">
                                Daftar
                            </button>
                        </div>
                    </div>
                </form>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" id="btnKembali">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/animsition/js/animsition.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/bootstrap/js/popper.js') ?>"></script>
    <script src="<?= base_url('include/loginv2/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/select2/select2.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?= base_url('include/loginv2/vendor/daterangepicker/daterangepicker.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/loginv2/vendor/countdowntime/countdowntime.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/js/daftar.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('include/plugin/toast/jquery.toast.min.js') ?>"></script>
    <!--===============================================================================================-->


</body>

</html>