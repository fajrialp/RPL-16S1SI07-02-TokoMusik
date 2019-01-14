<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dt_Master_Barang extends CI_Controller {


	public function DataBarang()
	{
			//$kategori = $this->model_DM_Barang->GetKategori();
			//$merk = $this->model_DM_Barang->GetMerk();
		//$id = $this->model_DM_Barang->GetProduk();
		$data = $this->model_DM_Barang->JoinProduk();
		$pro = array('data' => $data);
			

		$this->load->view('admin/contents/data_master/Barang',$pro);

	}



	public function TambahBarang()
	{
		//
		$kategori = $this->model_DM_Barang->GetKategori();

		$merk = $this->model_DM_Barang->GetMerk();

$this->load->view('admin/contents/data_master/Barang/TambahBarang', array('merk' => $merk , 'otong' => $kategori));



		//tambah data barang

	}
	public function do_insert()
	{
 				$config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|JPG';
                $config['max_size']             = '10000';
                $config['max_width']            = '4288';
                $config['max_height']           = '4000';
                $config['file_name']           = 'Gambar';
                   $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar'))
                {        
                	$gbr=$this->upload->data();
                	$id_merek = $_POST['select1'];
					$id_kategori = $_POST['select2'];
					$data = array(
						'id' => $this->input->post('id'),
						'nama_produk' => $this->input->post('nama_produk'),
						'harga' => $this->input->post('harga'),
						'stok' => $this->input->post('stok'),
						'gambar' => $gbr['file_name'],
						'id_merek' => $id_merek,
						'id_kategori' => $id_kategori
						
					);
					$res = $this->model_DM_Barang->insert('produk',$data);
					if ($res>=1) {
						echo "data berhasil di masukan";
						redirect('Dt_Master_Barang/DataBarang');
					}
                }
                
	}
			

	// 
	




		

	public function do_delete($id){

		$where = array('id' => $id);
		$res = $this->model_DataMaster->deleteData('produk', $where);
		if ($res >= 1) {
			echo "berhasil";
			redirect('Dt_Master_Barang/DataBarang');
		}
	}

	public function EditData($id)
	{
		$produk = $this->model_DM_Barang->GetProduk("where id = '$id'");
		$data = array(
			"id" => $produk[0] ['id'],
			"nama_produk" => $produk[0] ['nama_produk'],
			"harga" => $produk[0] ['harga'],
			"stok" => $produk[0] ['stok'],
			"id_merek" => $produk[0] ['id_merek'],
			"id_kategori" => $produk[0] ['id_kategori']
			
		);
		
		$this->load->view('admin/contents/data_master/Barang/EditBarang', $data);

		
	}


	public function do_update()
	{
		$id = $this->input->post('id');
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];
		$id_merek = $_POST['id_merek'];
		$id_kategori = $_POST['select2'];
		

		$data = array(
			
			'nama_produk' => $nama_produk,
			'harga' => $harga,
			'stok' => $stok,
			'id_merek' => $id_merek,
			'id_kategori' => $id_kategori
			
		);
		$where = array('id' => $id);

		$res = $this->model_DataMaster->update('produk',$data, $where);
		if ($res>=1) {
			
			redirect('Dt_Master_Barang/DataBarang');

		}
		
	}
}