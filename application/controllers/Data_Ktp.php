<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Ktp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->tb_ktp = 'tb_ktp';
        $this->load->model('m_data_ktp_tbl');
    }

    public function index()
    {
        $dataheader['judul']    = "Data KTP";
        $dataheader['css']      = "";
        $datafooter["js"]       = "data_ktp.js";

        $data["Data"]           = "";

        $this->load->view('templates/header_admin', $dataheader);
        $this->load->view('pages/data_ktp_v', $data);
        $this->load->view('templates/footer_admin', $datafooter);
    }


    public function saveEdit()
    {
        $this->form_validation->set_rules('Nama_Provinsi', 'Nama Provinsi', 'required');
        $this->form_validation->set_rules('Nik', 'Nik', 'required');
        $this->form_validation->set_rules('Nama_Kab', 'Nama Kabupaten / Kota', 'required');
        $this->form_validation->set_rules('Tgl_Lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('Agama', 'Agama', 'required');
        $this->form_validation->set_rules('Tempat_Lahir', 'Tempat Lahir', 'required');

        if ($this->form_validation->run() == false) {
            $arr['Status']  = "200";
            $arr['Result']  = false;
            $arr['Pesan']   = validation_errors();
            $arr['Data']    = "";
        } else {

            $data   = [
                'Nama_Provinsi' => htmlspecialchars($this->input->post('Nama_Provinsi')),
                'Nik'           => htmlspecialchars($this->input->post('Nik')),
                'Nama_Kab'      => htmlspecialchars($this->input->post('Nama_Kab')),
                'Nama'          => htmlspecialchars($this->input->post('Nama')),
                'Tempat_Lahir'  => ($this->input->post('Tempat_Lahir')),
                'Tgl_Lahir'     => ($this->input->post('Tgl_Lahir')),
                'Agama'         => ($this->input->post('Agama')),
                'Jk'            => ($this->input->post('Jk')),
                'Alamat'        => ($this->input->post('Alamat')),
                'Status_Perkawinan' => ($this->input->post('Status_Perkawinan')),
                'Pekerjaan'     => ($this->input->post('Pekerjaan')),
            ];
            $where = ['Id' => $this->input->post('Id')];

            $query = $this->m_base->editData($this->tb_ktp, $data, $where);

            if ($query == true) {
                $arr['Status']  = "200";
                $arr['Result']  = true;
                $arr['Pesan']   = 'Berhasil Menyimpan Data';
                $arr['Data']    = "";
            } else {
                $arr['Status']  = "200";
                $arr['Result']  = false;
                $arr['Pesan']   = $this->db->error()['message'];
                $arr['Data']    = "";
            }
        }

        echo json_encode($arr);
    }

    public function getData()
    {

        $list   = $this->m_data_ktp_tbl->get_datatables();
        $data   = array();
        $no     = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $btnAksi = '<button class="button warning btnHapus mr-1" dataID="' . $field->Id . '"><i class="mif-trash"></i> Hapus</button>';
            $btnAksi .= '<button class="button primary btnUbah" dataID="' . $field->Id . '"><i class="mif-pencil"></i> Ubah</button>';


            $row = array();
            $row[] = $field->Nama_Provinsi;
            $row[] = $field->Nama_Kab;
            $row[] = $field->Nik;
            $row[] = $field->Nama;
            $row[] = $field->Jk;
            $row[] = $field->Tempat_Lahir;
            $row[] = $field->Tgl_Lahir;
            $row[] = $field->Alamat;
            $row[] = $field->Agama;
            $row[] = $field->Status_Perkawinan;
            $row[] = $field->Pekerjaan;
            $row[] = $btnAksi;


            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_data_ktp_tbl->count_all(),
            "recordsFiltered" => $this->m_data_ktp_tbl->count_filtered(),
            "data" => $data,
        );

        echo json_encode($output);
    }

    public function getEdit()
    {
        $Id = $this->input->post('Id');
        $query = $this->db->get_where($this->tb_ktp, ['Id' => $Id])->result_array();

        $arr['Status']  = "200";
        $arr['Result']  = true;
        $arr['Pesan']   = '';
        $arr['Data']    = $query;

        echo json_encode($arr);
    }

    public function deleteData()
    {
        $Id = $this->input->post('Id');

        $query  = $this->m_base->deleteData($this->tb_ktp, ['Id' => $Id]);

        if ($query == true) {
            $arr['Status']  = "200";
            $arr['Result']  = true;
            $arr['Pesan']   = "Data Berhasil Dihapus.";
            $arr['Data']    = "";
        } else {
            $arr['Status']  = "200";
            $arr['Result']  = false;
            $arr['Pesan']   = $this->db->error()['message'];
            $arr['Data']    = "";
        }

        echo json_encode($arr);
    }
}
