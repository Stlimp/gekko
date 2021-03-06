<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductColorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-color-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_color_id') ?>

    <?= $form->field($model, 'product_color_name') ?>

    <?= $form->field($model, 'product_article') ?>

    <?= $form->field($model, 'product_3ds_link') ?>

    <?= $form->field($model, 'product_subcategory_name') ?>

    <?php // echo $form->field($model, 'product_color_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
