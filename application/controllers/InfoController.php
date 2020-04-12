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
        $data['info'] = $this->InfoModel->view();
        $this->load->view('templates/header', $data);
        $this->load->view('Info/index', $data);
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

    public function UpdateInfo()
    {
        $data = [
            'id_info' => $this->input->post('id_info', true),
            'judul' => $this->input->post('judul', true),
            'isi' => $this->input->post('isi', true),
            'photo' => $this->input->post('photo', true),
        ];

        $id = $this->input->post('id_info', true);
        // Load updateinfo($data,$id) from InfoModel
        $this->InfoModel->UpdateInfo($data, $id);
        // Redirect to InfoController after edit data.
        redirect('InfoController');
    }

    public function DeleteInfo($id_info)
    {
        // $where = array('id_info' => $id_info);
        // $this->InfoModel->DeleteInfo($where, 'info');
        // redirect('InfoController');
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
}
