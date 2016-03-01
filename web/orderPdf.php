
<div class="wrap"> 
<div class="container">  
<div class="site-index">
   <div class="jumbotron">
	<form id="calculation_form" method="POST" action="index.php?r=site%2Fsamplepdf" target="_blank">	
		 <div class="total_price" style="width:100%;float:left;">
		 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value"><b><?= !empty($_POST["price_input"])?$_POST["price_input"]:"\"0\"" ?> </b></span> беларусских рублей.</div>
		 	<div class="total_weight ">Общий вес, брутто: <span class="result" id="total_weight"><b><?= (!empty($_POST["weight_input"]))?$_POST["weight_input"]:"\"0\"" ?> </b></span> кг.  </div>
		 	
		 		<div class="submit_form">
			 	    
		 		Оплата через любой <a href="https://www.alfabank.by/" target="_blank"><u>филиал «Альфа-Банк»</u></a> или на складе <b>GEKKOSTONE</b>)<br></span>
				</div>
		 </div>
		<div class="cart_index">
		<?php foreach ($cartItems as $cartItem) {?>
				<div class="cart_position">
					<div class="product_miniature">
						<img src="<?= $cartItem->product_color_image?>">
						<div class="overlay"><?= $cartItem->getProductPrice()?> руб/м</div>
					</div>
					<div class="calculation">
						<hr id="line" >
						<!-- <form class="calculator" id="calc<?= $cartItem->product_color_id ?>"> -->
						<div id="calc_left_half">
										<span id="span_product"><b><span id="product_subcategory_name_<?= $cartItem->product_color_id ?>"><?=mb_strtoupper($cartItem->product_subcategory_name)?></span> - «<?= $cartItem->product_color_name?>»</b></span>
										<br>
										<input type="number" name="regular_input[<?= $cartItem->product_color_id ?>]" step="0.01" class="calculation_input" id="regular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()" value="<?=$_POST["regular_input"][$cartItem->product_color_id] ?>"> м², общая площадь облицовки;
										<br>
										<input type="number" name="angular_input[<?= $cartItem->product_color_id ?>]" step="0.01" class="calculation_input" id="angular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()" value="<?=$_POST["angular_input"][$cartItem->product_color_id] ?>"> м.пог., общая высота углов для облицовки;
										<br>
										<input type="checkbox" name="reduce_squere[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="reduce_square_<?= $cartItem->product_color_id ?>"  onchange="order()" <?= isset($_POST['reduce_squere'][$cartItem->product_color_id])?"checked=\"checked\"":"" ?> > вычесть площадь, занимаемую угловыми элементами;<br>
										<input type="checkbox" name="add_five_percent[<?= $cartItem->product_color_id ?>]"class="calculation_checkbox" id="add_five_percent_<?= $cartItem->product_color_id?>"  onchange="order();showWarning()" <?= isset($_POST['add_five_percent'][$cartItem->product_color_id])?"checked=\"checked\"":"" ?>> с учетом 5 % отходов камня на подрезку;<br>
										<input type="checkbox" name="seamless[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="seamless_<?= $cartItem->product_color_id?>"  onchange="order()" <?= isset($_POST['seamless'][$cartItem->product_color_id])?"checked=\"checked\"":"" ?> > бесшовный монтаж (расчет без учета швов);<br> 
						</div>
						<div id="calc_right_half">
										<p>Для облицовки вам необходимо:<br>
										<span class="result" id="regular_result_<?= $cartItem->product_color_id ?>"><b><?= (!empty($_POST['regular_packages_input'][$cartItem->product_color_id]))?$_POST['regular_packages_input'][$cartItem->product_color_id]:"\"0\"" ?></b></span> усл.м    рядовой плитки (расчет кратно упаковкам);<br>
										<span class="result" id="angular_result_<?= $cartItem->product_color_id ?>"><b><?= (!empty($_POST['angular_packages_input'][$cartItem->product_color_id]))?$_POST['angular_packages_input'][$cartItem->product_color_id]:"\"0\"" ?></b></span>  усл.м.пог. угловой плитки (расчет поштучно).<br>
										<span class="five_percent_warninig" id="five_percent_warning_<?= $cartItem->product_color_id ?>"><?= isset($_POST['add_five_percent'][$cartItem->product_color_id])?"<i><b>Внимание!</b></i> Количество камня рассчитано с учетом шва при укладке 12 мм.":""?><br></span>
										Стоимость:<span class="color_result result" id="result_color_<?= $cartItem->product_color_id ?>"> <b><?= (!empty($_POST['price_color'][$cartItem->product_color_id]))?$_POST['price_color'][$cartItem->product_color_id]:"\"0\"" ?></b></span>  беларусских рублей.<br>
										Масса, брутто: <span class="weight_result result" id="result_weight_<?= $cartItem->product_color_id ?>"><b><?= (!empty($_POST['weight_color'][$cartItem->product_color_id]))?$_POST['weight_color'][$cartItem->product_color_id]:"\"0\"" ?> </b></span> кг.</p>

						</div>	

					</div>
				</div>

			<?php } ?>
		</div>
	</form>
	</div>
</div>
</div>
</div>