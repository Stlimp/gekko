<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Gekkostone';
?>
<div id="upper"></div>
<!--<section>!-->
       
  
<div class="site-index">
  
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
<div class="col-md-12 hover-slide text-center" id="scroll" style="text-align:right;bottom: 100px;right:100px;z-index: 1015";> <a href="#downer" class="btn btn-default start-me">Down</a>
    <div class="jumbotron">
      <div id="downer"></div>
      
      <?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '100%',
        'height' => '100%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'arrows' =>true,
 
    ]
]);

echo Html::a(Html::img('images/content/aboutcompany.jpg'), 'images/content/aboutcompany.jpg', ['rel' => 'fancybox']);
echo Html::a(Html::img('images/content/colorcontrol.jpg'), 'images/content/colorcontrol.jpg', ['rel' => 'fancybox']);
?>


      <div class="col-md-12 hover-slide text-center" id="scroll" style="text-align:right;top: 100px";> <a href="#upper" class="btn btn-default start-me"> Up </a>   </div>
       <h1 id ="congrats">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    
    <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>

        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>


    <div class="body-content">
        
<!--
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
!-->
    <h1> Service </h1>
<!-- START SLIPSUM CODE -->

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

TEH PATH OV TEH RIGHTEOUS MAN IZ BESET ON ALL SIDEZ BY TEH INIQUITIEZ OV TEH S
<h1> Service </h1>
<!-- START SLIPSUM CODE -->

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

TEH PATH OV TEH RIGHTEOUS MAN IZ BESET ON ALL SIDEZ BY TEH INIQUITIEZ OV TEH S
<h1> Service </h1>
<!-- START SLIPSUM CODE -->

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

NAO DAT WE KNOE HOO U R, I KNOE HOO IM. IM NOT MISTAEK! IT ALL MAKEZ SENSE! IN COMIC, U KNOE HOW U CAN TELL HOO TEH ARCH-VILLAINS GOIN 2 BE? HEZ TEH EGSAKT OPPOSIET OV TEH HERO. AN MOST TIEMS THEYRE FRENZ, LIEK U AN ME! I SHUDVE KNOWN WAI BAK WHEN... U KNOE Y, DAVID? CUZ OV TEH KIDZ. THEY CALLD ME MISTAH GLAS.

TEH PATH OV TEH RIGHTEOUS MAN IZ BESET ON ALL SIDEZ BY TEH INIQUITIEZ OV TEH S
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