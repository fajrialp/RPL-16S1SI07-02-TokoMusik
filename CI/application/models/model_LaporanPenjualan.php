<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_LaporanPenjualan extends CI_Model{

public function GetPenjualan($where = "") {
	$penjualan = $this->db->query('select * from penjualan '. $where);

	return $penjualan->result_array();
	}	
}