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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">
        <?php
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
            echo Nav::widget([
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
                                     ['label' => 'Жилые дома и квартиры', 'url' => 'index.php?r=photogallery%2Findex'],
                                     ['label' => 'Коммерческие объекты', 'url' => 'index.php?r=photogallery%2Findex'],
                                     ['label' => 'До и после', 'url' => 'index.php?r=photogallery%2Findex'],
            ],],
                    ['label' => 'ИНФОРМАЦИЯ', 
                        'items' => [
                                     ['label' => 'Укладка камня', 'url' => '#'],
                                     ['label' => 'Вопрос - ответ', 'url' => 'index.php?r=faq%2Findex'],
                                     ['label' => 'Технические данные', 'url' => '#'],
                                     ['label' => 'Цветопередача', 'url' => 'index.php?r=site%2Fwarning'],
                                     ['label' => 'Гарантия качества', 'url' => 'index.php?r=site%2Fwarranty'],
                                     ['label' => 'Публичная оферта', 'url' => 'index.php?r=site%2Fpublicoffer'],
                                     ['label' => 'Каталог и прайс-лист', 'url' => '#'],
                                     ['label' => 'Текстуры камня', 'url' => '#'],
            ],],
                    ['label' => 'ГДЕ КУПИТЬ', 'url' => ['/site/index']],
                   
                 /*   Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],*/
            
                    ['label' => 'УСЛУГИ', 
                        'items' => [
                                     ['label' => 'Дизайн проект', 'url' => '#'],
                                     ['label' => 'Подбор камня', 'url' => '#'],
                                     ['label' => 'Доставка камня', 'url' => '#'],
                                     ['label' => 'Облицовка', 'url' => '#'],
            ],],
            ]]);

            NavBar::end();
?>


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
    ]
]);
?>
    <div class="container">  
             <!-- <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>!-->
            <?= $content ?>
        </div> 
    </div>
    <footer class="footer" style="padding:0;height:80px;text-align:justify;padding-left:50px;padding-right:50px;">
        <img src="images/footer/social.jpg" style="vertical-align:top;height:100%">
        <div class="footer-image"><img src="images/footer/sitemap.jpg"></div>
        <div class="footer-image"><img src="images/footer/gallery.jpg"></div>
        <div class="footer-image"><img src="images/footer/partnership.jpg"></div>
        <div class="footer-image"><img src="images/footer/contacts.jpg"></div>
        <div class="footer-image"><img src="images/footer/publicoffer.jpg"></div>

            <div class="footer-image"><img src="images/footer/copyright.jpg"></div>
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
</html>
<?php $this->endPage() ?>