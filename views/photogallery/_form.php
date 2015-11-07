<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ImageCategories;
use app\models\ImageSubcategories;
/* @var $this yii\web\View */
/* @var $model app\models\Photogallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photogallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php   $prod=new ImageCategories();
            $categories = ArrayHelper::map($prod::find()->all(),'image_category_name','image_category_name');
            $prod=new ImageSubcategories();
            $subcategories = ArrayHelper::map($prod::find()->all(),'image_subcategory_name','image_subcategory_name');
    ?>
    <?= $form->field($model, 'image') -> fileInput(); ?> 

    <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'photo_category')->dropDownList($categories) ?>

    <?= $form->field($model, 'photo_subcategory')->dropDownList($subcategories) ?>

    <?= $form->field($model, 'photo_product')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
