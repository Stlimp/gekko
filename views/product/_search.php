<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_product_id') ?>

    <?= $form->field($model, 'product_product_name') ?>

    <?= $form->field($model, 'product_product_image') ?>

    <?= $form->field($model, 'product_category_name') ?>

    <?= $form->field($model, 'product_regular_size') ?>

    <?php // echo $form->field($model, 'product_regular_thickness') ?>

    <?php // echo $form->field($model, 'product_regular_weight') ?>

    <?php // echo $form->field($model, 'product_regular_quantity') ?>

    <?php // echo $form->field($model, 'product_regular_repeatability') ?>


    <?php // echo $form->field($model, 'product_angular_size') ?>

    <?php // echo $form->field($model, 'product_angular_thickness') ?>

    <?php // echo $form->field($model, 'product_angular_weight') ?>

    <?php // echo $form->field($model, 'product_angular_quantity') ?>

    <?php // echo $form->field($model, 'product_angular_repeatability') ?>

    <?php // echo $form->field($model, 'product_regular_calculation_size') ?>

    <?php // echo $form->field($model, 'product_angular_calculation_size') ?>

    <?php // echo $form->field($model, 'product_angular_calculation_size_square') ?>

    <?php // echo $form->field($model, 'product_price') ?>

    <?php // echo $form->field($model, 'product_regular_seamless_calculation_size') ?>

    <?php // echo $form->field($model, 'product_angular_seamless_calculation_size') ?>

    <?php // echo $form->field($model, 'product_angular_seamless_calculation_size_square') ?>

    <?php // echo $form->field($model, 'product_price_seamless') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
