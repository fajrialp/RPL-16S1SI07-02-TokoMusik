<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('cart');
	}
	// admin/backend
	public function indexadmin()
	{
		$data['contents'] = 'admin/main';
		$this->load->view('admin/home',$data);
	}
	



	//frontend 
	public function index()
	{
		$data = $this->model_DM_Barang->Getproduk();
		$this->load->view('template/home', array('data' => $data));

	}


	  public function single()
	{
		$data['contents'] = 'template/contents/single';
		$this->load->view('template/contents/single',$data);
	} 

	public function addCart($id){


		$ambilData = $this->Keranjang->GetCart('produk', $id);
	

		$data = array(
        'id'      => $ambilData->id,
        'qty'     => '1',
        'price'   => $ambilData->harga,
        'image'   => $ambilData->gambar,
        'name'    => $ambilData->nama_produk,
       
			);

		$this->cart->insert($data);
		//$this->load->view('template/contents/checkout/checkout');
		redirect('welcome/checkout');
	}

	public function hapus($rowid){

		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		//$this->load->view('template/contents/checkout/checkout');
		redirect('welcome/checkout');
	}

	public function update(){

		$i = 1;
		foreach ($this->cart->contents() as $produk) {
			$this->cart->update(array('rowid' => $produk['rowid'], 'qty' => $_POST['qty'. $i]));
			$i++;
		}
		//$this->load->view('template/contents/checkout/checkout');
		redirect('welcome/checkout');
	}




	public function tampil(){

		$tampil = $this->cart->contents();
		echo '<pre>';
		print_r($tampil);
		//echo '<pre>';

	}









	  public function checkout()
	{
		$data['contents'] = 'template/contents/checkout';
		$this->load->view('template/contents/checkout',$data);
	}

}
