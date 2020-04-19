<?php

class InputKonsultasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KonsultasiModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = 'Input Konsultasi';
        $data['user'] = $this->session->userdata('user');

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('question', 'question', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Konsultasi';
            // $data['rumahsakit'] = $this->KonsultasiModel->getAllRumahSakit();

            $this->load->view('templates/header', $data);
            $this->load->view('Konsultasi/inputPertanyaan', $data);
            $this->load->view('templates/footer');
        } else {
            $add = [
                "id_konsultasi" => '',
                "judul" => $this->input->post('judul', true),
                "username" => $data['user']['username'],
                "dokter" => '',
                "question" => $this->input->post('question', true),
                "answer" => ''
            ];
            $this->KonsultasiModel->AddKonsultasi($add);
            redirect('KonsultasiController');
        }
    }
}
