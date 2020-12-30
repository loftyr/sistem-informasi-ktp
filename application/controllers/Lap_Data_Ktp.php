<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_Data_Ktp extends CI_Controller
{

    public function index()
    {
        $dataheader['judul']    = "Dashboard";
        $dataheader['css']      = "";
        $datafooter["js"]       = "";

        $data["Data"]           = "";

        $this->load->view('templates/header_admin', $dataheader);
        $this->load->view('pages/lap_data_v', $data);
        $this->load->view('templates/footer_admin', $datafooter);
    }

    public function Laporan()
    {
        // $Nik = ($this->input->post('Nik')) == "" ? "%" : $this->input->post('Nik');
        // $Nama = ($this->input->post('Nama')) == "" ? "%" : $this->input->post('Nama');
        // $Jk = ($this->input->post('Jk')) == "" ? "%" : $this->input->post('Jk');
        $Nik = $this->input->post('Nik');
        $Nama = $this->input->post('Nama');
        $Jk = $this->input->post('Jk');

        $this->db->like('Nik', $Nik);
        $this->db->like('Nama', $Nama);
        $this->db->like('Jk', $Jk);

        $Data["Data"] = $this->db->get('tb_ktp')->result_array();


        $this->load->library('pdf');

        $this->pdf->setPaper('Legal', 'landscape');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->generate('l_data_ktp', $Data, "Laporan Data KTP.pdf");
    }
}
