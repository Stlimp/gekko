<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
mb_internal_encoding("UTF-8");
$this->title = 'Gekkostone';
?>


<style>

    .site-index{
        margin-top:60px;
    }
    
    .left_third{
        background-color:#D8D8CA;
        width:25%;
        height:500px;
        float:left;
        vertical-align: middle;
        display: table;
        border-radius: 30px 0px ;
    }
    .center_third{
        width:50%;
        height:500px;

        float:left;
    }
    
    .center_split{
        width:100%;
        height:33.3%;

        padding:0px 15px 15px 15px;

    }
    
    .center_split_vertically{
        width:30%;
        height: 100%;
        background-color: #D8D8CA;
        border-radius: 20px 0px ;
        display: table;
        float:left;

    }
    .center_split_vertically p{
        width:100%;
        display: table-cell;
        vertical-align: middle;
        font-family:Impact;
        text-align:center;
        font-size: 20px;
        color:white;

    }

    .center_split_text{
        height: 100%;
        display: table;
        text-align:left;
        font-family:Corbel;
        padding:5px;

    }
    .center_split_text p{
 
        display: table-cell;
        vertical-align: middle;
         font-size:14px;
         font-color:#808080;

    }
    .right_third{
        width:25%;
        height:500px;

        float:left;

    }

    .right_split{
        width:100%;
        height:47%;
        background-color:#D8D8CA;
        text-align: left;
        border-radius: 30px 0px ;
        margin:0px 0px 30px 0px;
        padding:30px;

    }
    .left_product_name {
        font-family:Impact;
        padding-left: 30px;
        padding-right: 30px;
        display: table-cell;
        vertical-align: middle;
        text-align:left;
        color:white;
         font-size: 42px;
    }

    .test_text{
        font-family:Impact;

        vertical-align: middle;
        text-align:left;
        font-size: 32px;
        color:white;
    }
    .button-up{
        width:50px;
        height:50px;
        background-image: url(images/up.png);
        background-size: contain;
        display:inline-block;
    }
    .button-up:hover{
        width:50px;
        height:50px;
        background-image: url(images/up-hover.png);
        background-size: contain;
        display:inline-block;
    }

</style>
<div id="upper"></div>
<!--<section>!-->
       
  
<div class="site-index">
      

    <div class="jumbotron">
        
        <div class="col-md-12 hover-slide text-center" id="scroll" style="text-align:right;bottom: -100px;z-index: 1015";> <a href="#upper" ><div class="button-up"></div> </a>   </div>     
        <div class="left_third">
            <span class="left_product_name">
                <?= mb_strtoupper($product->product_name) ?>
            </span>
        </div>
        <div class="center_third">
            <div class="center_split">
               <div class="center_split_vertically">
                   <p>ПОДБОР КАМНЯ</p>
               </div>
               <div class="center_split_text"><p>При помощи конфигуратора «ПОДБОР КАМНЯ» 
                    Вы сможете самостоятельно подобрать самую 
                    оптимальную фактуру и расцветку декоративного
                    камня для интерьера или экстерьера Вашего дома.</p>
                </div>
            </div>
            <div class="center_split">
                <div class="center_split_vertically">
                   <p>ДО И ПОСЛЕ</p>
               </div>

               <div class="center_split_text"><p>В фотогалерее представлены фотографии интерьеров
                    и экстерьеров ДО и ПОСЛЕ проведения облицовочных 
                    работ по укладке декоративного камня.</p> 
                </div>
            </div>
            <div class="center_split" style="margin-bottom:0px">
                <div class="center_split_vertically">
                   <p>ВИДЕОГАЛЛЕРЕЯ</p>
               </div>
               <div class="center_split_text"><p>В видеогалерее представлены демонстрационные,
                а также обучающие видео по применению в облицовке
                декоративного облицовочного камня.</p>
                </div>
            </div>

        </div>
        <div class="right_third">
            <div class="right_split">
                <span class="test_text">НАТУРАЛЬНЫЙ ИЛИ ИСКУСТВЕННЫЙ?</span>
                <p style="font-family:Corbel"><b>ТЕСТ.</b> Попробуй отыскать натуральные камни среди искусственных камней GEKKOSTONE!</p>
            </div>
            <div class="right_split">
                <p style="font-family:Corbel">Собери собственную галерею из наиболее понравившихся фактур 
и расцветок!</p>
                <span class="test_text">МОЯ ГАЛЕРЕЯ</span>
                <p style="font-family:Corbel">Расчет необходимого количества камня, его веса и стоимости!</p>
            </div>
        </div>
   

  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#scroll a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 1000, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});
});

</script>