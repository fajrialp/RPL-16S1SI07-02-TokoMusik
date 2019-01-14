<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
// data master 
		//data karyawan
	

	public function DataPenjualan()
	{
			
		
			$penjualan = $this->model_Penjualan->GetPenjualan();
			

		$this->load->view('admin/contents/Penjualan', array('penjualan' => $penjualan));

	}
}