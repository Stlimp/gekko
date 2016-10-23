<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'gekkostone';
?>

<div class="news-index" >
    <div class="jumbotron">
        <div class="news" style="width:80%;float:left;">
            <div class="page-header" style="float:left;">НОВОСТИ

            </div>
        <?php foreach (array_reverse($post) as $postItem){ ?>
            <div class="post postid<?= $postItem->id?>" style="float:left;margin-bottom:20px;width:100%">
                <div class="post-image" style="width:15%;float:left;"> 
                    <a href="/web/index.php?r=news%2Fview&amp;id=<?= $postItem->id?>"><img src="<?= $postItem->post_image?>" style="width:100%;height:100px;border-radius: 10px 0  10px;"></a>
                </div>
                <div class="post-text" style="width:85%;float:left;">
                    <div class="post-date" style="width:17%;float:left;">
                        <span style="padding-left:30px;"><b><?=date('d.m.Y', strtotime($postItem->date)); ?>г. </span>
                    </div>
                    <div class="post-content" style="width:83%;float:left;display:inline-block;">
                        <a class="link_grey_color" href="/web/index.php?r=news%2Fview&amp;id=<?= $postItem->id?>"><u><?=$postItem->header; ?></u></a></b>
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
                        <li <?php if (!isset($_GET["NewsSearch"]["date"])){ echo "class=\"selected\"";} else { echo "class=\"unselected\"";} ?>><a class="link_grey_color" href="/web/index.php?r=news%2Findex">ВСЕ ГОДА</a></li>
                        <?php foreach ($yearFilter as $yearItem){ ?>
                            <li <?php if (isset($_GET["NewsSearch"]["date"])&&($_GET["NewsSearch"]["date"]==$yearItem)){ echo "class=\"selected\"";} else { echo "class=\"unselected\"";} ?>><a class="link_grey_color" href="/web/index.php?NewsSearch%5Bdate%5D=<?= $yearItem ?>&r=news%2Findex"><span class="numbers"><?= $yearItem ?></span></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="page-header" style="float:left;background: #FFFFFF;border:0;">ПУБЛИКАЦИИ В СЕТИ</div>
                    <ul style=" list-style-type: none;">
                        <?php foreach ($press as $link){ ?>
                            <li><a class="link_grey_color" href="<?= $link->link?>" target="_blank"><?= $link->link_name ?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
</div>
</div>