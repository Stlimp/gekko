<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");
/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotogallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photogalleries';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
ul {
   list-style: none;
   text-align: right;
   display:inline;
}

.dots li:before {
   content: "•";
   font-size: 150%; /* or whatever */
   padding-right: 5px;
   
}
.dots li {
    width: auto;
    float: right;
    height: 25px;
}
</style>

<div class="photogallery-index">
     <div class="jumbotron">
       
        <?php $redDot =1; foreach ($photo_subcategory as  $subcategory =>$category ){  ?>
                <div class="page-header"><?= mb_strtoupper($category)?> - <b><?= $subcategory?></b> <ul class="dots">
                    <?php  $numberOfDots = count(array_keys($photo_subcategory,$category));for ($i = $numberOfDots; $i >= 1; $i--){ if ($i == $redDot){?> <li style="color:#D0272E"></li> <?php }else{; ?> <li></li> <?php }; ?> <?php }; ?></ul> </div>
                    <?php $redDot=$redDot%$numberOfDots;?>
                    <?php $redDot ++; ?> 
                    <div class="photogallery">
                <?php foreach ($photo_image as  $image=> $subcategoryItem ){ ?>
                    <?php if( $subcategoryItem == $subcategory ){ ?>
                    <div class="photogallery-item">
                        <a href="<?= $image?>" rel="fancybox"><img src="<?= $image?>" alt="<?= $image?>" width="100" height="75"></a>
                    </div>
                    <?php }?>
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
                                'title' => $subcategory,
                                'autoResize'=>true,
                            ]
                         ]);
                    ?>
                <?php }?>



                </div>
        <?php }?>


    <p>
        <?= Html::a('Create Photogallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo_name',
            'photo_category',
            'photo_subcategory',
            'photo_image',
            'photo_product',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
