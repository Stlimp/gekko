<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videogallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videogallery-index">
    <div class="jumbotron">
        <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>

         <div class="gallery" >   
            <?php foreach ($videos as $videoItem){ ?>
                <div class="videoblock" style="width:20%;float:none;vertical-align:top;text-align: justify;">
                    <a target="_blank" href="<?= $videoItem->video_link ?>"><img src="<?= $videoItem->video_thumbnail?>"></a>
                    <p style="margin:0;"><b><?= $videoItem->video_name?></b></p>
                    <p style="margin:0;"><?= $videoItem->video_description?></p>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

