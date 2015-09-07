<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Photogallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photogallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'image') -> fileInput(); ?> 

    <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_subcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_product')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
