<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
	public function login()
	{
		$data['title'] = "Final - Records || Sign - In";
		$this->load->view('auth/login', $data);
	}

    public function register()
    {
		$data['title'] = "Final - Records || Sign - Up";
        $this->load->view('auth/register', $data);
    }

    public function post_register()
    {
        $username = $this->input->post("username");
		$email = $this->input->post("email");
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
		
		$user = $this->m_user->findOne("username", $username);
		if($user != null)
		{
			echo"
 			<script>
 				alert('Username telah terdaftar, pilih username lain');
 				document.location.href = 'register';
 			</script>";
		}
		else
		{
			$data = [
				"role" => "member",
				"username" => $username,
				"email" => $email,
				"password" => $password
			];
			if($this->m_user->create($data) == 1)
			{
				echo"
 				<script>
 					alert('Register berhasil');
 					document.location.href = 'login';
 				</script>";
			}
			else{
				echo"
 				<script>
 					alert('Register gagal');
 					document.location.href = 'register';
 				</script>";
			}
		}
    }

    public function post_login()
    {
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$user = $this->m_user->findOne("username", $username);
		if($user != null)
		{
			if(password_verify($password, $user->password))
			{
				$this->session->set_userdata(["login" => $user->id]);
				if($user->role == "admin")
				{
					$this->session->set_userdata(["admin" => true]);
					redirect(base_url('admin'));
				}
				else
				{
					redirect(base_url('/'));
				}
			}
			else
			{
				echo"
 				<script>
 					alert('Password salah');
 					document.location.href = 'login';
 				</script>";
			}
		}
		else{
			echo"
 			<script>
 				alert('Username belum terdaftar, silahkan register');
 				document.location.href = 'login';
 			</script>";
		}
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('/'));
    }
}
