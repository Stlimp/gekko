<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductSeam */

$this->title = 'Create Product Seam';
$this->params['breadcrumbs'][] = ['label' => 'Product Seams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-seam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
