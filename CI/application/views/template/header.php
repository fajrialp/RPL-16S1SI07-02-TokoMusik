<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<a href=""><img src="<?php echo base_url('assets/web/front/images') ?>/logo-4.png" alt="<?php echo site_url() ?>/welcome/checkout" /></a>
			</div>



			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
					<div class="login">
					<a href="<?php echo site_url('login/index') ?>">
						
						<input type="submit" value="login for admin" /> 
						<a href="<?php echo site_url('welcome/index') ?>">    
						<input type="submit" value="register" />
					
					</div>											
							<div class="total">
							<span class="" ></span>
							
							 (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

							<a href="<?php echo site_url() ?>/welcome/checkout">
							<img src="<?php echo base_url('assets/web/front/images') ?>/cart-1.png" alt="" />
							</a>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>