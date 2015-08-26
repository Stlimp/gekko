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
        <?php foreach (array_reverse($post) as $postItem){ ?>
        <div class="post postid<?= $postItem->id?>" style="float:left;">
             <div class="post-image" style="width:15%;float:left;"> 
                <img src="<?= $postItem->post_image?>" style="width:100%;height:100px;border:1px solid #000;border-radius: 10px 0  10px;">
             </div>
             <div class="post-text" style="width:85%;float:left;">
                <h3 ><?=date('d.m.Y', strtotime($postItem->date)); ?>г. - <a href="/web/index.php?r=news%2Fview&amp;id=<?= $postItem->id?>"><u><?=$postItem->header; ?></u></a></h3>
                <h4><?= mb_substr(strip_tags($postItem->post),0,248) ?> ...</h4>

             </div>
        </div>
 
            <?php } ?>
    </div>

    <div class="news-selector" style="width:20%;float:left;">
        <div class="archive left-side-half-header" style="float:left;">АРХИВ НОВОСТЕЙ</div>
        <div class="year left-side-half-text">
            <ul>
                <li><a href="/web/index.php?r=news%2Findex">Все записи</a></li>
                <?php foreach ($yearFilter as $yearItem){ ?>
                    <li><a href="/web/index.php?NewsSearch%5Bdate%5D=<?= $yearItem ?>&r=news%2Findex"><?= $yearItem ?></a></li>
                <?php }?>
            </ul>
 
        </div>
        <div class="press left-side-half-header" style="float:left;">ПУБЛИКАЦИИ В СЕТИ</div>
    </div>

    

</div>
<p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

       <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' =>$searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'header',
                'post_image',
                'post:ntext',
                'date',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>