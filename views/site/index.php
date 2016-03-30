<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
mb_internal_encoding("UTF-8");
$this->title = 'Gekkostone';
$this->registerJsFile('@web/js/lightslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/lightSlider.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/slide-up-down.js');
?>

<div id="upper"></div>
<!--<section>!-->
       
  
<div class="site-index">
    <div class="jumbotron">
        <div class="col-md-12 hover-slide text-center" id="scroll" style="height:0px;text-align:right;bottom: -100px;";> <a href="#upper" ><div class="button-up"></div> </a>   </div>     
        <div class="page-text">
        <a href="?ProductColorSearch%5Bproduct_subcategory_name%5D=<?= $product->product_product_name?>&r=productcolor%2Findex">
            <div class="left_third" style= <?= "background-image:url(&quot;".$product->product_product_image."&quot;);background-size:cover" ?>>
                <?php
                    $words = explode(" ", $product->product_product_name);
                    $font_class = 'left_product_name';
                    foreach ($words as $word) {
                        if(mb_strlen($word)>9){
                            $font_class = 'left_product_name_small';
                        }
                    }

                   
                ?>
                <span class="<?= $font_class?>" >
                    <?= mb_strtoupper($product->product_product_name) ?>
                </span>
            </div>
        </a>
        <div class="center_third">
            <div class="center_split">
               <a href="#">
                    <div class="center_split_vertically">
                       <p>ПОДБОР КАМНЯ</p>
                    </div>
                </a>
               <div class="center_split_text"><p>При помощи конфигуратора «ПОДБОР КАМНЯ» 
                    Вы сможете самостоятельно подобрать самую 
                    оптимальную фактуру и расцветку декоративного
                    камня для интерьера или экстерьера Вашего дома.</p>
                </div>
            </div>
            
            <div class="center_split">
                <a href="#">
                <div class="center_split_vertically">
                   <p>ДО И ПОСЛЕ</p>
                </div>
                </a>    
                <div class="center_split_text"><p>В фотогалерее представлены фотографии интерьеров
                        и экстерьеров ДО и ПОСЛЕ проведения облицовочных 
                        работ по укладке декоративного камня.</p> 
                </div>
            </div>
                <div class="center_split" style="margin-bottom:0px">
                    <a href="index.php?r=videogallery%2Findex"><div class="center_split_vertically" style="background-image:url(images/content/videogallery.jpg);background-size:cover;">
                       <p>ВИДЕОГАЛЕРЕЯ</p>
                   </div></a>
                   <div class="center_split_text"><p>В видеогалерее представлены демонстрационные,
                    а также обучающие видео по применению в облицовке
                    декоративного облицовочного камня.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="right_third">
            <a href="#">
                <div class="right_split">
                    <span class="test_text">НАТУРАЛЬНЫЙ ИЛИ ИСКУСТВЕННЫЙ?</span>
                    <p style="font-family:Corbel"><b>ТЕСТ.</b> Попробуй отыскать натуральные камни среди искусственных камней GEKKOSTONE!</p>
                </div>
            </a>
            <a href="index.php?r=site%2Fcart">
                <div class="right_split">
                    <p style="font-family:Corbel">Собери собственную галерею из наиболее понравившихся фактур 
    и расцветок!</p>
                    <span class="test_text">МОЯ ГАЛЕРЕЯ</span>
                    <p style="font-family:Corbel">Расчет необходимого количества камня, его веса и стоимости!</p>
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
      </div>
    </div>
</div>

