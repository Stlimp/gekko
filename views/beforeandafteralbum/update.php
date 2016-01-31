<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BeforeandafterAlbum */

$this->title = 'Update Beforeandafter Album: ' . ' ' . $model->album_name;
$this->params['breadcrumbs'][] = ['label' => 'Beforeandafter Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->album_name, 'url' => ['view', 'id' => $model->album_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beforeandafter-album-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
