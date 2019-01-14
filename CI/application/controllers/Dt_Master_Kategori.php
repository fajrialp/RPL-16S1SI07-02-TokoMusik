<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DT_Master_Kategori extends CI_Controller {
// data master 
		//data kategori
	

	public function DataKategori()
	{
		$id = $this->model_DM_Kategori->Getkategori();
		$this->load->view('admin/contents/data_master/kategori', array('id' => $id));	
	}

	public function TambahKategori()
	{
		
		$this->load->view('admin/contents/data_master/kategori/TambahKategori');

	}


	public function do_insert()
	{
		$id_kategori = $_POST['id_kategori'];
		$nama_kategori = $_POST['nama_kategori'];
		
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $nama_kategori
			
		);
		$res = $this->model_DM_Kategori->insert('produk_kategori',$data);
		if ($res>=1) {
			echo "data berhasil di masukan";
			redirect('Dt_Master_Kategori/DataKategori');

		}
	}
		

	public function do_delete($id_kategori){

		$where = array('id_kategori' => $id_kategori);
		$res = $this->model_DataMaster->deleteData('produk_kategori', $where);
		if ($res >= 1) {
			echo "berhasil";
			redirect('Dt_Master_Kategori/DataKategori');
		}
	}

	public function EditData($id_kategori)
	{
		$kategori = $this->model_DM_Kategori->Getkategori("where id_kategori = '$id_kategori'");
		$data = array(
			"id_kategori" => $kategori[0] ['id_kategori'],
			"nama_kategori" => $kategori[0] ['nama_kategori']
		);
			
		
		$this->load->view('admin/contents/data_master/kategori/EditKategori', $data);
		
	}


	public function do_update()
	{
		$id_kategori = $_POST['id_kategori'];
		$nama_kategori = $_POST['nama_kategori'];
	

		$data = array(
			
			'nama_kategori' => $nama_kategori
			
			
		);
		$where = array('id_kategori' => $id_kategori);

		$res = $this->model_DM_Kategori->update('produk_kategori',$data, $where);
		if ($res>=1) {
			
			redirect('Dt_Master_Kategori/DataKategori');

		}
		
	}
}
