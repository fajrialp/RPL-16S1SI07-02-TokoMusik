<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_crud extends CI_Model{

public function Getkaryawan() {
	$data = $this->db->query('select * from karyawan');

	return $data->result_array();
}	

public function insert($tabelName, $data) {
	$res = $this->db->insert($tabelName, $data);
	return $res;
}
public function update($tabelName, $data, $where) {
	$res = $this->db->update($tabelName, $data, $where);
return $res;
}
public function delete($tabelName, $where) {
	$res = $this->db->delete($tabelName, $where);
	return $res;
}

}
