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

 <div class="gallery">   
    <?php foreach ($dataProvider as $productItem){ ?>
        <div class="product">
        <a target="_blank" href="http://gekkostone/web/index.php?ProductItemSearch%5Bproduct_item_name%5D=<?= $productItem->product_name ?>&r=product-item%2Findex"><img src="<?= $productItem->product_image?>" alt="<?= $productItem->product_name?>" width="220" height="150"></a>
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

            'product_id',
            'product_image',
            'product_category_id',
            'product_name',
            'product_3ds',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
