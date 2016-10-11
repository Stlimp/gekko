<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSeam */

$this->title = $model->product_seam_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Seams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-seam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_seam_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_seam_id], [
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
            'product_seam_id',
            'product_seam_name',
            'product_seam_product_color',
            'product_seam_postfix',
        ],
    ]) ?>

</div>
