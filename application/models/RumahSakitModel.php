<?php

class RumahSakitModel extends CI_Model
{
    public function getAllRumahSakit()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM rumahsakit");
        return $query->result_array();
    }

    public function addRumahSakit($data)
    {
        $this->db->insert('rumahsakit', $data);
    }

    public function deleteRumahSakit($id)
    {
        return $this->db->delete('rumahsakit', ['id_rumahsakit' => $id]);
    }

    public function updateRumahSakit($id,$data)
    {
        
        $this->db->where('id_rumahsakit', $id);
        $this->db->update('rumahsakit', $data);
    }
}
