<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<h2>Новый отзыв</h2>
<h2>ФИО:</h2>
<p><?= $name ?></p>
<h2>Обращение:</h2>
<p><?= $text ?></p>
<h2>Отдел:</h2>
<p><?= $department ?></p>
<h2>Контактный e-mail</h2>
<p><?= $email ?></p>
<h2>Контактный телефон</h2>
<p><?= $phone ?></p>
<?= Html::a('Gekkostone', Url::home('http')) ?>