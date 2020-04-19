<?php

class RumahSakitController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load RumahSakitMode
        $this->load->model('RumahSakitModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Rumah Sakit';
        $data['user'] = $this->session->userdata('user');

        $data['rumahsakit'] = $this->RumahSakitModel->getAllRumahSakit();
        $this->load->view('templates/header', $data);
        $this->load->view('RumahSakit/index', $data);
        $this->load->view('templates/footer');
    }

    public function addRs()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('notelp', 'notelp', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Rumah Sakit';
            $data['rumahsakit'] = $this->RumahSakitModel->getAllRumahSakit();

            $this->load->view('templates/header', $data);
            $this->load->view('RumahSakit/index');
            $this->load->view('templates/footer');
        } else {
            $add = [
                "id_rumahsakit" => '',
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true),
                "notelp" => $this->input->post('notelp', true)
            ];
            $this->RumahSakitModel->addRumahSakit();
            // load rscon

        }
        redirect('RumahSakitController');
    }

    public function delete($id)
    {
        $this->RumahSakitModel->deleteRumahSakit($id);
        redirect('RumahSakitController');
    }

    public function FunctionName($value = '')
    {
        # code...
    }
}
