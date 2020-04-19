<?php

class lihat_konsultasi_controller extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$data['judul'] = 'About Us';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('lihat_konsultasi', $data);
        $this->load->view('templates/footer');
    }
}