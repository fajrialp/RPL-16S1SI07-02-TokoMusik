<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">

			 <h3>My Shopping Bag ()</h3>
		
				
			<?php echo form_open('welcome/update'); ?>

<table cellpadding="20" cellspacing="5" style="width:90%" border="3">



<tr>
        <th style="text-align:center;">option</th>
        <th style="text-align:center;">QTY</th>
        <th style="text-align:center;">Item Description</th>
        <th style="text-align:center;">Gambar</th>
        <th style="text-align:center;">Item Price</th>
        <th style="text-align:center;">Sub-Total</th>
</tr>
</ul>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
        	<td><strong><?php echo anchor('welcome/hapus/'.$items['rowid'],'<center>X<center>' ); ?></td>
            <td><strong><center><?php echo form_input(array('name' => 'qty'. $i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '9')); ?></center></td>
            <td><br><center>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>
                        </center>
                </td>
                <td ><center><?php echo $this->cart->format_number($items['image']); ?></center></td><br>
                <td style="text-align:center;"><center><?php echo $this->cart->format_number($items['price']); ?></center></td>
                <td style="text-align:center;"><strong>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>

        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="4"> </td>
       
        <td class="right"><strong style="">Total</strong></td>
        <td class="right" align=""><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
<br>
<p><?php echo form_submit('', 'Update your Cart'); ?></p>

<button><strong><?php echo anchor('welcome/index','lanjut belanja'); ?></strong></button>
				</ul>
			</div>
			</div>  
		 </div>
		</div>
	</div>