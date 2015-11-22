<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductCategories */

$this->title = 'Update Product Categories: ' . ' ' . $model->product_category_name;
$this->params['breadcrumbs'][] = ['label' => 'Product Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_category_name, 'url' => ['view', 'id' => $model->product_category_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
