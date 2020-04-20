<?php

class InfoModel extends CI_Model
{
    public function getAllInfo()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM info");
        return $query->result_array();
    }

    public function getInfoById($id)
    {
        // get all data
        $query = $this->db->query("SELECT * FROM info WHERE id_info = '" . $id . "'");
        return $query->row_array();
    }

    public function AddInfo($data)
    {
        return $this->db->insert('info', $data);
    }

    public function UpdateInfo($id_info,$data)
    {
        $this->db->where('id_info', $id_info);
        $this->db->update('info', $data);
    }

    public function DeleteInfo($id_info)
    {
        return $this->db->delete('info', ['id_info' => $id_info]);
    }
}
