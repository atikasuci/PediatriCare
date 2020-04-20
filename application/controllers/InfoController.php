<?php

class InfoController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load InfoModel
        $this->load->model('InfoModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Info';
        $data['info'] = $this->InfoModel->getAllInfo();
        $this->load->view('templates/header', $data);
        $this->load->view('Info/Index', $data);
        $this->load->view('templates/footer');
    }

    public function getAllInfo()
    {
        //use query builder to get data table "Info"
        $this->db->select('*');
        $this->db->from('info');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function AddInfo()
    {
        // Create variabel and use it for input data to database.
        $data = array(
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "photo" => $this->input->post('photo', true),
        );
        $this->InfoModel->Add($data);
        redirect('InfoController');
    }

    public function UpdateInfo($id_info)
    {
        $data['judul'] = 'Form Ubah Info';
        $data['info'] = $this->InfoModel->getAllInfo();

        //from library form_validation, set rules for nama, nim, email = required
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');

        if ($this->form_validation->run() != false) {
            $this->InfoModel->UpdateInfo($id_info);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('InfoController');
        } else {
            //$this->load->view('templates/header', $data);
            $this->load->view('Info/Indexcoba', $data);
            // $this->load->view('templates/footer');
        }
    }

    public function DeleteInfo($id_info)
    {
        $this->InfoModel->DeleteInfo($id_info);
        redirect('InfoController');
    }

    public function Save()
    {
        $data = array();

        if ($this->input->post('submit')) {
            $upload = $this->InfoModel->upload();

            if ($upload['result'] == "success") {
                $this->InfoModel->save($upload);

                redirect('InfoController');
            } else {
                $data['message'] = $upload['error'];
            }
        }

        $this->load->view('InfoController', $data);
    }

    public function view($id)
    {
        $data['judul'] = 'Info Page';
        $data['info_detail'] = $this->InfoModel->getInfoById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Info/Info', $data);
        $this->load->view('templates/footer');
    }
}
