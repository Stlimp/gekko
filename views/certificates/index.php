<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Certificates';
?>
<style>
    .left-side-half-header {
        background: none ;
        float:left;
        font-family:Corbel;
        font-weight:bolder;
        font-size:16px;
        color: #CC6633;
        text-align:left;
        width:95%;
 
    }

    .right-side-half-header {
        background: none ;
        float:left;
        font-family:Corbel;
        font-weight:bolder;
        font-size:16px;
        color: #CC6633;
        text-align:left;
        width:95%
    }

    .right-side-half-text img{
        border: 2px solid #eed3d7;
        border-radius: 10px 0  10px;
        height:162px;
        width:115px;

    }

   /* #watermark{
   background:url(http://gekkostone/web/images/content/certificates/STB.png) no-repeat; 
   width: 50px;
   height: 50px;
   position: relative;
   top: 0;
   left: 0;
    }
    #image{
       width: 115px;
       height: 162px;
       position: relative;
       top: 0;
       left: 0;
    }*/
    #stbdoc {
    /* the image you want to 'watermark' */
    height: 162px; /* or whatever, equal to the image you want 'watermarked' */
    width: 115px; /* as above */
    background-image: url(images/content/certificates/STB.png);
    background-position: 0 0;
    background-repeat: no-repeat;
    position: relative;
    display:inline-block;

    }

    #tpdoc {
    /* the image you want to 'watermark' */
    height: 162px; /* or whatever, equal to the image you want 'watermarked' */
    width: 115px; /* as above */
    background-image: url(images/content/certificates/TP.png);
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
            text-align: center;
    }
    #document>a{
        text-decoration:none;
        color:#9E8D6B;
    }
     #document>a:hover{
        text-decoration:underline;
        color:#9E8D6B;
     }


  
</style>
<div class="certificates-index">
    <div class="page-header">ТЕХНИЧЕСКИЕ ДАННЫЕ И СЕРТИФИКАТЫ</div>
    <div class="page-text">
        <p>Декоративный камень GEKKOSTONE производится из мелкозернистого бетона только на основе высокомарочных цементов, мытого песка высшего сорта и 
окрашивается в массе неорганическими атмосферостойкими пигментами. Камень GEKKOSTONE полностью соответствует существующим строительным нормам 
и правилам и изготавливается в соответствии с СТБ 1374-2003. </p>
        <p>Каждая партия камня проходит приемку по показателям по отпускной и марочной прочности, а также сплошной контроль по внешнему виду на соответствие форме
камней и соответствию цветового окраса. Камни проходят регулярные периодические испытания в сертифицированных испытательных центрах по показателям
морозостойкости, водопоглощения, водонепроницаемости, прочности на изгиб и испытание на соответствие уровню естественных радионуклидов (ЕРН).</p>
        <p><b>Соответствие требованиям стандартов подтверждают Протоколы испытаний, а также Декларация о соответствии на продукцию ТР 2009/013/BY.</b></p>

    </div>
    <div class="left-half">
        <div class="left-side-half-header">ТЕХНИЧЕСКИЕ ДАННЫЕ</div>
        <div class="left-side-half-text">
            <p>
                <table style="width:100%">
                    <tr>
                        <td><img src="images\content\certificates\png\1.png" align="left"></img></td>
                        <td>Изготовлен на основе марочного цемента <br>(преимущественно CIMSA White и CEMEX).</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\2.png" align="left"></img></td>
                        <td>Требуемая прочность на сжатие не ниже 25,7 МПа <br>(фактическая более 42 МПа).</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\3.png" align="left"></img></td>
                        <td>Требуемая прочность на изгиб не менее 1,8 МПа<br>(фактическая более 7,7 МПа).</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\4.png" align="left"></img></td>
                        <td>Требуемая морозостойкость не менее F150<br>(фактическая расчетная около F400).</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\5.png" align="left"></img></td>
                        <td>Требуемая водонепроницаемость не менее W2 (фактическая W8).<br>Требуемое водопоглощение не более 8% (фактическое менее 8%).</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\6.png" align="left"></img></td>
                        <td>Не горит и не выделяет дым при нагревании.<br>Не изменяет своих свойств при температуре до 200°C.  </td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\7.png" align="left"></img></td>
                        <td>Идеально подходит как для наружной<br>так и для внутренней облицовки.</td> 
                    </tr>
                    <tr>
                        <td><img src="images\content\certificates\png\8.png" align="left"></img></td>
                        <td>Изготовлен из натуральных компонентов <br>и является экологически чистым. <br>Уровень ЕРН = 26,5 Бк/кг при допустимом уровне до 370 Бк/кг.</td> 
                    </tr>
                </table>
            </p>
        </div>
    </div>
    <div class="right-half">
        <div class="right-side-half-header">СЕРТИФИКАТЫ И ПРОТОКОЛЫ</div>
        <div class="right-side-half-text">
            
            <!-- <div id="document">
                          <a href="http://example.com/files/myfile.pdf" target="_blank">
                          <div id="stbdoc">
                              <img src="images\content\certificates\png\5.png" alt="..." />    
                          </div>
                          <p>ПРОТОКОЛ ИСПЫТАНИЙ</p>
                          <p>№866 от 01.01.2013</p>
                          </a>
                      </div>
                      <div id="document">
                          <div id="tpdoc">
                              <img src="images\content\certificates\transparent.png" alt="..." />
                          </div>
                              <p>ПРОТОКОЛ ИСПЫТАНИЙ</p>
                              <p>№866 от 01.01.2013</p>
                      </div>   -->          
           
            <?php foreach ($dataProvider->getModels() as $certificate){ ?>
            <div id="document">
                <a href="<?= $certificate->path?>" target="_blank">
                    <?php if (!(strcmp($certificate->type,"a"))) :?>
                    <div id="stbdoc"> 
                    <?php elseif (!(strcmp($certificate->type,"b"))) : ?>
                    <div id="tpdoc">
                    <?php endif ?>
                        <img src="<?= $certificate->thumbnail ?>" alt="..." /> 
                    </div>
                    <?php if (!(strcmp($certificate->type,"a"))) :?>
                    <p>ПРОТОКОЛ ИСПЫТАНИЙ</p>
                    <?php elseif (!(strcmp($certificate->type,"b"))) : ?>
                    <p>ДЕКЛАРАЦИЯ О СООТВЕТСТВИИ</p>
                    <?php endif ?>
                    <p><?= $certificate->description ?></p>
                </a>
            </div>
            <?php } ?>
                
        </div>
    </div>
    





    <p>
        <?= Html::a('Create Certificates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'path',
            'description',
            'thumbnail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
