<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_item_name',
            'product_item_price',
            'product_item_short_descr',
            'product_item_img_char',
            // 'product_item_3ds_link',
            // 'product_item_long_descr_main',
            // 'product_item_long_descr_additional',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
