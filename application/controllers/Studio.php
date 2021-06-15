<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('md_studio');
        $this->load->helper('url');
		$this->load->helper(array('url')); 
        $this->load->model('m_admin');
        if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_admin->show_data("id", $this->session->userdata("login"));
		
    }
    public function index()
    {
		//$data['studio'] = $this->md_studio->show_data()->result();
        $data = [
            "studios" => $this->md_studio->show_data()->result(),
            "title" => 'Studio - Page',
        ];
        //$title['title'] = "Studio - page";
        $this->load->view('studio/view',$data);
    }

    public function add_studio()
    {
        $data = [
            "studios" => $this->md_studio->show_data()->result(),
            "title" => 'Studio - Page',
            'session' => $this->session->userdata(),
        ];
		$this->load->view('admin/studio/admin_add_studio', $data);
    }

    public function save()
    {
        $config['upload_path']   = './assets/studio'; 
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG'; 
		$config['overwrite'] = TRUE;
		
        $this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar'))
        {
            $error = $this->upload->display_errors();
            $this->load->view('admin/studio/admin_add_studio', compact('error'));
		}
		else 
		{
			$nama_studio= $this->input->post('nama_studio');
			$tarif= $this->input->post('tarif');
			$deskripsi= $this->input->post('deskripsi');

			$data = array(
				'nama_studio' => $nama_studio,
				'tarif' => $tarif,
				'deskripsi' => $deskripsi,
				'gambar'=> $this->upload->data('file_name'),
				);

			$upload_data = $this->upload->data(); 

			$this->md_studio->save_data($data,'studio');

			redirect('admin');
		}
    }
    public function edit()
	{
        $data['title'] = "Edit Page || STUDIO";
        $id_studio = $this->input->post("id_studio");
        $nama_studio = $this->input->post("nama_studio");
        $tarif = $this->input->post("tarif");
        $deskripsi = $this->input->post("deskripsi");
		$data['session'] = $this->session->userdata();
		$where = array('id_studio' => $id_studio);
		$data['studio'] = $this->md_studio->edit_data($where,'studio')->result();
		$data['studio'] = $this->md_studio->show_data($where,'studio')->result();
		$this->load->view('studio/v_edit_studio',$data);
       
	}
    public function delete($id_studio)
	{
        $where = array('id_studio' => $id_studio);
		$this->md_studio->delete_data($where,'studio');
        redirect('admin');
    }
}
