<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Orm\User;

class Login extends CI_Controller {

	
	public function index()
	{
		$login_salah = '';
		
		if($this->session->has_userdata('username')){
			redirect('backend/Dashboard');
		}

		if($this->input->post()){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = \Orm\User::where(["username" => $username])->first();
		if(empty($user)){
			$login_salah = 'User tidak ditemukan';
		} else {
			if($password == $user->password) {
				$userdata = ['username' => $user->username];
				$this->session->set_userdata($userdata);
				redirect('backend/Dashboard');
			} else {
				$login_salah = 'Kombinasi password & username salah';
			}
		}
	}
		view('Login', ['login_salah' => $login_salah]);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
