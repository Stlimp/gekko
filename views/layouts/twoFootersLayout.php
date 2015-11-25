<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\TwoFootersAsset;
use app\models\Product;
use app\models\ProductCategories;
$this->title = 'Gekkostone';
mb_internal_encoding("UTF-8");
/* @var $this \yii\web\View */
/* @var $content string */

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
    <link rel="stylesheet" href="css/social-likes_classic.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <style>
       
    </style>

<?php $this->beginBody() ?>

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
                <a href="#">ок</a>
                <a href="#">в</a>
                <a href="#">f</a>
                <a href="#">t</a>
                <a href="#">youtube</a>
                <a href="#">tel</a>
                <a href="#">s</a>
                <a href="#">@</a>
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
                        <li><a href="index.php?r=product%2F3ds">ТЕКСТУРЫ КАМНЯ <span style ="color:#4D4D4D;background-color:white;border-radius: 3px 0px 3px 0px; ">3DS</span> </a></li> 
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
                        <li><a href="index.php?r=product%2Findex">ВСЯ ПРОДУКЦИЯ</a></li> 
                         <?php 
                            $model=new ProductCategories();
                            $products_categories=$model::find()->select('product_category_name')->orderBy('product_category_id')->all();

                            $model2=new Product();
                            $products =$model2::find()->orderBy('product_product_id')->all();
                            ?>
                            <?php  foreach ($products_categories as $category):?>
                                <li>
                                     <a href="?ProductsSearch%5Bproduct_product_name%5D=&ProductsSearch%5Bproduct_category_name%5D=<?php echo str_replace(' ', '+', $category->product_category_name) ?>&r=product%2Findex"><?php echo mb_strtoupper($category->product_category_name);?><span>&#9658;</span></a>
                                    <ul>
                                        <?php  foreach ($products as $product_item):?>
                                            <?php if (!strcmp($product_item->product_category_name, $category->product_category_name)):?>
                                            <li><a href="#"><span>&#9679;</span> <?php echo $product_item->product_product_name ?></a></li>
                                            <?php endif;?>    
                                        <?php endforeach;?>

                                    </ul>
                                </li>
                            <?php endforeach;?>
                            
                         
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
            <?= $content ?>
    <footer class="footer second-footer" style="padding:0;height:180px;text-align:justify;padding-left:50px;padding-right:50px;">
        <div class="second-footer-half">
            <a href="" target="_blank">скачать общий <span style="color: #D0272E">price</span></a>
            <div class="footer-widget">
                <?php 
                    $input = array(
                        '<span class="footer-widget_text">НАТУРАЛЬНЫЙ ИЛИ ИСКУСТВЕННЫЙ?</span><span class="footer-widget_text-small" style="font-family:Corbel"><b>ТЕСТ.</b> Попробуй отыскать натуральные камни среди искусственных камней GEKKOSTONE!</span>',
                        '<span class="footer-widget_text-small" style="font-family:Corbel">Собери собственную галерею из наиболее понравившихся фактур и расцветок!</span>
                         <span class="footer-widget_text">МОЯ ГАЛЛЕРЕЯ</span>
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
        <div class="footer-image"><p>КАРТА САЙТА</p><div id="sitemap" ></div></div>
        <div class="footer-image"><p>МОЯ ГАЛЛЕРЕЯ</p><div id="gallery"></div></div>
        <div class="footer-image"><p>ПАРТНЕРСТВО</p><div id="partnership"></div></div>
        <div class="footer-image"><p>КОНТАКТЫ</p><div id="contacts"></div></div>
        <div class="footer-image"><p>ПУБЛИЧНАЯ ОФЕРТА</p><div id="publicoffer"></div></div>
        <div class="footer-image"><p>АВТОРСКИЕ ПРАВА</p><div id="copyright"></div></div>
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
    
    /*Menu hover. Replaced css way ov hover*/
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
     }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    /*Menu hover. Replaced css way ov hover*/
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
</html>
<?php $this->endPage() ?>