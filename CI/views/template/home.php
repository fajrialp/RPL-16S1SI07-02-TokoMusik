

<!DOCTYPE html>
<html>
<?php $this->load->view('template/head') ?>
<body> 
	<!--top-header-->
	<?php $this->load->view('template/header') ?>
<!--top-header-->
	<!--bottom-header-->
	<?php $this->load->view('template/header-bottom') ?>

	<!--bottom-header-->
	<!--banner-starts-->

	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner-1"></div>
				</li>
				<li>
					<div class="banner-2"></div>
				</li>
				<li>
					<div class="banner-3"></div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
<?php $this->load->view('template/slider') ?>

	<?php $this->load->view('template/shoes') ?>
	<!--end-shoes-->
	<!--start-abt-shoe-->
	<?php $this->load->view('template/footer') ?>

	<!--end-footer-->
	<!--end-footer-text-->
	
<?php $this->load->view('template/footer-text') ?>
	<!--end-footer-text-->	
</body>
</html>