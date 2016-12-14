<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");
;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductColorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Colors';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/lightslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/lightSlider.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<style>
    th{
        width:calc(100%/6) !important;
        display:inline-block;
        height:25px;
         border: 1px solid #FFFFFF;
    }
    .selected_seam{
        border: 2px solid #CC9933;
    }

</style>
<div class="product-color-index">
    <div class="jumbotron">
        <div style="display:inline-block">
        <div class="left-half">
            <div class="left-side-half-header"><?=  mb_strtoupper($product_data->product_product_name) ?> 
                <div class="price" >ЦЕНА: 
                    <span id="price_value"><?= number_format($product_data->product_price) ?></span> руб/м2 (м.пог.)
                    <span class="warning">*</span> </div></div>
            <div class="left-side-half-text">
                <p><?= $product_data->product_description?></p>
                <div class="icons">
                    <!-- <img src="images/content/products/icons/cement.png" alt="">
                    <img src="images/content/products/icons/inout.png" alt="">
                    <img src="images/content/products/icons/like.png" alt="">
                    <img src="images/content/products/icons/light.png" alt="">
                    <img src="images/content/products/icons/angle.png" alt="">
                    <img src="images/content/products/icons/fireresistance.png" alt="">
                    <img src="images/content/products/icons/time.png" alt="">
                    <img src="images/content/products/icons/cold.png" alt="">
                    <img src="images/content/products/icons/water.png" alt="">
                    <img src="images/content/products/icons/eco.png" alt="">-->
                    <?= $product_data->product_characteristics?>
                    <img src="\images\content\products\icons\TPBY.png" alt="" style="float:right">
                </div>

                <div class="left_halfheader">
                    <span id="color_name">расцветка <span>«<?= reset($colors)->product_color_name ?>»</span></span>
                    <!-- <a id="link_to_3ds" href="<?= reset($colors)->product_3ds_link ?>" target="_blank" ><b><u>СКАЧАТЬ</u></b></a> «ТЕКСТУРУ» для 3DS -->
                </div>
                <div class="right_halfheader">
                    <span id="article"><font color="#666666"> Арт.</font><?= reset($colors)->product_article ?></span>
                    <!-- <a id="add_to_cart" href="index.php?r=productcolor/add-to-cart&id=<?= array_values($colors)[0]->product_color_id; ?>"><b><u>ДОБАВИТЬ</u></b></a> расцветку в <a href="/index.php?r=site%2Fcart" <b>«МОЮ ГАЛЕРЕЮ»</b></a> -->
                </div>
                <div id="selected_product_color" data-prefix="<?= reset($colors)->product_color_prefix ?>"><img id="selected_product_image" src="<?= reset($colors)->product_color_image ?>" alt=""></div>
                <div class="left_halfheader">
                    <!-- <span id="color_name">расцветка <span>«<?= reset($colors)->product_color_name ?>»</span></span> -->
                </div>
                <div class="right_halfheader">
                    <!-- <span id="article">Арт.<?= reset($colors)->product_article ?></span>-->
                </div>

            </div>
        </div>
        <div class="right-half">

            <div class="right-side-half-header">
                <div class="regular_product"><img src="images\content\products\icons\regular.png" alt=""> - рядовая плитка</div>
            <?php if ($product_data->hasAngular()=="true") { ?>
                <div class="angular_product"><img src="images\content\products\icons\angular.png" alt=""> - угловая плитка </div>
            <?php } ?>
            </div>
            <div class="right-side-half-text">
            <div class="regular_product_desription">
                <table>
                    <tr>
                        <td>
                        размер плитки
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_regular_size ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        толщина
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_regular_thickness ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        вес <span class="numbers">1</span></b> усл.м2
                        </td>
                        <td style="padding-left:10px;">
                        -  <span class="numbers"> <?= $product_data->product_regular_weight ?> кг;</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        кол. в упаковке
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_regular_quantity ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        повторяемость
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_regular_repeatability ?>
                        </td>
                    </tr>

                </table>

            </div>
            <?php if ($product_data->hasAngular()=="true") { ?>
            <div class="angular_product_description">
                <table>
                    <tr>
                        <td>
                        размер плитки
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_angular_size ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        толщина
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_angular_thickness ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        вес <span class="numbers">1</span></b> усл.м.пог.
                        </td>
                        <td style="padding-left:10px;">
                        -  <span class="numbers"><?= $product_data->product_angular_weight ?> кг;</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        кол. в упаковке
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_angular_quantity ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        повторяемость
                        </td>
                        <td style="padding-left:10px;">
                        -  <?= $product_data->product_angular_repeatability ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?php } ?>
            <hr class="pick_the_color">
            <div class="product_colors">
                <?php foreach ($colors as $productColor){ ?>
                    <div class="miniature" id=" miniature<?= $productColor->product_color_id?>">
                        <span><?= $productColor->product_color_name_short ?><img src="<?= $productColor->product_color_image ?>" alt=""></span>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
        </div>
        <div style="display:inline-block;width:100%">
        <div class="left-half">
            <div class="left-side-half-text">
                <?php if (reset($colors)->product_color_prefix!="") {?>

                <div class="left_halfheader">
                    <span>ВАРИАНТ РАСЦВЕТКИ ШВА  (цвета подобраны условно)</span>
                </div>
                <div class="right_halfheader">
                    <!--<span>серия ceresit 4-45</span>-->
                </div>
                <table class="seams" style="margin-left:-2px;;width:calc(100% + 4px) !important;;empty-cells: show;border-collapse: separate;" >
                <tr>
                <?php $i=0;
                foreach ($seams as $seam){

                    echo "<th class=\"tg\" data-postfix=\"$seam->product_seam_postfix\"  style=\"background-color:$seam->product_seam_product_color;\"><a href=\"\" onclick=\"return false;\" style=\"display:block;text-decoration:none;\">&nbsp;</a></th>";
                    $i++;
                    if ($i%6==0) {
                        echo "</tr>";
                        echo "<tr>";
                    }
                 } ?>
                 </tr>


                </table>
                 <?php } ?>
            </div>
        </div>
        <div class="right-half">
            <div class="left-side-half-text">
                <a id="add_to_cart" class="btn btn-success btn-send" style="float:left;border:0; background-color: #CC9933;color:white;margin-right:5px;" href="index.php?r=productcolor/add-to-cart&id=<?= array_values($colors)[0]->product_color_id; ?>"><b>ДОБАВИТЬ</b></a><span style="line-height:25px;"> расцветку в <a class="link_brown_color" href="/index.php?r=site%2Fcart" <b>«МОЮ ГАЛЕРЕЮ»</b></a></span>
                <br>
                <br>
                <div class="left_halfheader"><a id="link_to_3ds" href="<?= reset($colors)->product_3ds_link ?>" target="_blank" ><b><u>СКАЧАТЬ</u></b></a> «ТЕКСТУРЫ» для 3DS</div>
                <div class="right_halfheader"><a href="index.php?r=site%2Fwarning"><u>ПРЕДУПРЕЖДЕНИЕ ПО ЦВЕТОПЕРЕДАЧЕ</u></a></div>

            </div>
        </div>
    </div>

     <!--    <div class="slider" >
         <ul id="lightSlider">
             <?php foreach ($dataProviderPhotos->getModels() as $productPhoto){ ?>

                 <li class="sliderLi">
                     <a href="http://google.com"><img class="sliderImg" src="<?=$productPhoto->photo_image?>" /></a>
                 </li>
                 <li class="sliderLi">
                     <a href="http://google.com"><img class="sliderImg" src="<?=$productPhoto->photo_image?>" /></a>
                 </li>
             <?php } ?>



         </ul>
     </div> -->

        <div class="page-text">
            <?php include './../views/layouts/bottom.php' ?>
        </div>
      </div>
    </div>
</div>




<?php
$script=<<<JS
var seam="asdf"
$('.miniature').click(function(){

    var color_id= this.id.replace(/[^\d]+/, '');

    $.get('index.php?r=productcolor/get-product-color',{id:color_id},function(data){;
        var data = $.parseJSON(data);
        $("#selected_product_image").attr('src',data.product_color_image);

        

         document.getElementById("link_to_3ds").href=data.product_3ds_link;
         document.getElementById("article").innerHTML= "Арт."+data.product_article;
         document.getElementById("color_name").innerHTML= "расцветка <span>«"+data.product_color_name+"»</span>";
         document.getElementById("selected_product_color").setAttribute('data-prefix',data.product_color_prefix)
       
         document.getElementById("add_to_cart").href="index.php?r=productcolor/add-to-cart&id=".concat(data.product_color_id);
        $("th").removeClass("selected_seam");
        return false;
    });
})



$(document).ready(function () {
    $("th").click(function(){
        var t0 = new Date().getTime();
        $("th").removeClass("selected_seam");
        $(this).addClass("selected_seam");
        var source= "images/content/products/seams/".concat("m_",$("#selected_product_color").attr("data-prefix"),"_",$(this).data('postfix'),".jpg");
        $("#selected_product_image").attr('src',source);
         var t1 = new Date().getTime();
        console.log("Call to doSomething took " + (t1 - t0) + " milliseconds.");
    })
});

JS;
$this->registerJs($script);
 ?>


