<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\IndexAsset;




mb_internal_encoding("UTF-8");
/* @var $this \yii\web\View */
/* @var $content string */
/*LAYOUT USED ONLY FOR INDEX.PHP!!!*/
$this->registerJsFile('@web/js/social-likes.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/menu.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/likes.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="декоративный камень, декоративный кирпич, античный кирпич, состаренный кирпич, декоративная плитка, искусственный камень, искусственный декоративный камень">
    <meta name="Description" content="Компания GEKKOSTONE - производитель декоративного камня премиум-качества. Скалистая гора, античный кирпич, состаренный кирпич, пальчики - идеальные фактуры для внутренней и внешней отделки зданий">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/social-likes_classic.css">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<body>

<?php $this->beginBody() ?>
<div id="upper"></div>
    <div class="wrap">
    <?php include './../views/layouts/menu.php' ?>       
    <div class="container">  
        <?php 
        use yii\bootstrap\Carousel;   
        echo Carousel::widget([
            'options' => ['class' => 'carousel slide carousel-fade ','data-ride'=>'carousel','data-interval'=>'5000'],
            'items' => [
                // the item contains only the image
                ['content' => '<img src="images/background/background1.jpg"/>'],
                // equivalent to the above
                ['content' => '<img src="images/background/background2.jpg"/>'],
                // the item contains both the image and the caption
                ['content' => '<img src="images/background/background3.jpg"/>'],
                ['content' => '<img src="images/background/background4.jpg"/>'],
                ['content' => '<img src="images/background/background5.jpg"/>'],
            ]
        ]);
        ?>
            <div class="col-md-12 hover-slide text-center" id="scroll" style="text-align:right;bottom: 100px;";><a href="#downer"><div class="button-down"></div></a></div>
            <div id="downer"></div>
            <?= $content ?>
        </div> 
    </div>
    <footer class="footer first-footer">
        <div class="footer-image"><a href="index.php?r=site%2Fsitemap"><p>КАРТА САЙТА</p></a></div>
        <div class="footer-image"><a href="index.php?r=site%2Fcart"><p id="mygallery">МОЯ ГАЛЕРЕЯ</p></a></div>
        <div class="footer-image"><a href="index.php?r=site%2Fpartnership"><p>ПАРТНЕРСТВО</p></a></div>
        <div class="footer-image"><a href="index.php?r=site%2Fcontact"><p>КОНТАКТЫ</p></a></div>
        <div class="footer-image"><a href="index.php?r=site%2Fpublicoffer"><p>ПУБЛИЧНАЯ ОФЕРТА</p></a></div>
        <div class="footer-image"><a href=""><p>АВТОРСКИЕ ПРАВА</p></a></div>
    </footer>
<span><p style="text-align:center;vertical-align:middle;font-family:Century Gothic;font-size:10px;">©GEKKOSTONE <?php echo date("Y"); ?></p></span>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
