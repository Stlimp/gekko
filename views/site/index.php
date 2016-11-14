<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

use evgeniyrru\yii2slick\Slick;
use yii\web\JsExpression;

mb_internal_encoding("UTF-8");
$this->title = 'Gekkostone';
$this->registerJsFile('@web/js/lightslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/lightSlider.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/slide-up-down.js');


?>
<style>
    .left_third{
        transition: all 1s ease;
      -moz-transition: all 1s ease;
      -ms-transition: all 1s ease;
      -webkit-transition: all 1s ease;
      -o-transition: all 1s ease;
    }
    .left_third:hover{
   /*      transform: scale(1.1);
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1); IE 9
    -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.1, M12=0, M21=0, M22=1.1, SizingMethod='auto expand')"; IE8
     filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.1, M12=0, M21=0, M22=1.1, SizingMethod='auto expand'); IE6 and 7  */
    }
    .overflow{

        display:block;
        position:relative;
    }
    .left_third{
        display:block !important;
            position: relative;
            text-align: left;
    }
    .left_third:after {

        position:absolute;
        opacity:0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        content:'\A';
        width:100%; height:100%;
        top:0; left:0;
        background:rgba(0,0,0,0.3);
    }
    .left_third:hover:after    {
        opacity:1;
    }
    .left_third>a>img{
        width: 100%;
        height: 100%;
    }
    .left_third>a{
        display: block;
        width: 100%;
        height: 100%;
    }
    .left_third p{
        padding:10px;
        z-index: 2;
        color:white;
        font-size: 40px;
        text-shadow: 2px 0 4px #222;
        letter-spacing: .03em;
    }
    .left_third img{
        width:100%;
        height:100%;
    }


    .right_third p{
        padding:10px;
        z-index: 2;
        color:white;
        text-shadow: 2px 0 4px #222;
        letter-spacing: .03em;
    }
    .right_third span{
        z-index: 2;
        color:white;
    }
    .right_split:after {

        position:absolute;
        opacity:0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        content:'\A';
        width:100%; height:100%;
        top:0; left:0;
        background:rgba(0,0,0,0.3);
    }
    .right_split:hover:after    {
        opacity:1;
    }

    .center_split{
            position: relative;
    }
    .center_split:after {

        position:absolute;
        opacity:0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        content:'\A';
        width:100%; height:100%;
        top:0; left:0;
        background:rgba(0,0,0,0.3);
    }
    .center_split:hover:after    {
        opacity:0.5;
    }


.slick-slide {
    width: 150px;
    height:150px;
}


    .test{
        background-image: url(./images/background/test.jpg);

    }
    .cart{
        background-image: url(./images/content/cart_background.png);
    }


</style>

<div id="upper"></div>
<!--<section>!-->


<div class="site-index">
    <div class="jumbotron">




<div class="sd" style="">
        <?=Slick::widget([

        // HTML tag for container. Div is default.
        'itemContainer' => 'div',

        // HTML attributes for widget container
        'containerOptions' => ['class' => 'container'],

        // Items for carousel. Empty array not allowed, exception will be throw, if empty 
        'items' => [
                 Html::img('images/content/products/colors/antiq_venetian.jpg'),
                 Html::img('images/content/products/colors/antiq_white.jpg'),
                 Html::img('images/content/products/colors/antiq_albion.jpg'),
                 Html::img('images/content/products/colors/antiq_venetian.jpg'),
        ],

        // HTML attribute for every carousel item
        'itemOptions' => ['class' => 'cat-image'],

        // settings for js plugin
        // @see http://kenwheeler.github.io/slick/#settings
        'clientOptions' => [
            'autoplay' => true,
            'dots'     => true,
            'infinite'=> true,
            'speed'=> 300,
            'slidesToShow'=> 5,

            'variableWidth'=> false,

        ],

    ]); ?>
    </div>
      </div>
    </div>
</div>



