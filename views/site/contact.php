<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
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
		КОНТАКТЫ 
		</div>
		<div class="left-side-half-text">
			<p><img src="images/content/logomonochrome.jpg" align="left">ООО «ГЕККОСТОУН», УНП 290489059
				<br>
	юридический адрес: д. Черни, ул. Брестская 56/6;  Брестская область.</p>
			<p><b><u>Отдел сбыта</u></b><br>
				тел. +375 29 7208060(МТС)<br>
				тел. +375 29 9324060(Velcom)<br>
				факс. +375 16 2490075<br>
				gekkostone@gmail.com<br>
			</p>
		</div>
		<div class="left-side-half-header">
		СХЕМА ПРОЕЗДА НА СКЛАД-МАГАЗИН ДЕКОРАТИВНОГО КАМНЯ 
		</div>
		<div class="left-side-half-text">
			<div class="photogallery-item" style="float:left">
                        <a href="images/content/photogallery/493752772.jpg" rel="fancybox"><img src="images/content/photogallery/493752772.jpg" alt="Схема проезда>" width="200" height="150"></a>
            </div>
            <div class="store-item" float="left" >
                       <p> <u><b>Время работы склада:</b></u>	
							Понедельник - Четверг: <b>8:00 - 17:00</b>
						  <br>Пятница: <b>8:00 - 12:00</b>
						  <br>Суббота, воскресенье: <b>выходные</b></p>
            </div>
		</div>
		<div class="left-side-half-header">
		ФОРМЫ ОБРАТНОЙ СВЯЗИ 
		</div>
		<div class="left-side-half-text">
			<p>Для оформления заявки на декоративный камень воспользуйтесь формой по ссылке 
			в меню «УСЛУГИ» или в дополнительном меню страницы, <a href="index.php?r=site%2Fgallery" style="color:#9E8D6B"><u>Моя галерея</u></a>.</p>
			<p>Для оформления заявки на сотрудничество с компанией воспользуйтесь соответ-
			ствующей формой по ссылке в меню «О КОМПАНИИ», <a href="index.php?r=site%2Fpartnership" style="color:#9E8D6B"><u>Партнерство</u></a>.</p>
			<p>Для заполнения заявки на вакансии по трудоустройству воспользуйтесь формой
			по ссылке в меню «О КОМПАНИИ»,<a href="index.php?r=site%2Fvacancy" style="color:#9E8D6B"><u>Вакансии</u></a>.</p>
			<p>Если Вы желаете оставить отзыв или внести предложение по качеству продукции и
			предоставляемых услуг компании, - воспользуйтесь специальной формой по ссылке 
			в меню «О КОМПАНИИ», <a href="index.php?r=site%2Ffeedback" style="color:#9E8D6B"><u>Отзывы и предложения</u></a>.</p>
			<p>По иным вопросам Вы можете воспользоваться формой для связи на текущей странице.</p>
		</div>
	</div>
	<div class="right-half">
		<div class="right-side-half-header">
			ФОРМА ДЛЯ СВЯЗИ
		</div>
		<div class="right-side-half-text">
			<p>

				<?php 
					if(Yii::$app->session->hasFlash('success')){
					   	echo "<div style =\"color:#D0272E\"><i>";
					   	echo Yii::$app->session->getFlash('success');
					   	echo "</i></div>";
					}
					else {
						$form =ActiveForm::begin(); 
						echo $form->field($model, 'organization')->label('Наименование фирмы, ИП(для юр.лица) или ФИО для физ.лица'); 
						echo $form->field($model, 'city')->label('Местонахождение(страна, город)'); 

		        		echo $form->field($model, 'text')->textarea()->label('Ваше обращение');
		        		echo $form->field($model, 'department')->label('Выберите отдел'); 
		        		echo $form->field($model, 'name')->label('ФИО контактного лица'); 
		        		echo $form->field($model, 'position')->label('Должность'); 
		        		echo $form->field($model, 'email')->label('Контактный e-mail');
		        		echo $form->field($model, 'phone')->label('Контактный телефон')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+375(99)999-99-99',
]); 
			            echo Html::submitButton('Submit', ['class' => 'btn btn-success']);
			           
					}        
		   		 ?>
			</p>
		</div>
	</div>
	</div>
</div>



