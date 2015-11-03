<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'gekkostone';
?>
<style>
    a{
        color:#666666;
    }
    a:hover{
        color:#000000;
    }
    .post{
        padding-left: 50px;

    }
</style>
<div class="news-index" >
    <div class="news" style="width:80%;float:left;">
        <div class="page-header" style="float:left;">НОВОСТИ</div>
        <?php foreach (array_reverse($post) as $postItem){ ?>
        <div class="post postid<?= $postItem->id?>" style="float:left;margin-bottom:20px;    ">
             <div class="post-image" style="width:15%;float:left;"> 
                <img src="<?= $postItem->post_image?>" style="width:100%;height:100px;border:1px solid #000;border-radius: 10px 0  10px;">
             </div>
             <div class="post-text" style="width:85%;float:left;">
                <div class="post-date" style="width:17%;float:left;">
                    <span style="padding-left:30px;"><b><?=date('d.m.Y', strtotime($postItem->date)); ?>г. </span>
                </div>
                <div class="post-content" style="width:83%;float:left;">
                <a href="/web/index.php?r=news%2Fview&amp;id=<?= $postItem->id?>"><u><?=$postItem->header; ?></u></a></b>
                <p><?= mb_substr(strip_tags($postItem->post),0,248) ?> ...</p>
                </div>
             </div>
        </div>
 
            <?php } ?>
    </div>

    <div class="news-selector" style="width:20%;float:left;">
        <div class="page-header" style="float:left;">АРХИВ НОВОСТЕЙ</div>
        <div class="year left-side-half-text" style="height:250px;">
            <ul>
                <li><a href="/web/index.php?r=news%2Findex">Все записи</a></li>
                <?php foreach ($yearFilter as $yearItem){ ?>
                    <li class="unselected"><a href="/web/index.php?NewsSearch%5Bdate%5D=<?= $yearItem ?>&r=news%2Findex"><?= $yearItem ?></a></li>
                <?php }?>
            </ul>
 
        </div>
        <div class="page-header" style="float:left;background: #FFFFFF;">ПУБЛИКАЦИИ В СЕТИ</div>
            <ul style=" list-style-type: none;padding-left:0px;">
                <?php foreach ($press as $link){ ?>
                    <li><a href="<?= $link->link?>" target="_blank"><?= $link->link_name ?></a></li>
                <?php }?>
            </ul>

    </div>

    

</div>
<p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Press', ['press',], ['class' => 'btn btn-success']) ?>
        
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