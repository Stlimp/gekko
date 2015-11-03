<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<h2>Новый отклик на вакансию:</h2>
<h3>Фамилия Имя Отчество:</h3>
		<p><?=$name?></p>
<h3>Возраст:</h3>
		<p><?=$age ?></p>
<h3>Род занятости в Gekkostone:</h3>
		<p><?=$employment ?></p>
<h3>Занятость:</h3>
		<p><?=$employmenttype ?></p>
<h3>Образование:</h3>
		<p><?=$education ?></p>
<h3>Специальность:</h3>
		<p><?=$speciality ?></p>
<h3>Опыт работы:</h3>
		<p><?=$workhistory ?> <?=$workhistory_years ?></p>
		<p><?=$workhistory_second ?> <?=$workhistory_years_second ?></p>
		<p><?=$workhistory_third ?> <?=$workhistory_years_third ?></p>
		<p><?=$workhistory_fourth ?> <?=$workhistory_years_fourth ?></p>
<h3>Семейное положение:</h3>
		<p><?=$civilstatus ?></p>
<h3>Личное авто:</h3>
		<p><?=$personalauto ?></p>
<h3>Водительские категории:</h3>
		<p><?=$driverlicence ?></p>
<h3>Место жительства(город, улица):</h3>
		<p><?=$adress ?></p>
<h3>Желаемая зарплата:</h3>
		<p><?=$salary ?></p>
<h3>Вы курите?</h3>
		<p><?=$smoker ?></p>
<h3>Качества:</h3>
		<p><?=$characteristic ?></p>
<h3>О себе:</h3>
		<p><?=$selfimage ?></p>
<h3>Контактный телефон:</h3>
		<p><?=$phonenumber ?></p>

<?= Html::a('Gekkostone', Url::home('http')) ?>