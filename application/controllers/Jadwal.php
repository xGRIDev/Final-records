<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('md_jadwal');
        
        $this->load->model('m_user');
        $this->load->helper('url');
    }
	public function index()
    {
        $data['session'] = $this->session->userdata();
        
        $username = $this->input->post("username");
		$data['jadwal'] = $this->md_jadwal->show_data()->result();
        
		$data['user'] = $this->m_user->findAll();
        
        
       $username = $this->input->post("username");
        $this->load->view('jadwal/v_jadwal', $data);
    }
}
