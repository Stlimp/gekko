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
					<form name="calculator" id="calc<?= $cartItem->product_color_id ?>">
							<div id="calc_left_half">
								<span id="span_product">АНТИЧНЫЙ КАМЕНЬ - «Венецианский обожженый»</span>
								<br>
								<input type="text" class="calculation_input" id="regular_input" name="search" value="0" onkeyup="order()"> м² ,  введите общую площадь облицовки;
								<br>
								<input type="text" class="calculation_input" id="angular_input" name="search" value="0"> м.пог., введите общую высоту углов для облицовки;
								<br>
								<input type="checkbox" name="vehicle" value=""> вычесть площадь, занимаемую угловыми элементами;<br>
								<input type="checkbox" name="vehicle" value=""> с учетом 5 % отходов камня на подрезку;<br>
								<input type="checkbox" name="vehicle" value=""> бесшовный монтаж (расчет без учета швов);<br>
							</div>
							<div id="calc_right_half">
								<?php echo Html::Button("Удалить",['class'=>'btn btn-success btn-send cart-button'],['action'=>'/site/index']); ?> Расцветку из ГАЛЕРЕИ
								<p>Для облицовки вам необходимо:<br>
								<span class="result" id="regular_result">12,0</span> усл.м    рядовой плитки (расчет кратно упаковкам);<br>
								<span class="result" id="angular_result">5,256</span>  усл.м.пог. угловой плитки (расчет поштучно).<br>
								Внимание! Количество камня рассчитано с учетом шва при укладке 12 мм.<br>
								Стоимость: <span id="result">4,207,950</span>  беларусских рублей.<br>
								Масса, брутто: <span id="result">322</span> кг.</p>

							</div>
					</form>


					
				</div>
			</div>


		<?php } ?>





	 <br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
/*$(document).ready(function order() {
	var bc_name = $("#regular_input").val();
	alert(bc_name);

});*/
function order() {

	var form = $("#regular_input").attr('form');
	alert($(form).attr('id'));
	var bc_name = $("#regular_input").val();
	alert(bc_name);

}
</script>