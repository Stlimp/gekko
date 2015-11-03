<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<style >
  #partnershipform-typeofpartnership{
      -webkit-appearance: none;
      -moz-appearance: none;
      background:transparent url("http://gekkostone/web/images/content/arrow.png") no-repeat right;
  }

  .form-group {
      display: inline-block;
      margin-bottom: 0px;
  }
  .form-control{
    height:19px;
    width:100%;
    padding:0px;
    padding-right:15px;
    border-radius:5px 0px 5px 0px;
  }
  .required>label::after {
      content: " *";
      color:#D0272E;
  }
  .form-group.field-partnershipform-companytype.required,.form-group.field-partnershipform-mainactivity.required,.form-group.field-partnershipform-typeofpartnership.required,.form-group.field-partnershipform-info {
    width:100%;
  }
  .form-group.field-partnershipform-location.required {
    width:70%;
  }
  .form-group.field-partnershipform-timeperiod.required {
    width:25%;
    float:right;
  }
  .form-group.field-partnershipform-contactperson.required, .form-group.field-partnershipform-email.required,.form-group.field-partnershipform-phone.required{
    width:60%;
  }
  .form-group.field-partnershipform-position.required {
    width:35%;
    padding-left:30px;
  }
  .btn{
    float:right;  

  }


</style>
<div class="site-index">
   <div class="jumbotron">
   	<div class="left-half">
<div class="left-side-half-header">
	ПАРТНЕРСТВО
</div>
	<div class="left-side-half-text">
		<p><b>GEKKOSTONE</b> предлагает Вам стать партнером компании. Приглашаем индиви-
дуальных предпринимателей, юридических и частных лиц заключить с нами Договор 
о сотрудничестве. Мы предлагаем различные варианты партнерства и вы сможете 
выбрать наиболее приемлимый для Вас.  </p>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  	<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          ПАРТНЕРСТВО С ПРЕДПРИЯТИЯМИ ОПТОВО-РОЗНИЧНОЙ ТОРГОВЛИ
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne" >
      <div class="panel-body">
    		<p>Если Вы представляете официально зарегистрированное, действующее юридическое лицо или являетесь индивидуальным предпринимателем, при этом обладаете собственными или арендованными торгово-выставочными площадями и 
занимаетесь оптово-розничной торговлей строительной продукцией, то Вы 
можете претендовать на получение статуса «Дилер». </p>
			<p>Для наглядного представление нашей продукции после подписания дилерского 
соглашения Дилер получает базовый комплект демонстрационных стендов. 
Согласно договора Дилер имеет право  на бесплатное использование демонстрационных стендов GEKKOSTONE в течение 3-х месяцев. После окончания срока, 
требуемого для изучения спроса, Дилер принимает решение о приобретении 
или возврате рекламных стендов.</p>
			<p>По желанию Дилера информация о нем может быть размещена на настоящем 
сайте и будет доступна в разделе «ГДЕ КУПИТЬ» в главном меню сайта. </p>
			<p>По результатам анализа деятельности Дилера возможно принятие решения о 
присвоении Дилеру статуса «Региональный Дистрибьютор».</p>
			<p>Для рассмотрения условий сотрудничества предлагаем заполнить Заявку на 
партнерство по форме, прилагаемой справа.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ПАРТНЕРСТВО С ДИЗАЙНЕРАМИ И АРХИТЕКТОРАМИ
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      	<p> Широкий спектр фактур и многообразие цветовых решений продукции 
<b>GEKKOSTONE</b> помогут реализовать самые оригинальные дизайнерские и архитектурные решения. Предлагаем взаимовыгодные условия партнерства по программе «Агент». Для рассмотрения условий сотрудничества предлагаем заполнить Заявку на партнерство по форме, прилагаемой справа.  </p>
		<p>Обращаем Ваше внимание, что на вебсайте в разделе «ИНФОРМАЦИЯ», 
Текстуры камня  Вы можете скачать интересующие Вас текстуры декоративно-
го камня GEKKOSTONE, специально подготовленные для работы в дизайнер-
ских  программах для 3D визуализации Ваших проектов.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         ПАРТНЕРСТВО СО СТРОИТЕЛЬНЫМИ ОРГАНИЗАЦИЯМИ
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <p><b>GEKKOSTONE</b> является производителем декоративного облицовочного камня 
премиум класса по доступным ценам. Декоративный камень используется при проведении наружных и внутренних облицовочных работ. Кроме того, камень 
идеально подходит для реконструкции исторических зданий и сооружений. 
Технологии <b>GEKKOSTONE</b> позволяют со 100%-ной точностью передавать цвет и 
фактуру природного камня и облицовочного кирпича. Подробную информацию 
смотрите: «О КОМПАНИИ», Преимущества. </p>
		<p>Декоративный камень <b>GEKKOSTONE</b> изготавливается с применением только натуральных и экологически чистых сырьевых компонентов согласно СТБ 1374-2003. На 
всю продукцию <b>GEKKOSTONE</b> дается производственная гарантия. </p>
		<p>Крупным потребителям облицовочных материалов и строительным организациям 
предлагаются специальные цены, сроки и условия поставки продукции 
<b>GEKKOSTONE</b>.</p>
		<p>Для рассмотрения условий сотрудничества предлагаем заполнить Заявку на партнерство по форме, прилагаемой справа. </p>	
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         РЕКЛАМНОЕ ПАРТНЕРСТВО
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <p>Политика компании в области рекламы направлена на популяризацию использования декоративного камня при проведении строительно-отделочных работ. </p>
		<p>Компания <b>GEKKOSTONE</b> заинтересована в размещении своих рекламных стендов 
в объектах с высокой посещаемостью, таких как крупные торговые центры и 
гипермаркеты, строительные магазины, выставочные павильоны и т.п.</p>
		<p>Если Вы хотите предложить рекламное место для выставочных стендов 
<b>GEKKOSTONE</b>, мы всегда готовы рассмотреть вариант аренды рекламного места. 
Рекламные стенды <b>GEKKOSTONE</b> выглядят очень презентабельно и вполне могут 
являться визитной карточкой Вашего объекта.</p>
		<p>Образцы рекламных стендов <b>GEKKOSTONE</b> Вы можете посмотреть здесь.</p>
		<p>Для рассмотрения условий сотрудничества предлагаем заполнить Заявку на партнерство по форме, прилагаемой справа.</p>
      </div>
    </div>
  </div>
</div>




</div>
<div class="left-side-half-text" style="text-align:left;font-family:Impact;">
	
				<?php 
					$input = array('ИСКУССТВО ДЕКОРАТИВНОГО <span style="color: #D0272E">К</span>АМНЯ', 'ТВОЕ ПРОСТРАНСТВО, ТВОЙ <span style="color: #D0272E">К</span>АМЕНЬ', 'БУДУЩЕЕ СТРОИТСЯ НА <span style="color: #D0272E">К</span>АМНЕ!', 'СОВЕРШЕННАЯ ФИЛОСОФИЯ <span style="color: #D0272E">К</span>АМНЯ', 'МЫ ДЕЛАЕМ <span style="color: #D0272E">К</span>АМЕНЬ НАТУРАЛЬНЫМ!');
					$key = array_rand($input,1); 
					echo "<h1>$input[$key]</h1>"	; 
				?>

			</div>
</div>

<div class="right-half">
<div class="right-side-half-header">
	ЗАЯВКА НА ПАРТНЕРСТВО
</div>
	<div class="right-side-half-text">
	<?php
		if(Yii::$app->session->hasFlash('success')){
        echo "<div style =\"color:#D0272E\"><i>";
		   	echo Yii::$app->session->getFlash('success');
        echo "</i></div>";
		   	}
		else {
			$form =ActiveForm::begin();

			echo $form->field($model,'companytype')->label('Наименование фирмы или ИП');
			echo $form->field($model,'location')->label('Местонахождение фирмы или ИП (страна, город)');
			echo $form->field($model,'timeperiod')->label('Период работы');
			echo $form->field($model,'mainactivity')->label('Основной вид деятельности фирмы или ИП');
			echo $form->field($model,'typeofpartnership')->dropDownList(['a' => 'Партнерство с организициями оптово-розничной торговли', 'b' => 'Партнерство с дизайнерами и архитекторами', 'c' => 'Партнерство со строительными организациями', 'd' => 'Рекламное партнерство'], ['prompt'=>''])->label('Желаемый вид сотрудничества');
			echo $form->field($model,'info')->textarea(['rows' => 10])->label('Дополнительная информация и пожелания заявителя');
			echo $form->field($model,'contactperson')->label('Контактное лицо для обратной связи, ФИО');
			echo $form->field($model,'position')->label('Должность');
			echo $form->field($model,'email')->label('Контактный e-mail для связи');
			echo $form->field($model,'phone')->label('Контактный телефон для связи')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+375(99)999-99-99',
]);;

			echo Html::submitButton("ОТПРАВИТЬ",['class'=>'btn btn-success']);
      echo '<p style="color:#D0272E;font-style: italic;">* - поля, обязательные для заполнения;<br> 
     проверьте указанную информацию перед отправкой!</p>';
		}
	?>
  
</div>
</div>
</div>
</div>	