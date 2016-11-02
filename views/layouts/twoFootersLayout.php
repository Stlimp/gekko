<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\TwoFootersAsset;
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
TwoFootersAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--IE bootstrp fix!-->
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
    <footer class="footer second-footer" style="padding:0;height:180px;text-align:justify;padding-left:50px;padding-right:50px;">
        <div class="second-footer-half">
            <a href="" target="_blank">скачать общий <span style="color: #D0272E">price</span></a>
            <div class="footer-widget">
                <?php 
                    $input = array(
                        '<span class="footer-widget_text">НАТУРАЛЬНЫЙ ИЛИ ИСКУСТВЕННЫЙ?</span><span class="footer-widget_text-small" style="font-family:Corbel"><b>ТЕСТ.</b> Попробуй отыскать натуральные камни среди искусственных камней GEKKOSTONE!</span>',
                        '<span class="footer-widget_text-small" style="font-family:Corbel">Собери собственную галерею из наиболее понравившихся фактур и расцветок!</span>
                         <span class="footer-widget_text">МОЯ ГАЛЕРЕЯ</span>
                         <span class="footer-widget_text-small" style="font-family:Corbel">Расчет необходимого количества камня, его веса и стоимости!</span>'
                        );
                    $key = array_rand($input,1);
                    echo "$input[$key]";  
                 ?>
            </div>

        </div>
        <div class="moto">
            <?php 
                $input = array('ИСКУССТВО ДЕКОРАТИВНОГО <span style="color: #D0272E">К</span>АМНЯ', 'ТВОЕ ПРОСТРАНСТВО, ТВОЙ <span style="color: #D0272E">К</span>АМЕНЬ', 'БУДУЩЕЕ СТРОИТСЯ НА <span style="color: #D0272E">К</span>АМНЕ!', 'СОВЕРШЕННАЯ ФИЛОСОФИЯ <span style="color: #D0272E">К</span>АМНЯ', 'МЫ ДЕЛАЕМ <span style="color: #D0272E">К</span>АМЕНЬ НАТУРАЛЬНЫМ!');
                $key = array_rand($input,1); 
                echo "<span>$input[$key]</span>"; 
             ?>
        </div>
    </footer>
        </div> 
    </div>
         <footer class="footer first-footer">
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