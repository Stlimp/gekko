<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
?>

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
				<div class="product_miniature"><img src="<?= $cartItem->product_color_image?>"></div>
				<div class="calculation">
					<hr>
					<?php echo Html::Button("Удалить",['class'=>'btn btn-success btn-send cart-button'],['action'=>'/site/index']); ?>
				</div>
			</div>


		<?php } ?>





	 <br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</div>