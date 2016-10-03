<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSeam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-seam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_seam_id')->textInput() ?>

    <?= $form->field($model, 'product_seam_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_seam_product_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_seam_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_seam_miniature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_seam_image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
