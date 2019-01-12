<?php
//membuat fungsi keranjang
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Model{

public function GetProduk($where = "") {
	$produk = $this->db->query('select * from produk '. $where);

	return $produk->result_array();
	}	

public function GetCart($table_name, $id) {
	$this->db->where('id' ,$id);
	$ambilData = $this->db->get($table_name);
	return $ambilData->row();
	}

		
}