
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


