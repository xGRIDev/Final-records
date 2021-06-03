<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
		{
			parent::__construct();
			$this->home = base_url();
			$this->profile = base_url('profile');
			$this->load->helper(array('form', 'url'));
			$this->load->model("m_user");
			$this->load->model('md_booking');
			$this->load->model('md_studio');
			$this->load->model("PostModel");
			if($this->session->userdata("login") == null)
			{
				redirect(base_url('login'));
			}
			$this->user = $this->m_user->findOne("id", $this->session->userdata("login"));
		
	}
	

	public function index()
	{
		$data = [
			"user" => $this->user->username,
			"posts" => $this->PostModel->findAll(),
			"studio" => $this->md_studio->show_data()->result(),
			"title" => 'Home',
		];
		$this->load->view('user/home', $data);
	}

	public function user_profile()
	{
		
		
		$data = [
			"user" => $this->user,
			"posts" => $this->PostModel->findAllByUser($this->user->id),
			"error" => "",
			"title" => 'title',
		];
//		$this->load->model('PostModel');
		$this->load->view('user/user_profile',$data);
	}

	private function _upload_avatar()
	{
		$config['upload_path']          = './assets/user/avatar';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']             = uniqid();
                $config['overwrite']            = true;
                $config['max_size']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('new_avatar'))
                {
                        echo "
						<script>
							alert('Terjadi Kesalahan Upload');
							document.location.href = \"$this->profile\";
						</script>";die();
						
                }
                else
                {
					if($this->user->avatar != null && file_exists("./avatar/" . $this->user->avatar)) {
						unlink("./avatar/" . $this->user->avatar);
					}
					return $this->upload->data("file_name");
                }
	}

	public function update_profile()
	{
		$id = $this->input->post("id");
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $avatar = $this->input->post("old_avatar");

		if (!empty($_FILES["new_avatar"]["name"])) {
			$avatar = $this->_upload_avatar();
		}

		$data = [
			"username" => $username,
			"email" => $email,
			"avatar" => $avatar
		];
        
        if($this->m_user->update($data, $id) == 1)
		{
            echo"
            <script>
                alert('Profile berhasil diubah');
                document.location.href = \"$this->profile\";
            </script>";
        }
        else {
            echo"
            <script>
                alert('Profile gagal diubah');
                document.location.href = \"$this->profile\";
            </script>";
        }
	}

	public function booking_save()
	{
		$username= $this->input->post('username');
		$tarif= $this->input->post('tarif');
		$deskripsi= $this->input->post('deskripsi');
 
		$data = array(
			'username' => $username,
			'tarif' => $tarif,
			'deskripsi' => $deskripsi,
			);
		$this->user->save_data($data,'username');

		redirect('user/home');
	}

	public function delete_post($id)
	{
		if($this->PostModel->delete($id) != 1)
		{
			echo 
				"<script>alert('Post Has been Delete');
				document.location.href = \"$this->profile\";
				</script>";
		}
		echo 
			"
			<script>
				alert('Post Delete Successfully');
				document.location.href = \"$this->profile\";
			</script>
			";
	}
}
