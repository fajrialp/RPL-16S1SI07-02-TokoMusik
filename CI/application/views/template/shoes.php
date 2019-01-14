
<div class="shoes"> 
		<div class="container"> 
			<div class="product-one">
				<?php foreach ($data as $d) {?>
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">							
							<a href="<?php echo base_url()."index.php/welcome/single/". $d['id']; ?>">

								<img src="<?php echo base_url('gambar/'.$d['gambar']) ?>" widht="100%" height="150px" alt="" />

								<div class="mask">
									<span>Quick View</span>
								</div>
							</a>
						<h4><?php echo $d['nama_produk']; ?></h4>

						<p><a class="item_add" href="<?php echo base_url()."index.php/welcome/addCart/". $d['id']; ?>"><i></i> <span class=" item_price">Rp.<?php echo $d['harga']; ?></span></a></p>
					
					</div>
					<br>
				</div>
				
				
			<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">
				
				
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>