<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsItem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'product_item_name',
            'product_item_price',
            'product_item_short_descr',
            'product_item_img_char',
            'product_item_3ds_link',
            'product_item_long_descr_main',
            'product_item_long_descr_additional',
        ],
    ]) ?>

</div>
