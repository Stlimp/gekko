<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Certificates';
?>

<div class="certificates-index">
    <div class="jumbotron">
        <div class="page-header"><b>ТЕХНИЧЕСКИЕ ДАННЫЕ И СЕРТИФИКАТЫ</b></div>
        <div class="page-text">
            <p>Декоративный камень GEKKOSTONE производится из мелкозернистого бетона только на основе высокомарочного белого цемента, мытого песка высшего сорта и
    окрашивается в массе неорганическими атмосферостойкими пигментами. Камень GEKKOSTONE полностью соответствует существующим строительным нормам
    и правилам и изготавливается в соответствии с <span class="numbers">СТБ 1374-2003</span>. </p>
            <p>Каждая партия камня проходит приемку по показателям по отпускной и марочной прочности, а также сплошной контроль по внешнему виду на соответствие форме
    камней и соответствию цветового окраса. Камни проходят регулярные периодические испытания в сертифицированных испытательных центрах по показателям
    морозостойкости, водопоглощения, водонепроницаемости, прочности на изгиб и испытание на соответствие уровню естественных радионуклидов (ЕРН).</p>
            <p><b>Соответствие требованиям стандартов подтверждают Протоколы испытаний, а также ДЕКЛАРАЦИЯ О СООТВЕТСТВИИ на продукцию  <span class="numbers">ТР 2009/013/BY</span>.</b></p>
<br>
</br>
        </div>
        <div class="left-half">
            <div class="left-side-half-header-orange">ТЕХНИЧЕСКИЕ ДАННЫЕ</div>
            <div class="left-side-half-text">
                <!--<p>-->
                    <table style="width:100%;border-spacing: 7px;border-collapse: separate;">
                        <tr>
                            <td><img class=""src="/images/content/certificates/png/1.png" align="left"></img></td>
                            <td>Изготовлен на основе бездобавочного белого цемента <span class="numbers">600</span>-й марки. </td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/2.png" align="left"></img></td>
                            <td>Требуемая прочность на сжатие не ниже <span class="numbers">25,6</span> МПа <br>(фактическая <span class="numbers">42,7</span> МПа).</td>
                        </tr><br>
                        <tr>
                            <td><img src="/images/content/certificates/png/3.png" align="left"></img></td>
                            <td>Требуемая прочность на изгиб не менее <span class="numbers">1,8</span> МПа<br>(фактическая более <span class="numbers">7,7</span> МПа).</td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/4.png" align="left"></img></td>
                            <td>Требуемая морозостойкость не менее F<span class="numbers">150</span><br>(фактическая расчетная около F<span class="numbers">400</span>).</td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/5.png" align="left"></img></td>
                            <td>Требуемая водонепроницаемость не менее W<span class="numbers">2</span> (фактическая W<span class="numbers">8</span>).<br>Требуемое водопоглощение не более <span class="numbers">8</span>% (фактическое менее <span class="numbers">8</span>%).</td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/6.png" align="left"></img></td>
                            <td>Не горит и не выделяет дым при нагревании.<br>Не изменяет своих свойств при температуре до <span class="numbers">200</span>°C.  </td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/7.png" align="left"></img></td>
                            <td>Идеально подходит как для наружной<br>так и для внутренней облицовки.</td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/8.png" align="left"></img></td>
                            <td>Превосходная светостойкость в силу природы <br>применяемых неорганических пигментов компании Lanxess.</td>
                        </tr>
                        <tr>
                            <td><img src="/images/content/certificates/png/9.png" align="left"></img></td>
                            <td>Изготовлен из натуральных компонентов <br>и является экологически чистым. <br></td>
                        </tr>
                         <tr>
                            <td><img src="/images/content/certificates/png/10.png" align="left"></img></td>
                            <td>Не содержит радиоактивных компонентов. Естественный уровень <br>радионуклидов ЕРН = <span class="numbers">26,5</span> Бк/кг при допустимом уровне ЕНР до <span class="numbers">370</span> Бк/кг.</td>
                        </tr>
                    </table>
                <!--</p>-->
            </div>
        </div>

        <div class="right-half">
            <div class="right-side-half-header-orange">СЕРТИФИКАТЫ И ПРОТОКОЛЫ</div>
            <div class="right-side-half-text">
<p>
</p>
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
                    <a class="link_grey_color" href="<?= $certificate->path?>" target="_blank">

                            <img class="doc-miniature" src="<?= $certificate->thumbnail ?>" alt="..." />
                       <!--  </div> -->
                        <p><?= $certificate->description ?></p>
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
