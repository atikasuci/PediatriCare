<?php

class JawabKonsultasiController extends CI_Controller
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
        $this->load->view('Konsultasi/JawabKonsultasi', $data);
        $this->load->view('templates/footer');
    }
}