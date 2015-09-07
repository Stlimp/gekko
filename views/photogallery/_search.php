<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhotogallerySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photogallery-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'photo_name') ?>

    <?= $form->field($model, 'photo_category') ?>

    <?= $form->field($model, 'photo_subcategory') ?>

    <?= $form->field($model, 'photo_image') ?>

    <?php // echo $form->field($model, 'photo_product') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
