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
   
    <?php $models = array_values($dataProvider->getModels());?>

            <?php foreach ($models as $productitem ) {?>
                <div class="left-half">
                    <div class="left-side-half-header"><?= $productitem->product_item_name?>  <?= $productitem->product_item_price?> руб/м</div>
                
                    <div class="left-side-half-text">
                        <p><?= $productitem->product_item_short_descr?></p>
                        <span style="display:inline-block;width:100%;">
                            <p><?= $productitem->product_item_img_char?>
                            <img src="images\content\certificates\TP.png" align="right"></p>
                        </span>
                        
                        <p> <a href="<?=$productitem->product_item_3ds_link?>" target="_blank">СКАЧАТЬ</a> «ТЕКСТУРУ» для <b>3DS</b>
                            <span style="float:right;"><a href="#" target="_blank">ДОБАВИТЬ</a> расцветку в «МОЮ ГАЛЕРЕЮ» </b></span>
                        </p>

                    </div>
                </div>
            <?php } ?>

    
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
             'product_item_3ds_link',
             'product_item_long_descr_main',
             'product_item_long_descr_additional',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
