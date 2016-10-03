<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
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

        
            <div class="col-md-12 hover-slide text-center" id="scroll" style="height:0px;text-align:right;bottom: -60px;";> <a href="#upper" ><div class="button-up"></div> </a>   </div>     
        <div class="page-header" style="margin-top:70px;">ДЕКОРАТИВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>
        <div class="page-text" style="margin-top:0px;">

        <!--<a href="?ProductColorSearch%5Bproduct_subcategory_name%5D=<?= $product->product_product_name?>&r=productcolor%2Findex">
             <div class="left_third" style= <?= "background-image:url(&quot;".$product->product_product_image."&quot;);background-size:cover" ?>>-->
               <?php
                   $words = explode(" ", $product->product_product_name);
                   $font_class = 'left_product_name';
                   foreach ($words as $word) {
                       if(mb_strlen($word)>9){
                           $font_class = 'left_product_name_small';
                       }
                   }
           
                  
               ?>
            <a href="google.com">
                <div class="left_third" style="padding:0;">
                    <p style="font-weight:900 !important;position: absolute;top:75%;transform: translateY(-50%);"><?= mb_strtoupper($product->product_product_name) ?></p>
                    <p style="font-size:18px;font-weight:100 !important;position: absolute;top:10%;transform: translateY(-50%);"><b>ДЕКОРАТИВНЫЙ КАМЕНЬ</b></p>
                       <img src="images/modules/rockfaktura.jpg">                        
                </div>
            </a>
           <!--     <span class="<?= $font_class?>" >
                <?= mb_strtoupper($product->product_product_name) ?>
            </span> -->
<!--             </div> -->

        </a>
        <div class="right_third">
            <a href="#">
                <div class="right_split test" style="top:0">
                    <span style="font-weight:900 !important;position: absolute;top:34%;transform: translateY(-50%);font-family:Corbel;" class="test_text">НАТУРАЛЬНЫЙ ИЛИ ИСКУССТВЕННЫЙ?</span>
                    <p style="position: absolute;top:80%;transform: translateY(-50%); font-family:Corbel"><b>ТЕСТ.</b> Попробуй отыскать натуральные камни среди искусственных камней GEKKOSTONE!</p>
                </div>
            </a>
            <a href="index.php?r=site%2Fcart">
                <div class="right_split cart" style="bottom:0">
                    <p style="position: absolute;top:30%;transform: translateY(-50%);font-family:Corbel">Собери собственную галерею из наиболее понравившихся фактур 
    и расцветок!</p>
                    <span class="test_text" style="position: absolute;top:50%;transform: translateY(-50%); font-size:35px; font-family:Corbel;"><b>МОЯ ГАЛЕРЕЯ</b></span>
                    <p style="position: absolute;top:75%;transform: translateY(-50%); font-family:Corbel">Расчет необходимого количества камня, его веса и стоимости!</p>
                </div>
            </a>
        </div>
        <div class="center_third">
            <a href="index.php?r=product%2Findex" class="center_split">
               
                   <div class="center_split_text"><p>
                       КОЛЛЕКЦИЯ <b>GEKKOSTONE</b>
                   </p>
                   <p>Полная коллекция декоративного облицовочного камня производства компании 
                            GEKKOSTONE. В коллекции представлен 
                            облицовочный камень и декоративный 
                            кирпич разнообразных фактур и расцветок.
                        </p>
                    </div>
                    <div class="center_split_vertically">
                        <img src="images/background/faktury.jpg" alt="">
                    </div>
                    <!-- <div class="center_split_vertically">
                       <p>ПОДБОР КАМНЯ</p>
                    </div> -->
            </a>
            <a href="index.php?r=site%2Fselection" class="center_split">
                    <div class="center_split_text"><p><b>ПОДБОР ФАКТУРЫ И ЦВЕТА</b></p>
                        <p>При помощи конфигуратора  «ПОДБОР 
                            КАМНЯ»  Вы сможете  самостоятельно 
                            подобрать самую оптимальную фактуру 
                            и  расцветку декоративного камня для 
                            интерьера или экстерьера Вашего дома.</p> 
                    </div>
                    
                    <div class="center_split_vertically">
                        <img src="images/background/choice.jpg" alt="">
                    </div>
            </a>
            <a href="index.php?r=beforeandafteralbum%2Findex" class="center_split">
                    <div class="center_split_text"><p><b>ДО и ПОСЛЕ</b></p>
                        <p>В фотогалерее представлены фотографии 
                            интерьеров и экстерьеров ДО и ПОСЛЕ 
                            проведения облицовочных работ по 
                            укладке декоративного камня. </p>
                    </div>
                    <div class="center_split_vertically">
                        <img src="images/background/before_after.jpg" alt="">
                    </div>
            </a>
                    
        </div>
        
        <div class="slider">
            <ul id="lightSlider">
                <?php foreach ($photos as $image)  { ?>
                <li class="sliderLi">   
                    <a href="http://gekkostone/web/?ProductColorSearch%5Bproduct_subcategory_name%5D=<?=$image->photo_product?>&r=productcolor%2Findex"><img class="sliderImg" src="<?= $image->photo_image ?>" /></a>
                </li>
                <?php } ?>
            </ul>
        </div>

        
        <?php include './../views/layouts/bottom.php' ?> 
        <?php include './../views/layouts/randomfooter.php' ?>  
      </div>
    </div>
</div>

