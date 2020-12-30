<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_User extends CI_Controller
{

    public function index()
    {
        $dataheader['judul']    = "Dashboard";
        $dataheader['css']      = "";
        $datafooter["js"]       = "home_user.js";

        $data["Data"]           = "";
        $data['num_data']       = $this->db->get_where('tb_ktp', ['Parent' => $this->session->userdata['logged_in']['Id_User']])->num_rows();

        $data['Ktp']            = $this->db->get_where('tb_ktp', ['Parent' => $this->session->userdata['logged_in']['Id_User']])->result_array();


        $this->load->view('templates/header_user', $dataheader);
        $this->load->view('pages/home_user_v', $data);
        $this->load->view('templates/footer_user', $datafooter);
    }


    public function saveData($method)
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
                'Status_Perkawinan'        => ($this->input->post('Status_Perkawinan')),
                'Pekerjaan'     => ($this->input->post('Pekerjaan')),
                'Parent'        => $this->session->userdata['logged_in']['Id_User'],
            ];

            $where = ['Id' => $this->input->post('Id')];

            if ($method == "Save") {
                $query = $this->m_base->saveData('tb_ktp', $data);
            } else {
                $query = $this->m_base->editData('tb_ktp', $data, $where);
            }

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

    public function getEdit()
    {
        $Id = $this->input->post('Id');

        $data = $this->db->get_where('tb_ktp', ['Id' => $Id])->result_array();

        echo json_encode($data);
    }
}
