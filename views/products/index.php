<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">
    <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>

 <div class="photogallery">   
    <?php foreach ($products as $productItem){ ?>
        <div class="photogallery-item">
        <a target="_blank" href="<?= $productItem->product_name ?>.html"><img src="<?= $productItem->product_image?>" alt="<?= $productItem->product_name?>" width="220" height="150"></a>
        <h3 style="margin:0"><?= $productItem->product_name?></h3>
        </div>
    <?php } ?>
</div>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_image',
            'product_category',
            'product_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
