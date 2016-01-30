<?php
use yii\helpers\Html;
mb_internal_encoding("UTF-8");

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
	 	<div class="page-header" style="float:left;">Общая стоимость заказа: <span id="price_value">0</span> беларусских рублей.</div>
	 	<div class="total_weight ">Общий вес, брутто: <span class="result" id="total_weight">0</span> кг.  </div>
	 	<div class="submit_form">
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
								<input type="number" step="0.01" class="calculation_input" id="regular_input_<?= $cartItem->product_color_id ?>" name="search" value="0" onkeyup="order()" onchange="order()"> м² ,  введите общую площадь облицовки;
								<br>
								<input type="number" step="0.01" class="calculation_input" id="angular_input_<?= $cartItem->product_color_id ?>" name="search" value="0" onkeyup="order()" onchange="order()"> м.пог., введите общую высоту углов для облицовки;
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
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
/*$(document).ready(function order() {
	var bc_name = $("#regular_input").val();
	alert(bc_name);
});*/
/*function order() {

	var form = $("#regular_input").attr('form');
	alert($(form).attr('id'));
	var bc_name = $("#regular_input").val();
	alert(bc_name);

}*/

/*
$('#calc1').change(function(){alert(111);
});
*/
function order() {
	
	var color_id=event.target.id.replace(/[^\d]+/, '');;

	var color_data=0;
	
	/*var sum=0;
	//подсчет для каждой формы
	$('.calculator').each(function(){
		var sum2=0;
		//подсчет суммы в каждой форме
		$('#calc_left_half .calculation_input').each(function(){//считаем все инпуты внутри формы
				if ($(this).val()!="") {
					sum2 += parseInt($(this).val());
				};
		});
		//ЗДЕСЬ РАСЧЕТЫ ПО КАЖДОЙ ФОРМЕ
		document.getElementById("result_color_".concat(color_id)).innerHTML="123";//сумма в форме
	});

	//подсчет общей суммы
	$('.color_result').each(function(){
			//alert(parseFloat(this.innerHTML));
			if (parseFloat(this.innerHTML)!="") {
				sum_total+=parseFloat(this.innerHTML);
			}
	});

	document.getElementById("price_value").innerHTML=sum_total;//Конечная сумма

*/


	var current_product_color=document.getElementById("product_subcategory_name_".concat(color_id)).innerHTML;//название камня
	$.get('index.php?r=product/get-products',function(data){;
        var data = $.parseJSON(data);
        //console.log(data);
        for(var i = 0; i < data.length; i++)
		 {
		   if(data[i].product_product_name.toLowerCase() === current_product_color.toLowerCase())
		   {
		   	//находим данные камня
		    color_data=data[i];
		    calculate(color_data);
		   }
		 }
    });
    function calculate(color_data){
    	var regular_value = parseFloat(document.getElementById("regular_input_".concat(color_id)).value);
    	var angular_value = parseFloat(document.getElementById("angular_input_".concat(color_id)).value);

    	if (isNaN(regular_value)){
    		regular_value=0;
    	}
    	if (isNaN(angular_value)){
    		angular_value=0;
    	}
    	
    	if (document.getElementById('add_five_percent_'.concat(color_id)).checked) {//. добавить 5%, если выставленна галка
    		regular_value =regular_value*1.05;
    	};
    	
    	
		if (!document.getElementById('seamless_'.concat(color_id)).checked) {
	    	var angular_packages=Math.ceil(angular_value/color_data.product_angular_calculation_size);//1. количество упаковок
	    	var angular_square=angular_value*color_data.product_angular_calculation_size_square;//2. площадь углов

	    	if (document.getElementById('reduce_square_'.concat(color_id)).checked) {
	    		var regular_square=(regular_value-angular_square);// . площадь рядовых при учете угловых
	    		if (regular_square<0){
	    			regular_square=0;
	    		}
			}
			else{
				var regular_square=regular_value;//. площадь рядовых без учета угловых
			}
			
	    	var regular_packages=Math.ceil(regular_square/color_data.product_regular_calculation_size);//3. количество упаково рядовой

	    	var angular_result=Math.ceil(angular_packages*color_data.product_angular_calculation_size*1000)/1000;//4. подсчет погонных метров угловой
	    	var regular_result=Math.ceil(regular_packages*color_data.product_regular_calculation_size*1000)/1000;//5. подсчет погонных метров рядовой

	    	document.getElementById('angular_result_'.concat(color_id)).innerHTML=angular_result;//. стоимость уголвых
	    	document.getElementById('regular_result_'.concat(color_id)).innerHTML=regular_result;//. стоимость рядовых

	    	var price=Math.ceil((angular_result+regular_result)*color_data.product_price/100)*100;//6. общая цена до деноминации
	    	//var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless*100)/100;//6. общая цена после деноминации

	    	price

	    }
	    else{
	    	/*Бесшовный монтаж*/
	    	var angular_packages=Math.ceil(angular_value/color_data.product_angular_seamless_calculation_size);//1. количество упаковок
	    	var angular_square=angular_value*color_data.product_angular_seamless_calculation_size_square;//2. площадь углов

	    	if (document.getElementById('reduce_square_'.concat(color_id)).checked) {
	    		var regular_square=(regular_value-angular_square);// . площадь рядовых при учете угловых
			}
			else{
				var regular_square=regular_value;//. площадь рядовых без учета угловых
			}
			
	    	var regular_packages=Math.ceil(regular_square/color_data.product_regular_seamless_calculation_size);//3. количество упаково рядовой

	    	var angular_result=Math.ceil(angular_packages*color_data.product_angular_seamless_calculation_size*1000)/1000;//4. подсчет погонных метров угловой
	    	var regular_result=Math.ceil(regular_packages*color_data.product_regular_seamless_calculation_size*1000)/1000;//5. подсчет погонных метров рядовой

	    	document.getElementById('angular_result_'.concat(color_id)).innerHTML=angular_result;//. стоимость уголвых
	    	document.getElementById('regular_result_'.concat(color_id)).innerHTML=regular_result;//. стоимость рядовых


	    	var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless/100)*100;//6. общая цена до деноминации
	    	//var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless*100)/100;//6. общая цена после деноминации


	   	}
	
    	
    	document.getElementById('result_color_'.concat(color_id)).innerHTML=addCommas(price);


    	/*console.log(Math.ceil(angular_value/color_data.product_angular_calculation_size));
    	console.log(angular_value*color_data.product_angular_calculation_size_square);
		console.log(regular_square);
		console.log(regular_packages);*/


    	//console.log(color_data.product_angular_calculation_size);
		//console.log(color_data);

	var weight_regular=regular_packages*color_data.product_regular_weight;
	var weight_angular=angular_packages*color_data.product_angular_weight;
	var weight=weight_regular+weight_angular;
	document.getElementById('result_weight_'.concat(color_id)).innerHTML=weight;//. вес


	var sum_total=0;
	
	$('.color_result').each(function(){
			//alert(parseFloat(this.innerHTML));
			if (parseFloat(this.innerHTML)!="") {
				var temp_price=parseFloat(this.innerHTML.replace(/,/g,''));
				sum_total+=temp_price;
			}
	});

	var weight_total=0;

	$('.weight_result').each(function(){
			//alert(parseFloat(this.innerHTML));
			if (parseFloat(this.innerHTML)!="") {
				var temp_weight=parseFloat(this.innerHTML.replace(/,/g,''));
				weight_total+=temp_weight;
			}
	});
	
	document.getElementById("total_weight").innerHTML=weight_total;//Конечный вес

	document.getElementById("price_value").innerHTML=addCommas(sum_total);//Конечная сумма 

	}

	
}


function showWarning (){
	var color_id=event.target.id.replace(/[^\d]+/, '');;
	var warning="<br>";
	var checkbox=document.getElementById('add_five_percent_'.concat(color_id));

	if (checkbox.checked){
	warning="<i><u>Внимание!</u> Количество камня рассчитано с учетом шва при укладке 12 мм.</i><br>";
	}
	//alert(document.getElementById('five_percent_warning_2').innerHTML);

	//document.getElementById('five_percent_warning_2').style.display= visibility;
	document.getElementById('five_percent_warning_'.concat(color_id)).innerHTML= warning;

}

//Добавление разделителей(,) для конечной суммы
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}



</script>
