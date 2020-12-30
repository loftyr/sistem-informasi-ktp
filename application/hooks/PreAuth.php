<?php

class PreAuth
{
    function checkAuth()
    {
        $_CI = &get_instance();
        if ($_CI->uri->rsegment(1) !== 'Login' && $_CI->uri->rsegment(1) !== 'Daftar') {
            if (!isset($_CI->session->userdata['logged_in'])) {
                redirect(base_url('Login'));
                die;
            }

            if ($_CI->session->userdata['logged_in']['Role'] != "Admin") {
                $array_menu_user = [
                    'Home_User'
                ];

                if (!in_array($_CI->uri->rsegment(1), $array_menu_user)) {
                    echo    "<script type='text/javascript'>
                                alert('Anda Tidak Memiliki Akses ke " . $_CI->uri->rsegment(1) . " ');
                                window.location =  '" . base_url('Home_User') . "';
                            </script>";
                }
            }
        }
    }
}
