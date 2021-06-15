<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('md_booking');
        $this->load->model('m_user');
        $this->load->helper(array('form', 'url')); 
        if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_user->findOne("id", $this->session->userdata("login"));
		
    }
    
    public function index()
    {
        $data['no_invoice']=$this->md_booking->get_no_invoice();
        //$id_transaksi = $this->input->post('id_transaksi');
       // $id_member = $this->session->userdata('id_member');
       
       $username = $this->input->post("username");
        $data['title'] = "Booking Page || Final - Studio";
        $data['booking'] = $this->md_booking->show_data()->result();
        $data['jam'] = $this->md_booking->show_hour()->result();
        
       // $username = $this->session->userdata('username');
        //$tanggal = $this->input->post('tanggal');
        //$id_studio = $this->input->post('id_studio');
        //$tarif = $this->input->post('tarif');
        //$id_jam = $this->input->post('id_jam');
        $this->load->view('booking_studio/v_bookingstudio',$data);
    }

    public function booking_save()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id_member = $this->session->userdata('id_member');
        $tanggal = $this->input->post('tanggal');
        $id_studio = $this->input->post('id_studio');
        $tarif = $this->input->post('tarif');
        $id_jam = $this->input->post('id_jam');
       

		$data = array(
            'id_transaksi'=> $id_transaksi,
			'id_member' => $id_member,
			'tanggal' => $tanggal,
            'id_studio' => $id_studio,
            'id_jam'=>$id_jam,
            //'id_transaksi_sewa'=>$id_transaksi,
           
            
			);
        $this->md_booking->save_data($data,'transaksi_sewa');
        $this->session->set_userdata('data_booking',$data);

        redirect('booking/v_confirmbooking',$data);
    }

    public function upload()
    {
        $config['upload_path']   = './assets/bukti_bayar'; 
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG'; 
        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
            
        if (!$this->upload->do_upload('bukti_bayar'))
        {
            $error = $this->upload->display_errors();
            $this->load->view('booking_studio/v_confirmbooking', compact('error'));
        }
        else
        { 
            $data_bayar=$this->session->userdata('data_booking');
            $tipe_bayar = $this->input->post('tipe_bayar');
            $nominal_bayar = $this->input->post('nominal_bayar');
            
            $bayar= array(
                'id_transaksi'=> $data_bayar['id_transaksi'],
                'tipe_bayar' => $tipe_bayar,
                'bukti_bayar'=> $this->upload->data('file_name'),
                'nominal_bayar'=>$nominal_bayar,
                );

            $this->md_booking->save_payment($bayar,'paid');
           
            $upload_data = $this->upload->data(); 
           
            $this->session->set_flashdata('upload_sukses', 
            '<div class="alert alert-success">
            <p>UPLOAD BUKTI TRANSAKSI SUKSES</p>
            </div>');

            
            $this->session->unset_userdata('data_booking');
            $this->load->view('booking_studio/v_confirmbooking', compact('upload_data'));
         } 
    }

    public function confirm()
    {
        $this->session->set_flashdata('msg', 
        '<div class="alert alert-success">
            <h4>SELAMAT BOOKING ANDA BERHASIL</h4>
            <p>Silahkan lakukan konfirmasi pembayaran.</p>
        </div>');

		$this->load->view('booking_studio/v_confirmbooking');
    }
}