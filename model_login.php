<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class model_login extends CI_Model{

public function ambillogin($username,$password){
  $query = $this->db->get_where('karyawan',array('username'=>$username,'password'=> ($password)));
 if($query->num_rows()>0){
 	foreach ($query->result() as $row) {
 		$sess = array('username' => $row->username,
 						'password' => $row->password );
 	}
 	$this->session->get_userdata($sess);
 	redirect('welcome/indexadmin');
		 }
		 else{
		 
		 	$this->session->Set_flashdata('msg','username atau password anda salah');
		 	$this->load->view('login3');

		 }

 
	}


}