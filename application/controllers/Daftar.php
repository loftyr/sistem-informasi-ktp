<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    public function index()
    {
        $dataheader['Judul']    = "Daftar";
        $dataheader['Css']      = "";
        $datafooter["Js"]       = "";

        $data["Data"]           = "";

        $this->load->view('pages/daftar_v', $data);
    }


    public function save()
    {
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $result['Msg']       = 'Lengkapi Data';
            $result['Status']    = false;
        } else {
            $data   = [
                'Username'      => htmlspecialchars($this->input->post('Username')),
                'Nama'          => htmlspecialchars($this->input->post('Nama')),
                'Password'      => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
                'Role'          => 'User',
                'Tgl_Daftar'    => date('Y-m-d')
            ];

            $cekEmail = $this->db->get_where('tb_user', ['Username' => $data["Username"]])->row_array();

            if ($cekEmail) {
                $result['Msg']       = "Email Sudah Terdaftar";
                $result['Status']    = false;
            } else {
                $query = $this->m_base->saveData('tb_user', $data);
                if ($query == true) {
                    $result['Msg']       = 'Pendaftaran Berhasil';
                    $result['Status']    = true;
                } else {
                    $result['Msg']       = $this->db->error()['message'];
                    $result['Status']    = false;
                }
            }
        }

        echo json_encode($result);
    }
}
