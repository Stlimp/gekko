<?php

use yii\helpers\Html;
use yii\grid\GridView;

mb_internal_encoding("UTF-8");
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <div class="jumbotron">
        <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>

        <div class="gallery">   
            <?php foreach ($dataProvider->getModels() as $productColor): ?>
                        <div class="product">
                            <a href="<?= $productColor->product_3ds_link?>" target="_blank" alt="" width="220" height="150"><img src="<?= $productColor->product_color_image?>" alt="" width="220" height="150"></a>
                            <h3 style="margin:0"><?=strlen($productColor->product_color_name) > 17 ? mb_substr($productColor->product_color_name,0,17).".":$productColor->product_color_name ?></h3>
                        </div>
                <?php endforeach; ?>
            <br>
        </div>




        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
     
                    'product_color_id',
                    'product_color_name',
                    'product_article',
                    'product_3ds_link',
                    'product_subcategory_name',
                    'product_color_image',
     
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?> 
    </div>
</div>
