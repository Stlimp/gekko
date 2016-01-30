<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->product_product_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_product_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_product_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_product_id',
            'product_product_name',
            'product_product_image',
            'product_category_name',
            'product_characteristics',
            'product_regular_size',
            'product_regular_thickness',
            'product_regular_weight',
            'product_regular_quantity',
            'product_regular_repeatability',
            'product_angular_size',
            'product_angular_thickness',
            'product_angular_weight',
            'product_angular_quantity',
            'product_angular_repeatability',
            'product_regular_calculation_size',
            'product_angular_calculation_size',
            'product_angular_calculation_size_square',
            'product_price',
            'product_regular_seamless_calculation_size',
            'product_angular_seamless_calculation_size',
            'product_angular_seamless_calculation_size_square',
            'product_price_seamless',
        ],
    ]) ?>

</div>
