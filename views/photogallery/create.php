<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Photogallery */

$this->title = 'Create Photogallery';
$this->params['breadcrumbs'][] = ['label' => 'Photogalleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogallery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
