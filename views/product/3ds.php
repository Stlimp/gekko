<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>

 <div class="gallery">   
    <?php foreach ($categories as $category): ?>
       <?php foreach ($products as $productItem): ?>
            <?php if (!strcmp($category->product_category_name,$productItem->product_category_name)): ?>

                <div class="product">
                    <a href="http://gekkostone/web/index.php"><img src="http://stroykadoma.org/wp-content/uploads/2015/11/m_24.jpg" alt="" width="220" height="150"></a>
                    <h3 style="margin:0"><?= $productItem->product_product_name?></h3>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>

</div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_product_id',
            'product_product_name',
            'product_category_name',
            'product_category_short_description',
            'product_category_short_characteristics',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
