<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'gekkostone';
?>
<div class="news-index" >

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="news" style="width:80%;float:left;">
        <div class="post-header left-side-half-header" style="float:left;">НОВОСТИ</div>
        <?php foreach ($post as $postItem){ ?>
        <div class="post postid<?= $postItem->id?>" style="float:left;">
             <div class="post-image" style="width:15%;float:left;"> 
                <img src="/web/images/content/news/guest/381dc6cd0e-2015-07-18-141830.png" style="float:right;width:100%;height:100px;border:1px solid #000;border-radius: 10px 0  10px;">
             </div>
             <div class="post-text" style="width:85%;float:left;">
                <h1><?=date('Y', $postItem->date);?></h1>
                
                <h4><?= mb_substr(strip_tags($postItem->post),0,248) ?> ...</h4>



             </div>
        </div>
            <?php } ?>
    </div>

    <div class="news-selector" style="width:20%;float:left;">
        <div class="archive left-side-half-header" style="float:left;">АРХИВ НОВОСТЕЙ 
        </div>
        <div class="press left-side-half-header" style="float:left;">ПУБЛИКАЦИИ В СЕТИ</div>
    </div>

    

</div>
<p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'post_image',
            'post:ntext',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>