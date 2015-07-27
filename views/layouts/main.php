<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!--IE bootstrp fix-->
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
                'brandLabel' => 'Gekkostone',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            /*First menu small*/
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right '],
                'items' => [
                    ['label' => 'Парнерство', 'url' => ['/site/index']],
                    ['label' => 'Новости', 'url' => ['/site/index']],
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
                                     ['label' => 'Gekkostone', 'url' => '#'],
                                     ['label' => 'Преимущества', 'url' => '#'],
                                     ['label' => 'Новости', 'url' => '#'],
                                     ['label' => 'Вакансии', 'url' => '#'],
                                     ['label' => 'Отзывы и предложения', 'url' => '#'],
                                     ['label' => 'Партнерство', 'url' => '#'],
                                     ['label' => 'Контакты', 'url' => '#'],
            ],]
            ,
                    ['label' => 'ПРОДУКЦИЯ',
                        'items' => [
                                     ['label' => 'Вся продукция', 'url' => '#'],
                                     ['label' => 'Кирпич тонкий', 'url' => '#'],
                                     ['label' => 'Кирпич облицовочный', 'url' => '#'],
                                     ['label' => 'Камень облицовочный', 'url' => '#'],
                                     ['label' => 'Сопутствующие товары', 'url' => '#'],
            ],],
                    ['label' => 'ФОТОГАЛЕРЕЯ',
                        'items' => [
                                     ['label' => 'Жилые дома и квартиры', 'url' => '#'],
                                     ['label' => 'Коммерческие объекты', 'url' => '#'],
                                     ['label' => 'До и после', 'url' => '#'],
            ],],
                    ['label' => 'ИНФОРМАЦИЯ', 
                        'items' => [
                                     ['label' => 'Укладка камня', 'url' => '#'],
                                     ['label' => 'Вопрос - ответ', 'url' => '#'],
                                     ['label' => 'Технические данные', 'url' => '#'],
                                     ['label' => 'Цветопередача', 'url' => '#'],
                                     ['label' => 'Гарантия качества', 'url' => '#'],
                                     ['label' => 'Публичная оферта', 'url' => '#'],
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
                                     ['label' => 'Облицовка', 'url' => '#'],
            ],],
            ]]);

            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
           <p>
            <ul class="footer_buttons">
                <ul><a href="#">Кнопки соц сетей</a></ul>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>                
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
            </ul>
   </p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



<?php $this->endBody() ?>
</body>
<img  src="" alt="background" id="bg" style="display:none" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> 
<script type="text/javascript" class="noprint">
    var aImages = new Array();
    var aURL = new Array();
    var aArtists = new Array();
    var iPrev = -1;
    var iRnd = -1;
    
    aImages[0] = "images/background/background1.jpg";
    aImages[1] = "images/background/background2.jpg";
    aImages[2] = "images/background/background3.jpg";
    aImages[3] = "images/background/background4.jpg";   


    $(document).ready(function() {
    
        
        $("img#bg").load(function()
            {
                
                $("img#bg").fadeTo(500,1);
                
                        
                
                setTimeout(function() 
                    {
                        $("#image_description").animate({right: '-=150'}, 1000);
                        $("img#bg").fadeOut(50);
                        
                        
                        setTimeout(LoadImages,500);
                    }
                    ,5000);
            }           
        )
    
        
        setTimeout(LoadImages,500);
        
    });

    function LoadImage(iNr)
    {
    
        $("img#bg").attr("src", aImages[iNr]);
      
                            
    };
    
    function LoadImages()
    {
        
        /* Select a random image number and make sure this is not equal to the previous image */
        /*while(iPrev == iRnd)
        {
            iRnd = Math.floor(Math.random()*aImages.length);
        }*/
        if(iRnd <3){
            iRnd=iRnd+1;
        }
        else
        {
            iRnd=0;
        }
        
        /* Show the selected image */
        LoadImage(iRnd);
        
        iPrev = iRnd;
        
    };

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