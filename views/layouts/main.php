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
        <div >
           <p>
            <ul >
                <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>                
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
                 <li><a href="#">Кнопки соц сетей</a></li>
            </ul>
   </p>
        </div>
        <?php
            NavBar::begin([
                'brandLabel' => 'Gekkostone',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'О компании',
                        'items' => [
                                     ['label' => 'Gekkostone', 'url' => '#'],
                                     ['label' => 'Преимущества', 'url' => '#'],
                                     ['label' => 'Новости', 'url' => '#'],
                                     ['label' => 'Вакансии', 'url' => '#'],
                                     ['label' => 'Отзывы и предложения', 'url' => '#'],
                                     ['label' => 'Партнерство', 'url' => '#'],
                                     ['label' => 'Контакты', 'url' => '#'],
            ],],
                    ['label' => 'Продукция',
                        'items' => [
                                     ['label' => 'Вся продукция', 'url' => '#'],
                                     ['label' => 'Кирпич тонкий', 'url' => '#'],
                                     ['label' => 'Кирпич облицовочный', 'url' => '#'],
                                     ['label' => 'Камень облицовочный', 'url' => '#'],
                                     ['label' => 'Сопутствующие товары', 'url' => '#'],
            ],],
                    ['label' => 'Фотогалерея',
                        'items' => [
                                     ['label' => 'Жилые дома и квартиры', 'url' => '#'],
                                     ['label' => 'Коммерческие объекты', 'url' => '#'],
                                     ['label' => 'До и после', 'url' => '#'],
            ],],
                    ['label' => 'Информация', 
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
                    ['label' => 'Фотогалерея', 
                        'items' => [
                                     ['label' => 'Дизайн проект', 'url' => '#'],
                                     ['label' => 'Подбор камня', 'url' => '#'],
                                     ['label' => 'Облицовка', 'url' => '#'],
             ],],
                    ['label' => 'Где купить', 'url' => ['/site/index']]
                   
                 /*   Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],*/
                ],
            ]);
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
