<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jam extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->jam = base_url('jam');
        $this->load->model('md_jam');
        $this->load->model('m_user');
        $this->load->helper('url');
        
			if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_user->findOne("id", $this->session->userdata("login"));
		
    }

    public function index()
    {
        
		$data['session'] = $this->session->userdata();
		$data['jam'] = $this->md_jam->show_data()->result();
        $this->load->view('jam/jam_v', $data);
    }

    public function update()
    {
        $id_jam= $this->input->post('id_jam');
		$jam= $this->input->post('jam');
		
		
		$data = array(
			'jam' => $jam,
			);
		$where = array('id_jam' => $id_jam);
		$this->md_jam->update_data($where,$data,'jam');
		redirect('jam/index');
    }

    public function edit($jam)
    {
        $data['session'] = $this->session->userdata();
		$where = array('id_jam' => $jam);
		$data['jam'] = $this->md_jam->edit_data($where,'jam')->result();
		$this->load->view('jam/jam_v_edit',$data);
	
    }

    public function delete($jam)
    {
        $where = array('id_jam' => $jam);
        $this->md_jam->delete_data($where, 'jam');
        redirect('jam');
    }

    public function add()
    {
        $data = [
            "jam" => $this->jam,
            "session" => $this->session->userdata(),
            "studios" => $this->md_jam->show_data()->result(),
            "title" => 'Studio - Page',
        ];
        $this->load->view('jam/jam_v_add', $data);
    }

    public function save()
    {
        $jam = $this->input->post('jam');

        $data = array(
            'jam' => $jam,
        );
        $this->md_jam->save_data($data, 'jam');
        redirect ('jam');
    }
}
