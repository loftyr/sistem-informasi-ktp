<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $path = './assets/captcha/';
        if (!file_exists($path)) {
            $buat = mkdir($path, 0777);

            if (!$buat) {
                return;
            }
        }

        // Delete Old Captcha
        $files = glob('./assets/captcha/*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file)) {
                @unlink($file); // delete file
            }
        }

        $kata = array_merge(range('0', '9'), range('A', 'Z'));
        $acak = shuffle($kata);
        $str = substr(implode($kata), 0, 5);

        $data_tes = array("captcha_str" => $str);
        $this->session->set_userdata($data_tes);

        $val = [
            'word' => $str,
            'img_path' => $path,
            'img_url'   => base_url() . 'assets/captcha/',
            'img_width' => '150',
            'img_height' => '40',
            'expiration' => 7200
        ];

        $capc = create_captcha($val);
        $data['captcha_image']  = $capc['image'];


        $this->load->view('pages/login_v', $data);
    }

    public function authLogin()
    {
        $user = htmlspecialchars($this->input->post('Username'));
        $pass = $this->input->post('Password');
        $capc = $this->input->post('Captcha');

        $dataUser = $this->db->get_where('tb_user', ['Username' => $user])->row_array();

        if ($capc != $this->session->userdata('captcha_str')) {
            $data['Status']     = false;
            $data['Msg']        = 'Captcha Salah !!!';
            echo json_encode($data);
            die;
        } else {
            // Check Data User
            if ($dataUser) {
                // Check Password User
                if (password_verify($pass, $dataUser['Password'])) {

                    $datasession = [
                        'Id_User'   => $dataUser['Id'],
                        'Username'  => $dataUser['Username'],
                        'Nama'      => $dataUser['Nama'],
                        'Role'      => $dataUser['Role']
                    ];

                    $this->session->set_userdata('logged_in', $datasession);

                    $data['Status'] = true;
                    $data['Role']   = $dataUser['Role'];
                    $data['Msg']    = 'Create Session . . .';
                    echo json_encode($data);
                    die;
                } else {
                    $data['Status']     = false;
                    $data['Msg']        = 'Password Salah !!!';
                    echo json_encode($data);
                    die;
                }
            } else {
                $data['Status']     = false;
                $data['Msg']        = 'Email Tidak Ditemukan';
                echo json_encode($data);
                die;
            }
        }
    }

    public function Out()
    {
        session_unset();
        session_destroy();
        redirect('Login', 'refresh');
    }
}
