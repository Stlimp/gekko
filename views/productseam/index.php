<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Seams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-seam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Seam', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_seam_id',
            'product_seam_name',
            'product_seam_product_color',
            'product_seam_postfix',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>