<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_DM_Merek extends CI_Model{

public function GetMerk($where = "") {
	$merk = $this->db->query('select * from produk_merek '. $where);

	return $merk->result_array();
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

}