<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post')->widget(\yii\redactor\widgets\Redactor::className(),[
    'clientOptions' => [
    	'imageUpload' => \yii\helpers\Url::to(['/redactor/upload/image'])]]) ?>
    

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
