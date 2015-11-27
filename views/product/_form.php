<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_product_id')->textInput() ?>

    <?= $form->field($model, 'product_product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_product_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_category_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_category_short_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_category_short_characteristics')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
