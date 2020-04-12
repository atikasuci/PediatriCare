<?php

class KonsultasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load KonsultasiModel
        $this->load->model('KonsultasiModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Konsultasi';
        $data['konsultasi'] = $this->KonsultasiModel->view();
        $this->load->view('templates/header', $data);
        $this->load->view('Konsultasi/index', $data);
        $this->load->view('templates/footer');
    }
    public function getAllKonsultasi()
    {
        //use query builder to get data table "Konsultasi"
        $this->db->select('*');
        $this->db->from('konsultasi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function AddKonsultasi()
    {
        // Create variabel and use it for input data to database.
        $data = array(
            "judul" => $this->input->post('judul', true),
            "username" => $this->input->post('username', true),
            "dokter" => $this->input->post('dokter', true),
            "question" => $this->input->post('question', true),
            "answer" => $this->input->post('answer', true)
        );
        $this->KonsultasiModel->AddKonsultasi($data);
        redirect('KonsultasiController');
    }

    public function UpdateKonsultasi()
    {
        $data = [
            'id_Konsultasi' => $this->input->post('id_konsultasi', true),
            'judul' => $this->input->post('judul', true),
            'username' => $this->input->post('username', true),
            'dokter' => $this->input->post('dokter', true),
            'question' => $this->input->post('question', true),
            'answer' => $this->input->post('answer', true),
        ];

        $id = $this->input->post('id_konsultasi', true);
        // Load UpdateKonsultasi($data,$id) from KonsultasiModel
        $this->KonsultasiModel->UpdateKonsultasi($data, $id);
        // Redirect to konsultasiController after edit data.
        redirect('KonsultasiController');
    }

    public function DeleteKonsultasi($id_konsultasi)
    {
        $this->KonsultasiModel->DeleteKonsultasi($id_konsultasi);
        redirect('KonsultasiController');
    }

    public function Save()
    {
        $data = array();

        // if ($this->input->post('submit')) {
        //     $upload = $this->KonsultasiModel->upload();

        //     if ($upload['result'] == "success") {
        // $this->KonsultasiModel->save($upload);

        //         redirect('KonsultasiController');
        //     } else {
        //         $data['message'] = $upload['error'];
        //     }
        // }

        $this->load->view('KonsultasiController', $data);
    }
}
