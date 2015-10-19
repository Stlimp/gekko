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
    }
    .button-down:hover{
        width:50px;
        height:50px;
        background-image: url(images/down-hover.png);
        background-size: contain;
        display:inline-block;
    }


    #w0 > .container{
        margin:0px 0px 0px;
        width:100%;
        

    }

</style>



<style> 
/* navigation style */ 
#nav{ 
    height: 60px; 

    #background: #3AB3A9; 
    min-width:500px; 
    margin-left: 0px; 
    padding: 25px; 
    width:80%;
    float:right;
    font-family: Corbel;
    font-size: 16px;
}     
 
#nav li{ 
    list-style: none; 
    display: block; 
    float: right; 
    height: 40px; 
    position: relative;
    border: 1px solid rgba(0, 0, 0, 0);/*прозрачная граница, чтобы избежать мерцания*/ 
    #border-right: 1px solid #FFFFFF;
    width:150px;
    z-index : 2;
 
} 
 
#nav li a{ 
    padding: 0px 10px 0px 10px; 
    margin: 0px; 
    line-height: 40px; 
    text-decoration: none; 
    height: 40px; 
    color: #FFFFFF; 
    text-shadow: 1px 1px 1px #66696B;
    text-align:center;     
} 
 
#nav ul{ 
    background: #4D4D4D;  
    padding: 0px; 
    #border-bottom: 1px solid #DDDDDD; 
   # border-right: 1px solid #DDDDDD; 
    #border-left:1px solid #DDDDDD; 
    #border-radius: 0px 0px 3px 3px; 
    box-shadow: 3px 2px 5px #000000; 
    -webkit-box-shadow: 3px 2px 5px #000000; 
        -moz-box-shadow:3px 2px 5px #000000; 
    width:150px;
    border-radius: 0px 0px 10px 0px;

     
}

 
#nav li:hover{ 
    border: 1px solid #FFFFFF;
    border-radius: 10px 0px 10px 0px;
    width:150px;
 
}
#nav li ul li:hover{ 
    border: 0;
    width:150px;
 
}

#nav li a:hover{ 
font-weight:bold;
}
#nav li a{ 
    display: block; 
} 
#nav ul li { 
    border-right:none; 
    #border-bottom:1px solid #DDDDDD; 
    width:150px; 
    height:    39px; 
} 
#nav ul li a { 
    border-right: none; 
    #color:#6791AD; 
    #text-shadow: 1px 1px 1px #FFF; 
    #border-bottom:1px solid #FFFFFF; 
} 
/*#nav ul li:hover{background:#000000;border-radius: 0px 0px 0px 0px;}*/
/*#nav ul li:last-child:hover {border-radius: 0px 0px 10px 0px;}*/
 
#nav ul li:last-child { border-bottom: none;} 
#nav ul li:last-child a{ border-bottom: none;}
 
/* Sub menus */ 
#nav ul{ 
    display: none; 
    visibility:hidden; 
    position: absolute; 
    top: 40px;
    left: -1px; 
} 


 
/* Third-level menus */ 
#nav ul ul{
    margin-left:1px; 
    top: 0px; 
    left:150px; 
    display: none; 
    visibility:hidden; 
    #border: 1px solid #DDDDDD;
    border-radius: 10px 0px 10px 0px; 
}
#nav ul ul li:first-child:hover {border-radius: 10px 0px 0px 0px;}
#nav ul ul li:last-child:hover {border-radius: 0px 0px 10px 0px;} 
/* Fourth-level menus */ 
#nav ul ul ul{ 
    top: 0px; 
    left:150px; 
    display: none; 
    visibility:hidden; 
    border: 1px solid #DDDDDD;
 
} 
 
#nav ul li{ 
    display: block; 
    visibility:visible; 
} 
#nav li:hover > ul{ 
    display: block; 
    visibility:visible; 
}

#nav ul li a span{
    color: #FFFFFF;
    font: 16px Geneva, Arial, Helvetica, sans-serif;
}

#nav ul ul li a span{
    color: #FFFFFF;
    font: 16px Geneva, Arial, Helvetica, sans-serif;
}


#delimiter{
    width:12px !important;
    border:0 !important;
    z-index : 1;
}

#delimiter :hover{

    border: 0 !important;
    padding:0px !important;
    


}
#delimiter a{
    padding:0px !important;
}

 
</style> 
<!--[if IE 7]> 
<style> 
#nav{ 
    margin-left:0px 
} 
#nav ul{ 
    left:-40px; 
} 
#nav ul ul{ 
    left:130px; 
} 
#nav ul ul ul{ 
    left:130px; 
} 
</style> 
<![endif]--> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script> 
$(document).ready(function(){ 
    $("#nav li").hover( 
    function(){ 
        $(this).children('ul').hide();
        $("#nav li #delimiter").hide(); 
        $(this).children('ul').fadeIn(800); 
    }, 
    function () { 
        $('ul', this).fadeOut(200); 
          
    });
    $("#nav ul li a").hover(
    function () {
        $(this).children('span').css('color', '#D0272E');
        $(this).children('span').css('font','16px Geneva, Arial, Helvetica, sans-serif' );
    },
    function () {
        $(this).children('span').css('color', '#FFFFFF');
        $(this).children('span').css('font','16px Geneva, Arial, Helvetica, sans-serif' );
    });
    
    $("#nav ul ul li a").hover(
    function () {
        $(this).children('span').css('color', '#D0272E');
        $(this).children('span').css('font','16px Geneva, Arial, Helvetica, sans-serif' );
    },
    function () {
        $(this).children('span').css('color', '#FFFFFF');
        $(this).children('span').css('font','16px Geneva, Arial, Helvetica, sans-serif' );
    });



     
}); 
</script> 
<body>

<?php $this->beginBody() ?>
<div id="upper"></div>
    <div class="wrap">
        <?php
        $this->registerJsFile('@web/js/social-likes.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
            
            NavBar::begin([
                'brandLabel' => Html::img('images/logo.png', ['alt'=>Yii::$app->name]),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            /*First menu small*/
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right '],
                'items' => [
                    ['label' => 'Парнерство', 'url' => ['/site/partnership']],
                    ['label' => 'Новости', 'url' => ['/news/index']],
                    ['label' => 'Прайс', 'url' => ['/site/index']],
                    ['label' => 'Контакты', 'url' => ['/site/index']],
                    ['label' => 'Поиск', 'url' => ['/site/index']],
                    ['label' => 'Моя галерея', 'url' => ['/site/index']],
                    ['label' => 'OK', 'url' => ['/site/index']],
                    ['label' => 'ВК', 'url' => ['/site/index']],
                    ['label' => 'f', 'url' => ['/site/index']],
                    ['label' => 't', 'url' => ['/site/index']],
                    ['label' => 'Y', 'url' => ['/site/index']],
                    ['label' => 'V', 'url' => ['/site/index']],
                    ['label' => 'S', 'url' => ['/site/index']],
                    ['label' => 'e', 'url' => ['/site/index']],
                   
                 /*   Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],*/
                ],
            ]);
            /*Second menu normal*/
            /*echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'О КОМПАНИИ',
                        'items' => [
                                     ['label' => 'Gekkostone', 'url' => 'index.php?r=site%2Fcompany'],
                                     ['label' => 'Преимущества', 'url' => 'index.php?r=site%2Fadvantages'],
                                     ['label' => 'Новости', 'url' => 'index.php?r=news%2Findex'],
                                     ['label' => 'Вакансии', 'url' => 'index.php?r=site%2Fvacancy'],
                                     ['label' => 'Отзывы и предложения', 'url' => 'index.php?r=site%2Ffeedback'],
                                     ['label' => 'Партнерство', 'url' => 'index.php?r=site%2Fpartnership'],
                                     ['label' => 'Контакты', 'url' => 'index.php?r=site%2Fcontact'],
            ],]
            ,
                    ['label' => 'ПРОДУКЦИЯ',
                        'items' => [
                                     ['label' => 'Вся продукция', 'url' => 'index.php?r=products%2Findex'],
                                     ['label' => 'Кирпич тонкий', 'url' => '#'],
                                     ['label' => 'Кирпич облицовочный', 'url' => '#'],
                                     ['label' => 'Камень облицовочный', 'url' => '#'],
                                     ['label' => 'Сопутствующие товары', 'url' => '#'],
            ],],
                    ['label' => 'ФОТОГАЛЕРЕЯ',
                        'items' => [
                                     ['label' => 'Жилые дома и квартиры', 'url' => 'index.php?PhotogallerySearch%5Bphoto_category%5D=%D0%96%D0%B8%D0%BB%D1%8B%D0%B5+%D0%B4%D0%BE%D0%BC%D0%B0&PhotogallerySearch%5Bphoto_subcategory%5D=&r=photogallery%2Findex'],
                                     ['label' => 'Коммерческие объекты', 'url' => 'index.php?PhotogallerySearch%5Bphoto_category%5D=%D0%9A%D0%BE%D0%BC%D0%BC&PhotogallerySearch%5Bphoto_subcategory%5D=&r=photogallery%2Findex'],
                                     ['label' => 'До и после', 'url' => 'index.php?r=photogallery%2Findex'],
            ],],
                    ['label' => 'ИНФОРМАЦИЯ', 
                        'items' => [
                                     ['label' => 'Укладка камня', 'url' => 'index.php?r=site%2Frocklaying'],
                                     ['label' => 'Вопрос - ответ', 'url' => 'index.php?r=faq%2Findex'],
                                     ['label' => 'Технические данные', 'url' => 'index.php?r=certificates%2Findex'],
                                     ['label' => 'Цветопередача', 'url' => 'index.php?r=site%2Fwarning'],
                                     ['label' => 'Гарантия качества', 'url' => 'index.php?r=site%2Fwarranty'],
                                     ['label' => 'Публичная оферта', 'url' => 'index.php?r=site%2Fpublicoffer'],
                                     ['label' => 'Каталог и прайс-лист', 'url' => 'index.php?r=site%2Fprice'],
                                     ['label' => 'Текстуры камня', 'url' => 'index.php?r=products%2F3ds'],
            ],],
                    ['label' => 'ГДЕ КУПИТЬ', 'url' => ['/stores/index']],
                   
                 /*   Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],*/
            
                 /*   ['label' => 'УСЛУГИ', 
                        'items' => [
                                     ['label' => 'Дизайн проект', 'url' => '#'],
                                     ['label' => 'Подбор камня', 'url' => '#'],
                                     ['label' => 'Доставка камня', 'url' => '#'],
                                     ['label' => 'Облицовка', 'url' => '#'],
            ],],
            ]]);*/
?>
<ul id="nav">

         <li class="yahoo"><a href="#">УСЛУГИ</a> 
        <ul> 
        <li><a href="#">Yahoo Games <span style="color:#D0272E">&#9658;</span></a>             
            <ul> 
                <li><a href="#">&#9679; Board Games</a></li> 
                <li><a href="#">Card Games</a></li> 
                <li><a href="#">Puzzle Games</a></li> 
                <li><a href="#">Skill Games &raquo;</a></li> 
            </ul> 
        </li> 
        <li><a href="#">Yahoo Search</a></li> 
        <li><a href="#">Yahoo Answsers</a></li> 
        </ul> 
        </li>
    
    <li id="delimiter"><a>|</a></li> 
     
    <li class="yahoo"><a href="#">ГДЕ КУПИТЬ</a> 
        <ul> 
        <li><a href="#">Yahoo Games <span style="color:#D0272E">&#9658;</span></a>             
            <ul> 
                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                <li><a href="#">Card Games</a></li> 
                <li><a href="#">Puzzle Games</a></li> 
                <li><a href="#">Skill Games &raquo;</a></li> 
            </ul> 
        </li> 
        <li><a href="#">Yahoo Search</a></li> 
        <li><a href="#">Yahoo Answsers</a></li> 
        </ul> 
    </li> 
    <li id="delimiter"><a>|</a></li> 
 
    <li class="yahoo"><a href="#">ИНФОРМАЦИЯ</a> 
        <ul> 
        <li><a href="#">Yahoo Games <span style="color:#FFFFFF">&#9658;</span></a>             
            <ul> 
                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
               <li><a href="#"><span>&#9679;</span> Board Games</a></li> 
                <ul> 
                    <li><a href="#">Yahoo Pool</a></li> 
                    <li><a href="#">Chess</a></li> 
                </ul> 
                </li> 
            </ul> 
        </li> 
        <li><a href="#">Yahoo Search</a></li> 
        <li><a href="#">Yahoo Answsers</a></li> 
        </ul> 
    </li> 

    <li id="delimiter"><a>|</a></li>
 
    <li class="facebook"><a href="#">ФОТОГАЛЛЕРЕЯ</a> 
        <ul> 
        <li><a href="#">Facebook Pages</a></li> 
        <li><a href="#">Facebook Groups</a></li> 
        </ul> 
    </li>
    <li id="delimiter"><a>|</a></li> 
    <li class="google"><a href="#">ПРОДУКЦИЯ</a> 
        <ul> 
        <li><a href="#">Google mail</a></li> 
        <li><a href="#">Google Plus</a></li> 
        <li><a href="#">Google Search &raquo;</a> 
            <ul> 
                <li><a href="#">Search Images</a></li> 
                <li><a href="#">Search Web</a></li> 
            </ul> 
        </li> 
        </ul> 
    </li>
    <li id="delimiter"><a>|</a></li> 
    <li class="twitter"><a href="#">О КОМПАНИИ</a> 
            <ul> 
                <li><a href="#">New Tweets</a></li> 
                <li><a href="#">Compose a Tweet</a></li> 
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