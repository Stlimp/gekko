<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<h2>Новая заявка на партнерство</h2>
<h3>Наименование фирмы или ИП:</h3>
	<?=$companytype ?>
<h3>Местонахождение фирмы или ИП (страна, город):</h3>
	<?=$location ?>
<h3>Период работы:</h3>
	<?=$timeperiod ?>
<h3>Основной вид деятельности фирмы или ИП:</h3>
	<?=$mainactivity ?>
<h3>Желаемый вид сотрудничества:</h3>
	<?=$typeofpartnership ?>
<h3>Дополнительная информация и пожелания заявителя:</h3>
	<?=$info ?> 
	<p><b>ДОП ИНФО ПОЧИНИТЬ</b></p>
<h3>Контактное лицо для обратной связи, ФИО:</h3>
	<?=$contactperson ?>
<h3>Должность:</h3>
	<?=$position ?>
<h3>Контактный e-mail для связи:</h3>
	<?=$email ?>
<h3>Контактный телефон для связи:</h3>
	<?=$phone ?>


<?= Html::a('Gekkostone', Url::home('http')) ?>