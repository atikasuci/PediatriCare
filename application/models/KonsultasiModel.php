<?php

class KonsultasiModel extends CI_Model
{
    public function getAllKonsultasi()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM konsultasi");
        return $query->result_array();
    }

    public function AddKonsultasi($data)
    {
        // $data = [
        //     "judul" => $this->input->post('judul', true),
        //     "username" => $this->input->post('username', true),
        //     "dokter" => $this->input->post('dokter', true),
        //     "question" => $this->input->post('question', true),
        //     "answer" => $this->input->post('answer', true)
        // ];
        return $this->db->insert('konsultasi', $data);
    }

    public function UpdateKonsultasi($data, $id_konsultasi)
    {
        $this->db->where('id_konsultasi', $id_konsultasi);
        return $this->db->update('id_konsultasi', $data);
    }

    public function DeleteKonsultasi($id_konsultasi)
    {
        return $this->db->delete('konsultasi', ['id_konsultasi' => $id_konsultasi]);
    }
}
