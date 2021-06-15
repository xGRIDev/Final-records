<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct()
		{
			parent::__construct();
			$this->home = base_url();
			$this->profile = base_url('profile');
			$this->load->helper(array('form', 'url'));
			$this->load->model("md_report");
			$this->load->model("m_user");
			$this->load->model("PostModel");
			if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_user->findOne("id", $this->session->userdata("login"));
	}

    public function index()
    {
        
		$data['session'] = $this->session->userdata();
		$data['laporan'] = $this->md_report->show_data()->result();
        $data['title'] = "Report || Final - Studio";
        $this->load->view('report/report_v', $data);
    }

	public function filter()
	{
		$tgl_awal 	= $this->input->post('tgl_awal', true);
		$tgl_akhir 	= $this->input->post('tgl_akhir', true);
		$post = [
			'date1' => $tgl_awal,
			'date2' => $tgl_akhir
		];
		$data['laporan'] = $this->md_report->date_filter($post)->result();
		// print('<pre>');print_r($data);exit();
		$this->load->view('report/report_v',$data);
	}

	}

