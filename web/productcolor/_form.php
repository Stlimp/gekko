<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductColor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-color-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_color_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_article')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_3ds_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_subcategory_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
