<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data_ktp_tbl extends CI_Model
{

    var $table = 'tb_ktp A'; //nama tabel dari database
    var $column_order = array(); //field yang ada di table user
    var $column_search = array('A.Nama_Provinsi', 'A.Nama_Kab', 'A.Nik', 'A.Nama', 'A.Jk', 'A.Tempat_Lahir', 'A.Tgl_Lahir', 'A.Alamat', 'A.Agama', 'A.Status_Perkawinan', 'Pekerjaan'); //field yang diizin untuk pencarian 

    var $order = array('A.Nama' => 'ASC'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->db->select('A.*, B.Username');
        $this->db->from($this->table);
        $this->db->join('tb_user B', 'A.Parent = B.Id', 'LEFT');

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            $request = $_POST['columns'][$i]["search"]["value"];

            if ($request != "") {
                $this->db->like($item, $request);
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();

        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
