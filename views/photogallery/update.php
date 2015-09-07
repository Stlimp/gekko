<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Photogallery */

$this->title = 'Update Photogallery: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Photogalleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photogallery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
