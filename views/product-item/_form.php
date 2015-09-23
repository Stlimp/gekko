<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_item_price')->textInput() ?>

    <?= $form->field($model, 'product_item_short_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_item_img_char')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_item_3ds_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_item_long_descr_main')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_item_long_descr_additional')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
