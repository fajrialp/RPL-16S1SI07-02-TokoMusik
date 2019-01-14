<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DT_Master_Merek extends CI_Controller {
// data master 
		//data kategori
	

	public function DataMerk()
	{
		$id = $this->model_DM_Merek->GetMerk();
		$this->load->view('admin/contents/data_master/Merek', array('id' => $id));	
	}

	public function TambahMerk()
	{
		
		$this->load->view('admin/contents/data_master/Merek/TambahMerek');

	}


	public function do_insert()
	{
		$id_merek = $_PdOST['id_merek'];
		$nama_merek = $_POST['nama_merek'];
		
		$data = array(
			'id_merek' => $id_merek,
			'nama_merek' => $nama_merek
			
		);
		$res = $this->model_DM_Merek->insert('produk_merek',$data);
		if ($res>=1) {
			echo "data berhasil di masukan";
			redirect('Dt_Master_Merek/DataMerk');

		}
	}
		

	public function do_delete($id_merek){

		$where = array('id' => $id);
		$res = $this->model_DM_Merek->deleteData('produk_merek', $where);
		if ($res >= 1) {
			echo "berhasil";
			redirect('Dt_Master_Merek/DataMerk');
		}
	}

	public function EditData($id_merek)
	{
		$merk = $this->model_DM_Merek->GetMerk("where id_merek = '$id_merek'");
		$data = array(
			"id_merek" => $merk[0] ['id_merek'],
			"nama_merek" => $merk[0] ['nama_merek']
		);
			
		
		$this->load->view('admin/contents/data_master/Merek/EditMerek', $data);
		
	}


	public function do_update()
	{
		$id_merek = $_POST['id_merek'];
		$nama_merek = $_POST['nama_merek'];
	

		$data = array(
			
			'nama_merek' => $nama_merek
			
			
		);
		$where = array('id_merek' => $id_merek);

		$res = $this->model_DM_Merek->update('produk_merek',$data, $where);
		if ($res>=1) {
			
			redirect('Dt_Master_Merek/DataMerk');

		}
		
	}
}
