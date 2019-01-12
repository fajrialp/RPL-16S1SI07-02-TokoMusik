					$id = $_POST['id'];
					$nama_produk = $_POST['nama_produk'];
					$harga = $_POST['harga'];
					$stok = $_POST['stok'];
					$id_merek = $_POST['select1'];
					$id_kategori = $_POST['select2'];
					

					$data = array(
						'id' => $id,
						'nama_produk' => $nama_produk,
						'harga' => $harga,
						'stok' => $stok,
						'gambar' => $gambar,
						'id_merek' => $id_merek,
						'id_kategori' => $id_kategori
						
					);
					$res = $this->model_DM_Barang->insert('produk',$data);
					if ($res>=1) {
						echo "data berhasil di masukan";
						redirect('Dt_Master_Barang/DataBarang');

					}



 <?php echo form_open_multipart('Dt_Master_Barang/do_insert');?>
         <form method="POST" action="<?php echo base_url("index.php/Dt_Master_Barang/do_insert"); ?>">       
        

                <input type="file" name="gambar" size="20" />

                <br /><br />

                <input type="submit" value="upload" />
                  <?php echo form_close(); ?>



					<?= base_url(); ?> gambar/<?= $d->gambar; ?>