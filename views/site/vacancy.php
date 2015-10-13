<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<style >
	#vacancyform-employment,#vacancyform-employmenttype,#vacancyform-education,#vacancyform-civilstatus,#vacancyform-personalauto,#vacancyform-smoker{
	    -webkit-appearance: none;
	    -moz-appearance: none;
		

	    background:transparent url("http://gekkostone/web/images/content/arrow.png") no-repeat right;
	}
	.form-control{
		height:19px;
		width:auto;
		padding:0px;
		padding-right:15px;
		border-radius:5px 0px 5px 0px;
	}
</style>
<div class="site-index">
   <div class="jumbotron">
   	<div class="left-half">
<div class="left-side-half-header">
	ВАКАНСИИ -Работа в компании GEKKOSTONE
</div>
	<div class="left-side-half-text">
		<p>В компании <b>GEKKOSTONE</b> всегда заинтересованы в профессиональных кадрах! Если 
Вы хотите иметь интересную и творческую работу, если Вы уверены в своих силах и 
способностях, - направляйте резюме по прилагаемой на странице форме! Мы рассма-
триваем каждую заявку! В случае, если Ваше резюме покажется нам интересным, - 
мы обязательно свяжемся с Вами и назначим собеседование, где Вы сможете задать 
любые дополнительные вопросы.</p>
<p><img src="images/content/vacancy.jpg" align="right" width="100%"></p>


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
	РЕЗЮМЕ
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

			echo $form->field($model, 'employment')->dropDownList(['a' => 'Род занятости 1', 'b' => 'Род занятости 2', 'c' => 'Род занятости 3'], ['prompt'=>''])->label('Род занятости в GEKKOSTONE');
			echo $form->field($model, 'employmenttype')->dropDownList(['a' => 'Полная занятость', 'b' => 'Частичная занятость'], ['prompt'=>''])->label('Занятость');
			echo $form->field($model,'name')->label('ФИО');
			echo $form->field($model,'age')->label('Возраст');
			echo $form->field($model, 'education')->dropDownList(['a' => 'Общее', 'b' => 'Среднее', 'c' => 'Средне-специальное', 'в' => 'Высшее'], ['prompt'=>''])->label('Образование');
			echo $form->field($model,'speciality')->label('Ваша специальность(если несколько - укажите все');
			echo $form->field($model,'workhistory')->label('Опыт работы(учебы) за последние 10 лет(место работы, город, должность)');
			echo $form->field($model, 'civilstatus')->dropDownList(['a' => 'Женат/замужен', 'b' => 'Не женат/ не замужем', 'c' => 'Разведен/разведена'], ['prompt'=>''])->label('Семейное положение');
			echo $form->field($model, 'personalauto')->dropDownList(['a' => 'Есть', 'b' => 'Нет'], ['prompt'=>''])->label('Личное авто');
			echo $form->field($model,'driverlicence')->label('Водительские категории');
			echo $form->field($model,'adress')->label('Место жительства(город, улица)');
			echo $form->field($model,'salary')->label('На какую зарплату вы расчитываете?');
			echo $form->field($model, 'smoker')->dropDownList(['a' => 'Да', 'b' => 'Нет'], ['prompt'=>''])->label('Вы курите?');
			echo $form->field($model,'characteristic')->label('Ваши качества');
			echo $form->field($model,'selfimage')->label('Напишите о себе( свободная форма)');
			echo $form->field($model,'phonenumber')->label('Контактный телефон( с кодом оператора)')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+375(99)999-99-99',
]);;

			echo Html::submitButton("Submit",['class'=>'btn btn-success']);
		}
	?>
</div>
</div>
</div>
</div>	