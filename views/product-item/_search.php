<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_item_name') ?>

    <?= $form->field($model, 'product_item_price') ?>

    <?= $form->field($model, 'product_item_short_descr') ?>

    <?= $form->field($model, 'product_item_img_char') ?>

    <?php // echo $form->field($model, 'product_item_3ds_link') ?>

    <?php // echo $form->field($model, 'product_item_long_descr_main') ?>

    <?php // echo $form->field($model, 'product_item_long_descr_additional') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
