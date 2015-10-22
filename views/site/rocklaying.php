<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rocklaying';
?>
<style>
    .subheader{
       background: none ;
        float:left;
        font-family:Corbel;
        font-weight:bolder;
        font-size:16px;
        color: #CC6633;
        text-align:left;
        width:95% 
    }
    .left-side-half-header {
        background: none ;
        float:left;
        font-family:Corbel;
        font-weight:bolder;
        font-size:16px;
        color: #CC6633;
        text-align:left;
        #width:95%;
        padding:0;
 
    }
    .left-side-half-text {
        padding:0;
 
    }

    .right-side-half-header {
        background: none ;
        float:left;
        font-family:Corbel;
        font-weight:bolder;
        font-size:16px;
        color: #CC6633;
        text-align:left;
        #width:95%
    }

  #stbdoc {
    /* the image you want to 'watermark' */
    height: 162px; /* or whatever, equal to the image you want 'watermarked' */
    width: 115px; /* as above */
    background-position: 0 0;
    background-repeat: no-repeat;
    position: relative;
    display:inline-block;

    }

    #tpdoc {
    /* the image you want to 'watermark' */
    height: 162px; /* or whatever, equal to the image you want 'watermarked' */
    width: 115px; /* as above */
    background-position: 0 0;
    background-repeat: no-repeat;
    position: relative;
    display:inline-block;

    }


    #stbdoc img {
    /* the actual 'watermark' */
    position: absolute;
    top: 0; /* or whatever */
    left: 0; /* or whatever, position according to taste */
    opacity: 0.5;/* Firefox, Chrome, Safari, Opera, IE >= 9 (preview) */
    filter:alpha(opacity=50); /* for <= IE 8 */
    float:top;
    }

    #tpdoc img {
    /* the actual 'watermark' */
    position: absolute;
    top: 0; /* or whatever */
    left: 0; /* or whatever, position according to taste */
    opacity: 0.5;*/ /* Firefox, Chrome, Safari, Opera, IE >= 9 (preview) */
    filter:alpha(opacity=50); /* for <= IE 8 */
    float:top;
    }
    #document{
        display:inline-block;
        margin:15px;
        text-align: left;

    }
    #document img{
        border: 2px solid #eed3d7;
        border-radius: 10px 0  10px;
        margin:0px 10px 10px 10px;
    }

  
    tr > td
    {
        padding-bottom: 1em;
    }

    a{
        color:#9E8D6B;
        
    }
    a:hover{
        color:#9E8D6B;
    }
</style>

   
<div class="site-index">
    <div class="jumbotron">
    <div class="page-header">УКЛАДКА КАМНЯ</div>
     <div class="page-text">
        <p>Компания <b>GEKKOSTONE</b> заинтересована в детальном освещении вопроса, касательно качественного монтажа и последующей успешной эксплуатации 
        декоративного облицовочного камня в течение многих десятилетий, для чего технология укладки была тщательно проработана с учетом всех 
        возможных факторов и различных условий применения.
        </p>
        <p><b>Четкое следование изложенным рекомендациям - залог успешной эксплуатации декоративного камня в течение многих лет!</b>
        </p>
    
    
         <div class="left-side-half-header">ДО НАЧАЛА РАБОТ</div>
        <div class="left-side-half-text">
            
            <p>
                <table style="width:100%;border:20px">
                    <tr >
                        <td><img src="images\content\rocklaying\1.png" align="left"></img></td>
                        <td>Персонал, производящий облицовочные работы, должен обладать необходимыми знаниями по типу применяемых материалов, а также 
                        требуемыми навыками по монтажу. Перед началом облицовочных работ убедитесь, что персонал изучил рекомендуемую информацию 
                        по типу применяемых материалов, а также по технологии монтажа и требуйте соблюдения настоящих рекомендаций!
                        </td> 
                    </tr>

                    <tr>
                        <td><img src="images\content\rocklaying\2.png" align="left"></img></td>
                        <td>Качественный проект требует применения надлежащих материалов и правильных методов монтажа. Конечно, применение качественных 
                        материалов и надлежащая методика укладки камня предполагает дополнительные расходы. Однако, это необходимые расходы, если Вы 
                        желаете получить красивую и качественную облицовку, которая прослужит Вам многие десятилетия.
                        </td> 
                    </tr>
                   
                    
                </table>
            </p>
        
         <p>
        <table style="width:100%">
            <tr>
                        <td><img src="images\content\rocklaying\3.png" align="left"></td>
                        <td>Настоятельно рекомендуем соблюдать правила техники безопасности на рабочем месте при работе с инструмен-
                        том, а также химическими растворами и добавками. Также рекомендуем применять индивидуальные средства 
                        защиты органов зрения, слуха и дыхания, работы производить в защитной обуви, костюме и перчатках.
                        </td> 
                    </tr>
                    
                </table>
                 </p>
        </div>
        <div class="left-side-half-header">ИНСТРУКЦИИ ПО МОНТАЖУ ДЕКОРАТИВНОГО КАМНЯ И ТИПУ ПРИМЕНЯЕМЫХ МАТЕРИАЛОВ:</div>
        <div class="right-half">
            <div class="right-side-half-text">
                <div id="document">
                    <p><a href=""><img src="images\content\certificates\transparent.png" alt="..." style="float:left"/>
                        КРАТКАЯ ИНСТРУКЦИЯ.</a><br>
                        Изложены общие рекомендации
                        по монтажу различных фактур и
                        типу применяемых материалов.
                    </p>
                    <p>(файл в формате <b>pdf</b>, для просмотра
                        необходим <a href="https://get.adobe.com/reader/" target="_blank">Adobe Reader</a>).
                    </p>
                </div>
            </div>
        </div>
        <div class="left-half">
            <div class="left-side-half-text">
                <div id="document">
                    <p><a href=""><img src="images\content\certificates\transparent.png" alt="..." style="float:left"/>
                        ПОДРОБНАЯ ИНСТРУКЦИЯ.</a><br>
                        Изложены подробные рекомендации
                        по монтажу различных фактур на 
                        различные типы поверхностей и узлы.
                        Описаны различные монтажные
                        материалы и приведены подробные 
                        рекомендации по их применению.
                    </p>
                    <p>(файл в формате <b>pdf</b>, для просмотра
                        необходим <a href="https://get.adobe.com/reader/" target="_blank">Adobe Reader</a>).
                    </p>
                </div>
            </div>                    
        </div>
   <div class="left-side-half-header">ВИДЕО ПО МОНТАЖУ ДЕКОРАТИВНОГО КАМНЯ:<span style="float:right;color:grey;"> <b>перейти к </b><a href="index.php?r=videogallery%2Findex" style="color:#9E8D6B"><u>ВИДЕОГАЛЕРЕЕ</u></a></span></div>
    <div class="gallery" style="width:100%;text-align: justify;" >   
    <?php foreach ($videos as $videoItem){ ?>
        <div class="product" style="width:22%;float:none;vertical-align:top;">
            <a target="_blank" href="<?= $videoItem->video_link ?>"><img src="<?= $videoItem->video_thumbnail?>"  width="220" height="150"></a>
            <p style="margin:0;"><b><?= $videoItem->video_name?></b></p>
            <p style="margin:0;"><?= $videoItem->video_description?></p>
        </div>
    <?php } ?>
</div>
    
</div>
   </div>

</div>
