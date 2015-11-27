<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductColor */

$this->title = $model->product_color_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-color-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_color_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_color_id], [
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
            'product_color_id',
            'product_color_name',
            'product_article',
            'product_3ds_link',
            'product_angular',
            'product_regular',
            'product_price',
            'product_subcategory_name',
            'product_color_image',
        ],
    ]) ?>

</div>
