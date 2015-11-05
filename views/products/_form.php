<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ProductCategories;
/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'product_image') -> fileInput()->label('Изображение'); ?> 
    <?php $prod=new ProductCategories();
            $categories = ArrayHelper::map($prod::find()->all(),'product_category_name','product_category_name');

    ?>
    <?= $form->field($model, 'product_category_id')->dropDownList($categories) ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'product_3ds') -> fileInput() ->label('Файл 3DS');?> 
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
