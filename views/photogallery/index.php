<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotogallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photogalleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogallery-index">
     
        
        <?php foreach ($photo_subcategory as  $subcategory =>$category ){ ?>
                <div class="page-header"><?= $category?> - <?= $subcategory?></div>
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
            // 'photo_product',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
