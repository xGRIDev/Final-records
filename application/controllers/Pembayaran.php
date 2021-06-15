<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('md_pembayaran');
		$this->load->model('m_user');
		if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_user->findOne("id", $this->session->userdata("login"));
		
    }

    public function index()
    {
		$data['title'] = "Payment Page || Final - Studio";
        //$data['session'] = $this->session->userdata;
        $data['pembayaran'] = $this->md_pembayaran->show_data()->result();
        $this->load->view('payment/v_pembayaran', $data);
    }

    
	public function add()
	{
		$data['session'] = $this->session->userdata();
		$this->load->view('payment/v_add_pembayaran',$data);
	}


	public function update()
	{
		$id_bayar= $this->input->post('id_bayar');
		$status_bayar= $this->input->post('status_bayar');
		$keterangan= $this->input->post('keterangan');
		$nominal_bayar= $this->input->post('nominal_bayar');

		
			$data = [
				'status_bayar' => $status_bayar,
			'keterangan' => $keterangan,
			'nominal_bayar' => $nominal_bayar,
			];
		$where = ['id_bayar' => $id_bayar];
		
		$this->md_pembayaran->update_data($where,$data,'paid');
		redirect('payment/v_pembayaran', $data);
	}

	public function edit($id_bayar)
	{
		
		$data['title'] = "Payment Edit || Final - Records";
		$data['session'] = $this->session->userdata();
		$data['pembayaran'] = $this->md_pembayaran->edit_data($id_bayar,'paid')->result();
		$this->load->view('payment/v_edit_pembayaran',$data);
	}
	public function delete($id_bayar)
	{
        $where = array('id_bayar' => $id_bayar);
		$this->md_pembayaran->delete_data($where,'paid');
        redirect('/pembayaran');
    }
}

