<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Product;
use app\models\ProductCategories;
use app\models\ImageCategories;
use app\models\ImageSubcategories;
$this->title = 'Декоративный камень GEKKOSTONE';
mb_internal_encoding("UTF-8");
/* @var $this \yii\web\View */
/* @var $content string */
$this->registerJsFile('@web/js/social-likes.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/menu.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/likes.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/bootstrap.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--IE bootstrp fix!-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="декоративный камень, декоративный кирпич, античный кирпич, состаренный кирпич, декоративная плитка, искусственный камень, искусственный декоративный камень">
    <meta name="Description" content="Компания Gekkostone - производитель декоративного камня высочайшего качества. Оптовые поставки искусственного декоративного камня во все страны мира. Скалистая гора, античный кирпич, состаренный кирпич, дамские пальчики - идеальные фактуры для внутренней и внешней отделки зданий">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/social-likes_classic.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>

<?php $this->beginBody() ?>

    <div class="wrap">
        <?php include './../views/layouts/menu.php' ?>  

        <div class="container">  
            <?= $content ?>
        </div> 

    </div>
    <footer class="footer first-footer">
        <?php include './../views/layouts/randomfooter.php' ?>
    </footer>

    <footer class="footer second-footer">
            <div class="footer-image"><a href="index.php?r=site%2Fsitemap"><p>КАРТА САЙТА</p></a></div>
            <div class="footer-image"><a href="index.php?r=site%2Fcart"><p id="mygallery">МОЯ ГАЛЕРЕЯ</p></a></div>
            <div class="footer-image"><a href="index.php?r=site%2Fpartnership"><p>ПАРТНЕРСТВО</p></a></div>
            <div class="footer-image"><a href="index.php?r=site%2Fcontact"><p>КОНТАКТЫ</p></a></div>
            <div class="footer-image"><a href="index.php?r=site%2Fpublicoffer"><p>ПУБЛИЧНАЯ ОФЕРТА</p></a></div>
            <div class="footer-image"><a href="index.php?r=site%2Fcopyright"><p>АВТОРСКИЕ ПРАВА</p></a></div>
        
    </footer>
<span><p style="text-align:center;vertical-align:middle;font-family:Century Gothic;font-size:10px;">©GEKKOSTONE <?php echo date("Y"); ?></p></span>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



<?php $this->endBody() ?>

</body>
</html>
</html>
<?php $this->endPage() ?>