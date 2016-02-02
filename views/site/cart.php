<?php
use yii\helpers\Html;
mb_internal_encoding("UTF-8");

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
$this->registerJsFile('@web/js/cart.js');
?>

<div class="site-index">
   <div class="jumbotron">

	 <div class="my_gallery" style="width:20%;float:left;">
	 	<div class="page-header" style="float:left;">МОЯ ГАЛЛЕРЕЯ <span id="<?php echo (Yii::$app->cart->getIsEmpty()?"empty_":"") ?>cart"><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></div>
	 </div>
	 <div class="total_price" style="width:80%;float:left;">
	 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value">0</span> беларусских рублей.</div>
	 	<div class="total_weight ">Общий вес, брутто: <span class="result" id="total_weight">0</span> кг.  </div>
	 	<div class="submit_form">
	 		<a id="remove_from_cart" class="btn btn-success btn-send cart-button" href="index.php?r=site%2Fsamplepdf" target="_blank"><b>ОФОРМИТЬ</b></a>  расцветку из <b>ГАЛЕРЕИ</b>
			<?php echo Html::submitButton("ОФОРМИТЬ",['class'=>'btn btn-success btn-send cart-button']); ?>
			<span id="alpha_bank">платежную квитанцию (оплата через любой <a href="https://www.alfabank.by/" target="_blank"><u>филиал «Альфа-Банк»</u></a> или на складе <b>GEKKOSTONE</b>)<br><span id="warning">перед оформлением внимательно проверьте заявку !</span></span>
		</div>
		
	 </div>
	 <div class="cart_index">
	<?php foreach ($cartItems as $cartItem) {?>
			<div class="cart_position">
				<div class="product_miniature">
					<img src="<?= $cartItem->product_color_image?>">
					<div class="overlay">226,000 руб/м</div>
				</div>
				<div class="calculation">
					<hr id="line" >
					<form class="calculator" id="calc<?= $cartItem->product_color_id ?>">
							<div id="calc_left_half">
								<span id="span_product"><span id="product_subcategory_name_<?= $cartItem->product_color_id ?>"><?=mb_strtoupper($cartItem->product_subcategory_name)?></span> - «<?= $cartItem->product_color_name?>»</span>
								<br>
								<input type="number" step="0.01" class="calculation_input" id="regular_input_<?= $cartItem->product_color_id ?>" name="regular_input" value="0" onkeyup="order()" onchange="order()"> м² ,  введите общую площадь облицовки;
								<br>
								<input type="number" step="0.01" class="calculation_input" id="angular_input_<?= $cartItem->product_color_id ?>" name="angular_input" value="0" onkeyup="order()" onchange="order()"> м.пог., введите общую высоту углов для облицовки;
								<br>
								<input type="checkbox" class="calculation_checkbox" id="reduce_square_<?= $cartItem->product_color_id ?>"  onchange="order()"> вычесть площадь, занимаемую угловыми элементами;<br>
								<input type="checkbox" class="calculation_checkbox" id="add_five_percent_<?= $cartItem->product_color_id?>"  onchange="order();showWarning()"> с учетом 5 % отходов камня на подрезку;<br>
								<input type="checkbox" class="calculation_checkbox" id="seamless_<?= $cartItem->product_color_id?>"  onchange="order()"> бесшовный монтаж (расчет без учета швов);<br> 
							</div>
							<div id="calc_right_half">
								<a id="remove_from_cart" class="btn btn-success btn-send cart-button" href="index.php?r=productcolor/remove-from-cart&id=<?= $cartItem->product_color_id ?>"><b>Удалить</b></a>  расцветку из <b>ГАЛЕРЕИ</b>
								<p>Для облицовки вам необходимо:<br>
								<span class="result" id="regular_result_<?= $cartItem->product_color_id ?>">0</span> усл.м    рядовой плитки (расчет кратно упаковкам);<br>
								<span class="result" id="angular_result_<?= $cartItem->product_color_id ?>">0</span>  усл.м.пог. угловой плитки (расчет поштучно).<br>
								<span class="five_percent_warninig" id="five_percent_warning_<?= $cartItem->product_color_id ?>"><br></span>
								Стоимость: <span class="color_result result" id="result_color_<?= $cartItem->product_color_id ?>">0</span>  беларусских рублей.<br>
								Масса, брутто: <span class="weight_result result" id="result_weight_<?= $cartItem->product_color_id ?>">0</span> кг.</p>

							</div>
					</form>


					
				</div>
			</div>


		<?php } ?>
	</div>

	</div>
</div>


