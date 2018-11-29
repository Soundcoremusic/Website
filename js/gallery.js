



for (int i =0; i++; i<

document.write("																				\
	<a href='<?php echo('../Rentals/RentalsItem.php?item='. $reference["+i+"][0]); ?>' >			\
	<div class="item">																			\
		<img class="itemImg" src='<?php echo( '../' . json_decode($reference[0][5])[0]); ?>'>	\
		<p class="itemDesc" >
			<?php echo(  $reference[0][1]); ?>
		</p>	
	</div>
	</a>

																			\
");