<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
?>
<div class="site-index">
   <div class="jumbotron">
	<div class="left-half">
		<div class="left-side-half-header">
		<span style="color:#666666">КОНТАКТЫ</span>
		</div>
		<div class="left-side-half-text">
			<table class="contacts_table">
				<tr>
					<!--<td rowspan="2">
						<img src="/images/content/logomonochrome.jpg" align="left" height="50" width="150">
					</td>-->
					<td>ООО <b>«ГЕККОСТОУН»</b>, УНП <span class="numbers">290489059</span>
					</td>
				</tr>
				<tr>
					<td><b>юридический адрес:</b> д. Черни, ул. Брестская <span class="numbers">56/6</span>;  <br>Брестская область, Брестский р-н.
					</td>
				</tr>
			</table>
			<br>
			<table class="contacts_table">
				<tr>
					<td>
						<b><u>Отдел сбыта</u></b>
					</td>
				</tr>
				<tr>
					<td>
						уточняйте наличие продукции на складе по телефонам:
					</td>
				</tr>
				<tr>
					<td>
						тел. <span class="numbers">+375 29 <b>7208060</b></span> (МТС)
					</td><br>
				</tr>
				<tr>

					<td>
						тел. <span class="numbers">+375 29 <b>9324060</b></span> (Velcom)
					</td>
				</tr>
				<!--<tr>
					<td>
						факс. <span class="numbers">+375 16 2490075</span>
					</td>
				</tr>-->
				<tr>
					<td>
						gekkostone@gmail.com
					</td>
				</tr>
			</table>
			<br>
		</div>
		<div class="left-side-half-header">
		<span style="color:#666666"><b>СХЕМА ПРОЕЗДА НА СКЛАД-МАГАЗИН ДЕКОРАТИВНОГО КАМНЯ</b>
		</div>
		<div class="left-side-half-text">
			 <?php
                        echo newerton\fancybox\FancyBox::widget([
                            'target' => 'a[rel=fancybox]',
                            'helpers' => true,
                            'mouse' => false,
                            'config' => [

                                'maxWidth' => '100%',
                                'maxHeight' => '100%',
                                'playSpeed' => 7000,
                                'padding' => 0,
                                'fitToView' => false,
                                'width' => '100%',
                                'height' => '100%',
                                'autoSize' => false,
                                'closeClick' => false,
                                'openEffect' => 'elastic',
                                'closeEffect' => 'elastic',
                                'prevEffect' => 'elastic',
                                'nextEffect' => 'elastic',
                                'closeBtn' => true,
                                'openOpacity' => true,
                                'arrows' =>true,
                                'title' => ['type' => 'inside'],
                                'autoResize'=>true,
                            ]
                         ]);
                    ?>
			<div class="photogallery-item" style="float:left">
                <a href="/images/content/map.png" rel="fancybox"><img src="/images/content/map_thumb.jpg" alt="Схема проезда>" width="225" height="150"></a>
            </div>
            <div class="store-item" float="left" >
				<table class="contacts_table">
					<tr>
						<td><u><b>Время работы склада:</b></u>(без перерывов)</td>
					</tr>
					<tr>
						<td>Понедельник - Четверг: <b><span class="numbers">8:00 - 17:00</span></b></td>
					</tr>
					<tr>
						<td>Пятница: <b><span class="numbers">8:00 - 12:00</span></b></td>
					</tr>
					<tr>
						<td>Суббота, воскресенье: <b>выходные</b></td></td>
					</tr>
				</table>
				<table class="contacts_table">
					<tr>
						<td><u><b>Адрес склада:</b></u></th>
						<td> г. Брест, Красный Двор-<span class="numbers">108</span>,</th>
					</tr>
					<tr>
						<td></td>
						<td>р-н Картингового стадиона.</td>
					</tr>
				</table>
     			<table class="contacts_table">
					<tr>
						<td><u><b>GPS склада:</b></u></th>
						<td> <span class="numbers">N52° 04.896´</span></th>
						<td rowspan="2"><img src="/images/content/icons/gps.png" alt=""></td>
					</tr>
					<tr>
						<td></td>
						<td> <span class="numbers">E23° 48.810´</span></td>
						<td></td>
					</tr>
				</table>
            </div>
		</div>
		<div class="left-side-half-header">
		<span style="color:#666666">ФОРМЫ ОБРАТНОЙ СВЯЗИ</span>
		</div>
		<div class="left-side-half-text">
			<p>Для оформления заявки на декоративный камень воспользуйтесь формой по ссылке
			в меню «УСЛУГИ» или в дополнительном меню страницы, <a class="link_brown_color" href="index.php?r=site%2Fgallery"><u>Моя галерея</u></a>.</p>
			<p>Для оформления заявки на сотрудничество с компанией воспользуйтесь соответ-
			ствующей формой по ссылке в меню «О КОМПАНИИ», <a class="link_brown_color" href="index.php?r=site%2Fpartnership"><u>Партнерство</u></a>.</p>
			<p>Для заполнения заявки на вакансии по трудоустройству воспользуйтесь формой
			по ссылке в меню «О КОМПАНИИ»,<a class="link_brown_color" href="index.php?r=site%2Fvacancy"><u>Вакансии</u></a>.</p>
			<p>Если Вы желаете оставить отзыв или внести предложение по качеству продукции и
			предоставляемых услуг компании, - воспользуйтесь специальной формой по ссылке
			в меню «О КОМПАНИИ», <a class="link_brown_color" href="index.php?r=site%2Ffeedback"><u>Отзывы и предложения</u></a>.</p>
			<p>По иным вопросам Вы можете воспользоваться формой для связи на текущей странице.</p>
		</div>
	</div>
	<div class="right-half">
		<div class="right-side-half-header">
			<span style="color:#666666">ФОРМА ДЛЯ СВЯЗИ</span>
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
						$form =ActiveForm::begin(['id'=>'inline-form']);
						echo $form->field($model, 'organization')->label('Наименование фирмы, ИП(для юр.лица) или ФИО для физ.лица');
						echo $form->field($model, 'city')->label('Местонахождение(страна, город)');

		        		echo $form->field($model, 'text')->textarea(['rows' => 10])->label('Ваше обращение');
		        		echo $form->field($model, 'department')->dropDownList(['Производственный отдел' => 'Производственный отдел', 'Отдел сбыта' => 'Отдел сбыта', 'Директору' => 'Директору'], ['prompt'=>''])->label('Выберите отдел');
		        		echo $form->field($model, 'name')->label('ФИО контактного лица');
		        		echo $form->field($model, 'position')->label('Должность');
		        		echo $form->field($model, 'email')->label('Контактный e-mail');
		        		echo $form->field($model, 'phone')->label('Контактный телефон')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+375(99)999-99-99',
]);
			            echo Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-success']);
			           	echo '<p style="color:#996633;font-style: italic;">* - поля, обязательные для заполнения;<br>
     проверьте указанную информацию перед отправкой!</p>';
     					ActiveForm::end();
					}
		   		 ?>
			</p>

		</div>
		<!-- <div class="right-side-half-header">
			КОМПАНИЯ GEKKOSTONE В ИНТЕРНЕТЕ
		</div>
		<div class="right-side-half-text" id="social-block-contacts">
			<p>Социальные сети:
				<span class="social-links">
			                <a href="#"><img src="images/content/icons/ok.png" alt="">ОДНОКЛАССНИКИ</a>
			                <a href="#"><img src="images/content/icons/vk.png" alt="">ВКОНТАКТЕ</a>
			                <a href="#"><img src="images/content/icons/facebook.png">FACEBOOK</a>
			                <a href="#"><img src="images/content/icons/twitter.png" alt="">TWITTER</a>
		                </span>
		            </p>
		            <p>Интернет-адреса:
		            	<span class="social-links">
			                <a href="#"><img src="images/content/icons/youtube.png" alt="">YouTube</a>
			                <a href="tel:+123"><img src="images/content/icons/viber.png" alt="">Viber</a>
			                <a href="#"><img src="images/content/icons/skype.png" alt="">Skype</a>
			            </span>
		            </p>
		        </div> -->
	</div>
   </div>
</div>


