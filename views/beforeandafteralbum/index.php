<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ProductColor;

mb_internal_encoding("UTF-8");
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beforeandafter Albums';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="beforeandafter-album-index">
    <div class="jumbotron">
        <div class="page-header">ФОТОГАЛЕРЕЯ - <b>До и после</b></div>

        <?php foreach ($dataProvider->getModels() as $album){?>
        <div class="beforeandafter_album"> 
             <div class="album">
                 <p><?= mb_strtoupper($album->description)." - г.". $album->city?></p>
                
                <?php foreach ($dataProviderPhotos->getModels() as $photo){
                    if ($album->album_name==$photo->album_name) {
                ?>

                <div class="photogallery-item">
                    <a href="<?= $photo->photo_image?>" rel="fancybox"><img src="<?= $photo->photo_image?>" alt="<?= $image?>" width="100" height="75"></a>
                </div>
                <?php }} ?>

            </div>
            <div class="product_before_and_after">
                <div class="product">
                    <h5 style="text-align:center;"><b><?= mb_strtoupper(ProductColor::findOne($album->product_color_id)->product_subcategory_name)?></b></h5>
                    <a href="?ProductColorSearch%5Bproduct_subcategory_name%5D=<?=ProductColor::findOne($album->product_color_id)->product_subcategory_name?>&amp;r=productcolor%2Findex"><img src="<?= ProductColor::findOne($album->product_color_id)->product_color_image?>" alt="" width="220" height="150"></a>
                    <h5 style="margin:0;text-align:center;"><b><?= ProductColor::findOne($album->product_color_id)->product_color_name?></b></h5>
                </div>
            </div>

        </div>
       <!--  <hr> -->

    <?php } ?>

    <?php
                            echo newerton\fancybox\FancyBox::widget([
                                'target' => 'a[rel=fancybox]',
                                'helpers' => true,
                                'mouse' => false,
                                'config' => [

                                    'maxWidth' => '100%',
                                    'maxHeight' => '100%',
                                    'playSpeed' => 7000,
                                    'padding' => 0,
                                    'fitToView' => false,
                                    'width' => '100%',
                                    'height' => '100%',
                                    'autoSize' => false,
                                    'closeClick' => false,
                                    'openEffect' => 'elastic',
                                    'closeEffect' => 'elastic',
                                    'prevEffect' => 'elastic',
                                    'nextEffect' => 'elastic',
                                    'closeBtn' => true,
                                    'openOpacity' => true,
                                    'arrows' =>true,
                                    'title' => ['type' => 'inside'],
                                    'title' => $album_name,
                                    'autoResize'=>true,
                                ]
                             ]);
                        ?>

    </div>
    <div class="block" style="display:inline-block;width:100%;height:100%;padding:0px 50px 0px 50px;">
            <?php include './../views/layouts/randomfooter.php' ?>
    </div>

</div>
<!-- 
    <p>
        <?= Html::a('Create Beforeandafter Album', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'album_name',
            'city',
            'description:ntext',
            'product_color_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->
