<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster extends CI_Controller {
// data master 
		//data karyawan
	

	public function Datakaryawan()
	{
			$id = $this->model_DataMaster->Getkaryawan();
		$this->load->view('admin/contents/data_master/karyawan', array('id' => $id));	
	}



	public function Tambahkaryawan()
	{
		//echo "tambah data karyawan";
		$this->load->view('admin/contents/data_master/karyawan/TambahKaryawan');

	}
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
		$res = $this->model_DataMaster->insert('karyawan',$data);
		if ($res>=1) {
			echo "data berhasil di masukan";
			redirect('DataMaster/Datakaryawan');

		}
	}
		

	public function do_delete($id){

		$where = array('id' => $id);
		$res = $this->model_DataMaster->deleteData('karyawan', $where);
		if ($res >= 1) {
			echo "berhasil";
			redirect('DataMaster/Datakaryawan');
		}
	}

	public function EditData($id)
	{
		$karyawan = $this->model_DataMaster->Getkaryawan("where id = '$id'");
		$data = array(
			"id" => $karyawan[0] ['id'],
			"nama_karyawan" => $karyawan[0] ['nama_karyawan'],
			"username" => $karyawan[0] ['username'],
			"email" => $karyawan[0] ['email'],
			"password" => $karyawan[0] ['password']
			
			
		);
		
		$this->load->view('admin/contents/data_master/karyawan/EditKaryawan', $data);

		
	}


	public function do_update()
	{
		$id = $_POST['id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		

		$data = array(
			
			'nama_karyawan' => $nama_karyawan,
			'username' => $username,
			'email' => $email,
			'password' => $password
			
			
		);
		$where = array('id' => $id);

		$res = $this->model_DataMaster->update('karyawan',$data, $where);
		if ($res>=1) {
			
			redirect('DataMaster/Datakaryawan');

		}
		
	}


	//data Ka

}