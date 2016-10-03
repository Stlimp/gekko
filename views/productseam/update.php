<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSeam */

$this->title = 'Update Product Seam: ' . $model->product_seam_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Seams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_seam_id, 'url' => ['view', 'id' => $model->product_seam_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-seam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
