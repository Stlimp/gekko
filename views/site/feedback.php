<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<style >
	#feedbackform-department{
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
	.form-group.field-feedbackform-name.required,.form-group.field-feedbackform-text.required,.form-group.field-feedbackform-email,.form-group.field-feedbackform-phone
	{
		width:65%;
	}
	.form-group.field-feedbackform-department.required {
		width:35%;
		float:right;
		padding-left: 30px;
	}
	.btn{
		display: block;
	}




</style>

<div class="site-index">
   <div class="jumbotron">
 
    <div class="left-half">
    	<div class="left-side-half-header">
    		ОТЗЫВЫ И ПРЕДЛОЖЕНИЯ
    	</div>
    	<div class="left-side-half-text">
    		<p>Если Вы желаете оставить отзыв о продукции компании <b>GEKKOSTONE</b> или у Вас есть 
предложение по улучшению качества обслуживания, реализуемой продукции или 
предоставляемых услуг, Вы можете заполнить прилагаемую на странице форму и 
направить Ваше обращение в любой отдел компании.</p>
			<p><img src="images/content/vacancy.jpg" align="right" width="100%"></p>
    	</div>
    	<div class="left-side-half-text" style="text-align:left;font-family:Impact;">
			<?php 
				$input = array('ИСКУССТВО ДЕКОРАТИВНОГО <span style="color: #D0272E">К</span>АМНЯ', 'ТВОЕ ПРОСТРАНСТВО, ТВОЙ <span style="color: #D0272E">К</span>АМЕНЬ', 'БУДУЩЕЕ СТРОИТСЯ НА <span style="color: #D0272E">К</span>АМНЕ!', 'СОВЕРШЕННАЯ ФИЛОСОФИЯ <span style="color: #D0272E">К</span>АМНЯ', 'МЫ ДЕЛАЕМ <span style="color: #D0272E">К</span>АМЕНЬ НАТУРАЛЬНЫМ!');
				$key = array_rand($input,1); 
				echo "<h1>$input[$key]</h1>"; 
			?>
		</div>
    </div>
    <div class="right-half">
    	<div class="right-side-half-header">
    		ФОРМА ДЛЯ ОТЗЫВОВ И ПРЕДЛОЖЕНИЙ
    	</div>
    	<div class="left-side-half-text">
    		<p>
    			<?php
				if(Yii::$app->session->hasFlash('success')){
					echo "<div style =\"color:#D0272E\"><i>";
				   	echo Yii::$app->session->getFlash('success');
				   	echo "</i></div>";
				   	}
				else {
					$form =ActiveForm::begin();
					echo $form->field($model,'name')->textInput()->label('ФИО');
					echo $form->field($model,'text')->textarea(['rows' => 20])->label('Ваше обращение');
					echo $form->field($model, 'department')->dropDownList(['Отдел 1' => 'Отдел 1', 'Отдел 2' => 'Отдел 2', 'Отдел 3' => 'Отдел 3'], ['prompt'=>''])->label('Выберите отдел');
					echo $form->field($model,'email')->label('Контактный e-mail');
					echo $form->field($model,'phone')->label('Контактный телефон')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+375(99)999-99-99',
]);;

					echo Html::submitButton("ОТПРАВИТЬ",['class'=>'btn btn-success']);
					}
				?>
    		</p>
    		<p style="color:#D0272E;font-style: italic;">* - поля, обязательные для заполнения;<br> 
     проверьте указанную информацию перед отправкой!</p>
    	</div>
    	

    </div>
	</div>
</div>

