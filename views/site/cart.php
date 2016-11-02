<?php
use yii\helpers\Html;
 use yii\widgets\ActiveForm;
mb_internal_encoding("UTF-8");

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
$this->registerJsFile('@web/js/cart.js');
$this->registerJsFile('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
$this->registerJsFile('@web/js/ajax.js');
$this->registerJsFile('@web/js/number-polyfill.js');
?>

<div class="site-index">
   <div class="jumbotron">
	 <div class="my_gallery" style="width:20%;float:left;">
	 	<div class="page-header" style="float:left;"><b>МОЯ ГАЛЕРЕЯ </b><span id="cart" <?php if (\Yii::$app->cart->getCount()==0){echo "style=\"background-color:transparent;color: #000000; border: 1px solid #000000;\"";} ?>><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></div>
	 </div>
	 <!--   <?php $form = ActiveForm::begin([
	  	//'action' => './index.php?r=site%2Fsamplepdf'
	 			]); ?> -->
	<form id="calculation_form" method="POST" action="index.php?r=site%2Forder" target="_blank">
		 <div class="total_price" style="width:80%;float:left;">

		 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value">0</span> белорусских рублей.</div>
		 	<input type="hidden" id="price_input" name="price_input" value="0">
		 	<input type="hidden" id="weight_input" name="weight_input" value="0">

		 	<div class="total_weight ">Общий вес камня: <span class="result" id="total_weight">0</span> кг.  </div>
		 	<?php if($cartItems==NULL) {?>
		 	<div class="submit_form">
		 		<p style="padding:0px;">Расчет необходимого количества камня, его веса и стоимости. <br><br><b>Ни одна товарная позиция не выбрана! </b>Количество выбранных позиций в "МОЮ ГАЛЕРЕЮ" отображается в верхнем правом углу сайта. Для подбора интересующих вариантов перейдите в раздел <a class="link_brown_color" href="index.php?r=product%2Findex"> "ПРОДУКЦИЯ"</a></p>
		 	</div>
		 	<?php }else{ ?>

		 		<div class="submit_form">
		 			<a id="totaltotal" style="float:left" class="btn btn-success btn-send cart-button" onclick="myFunction()"><b>ОФОРМИТЬ</b></a>
					<span style="display: inline-block;padding-left: 10px;margin-top: -3px;"id="alpha_bank">платежную квитанцию (возможна оплата через <a href="https://www.alfabank.by/o_banke/offices/" target="_blank"><u>филиал «Альфа-Банк»</u></a> или любой другой банк, <br>а также <a href="/index.php?r=site%2Fcontact" target="_blank"><u>на складе </u></a><b>GEKKOSTONE</b> при получении продукции).</span>
					<br>
					<p style="text-align:left;margin-top:10px;"id="warning";><span style="color: #7D552D">перед оформлением внимательно проверьте заявку!</span></p>
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
										<input type="number" name="regular_input[<?= $cartItem->product_color_id ?>]" min="0" step="0.01" class="calculation_input" id="regular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()" oninput="validity.valid||(value='');"> м² ,  введите общую площадь облицовки;
										<br>
										<input type="number" name="angular_input[<?= $cartItem->product_color_id ?>]" min="0" step="0.01" class="calculation_input" id="angular_input_<?= $cartItem->product_color_id ?>"  value="0" onkeyup="order()" onchange="order()" oninput="validity.valid||(value='');" > м.пог., введите общую высоту углов для облицовки;
										<br>
										<input type="checkbox" <?= $cartItem->hasAngular()=="false"?'disabled':"" ?> name="reduce_squere[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="reduce_square_<?= $cartItem->product_color_id ?>"  onchange="order()" checked><span <?= $cartItem->hasAngular()=="false"?"id=\"cart_checkbox_disabled\"":"" ?> > вычесть площадь, занимаемую угловыми элементами;</span><br>
										<input type="checkbox" name="add_five_percent[<?= $cartItem->product_color_id ?>]"class="calculation_checkbox" id="add_five_percent_<?= $cartItem->product_color_id?>"  onchange="order();" ><span > с учетом <span class="numbers">5</span> % отходов камня на подрезку;</span><br>
										<input type="checkbox" <?= $cartItem->hasSeamless()=="false"?'disabled':"" ?> name="seamless[<?= $cartItem->product_color_id ?>]" class="calculation_checkbox" id="seamless_<?= $cartItem->product_color_id?>"  onchange="order();showWarning()"> <span <?= $cartItem->hasSeamless()=="false"?"id=\"cart_checkbox_disabled\"":"" ?> >бесшовный монтаж (расчет без учета швов);</span><br>
										<p></p>
										<a style="float:left" id="remove_from_cart" class="btn btn-success btn-send cart-button" href="index.php?r=productcolor/remove-from-cart&id=<?= $cartItem->product_color_id ?>"><b>Удалить</b></a>  <span style="display: inline-block;padding-left: 10px;margin-top: 7px;">расцветку из</span> <b>ГАЛЕРЕИ</b>
						</div>
						<div id="calc_right_half">


										<p><span style="color: #7D552D"><u>Для облицовки вам необходимо:</u></span><br>
										<input type="hidden" id="price_color_<?= $cartItem->product_color_id ?>" name="price_color[<?= $cartItem->product_color_id ?>]" value="0">

										<input type="hidden" id="weight_color_<?= $cartItem->product_color_id ?>" name="weight_color[<?= $cartItem->product_color_id ?>]" value="0">
										<input type="hidden" id="regular_packages_input_<?= $cartItem->product_color_id ?>" name="regular_packages_input[<?= $cartItem->product_color_id ?>]" value="0">
										<input type="hidden" id="angular_packages_input_<?= $cartItem->product_color_id ?>" name="angular_packages_input[<?= $cartItem->product_color_id ?>]" value="0">

										<span class="result" id="regular_result_<?= $cartItem->product_color_id ?>">0</span> усл.м    рядовой плитки (расчет кратно упаковкам);<br>
										<span class="result" id="angular_result_<?= $cartItem->product_color_id ?>">0</span>  усл.м.пог. угловой плитки (расчет поштучно).<br>
										<span class="five_percent_warninig" id="five_percent_warning_<?= $cartItem->product_color_id ?>"><i><u><b>Внимание!</b></u> Количество камня рассчитано<br>с учетом шва при укладке <span class="numbers">12</span> мм.</i><br></span><br>
										Стоимость: <span class="color_result result" id="result_color_<?= $cartItem->product_color_id ?>">0</span>  белорусских рублей.<br>
										Масса, брутто: <span class="weight_result result" id="result_weight_<?= $cartItem->product_color_id ?>">0</span> кг.</p>


						</div>
						<!-- </form> -->
					</div>
				</div>
			<?php } ?>
		</div>

		<div class="war" style ="padding:50px 50px 0px 300px;">
			<p><b>ВНИМАНИЕ!</b> Сайт предназначен для рекламы продукции производителя, носит информативный характер и не является интернет-магазином. Оплата через настоящий веб-сайт невозможна! Вы можете оплатить продукцию ООО «ГЕККОСТОУН» только через розничную торговую точку на складе-магазине в г. Брест, Красный Двор – <span class="numbers">108</span> (р-н Картингового стадиона) или по безналичному расчету на текущий р/счет ООО «ГЕККОСТОУН» в соответствии с Договором публичной оферты. Предварительно уточняйте наличие продукции на складе по телефонам: <span class="numbers">+375 29 <b>7208060</b>, +375 29 <b>9324060</b>.</span></p>
		</div>

	</form>


	</div>
</div>
