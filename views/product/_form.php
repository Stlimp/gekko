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

    <?= $form->field($model, 'product_regular_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular_thickness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular_weight')->textInput() ?>

    <?= $form->field($model, 'product_regular_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular_repeatability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular_warning')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular_thickness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular_weight')->textInput() ?>

    <?= $form->field($model, 'product_angular_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular_repeatability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_angular_warning')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_regular_calculation_size')->textInput() ?>

    <?= $form->field($model, 'product_angular_calculation_size')->textInput() ?>

    <?= $form->field($model, 'product_angular_calculation_size_square')->textInput() ?>

    <?= $form->field($model, 'product_price')->textInput() ?>

    <?= $form->field($model, 'product_regular_seamless_calculation_size')->textInput() ?>

    <?= $form->field($model, 'product_angular_seamless_calculation_size')->textInput() ?>

    <?= $form->field($model, 'product_angular_seamless_calculation_size_square')->textInput() ?>

    <?= $form->field($model, 'product_price_seamless')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
