<?php

class InfoModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function getAllInfo()
    {
        // get all data
        $query = $this->db->query("SELECT * FROM info");
        return $query->result_array();
    }

    public function AddInfo($data)
    {
        $config['upload_path']         = 'assets/info';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png'; // jenis file
        $config['max_size']             = 1000;
        $config['max_width']            = 500;
        $config['max_height']           = 500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload';
        }
        $file = $this->upload->data();
        $gambar = $file['file_name'];

        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "photo" => $gambar
        ];
        return $this->db->insert('info', $data);
    }

    public function UpdateInfo($data, $id_info)
    {
        $this->db->where('id_info', $id_info);
        return $this->db->update('id_info', $data);
    }

    public function DeleteInfo($id_info)
    {
        // $this->db->where($where);
        // $this->db->delete($info);
        return $this->db->delete('info', ['id_info' => $id_info]);
    }

    public function view()
    {
        return $this->db->get('info')->result();
    }
    private $_table = "info";

    public function upload()
    {
        $config['upload_path'] = './upload/info/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']    = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_gambar')) {
            // Kalo bisa nih bree :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Waduh gagal euy kesini mah :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload)
    {
        $data = array(
            'judul' => $this->input->post('input_judul'),
            'isi' => $this->input->post('input_isi'),
            'photo' => $upload['file']['file_name']
        );

        $this->db->insert('info', $data);
    }
}
