<?php

use yii\helpers\Html;
use yii\grid\GridView;
;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductColorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Colors';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/lightslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/lightSlider.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="product-color-index">
    <div class="jumbotron">
        <div class="left-half">
            <div class="left-side-half-header">АНТИЧНЫЙ КИРПИЧ <div class="price" >ЦЕНА: <span id="price_value">228,000</span> руб/м<span class="warning">*</span> </div></div>    
            <div class="left-side-half-text">
                <p>фактура представляет имитацию кладки классического глиняного клинкера</p>
                <div class="icons">
                    <img src="images\content\products\icons\cement.png" alt="">
                    <img src="images\content\products\icons\inout.png" alt="">
                    <img src="images\content\products\icons\like.png" alt="">
                    <img src="images\content\products\icons\light.png" alt="">
                    <img src="images\content\products\icons\angle.png" alt="">
                    <img src="images\content\products\icons\fireresistance.png" alt="">
                    <img src="images\content\products\icons\time.png" alt="">
                    <img src="images\content\products\icons\cold.png" alt="">
                    <img src="images\content\products\icons\water.png" alt="">
                    <img src="images\content\products\icons\eco.png" alt="">
                    <img src="images\content\products\icons\TPBY.png" alt="" style="float:right">
                </div>
            
                <div class="left_halfheader">
                    <a id="link_to_3ds" href="#" ><b><u>СКАЧАТЬ</u></b></a> «ТЕКСТУРУ» для 3DS
                </div>
                <div class="right_halfheader">
                    <a id="add_to_cart" href="index.php?r=productcolor/add-to-cart&id=1"><b><u>ДОБАВИТЬ</u></b></a> расцветку в <b>«МОЮ ГАЛЕРЕЮ»</b>
                </div>
                <div class="selected_product_color"><img id="selected_product_image" src="images\content\products\38.jpg" alt=""></div>
                <div class="left_halfheader">
                    <b>расцветка</b> «Венецианский обожженый»
                </div>
                <div class="right_halfheader">
                    <span class="article"><b>Арт.01-109</b></span>
                </div>
            </div>
        </div>
        <div class="right-half">
            
            <div class="right-side-half-header">
                <div class="regular_product">Рядовая плитка <img src="images\content\products\icons\regular.png" alt=""></div> 
                
                <div class="angular_product">Угловая плитка <img src="images\content\products\icons\angular.png" alt=""> </div>
            </div>
            <div class="right-side-half-text">
            <div class="regular_product_desription">
                Размеры камней        -  265 х 60 мм (+/- 4 мм). <br>
                Толщина камней        -  12 мм (+/- 2 мм).<br>
                Вес 1 м2                       -  22 кг.<br>
                Кол-во в упаковке       -  1,2 усл.м2 (61 шт.)<br>
                Повторяемость           -  42 шт. (0,83 м2)<br>

            </div>
            <div class="angular_product_description">
                Размеры камней        -  120/265 х 60 мм (+/- 4 мм).<br>
                Толщина камней        -  12 мм (+/- 2 мм).<br>
                Вес 1 м.пог.                  -  8,5 кг.<br>
                Кол-во в упаковке        -  1,728 усл.м.пог. (24 шт.)<br>
                Повторяемость            -  10 шт. (0,72 м.пог.)<br>

            </div>
            <hr class="pick_the_color">
            <div class="product_colors">
                <?php foreach ($colors as $productColor){ ?>
                    <div class="miniature" id=" miniature<?= $productColor->product_color_id?>">
                        <span><img src="<?= $productColor->product_color_image ?>" alt=""><?= $productColor->product_color_name ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>

        <div class="slider" >
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
        </div>
      </div>

        
        


<!-- 
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Product Color', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
 -->
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'product_color_id',
                'product_color_name',
                'product_article',
                'product_3ds_link',
                'product_angular',
                'product_regular',
                'product_price',
                'product_subcategory_name',
                'product_color_image',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
</div>




<?php 
$script=<<<JS
$('.miniature').click(function(){

    var color_id= this.id.replace(/[^\d]+/, '');

    $.get('index.php?r=productcolor/get-product-color',{id:color_id},function(data){;
        var data = $.parseJSON(data);
        $("#selected_product_image").attr('src',data.product_color_image);
         document.getElementById("link_to_3ds").href=data.product_3ds_link;
         document.getElementById("add_to_cart").href="index.php?r=productcolor/add-to-cart&id=".concat(data.product_color_id);
         document.getElementById("price_value").innerHTML=data.product_price;
        return false;

    });
})


    

JS;
$this->registerJs($script);
 ?>

