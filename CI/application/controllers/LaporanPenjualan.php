<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanPenjualan extends CI_Controller {
// data master 
		//data karyawan
	

	public function dataPenjualan()
	{
			$id = $this->model_LaporanPenjualan->GetPenjualan();
		$this->load->view('admin/contents/Laporan', array('id' => $id));	
	}
}
