<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
?>

<style>

</style>
<div class="site-index">
   <div class="jumbotron">

	 <div class="my_gallery" style="width:20%;float:left;">
	 	<div class="page-header" style="float:left;">МОЯ ГАЛЛЕРЕЯ <span id="<?php echo (Yii::$app->cart->getIsEmpty()?"empty_":"") ?>cart"><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></div>
	 </div>
	 <div class="total_price" style="width:80%;float:left;">
	 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value">11,228,000</span> беларусских рублей.</div>
	 	<div class="total_weight">Общий вес, брутто:  1447 кг.  </div>
	 	<div class="submit_form">
			<?php echo Html::submitButton("ОФОРМИТЬ",['class'=>'btn btn-success btn-send cart-button']); ?>
			<span id="alpha_bank">платежную квитанцию (оплата через любой <a href="https://www.alfabank.by/" target="_blank"><u>филиал «Альфа-Банк»</u></a> или на складе <b>GEKKOSTONE</b>)<br><span id="warning">перед оформлением внимательно проверьте заявку !</span></span>
		</div>
		
	 </div>
	<?php foreach ($cartItems as $cartItem) {?>
			<div class="cart_position">
				<div class="product_miniature">
					<img src="<?= $cartItem->product_color_image?>">
					<div class="overlay">226,000 руб/м</div>
				</div>
				<div class="calculation">
					<hr id="line" >
					<div id="calc_left_half">
						<span id="span_product">АНТИЧНЫЙ КАМЕНЬ - «Венецианский обожженый»</span>
						<br>
						<input type="text" id="calculation_input" name="search"> м ,  введите общую площадь облицовки;
						<br>
						<input type="text" id="calculation_input" name="search"> м.пог., введите общую высоту углов для облицовки;
						<br>
						<input type="checkbox" name="vehicle" value="Bike"> вычесть площадь, занимаемую угловыми элементами;<br>
						<input type="checkbox" name="vehicle" value="Car" checked> с учетом 5 % отходов камня на подрезку;<br>
						<input type="checkbox" name="vehicle" value="Car" checked> бесшовный монтаж (расчет без учета швов);<br>
					</div>
					<div id="calc_right_half">
						<?php echo Html::Button("Удалить",['class'=>'btn btn-success btn-send cart-button'],['action'=>'/site/index']); ?> Расцветку из ГАЛЕРЕИ
						<p>Для облицовки вам необходимо:</p>
						<p>12,0       усл.м    рядовой плитки (расчет кратно упаковкам);</p>
						<p>5,256  усл.м.пог. угловой плитки (расчет поштучно).</p>
						<p>Внимание! Количество камня рассчитано 
с учетом шва при укладке 12 мм.</p>
						<p>Стоимость:   4,207,950  беларусских рублей.
</p>
						<p>Масса, брутто:   322 кг.</p>

					</div>


					
				</div>
			</div>


		<?php } ?>





	 <br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>