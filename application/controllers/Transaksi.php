<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('md_transaksi');
		
		$this->load->model('m_user');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['transaksi'] = $this->md_transaksi->show_data()->result();
		
		$nama_member= $this->input->post('id_member');
		$data['transaksi'] = $this->md_transaksi->show_data($nama_member, 'member')->result();
		
		$this->load->view('transaksi/v_transaksi',$data);
	}

	public function update()
	{
		$id_transaksi= $this->input->post('id_transaksi');
		$tanggal= $this->input->post('tanggal');
		$id_member= $this->input->post('id_member');
		$id_jam= $this->input->post('id_jam');
		$status_sewa= $this->input->post('status_sewa');
		$status_pemesanan= $this->input->post('status_pemesanan');
		
		$data = array(
			'status_sewa' => $status_sewa,
			);
		$where = array('id_transaksi' => $id_transaksi);
		$this->md_transaksi->update_data($where,$data,'transaksi_sewa');
		redirect('admin/transaksi/');
	}

	public function edit($id_transaksi)
	{
	
		$data['session'] = $this->session->userdata();
		$data['transaksi'] = $this->md_transaksi->edit_data($id_transaksi,'transaksi_sewa')->result();
		$this->load->view('transaksi/v_edit_transaksi',$data);
	}
	public function delete($id_transaksi)
	{
        $where = array('id_transaksi' => $id_transaksi);
		$this->md_transaksi->delete_data($where,'transaksi_sewa');
        redirect('transaksi/v_transaksi');
    }
}
