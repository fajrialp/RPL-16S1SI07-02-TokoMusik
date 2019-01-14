<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
//register
	
	public function register()
	{
		$this->load->view('register');
	}

	//tampilkan data karyawan
	public function tampil_karyawan()
	{
		$data = $this->model_->view('register');
	}
	

	// fungsi crud insert
	public function do_insert()
	{
		$id = $_POST['id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		

		$data = array(
			'id' => $id,
			'nama_karyawan' => $nama_karyawan,
			'username' => $username,
			'email' => $email,
			'password' => $password
			
			
		);
		$res = $this->model_crud->insert('karyawan',$data);
		if ($res>=1) {
			echo "data berhasil di masukan";
			redirect('login');

		}
		else  {
			echo "gagal di masukan ";
		}
	}


	

}