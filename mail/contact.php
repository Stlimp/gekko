<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<h2>Новое сообщение в форме для связи</h2>
<h3>Наименование фирмы, ИП(для юр.лица) или ФИО для физ.лица</h3>
	<p><?= $organization;?></p>
<h3>Местонахождение(страна, город</h3>
	<p><?= $city;?></p>
<h3>Обращение</h3>
	<p><?= $text;?></p>
<h3>Отдел</h3>
	<p><?= $department;?></p>
<h3>ФИО контактного лица</h3>
	<p><?= $name;?></p>
<h3>Должность</h3>
	<p><?= $position;?></p>
<h3>Контактный e-mail</h3>
	<p><?= $email;?></p>
<h3>Контактный телефон</h3>
	<p><?= $phone;?></p>
<?= Html::a('Gekkostone', Url::home('http')) ?>