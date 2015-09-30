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
    <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>

 <div class="gallery" >   
    <?php foreach ($videos as $videoItem){ ?>
        <div class="product" style="width:20%;float:none;vertical-align:top;text-align: justify;">
            <a target="_blank" href="<?= $videoItem->video_link ?>"><img src="<?= $videoItem->video_thumbnail?>"  width="220" height="150"></a>
            <p style="margin:0;"><b><?= $videoItem->video_name?></b></p>
            <p style="margin:0;"><?= $videoItem->video_description?></p>
        </div>
    <?php } ?>
</div>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'video_name',
            'video_description',
            'video_link',
            'video_thumbnail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

