<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">

			 <h3>My Shopping Bag ()</h3>
		
				
			<?php echo form_open('welcome/update'); ?>

<div class="in-check" >
    <ul class="unit">




      <li><span>option</span></li>
                    <li><span>QTY</span></li>       
                    <li><span>Item </span></li>
                    
                    <li><span>Item Price</span> </li>
                    <li><span>Sub-Total</span> </li>
                    <div class="clearfix"> </div>

</ul>
<ul class="cart-header2"><font size="3">
<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        
        	<li><br><strong><?php echo anchor('welcome/hapus/'.$items['rowid'],'X' ); ?></li>
            <li><br><strong><?php echo form_input(array('name' => 'qty'. $i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '9')); ?></li>
            <li><br>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>
                        
                </li>
                
                <li><br><?php echo $this->cart->format_number($items['price']); ?></center></li>
                <li><br>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></li>
                    <div class="clearfix"> </div>
                    <br>

        

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td > </td><br>
       
        <td class="right" align="center"><font size="5" color="blue"> Total : </font><br></td><td class="right" align="center"><font size="5" color="blue">----------------------</font></td><br>
        <td><strong><font size="5" color="blue">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></font></td>
</tr>


<br><br><br><br>
<p><?php echo form_submit('', 'Update your Cart'); ?>

<button><strong><?php echo anchor('welcome/index','lanjut belanja'); ?></strong></button>
				</ul>
			</div>
			</div>  
		 </div>
		</div>
	</div>