<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {


	public function index()
	{
	//	$data['contents'] = 'admin/main';
		$this->load->view('login3');
	}

	public function cek_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->ambillogin($username,$password);
		
	}
}