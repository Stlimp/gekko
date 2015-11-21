<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\IndexAsset;

/* @var $this \yii\web\View */
/* @var $content string */
/*LAYOUT USED ONLY FOR INDEX.PHP!!!*/

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
    <meta name="Description" content="Компания Gekkostone - производитель декоративного камня высочайшего качества. Оптовые поставки искусственного декоративного камня во все страны мира. Скалистая гора, античный кирпич, состаренный кирпич, дамские пальчики - идеальные фактуры для внутренней и внешней отделки зданий">
    <link rel="stylesheet" href="css/social-likes_classic.css">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<style>
    
    .button-down{
        width:50px;
        height:50px;
        background-image: url(images/down.png);
        background-size: contain;
        display:inline-block;
        background-repeat: no-repeat;
        background-position: center; 
    }
    .button-down:hover{
        width:50px;
        height:50px;
        background-image: url(images/down-hover.png);
        background-size: contain;
        display:inline-block;
    }
</style>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<body>

<?php $this->beginBody() ?>
<div id="upper"></div>
    <div class="wrap">
        <?php
        $this->registerJsFile('@web/js/social-likes.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile('@web/js/menu.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
            
            NavBar::begin([
                'brandLabel' => Html::img('images/logo.png', ['alt'=>Yii::$app->name]),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            ?>
            <ul id="nav" class="nav1">
                <a href="index.php?r=site%2Fpartnership">парнерство</a>
                <a href="index.php?r=news%2Findex">новости</a>
                <a href="index.php?r=site%2Fprice">прайс</a>
                <a href="index.php?r=site%2Fcontact">контакты</a>
                <a href="#">поиск</a>
                <a href="#">моя галлерея</a>
                <div class="iconblock1">
                    <a href="#"><img src="images/icons/ok.png" alt="" onmouseover="this.src='images/icons/okhover.png';" onmouseout="this.src='images/icons/ok.png';"></a>
                <a href="#"><img src="images/icons/vk.png" alt="" onmouseover="this.src='images/icons/vkhover.png';" onmouseout="this.src='images/icons/vk.png';"></a>
                <a href="#"><img src="images/icons/facebook.png" alt="" onmouseover="this.src='images/icons/facebookhover.png';" onmouseout="this.src='images/icons/facebook.png';"></a>
                <a href="#"><img src="images/icons/twitter.png" alt="" onmouseover="this.src='images/icons/twitterhover.png';" onmouseout="this.src='images/icons/twitter.png';"></a>
                <a href="#"><img src="images/icons/youtube.png" alt="" onmouseover="this.src='images/icons/youtubehover.png';" onmouseout="this.src='images/icons/youtube.png';"></a>
                </div>
                <div class="iconblock2">
                   <a href="tel:+123"><img src="images/icons/viber.png" alt="" onmouseover="this.src='images/icons/viberhover.png';" onmouseout="this.src='images/icons/viber.png';"></a>
                <a href="#"><img src="images/icons/skype.png" alt="" onmouseover="this.src='images/icons/skypehover.png';" onmouseout="this.src='images/icons/skype.png';"></a>
                <a href="#" target="_top" ><img src="images/icons/email.png" alt="" onmouseover="this.src='images/icons/emailhover.png';" onmouseout="this.src='images/icons/email.png';"></a> 
                </div>   
            </ul>
            <ul id="nav" class="nav2">
                    <li class="menu-item"><a href="#">УСЛУГИ</a> 
                    <ul> 
                        <li><a href="#">ДИЗАЙН-ПРОЕКТ</a></li> 
                        <li><a href="#">ПОДБОР КАМНЯ</a></li>
                        <li><a href="#">ДОСТАВКА КАМНЯ</a></li> 
                        <li><a href="#">ОБЛИЦОВКА</a></li> 
                    </ul> 
                    </li>    
                <li id="delimiter"><a>|</a></li>  
                <li class="menu-item"><a href="index.php?r=stores%2Findex">ГДЕ КУПИТЬ</a></li> 
                <li id="delimiter"><a>|</a></li> 
                <li class="menu-item"><a href="#">ИНФОРМАЦИЯ</a> 
                    <ul> 
                        <li><a href="index.php?r=site%2Frocklaying">УКЛАДКА КАМНЯ</a></li> 
                        <li><a href="index.php?r=faq%2Findex">ВОПРОС - ОТВЕТ</a></li> 
                        <li><a href="index.php?r=certificates%2Findex">ТЕХНИЧЕСКИЕ ДАННЫЕ</a></li> 
                        <li><a href="index.php?r=site%2Fwarning">ЦВЕТОПЕРЕДАЧА</a></li> 
                        <li><a href="index.php?r=site%2Fwarranty">ГАРАНТИЯ КАЧЕСТВА</a></li> 
                        <li><a href="index.php?r=site%2Fpublicoffer">ПУБЛИЧНАЯ ОФЕРТА</a></li> 
                        <li><a href="index.php?r=site%2Fprice">КАТАЛОГ И ПРАЙС-ЛИСТ</a></li> 
                        <li><a href="index.php?r=products%2F3ds">ТЕКСТУРЫ КАМНЯ <span style ="color:#4D4D4D;background-color:white;border-radius: 3px 0px 3px 0px;">3DS</span> </a></li> 
                    </ul> 
                </li> 
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="#">ФОТОГАЛЛЕРЕЯ</a> 
                    <ul> 
                        <li><a href="index.php?PhotogallerySearch%5Bphoto_category%5D=%D0%96%D0%B8%D0%BB%D1%8B%D0%B5+%D0%B4%D0%BE%D0%BC%D0%B0&PhotogallerySearch%5Bphoto_subcategory%5D=&r=photogallery%2Findex">ЖИЛЫЕ ДОМА И КВАРТИРЫ</a></li> 
                        <li><a href="index.php?PhotogallerySearch%5Bphoto_category%5D=%D0%9A%D0%BE%D0%BC%D0%BC&PhotogallerySearch%5Bphoto_subcategory%5D=&r=photogallery%2Findex">КОММЕРЧЕСКИЕ ОБЪЕКТЫ</a></li> 
                        <li><a href="#">ДО И ПОСЛЕ</a></li> 
                         <li><a href="#">menu-item Games <span style="color:#FFFFFF">&#9658;</span></a>             
                            <ul> 
                                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                                <ul> 
                                    <li><a href="#">menu-item Pool</a></li> 
                                    <li><a href="#">Chess</a></li> 
                                </ul> 
                                </li> 
                            </ul> 
                        </li> 
                    </ul> 
                </li>
                <li id="delimiter"><a>|</a></li> 
                <li class="menu-item"><a href="#">ПРОДУКЦИЯ</a> 
                    <ul> 
                        <li><a href="index.php?r=products%2Findex">ВСЯ ПРОДУКЦИЯ</a></li> 
                        <li><a href="#">КИРПИЧ ТОНКИЙ <span>&#9658;</span></a>             
                            <ul> 
                                <li><a href="#"><span>&#9679;</span> АНТИЧНЫЙ</a></li> 
                                <li><a href="#"><span>&#9679;</span> КЛАССИЧЕСКИЙ</a></li> 
                                <li><a href="#"><span>&#9679;</span> СОСТАРЕННЫЙ</a></li>  
                            </ul> 
                        </li>
                        <li><a href="#">КИРПИЧ ОБЛИЦОВОЧНЫЙ</a></li>
                        <li><a href="#">КАМЕНЬ ОБЛИЦОВОЧНЫЙ</a></li>
                        <li><a href="#">СОПУТСТВУЮЩИЕ ТОВАРЫ</a></li>
                    </ul> 
                </li>
                <li id="delimiter"><a>|</a></li> 
                <li class="menu-item"><a href="#">О КОМПАНИИ</a> 
                        <ul> 
                            <li><a href="index.php?r=site%2Fcompany">GEKKOSTONE</a></li> 
                            <li><a href="index.php?r=site%2Fadvantages">ПРЕИМУЩЕСТВА</a></li>
                            <li><a href="index.php?r=news%2Findex">НОВОСТИ</a></li>
                            <li><a href="index.php?r=site%2Fvacancy">ВАКАНСИИ</a></li>
                            <li><a href="index.php?r=site%2Ffeedback">ОТЗЫВЫ И ПРЕДЛОЖЕНИЯ</a></li>
                            <li><a href="index.php?r=site%2Fpartnership">ПАРТНЕРСТВО</a></li> 
                            <li><a href="index.php?r=site%2Fcontact">КОНТАКТЫ</a></li>    
                        </ul> 
                </li> 
            </ul> 
        <?php
                    NavBar::end();
        ?>



    <div class="container">  
        <?php 
   use yii\bootstrap\Carousel;   
echo Carousel::widget([
    'options' => ['class' => 'carousel slide carousel-fade ','data-ride'=>'carousel','data-interval'=>'5000'],
    'items' => [
        // the item contains only the image
        ['content' => '<img src="images/background/1.png"/>'],
        // equivalent to the above
        ['content' => '<img src="images/background/2.png"/>'],
        // the item contains both the image and the caption
        ['content' => '<img src="images/background/background3.jpg"/>'],
        ['content' => '<img src="images/background/background4.jpg"/>'],
    ]
]);
?>
             <!-- <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>!-->
            <div class="col-md-12 hover-slide text-center" id="scroll" style="text-align:right;bottom: 150px;right:50px;";> <a href="#downer"><div class="button-down"></div></a></div>
            <div id="downer"></div>
            <?= $content ?>
        </div> 
    </div>
    <footer class="footer" style="padding:0;height:80px;text-align:justify;padding-left:50px;padding-right:50px;">
        <div class="social"><p>СОЦИАЛЬНЫЕ СЕТИ</p>
            <div class="social-likes  social-likes_notext">
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
                <div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
                <br>
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
                <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках"></div>
            </div>
        </div>
        <div class="footer-image"><p>КАРТА САЙТА</p><div class="footer-element" id="sitemap" ></div></div>
        <div class="footer-image"><p>МОЯ ГАЛЛЕРЕЯ</p><div class="footer-element" id="gallery"></div></div>
        <div class="footer-image"><p>ПАРТНЕРСТВО</p><div class="footer-element" id="partnership"></div></div>
        <div class="footer-image"><p>КОНТАКТЫ</p><div class="footer-element" id="contacts"></div></div>
        <div class="footer-image"><p>ПУБЛИЧНАЯ ОФЕРТА</p><div class="footer-element" id="publicoffer"></div></div>
        <div class="footer-image"><p>АВТОРСКИЕ ПРАВА</p><div class="footer-element" id="copyright"></div></div>
    </footer>
<span><p style="text-align:center;vertical-align:middle;font-family:Century Gothic;">©GEKKOSTONE <?php echo date("Y"); ?></p></span>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



<?php $this->endBody() ?>
</body>

<!-- script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script !-->

<script type="text/javascript" class="noprint">
    $(document).ready(function(){
        /*Menu hover. Replaced css way ov hover*/
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
             }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            /*Menu hover. Replaced css way ov hover*/
        });

    });
    
</script> 

<script type="text/javascript">

$('.social-likes').socialLikes({
    url: 'http://gekkostone.com',
    title: 'Декоративный камень Gekkostone!',
    counters: true,
    zeroes: 'yes'

});
</script>
</html>
<?php $this->endPage() ?>