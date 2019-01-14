<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_DM_Barang extends CI_Model{

public function GetProduk($where = "") {
	$produk = $this->db->query('select * from produk '. $where);
	return $produk->result_array();
	}	
	public function insert($tabelName, $data) {
	$res = $this->db->insert($tabelName, $data);
	return $res;
	}

	public function update($tabelName, $data, $where) {
	$res = $this->db->update($tabelName, $data, $where);
	return $res;
	}

	public function deleteData($tabelName, $where) {
		$res = $this->db->delete($tabelName, $where);
		return $res;
	}
	public function tambah_barang(){
		$res = $this->db->delete($tabelName, $where);
		return $res;
	}

	// tambah barang = foregth key
	public function GetMerk($where = "") {
	$merk = $this->db->query('select * from produk_merek '

		. $where);
	return $merk->result_array();
	}	

	public function GetKategori($where = "") {
	$kategori = $this->db->query('select * from produk_kategori '. $where);
	return $kategori->result_array();
	}


	public function GetCart($table_name, $id) {
	$this->db->where('id' ,$id);
	$AmbilData = $this->db->get($table_name);
	return $AmbilData->row();
	}	

	public function JoinProduk(){
		$data = $this->db->query('select p.id,p.nama_produk,p.harga,p.stok,p.gambar,pm.nama_merek,pk.nama_kategori 
			from produk p 
			join produk_kategori pk on pk.id_kategori = p.id_kategori 
			join produk_merek pm on pm.id_merek = p.id_merek');
		return $data->result_array();
	}

}