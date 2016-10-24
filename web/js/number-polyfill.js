$(":input").bind('keyup mouseup', function () {
    var color_id = $(this).attr('id').replace(/[^\d]+/, '');

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

	    	//var price=Math.ceil((angular_result+regular_result)*color_data.product_price/100)*100;//6. общая цена до деноминации
	    	var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless*100)/100;//6. общая цена после деноминации

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


	    	//var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless/100)*100;//6. общая цена до деноминации
	    	var price=Math.ceil((angular_result+regular_result)*color_data.product_price_seamless*100)/100;//6. общая цена после деноминации


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

	document.getElementById('price_input').value=sum_total; 
	document.getElementById('weight_input').value=weight_total; 

	}        
});