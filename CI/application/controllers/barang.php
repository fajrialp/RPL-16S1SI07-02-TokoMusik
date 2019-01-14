<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_Master_Barang extends CI_Controller {
// data master 
		//data karyawan
	

	public function DataBarang()
	{
			$id = $this->model_DM_Barang->GetBarang();
			

		$this->load->view('admin/contents/data_master/Barang', array('id' => $id));

	}
}