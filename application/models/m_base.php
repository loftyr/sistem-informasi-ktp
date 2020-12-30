<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_base extends CI_Model
{

    // Save Data
    public function saveData($tbl, $data)
    {
        $query  = $this->db->insert($tbl, $data);

        if (!$query) {
            return false;
        } else {
            return true;
        }
    }

    // Edit Data
    public function editData($tbl, $data, $where)
    {
        $query = $this->db->update($tbl, $data, $where);

        if (!$query) {
            return false;
        } else {
            return true;
        }
    }

    // Delete Data
    public function deleteData($tbl, $where)
    {
        $this->db->where($where);
        $query = $this->db->delete($tbl);

        if (!$query) {
            return false;
        } else {
            return true;
        }
    }
}
