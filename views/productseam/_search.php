<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSeamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-seam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_seam_id') ?>

    <?= $form->field($model, 'product_seam_name') ?>

    <?= $form->field($model, 'product_seam_product_color') ?>

    <?= $form->field($model, 'product_seam_number') ?>

    <?= $form->field($model, 'product_seam_miniature') ?>

    <?php // echo $form->field($model, 'product_seam_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
