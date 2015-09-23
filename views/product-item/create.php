<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductsItem */

$this->title = 'Create Products Item';
$this->params['breadcrumbs'][] = ['label' => 'Products Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
