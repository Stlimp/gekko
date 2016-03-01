
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

function myFunction(){
	document.getElementById('calculation_form').submit();  		
};


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
    	document.getElementById('price_color_'.concat(color_id)).value=price;

    	document.getElementById('regular_packages_input_'.concat(color_id)).value=regular_result;
    	document.getElementById('angular_packages_input_'.concat(color_id)).value=angular_result;
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
		document.getElementById('weight_color_'.concat(color_id)).value=weight;//. вес
		document.getElementById('angular_result_'.concat(color_id)).value=weight;//. вес


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

	document.getElementById('price_input').value=addCommas(sum_total); 
	document.getElementById('weight_input').value=weight_total; 

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


