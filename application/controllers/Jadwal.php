<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('md_jadwal');
        $this->load->helper('url');
    }
	public function index()
    {
        $data['session'] = $this->session->userdata();
		$data['jadwal'] = $this->md_jadwal->show_data()->result();
        $this->load->view('jadwal/v_jadwal', $data);
    }
}
