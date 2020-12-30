<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_Admin extends CI_Controller
{

    public function index()
    {
        $dataheader['judul']    = "Dashboard";
        $dataheader['css']      = "";
        $datafooter["js"]       = "";

        $data["TotalKtp"]           = $this->db->get('tb_ktp')->num_rows();
        $data["TotalPerempuan"]     = $this->db->get_where('tb_ktp', ['Jk' => 'Perempuan'])->num_rows();
        $data["TotalPria"]          = $this->db->get_where('tb_ktp', ['Jk' => 'Laki-Laki'])->num_rows();

        $this->load->view('templates/header_admin', $dataheader);
        $this->load->view('pages/home_admin_v', $data);
        $this->load->view('templates/footer_admin', $datafooter);
    }
}
