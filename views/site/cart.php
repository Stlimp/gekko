<?php
use yii\helpers\Html;
 use yii\widgets\ActiveForm;
mb_internal_encoding("UTF-8");

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
$this->registerJsFile('@web/js/cart.js');
$this->registerJsFile('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
$this->registerJsFile('@web/js/ajax.js');
?>

<div class="site-index">
   <div class="jumbotron">
	 <div class="my_gallery" style="width:20%;float:left;">
	 	<div class="page-header" style="float:left;">МОЯ ГАЛЕРЕЯ <span id="cart"><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></div>
	 </div>
	 <!--   <?php $form = ActiveForm::begin([
	  	//'action' => './index.php?r=site%2Fsamplepdf'
	 			]); ?> -->
	<form id="calculation_form" method="POST" action="index.php?r=site%2Forder" target="_blank">	
		 <div class="total_price" style="width:80%;float:left;">
										
		 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value">0</span> беларусских рублей.</div>
		 	<input type="hidden" id="price_input" name="price_input" value="0">
		 	<input type="hidden" id="weight_input" name="weight_input" value="0">

		 	<div class="total_weight ">Общий вес, брутто: <span class="result" id="total_weight">0</span> кг.  </div>
		 	<?php if($cartItems==NULL) {?>
		 	<div class="submit_form">
		 		<p style="padding:50px;">Ни одна ТОВАРНАЯ продукция не выбрана. Для выбора продукции перейдите в раздел <a class="link_brown_color" href="index.php?r=product%2Findex">ПРОДУКЦИЯ</a></p>
		 	</div>
		 	<?php }else{ ?>

		 		<div class="submit_form">
		 			<a id="totaltotal" style="float:left" class="btn btn-success btn-send cart-button" onclick="myFunction()"><b>ОФОРМИТЬ</b></a> 
					<span style="display: inline-block;padding-left: 10px;margin-top: 7px;"id="alpha_bank">платежную квитанцию (оплата через любой <a href="https://www.alfabank.by/" target="_blank"><u>филиал «Альфа-Банк»</u></a> или на складе <b>GEKKOSTONE</b>)</span>
					<br>
					<p style="text-align:center;margin-top:10px;"id="warning">перед оформлением внимательно проверьте заявку !</p>
				</div>

					
			
				<?php }?>
		 </div>
		<div class="cart_index">
		<?php foreach ($cartItems as $cartItem) {?>
		
				<div class="cart_position">
					<div class="product_miniature">
						<img src="<?= $cartItem->product_color_image?>">
						<div class="overlay"><?= $cartItem->getProductPrice()?> руб/м </div>
					</div>
					<div class="calculation">
						<hr id="line" >
						<!-- <form class="calculator" id="calc<?= $cartItem->product_color_id ?>"> -->
						<div id="calc_left_half">
										<span id="span_product"><b><span id="product_subcategory_name_<?= $cartItem->product_color_id ?>"><?=mb_strtoupper($cartItem->product_subcategory_name)?></span> - «<?= $cartItem->product_color_name?>»</b></span>
										<!-- <input type="hidden" name="product[<?= $cartItem->product_color_id ?>]" value="<?=$cartItem->product_color_name?>" /> -->
										<br>
										<input type="number" name="regular_input[<?= $cartItem->product_color_id ?>]" min="0" step="0.01" class="calculation_input" id="regular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()"> м² ,  введите общую площадь облицовки;
										<br>
										<input type="number" name="angular_input[<?= $cartItem->product_color_id ?>]" min="0" step="0.01" class="calculation_input" id="angular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()"> м.пог., введите общую высоту углов для облицовки;
										<br>
										<input type="checkbox" <?= $cartItem->hasAngular()=="false"?disabled:"" ?> name="reduce_squere[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="reduce_square_<?= $cartItem->product_color_id ?>"  onchange="order()"><span <?= $cartItem->hasAngular()=="false"?"id=\"cart_checkbox_disabled\"":"" ?> > вычесть площадь, занимаемую угловыми элементами;</span><br>
										<input type="checkbox" name="add_five_percent[<?= $cartItem->product_color_id ?>]"class="calculation_checkbox" id="add_five_percent_<?= $cartItem->product_color_id?>"  onchange="order();showWarning()"><span > с учетом 5 % отходов камня на подрезку;</span><br>
										<input type="checkbox" <?= $cartItem->hasSeamless()=="false"?disabled:"" ?> name="seamless[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="seamless_<?= $cartItem->product_color_id?>"  onchange="order()"> <span <?= $cartItem->hasSeamless()=="false"?"id=\"cart_checkbox_disabled\"":"" ?> >бесшовный монтаж (расчет без учета швов);</span><br> 
						</div>
						<div id="calc_right_half">
										<a style="float:left" id="remove_from_cart" class="btn btn-success btn-send cart-button" href="index.php?r=productcolor/remove-from-cart&id=<?= $cartItem->product_color_id ?>"><b>Удалить</b></a>  <span style="display: inline-block;padding-left: 10px;margin-top: 7px;">расцветку из</span> <b>ГАЛЕРЕИ</b>
										
										<p><br><span style="color: #D0272E">Для облицовки вам необходимо:</span><br>
										<input type="hidden" id="price_color_<?= $cartItem->product_color_id ?>" name="price_color[<?= $cartItem->product_color_id ?>]" value="0">

										<input type="hidden" id="weight_color_<?= $cartItem->product_color_id ?>" name="weight_color[<?= $cartItem->product_color_id ?>]" value="0">
										<input type="hidden" id="regular_packages_input_<?= $cartItem->product_color_id ?>" name="regular_packages_input[<?= $cartItem->product_color_id ?>]" value="0">
										<input type="hidden" id="angular_packages_input_<?= $cartItem->product_color_id ?>" name="angular_packages_input[<?= $cartItem->product_color_id ?>]" value="0">										

										<span class="result" id="regular_result_<?= $cartItem->product_color_id ?>">0</span> усл.м    рядовой плитки (расчет кратно упаковкам);<br>
										<span class="result" id="angular_result_<?= $cartItem->product_color_id ?>">0</span>  усл.м.пог. угловой плитки (расчет поштучно).<br>
										<span class="five_percent_warninig" id="five_percent_warning_<?= $cartItem->product_color_id ?>"><br></span>
										Стоимость: <span class="color_result result" id="result_color_<?= $cartItem->product_color_id ?>">0</span>  беларусских рублей.<br>
										Масса, брутто: <span class="weight_result result" id="result_weight_<?= $cartItem->product_color_id ?>">0</span> кг.</p>

						</div>			
						<!-- </form> -->
					</div>
				</div>
			<?php } ?>
		</div>
	</form>
	</div>
</div>
