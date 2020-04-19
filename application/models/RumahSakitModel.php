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
        //use query builder to insert $data to table "rumahsakit"
        // $data = [
        //     "id_rumahsakit" => '',
        //     "nama" => $this->input->post('nama', true),
        //     "alamat" => $this->input->post('alamat', true),
        //     "notelp" => $this->input->post('notelp', true)
        // ];
        $this->db->insert('rumahsakit', $data);
    }

    public function deleteRumahSakit($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('rumahsakit');
    }

    public function updateRumahSakit($id)
    {
        $data = [
            "id_rumahsakit" => $id,
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "notelp" => $this->input->post('notelp', true)
        ];
        $this->db->where('id_rumahsakit', $id);
        $this->db->update('rumahsakit', $data);
    }
}
