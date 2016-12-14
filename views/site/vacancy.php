<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<style>
	.wrap{

	}
</style>
<div class="site-index">
    <div class="jumbotron">
	   	<div class="left-half">
			<div class="left-side-half-header">
				<span style="font-weight: normal">РАБОТА В КОМПАНИИ <b>GEKKOSTONE</b></span>
			</div>
			<div class="left-side-half-text">
				<p>В компании <b>GEKKOSTONE</b> заинтересованы в профессиональных кадрах! Если
				Вы хотите иметь интересную и творческую работу, если Вы уверены в своих силах и
				способностях, - направляйте резюме по прилагаемой на странице форме! Мы рассматриваем каждую заявку! В случае, если Ваше резюме покажется нам интересным, -
				мы обязательно свяжемся с Вами и назначим собеседование, где Вы сможете задать
				любые дополнительные вопросы.</p>
				<p style="color:#996633"><i><b>Внимание!</b> <br>
				В настоящий момент вакансий не требуется. Следите за обновлениями на сайте! Вы можете оставить заявку, - она будет рассмотрена сразу после появления свободных вакансий.
				 </i></p>
				<p>
					<img src="/images/content/vacancy.jpg" align="right" width="100%">
				</p>
			</div>

		</div>
		<div class="right-half">
			<div class="right-side-half-header">
				<span style="font-weight: normal">РЕЗЮМЕ</span>
			</div>
			<div class="right-side-half-text">
				<?php
					if(Yii::$app->session->hasFlash('success')){
					   	echo "<div style =\"color:#D0272E\"><i>";
					   	echo Yii::$app->session->getFlash('success');
					   	echo "</i></div>";
					   	}
					else {
						$form =ActiveForm::begin(['id'=>'inline-form']);

						echo $form->field($model, 'employment')->dropDownList(['a' => 'Производство камня', 'b' => '', 'c' => 'Род занятости 3'], ['prompt'=>''])->label('Род занятости в GEKKOSTONE');
						echo $form->field($model, 'employmenttype')->dropDownList(['a' => 'Полная занятость', 'b' => 'Частичная занятость'], ['prompt'=>''])->label('Занятость');
						echo $form->field($model,'name')->label('ФИО');
						echo $form->field($model,'age')->label('Возраст');
						echo $form->field($model,'education')->dropDownList(['a' => 'Общее', 'b' => 'Среднее', 'c' => 'Средне-специальное', 'в' => 'Высшее'], ['prompt'=>''])->label('Образование');
						echo $form->field($model,'speciality')->label('Ваша специальность(если несколько - укажите все');
						echo $form->field($model,'workhistory')->label('Опыт работы(учебы) за последние 10 лет(место работы, город, должность)');
						echo $form->field($model,'workhistory_years')->label('Период работы');
						echo $form->field($model,'workhistory_second')->label('');
						echo $form->field($model,'workhistory_years_second')->label('');
						echo $form->field($model,'workhistory_third')->label('');
						echo $form->field($model,'workhistory_years_third')->label('');
						echo $form->field($model,'workhistory_fourth')->label('');
						echo $form->field($model,'workhistory_years_fourth')->label('');
						echo $form->field($model, 'civilstatus')->dropDownList(['a' => 'Женат/замужен', 'b' => 'Не женат/ не замужем', 'c' => 'Разведен/разведена'], ['prompt'=>''])->label('Семейное положение');
						echo $form->field($model, 'personalauto')->dropDownList(['a' => 'Есть', 'b' => 'Нет'], ['prompt'=>''])->label('Личное авто');
						echo $form->field($model,'driverlicence')->label('Водительские категории');
						echo $form->field($model,'adress')->label('Место жительства(город, улица)');
						echo $form->field($model,'salary')->label('На какую зарплату вы расчитываете?');
						echo $form->field($model, 'smoker')->dropDownList(['a' => 'Да', 'b' => 'Нет'], ['prompt'=>''])->label('Вы курите?');
						echo $form->field($model,'characteristic')->label('Ваши качества');
						echo $form->field($model,'selfimage')->textarea(['rows' => 5])->label('Напишите о себе( свободная форма)');

						echo $form->field($model,'phonenumber')->label('Контактный телефон( с кодом оператора)')->widget(\yii\widgets\MaskedInput::className(), [
			    'mask' => '+375(99)999-99-99',
			]);;

						echo Html::submitButton("ОТПРАВИТЬ",['class'=>'btn btn-success btn-send']);
						echo '<p style="color:#996633;font-style: italic;">* - поля, обязательные для заполнения;<br>
			     проверьте указанную информацию перед отправкой!</p>';
					}
					 ActiveForm::end()
				?>
			</div>
		</div>

<!-- <div class="moto" style="font-family:Esenin;font-size:50px;text-align:left;height:30px;padding-left:30px;">Будущее строится на <span style="color:#996633;">к</span>амне!</div>	 -->
</div>

<!-- <hr style="margin:20px;"> -->
</div>

