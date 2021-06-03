<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_admin');
		$this->load->model('md_studio');
		
		$this->load->helper(array('form', 'url')); 
		if($this->session->userdata("login") == null && $this->session->userdata("admin") != true)
			{
				redirect(base_url('login'));
			}
	}

	public function index()
	{
		$data = [
			"studio" => $this->md_studio->show_data()->result(),
			'title' => 'admin - page',
		];
		$this->load->view('admin/v_admin', $data);
	}

	public function delete_booking($id_admin)
	{
		
		$data['session'] = $this->session->userdata();
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->m_admin->edit_data($where,'admin')->result();
		$this->load->view('studio/view', $data);
	}

	public function edit_studio()
	{
		$admin = $this->input->post('id_admin');
		$data['session'] = $this->session->userdata();
		//$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->m_admin->edit_data($where,'admin')->result();
		$this->load->view('admin/studio/admin_edit_studio', $data, $admin);
	}

	public function update()
	{
		$id_admin= $this->input->post('id_admin');
		$nama_admin= $this->input->post('nama_admin');
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$email= $this->input->post('email');
		$no_tlpn= $this->input->post('no_tlpn');
		$alamat= $this->input->post('alamat');
		
		$data = array(
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'no_tlpn' => $no_tlpn,
			'alamat' => $alamat,
			);
		$where = array('id_admin' => $id_admin);
		$this->m_admin->update_data($where,$data,'admin');
		redirect('admin/admin');
	}
}
