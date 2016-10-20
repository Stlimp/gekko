<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rocklaying';
?>
<style>
    tr > td
    {
        padding-bottom: 1em;
    }
/* should be left */
</style>


<div class="site-index">
    <div class="jumbotron">
    <div class="page-header"><span style="color:#666666"><b>УКЛАДКА КАМНЯ</b></div>
     <div class="page-text">
        <p>Компания <b>GEKKOSTONE</b> заинтересована в детальном освещении вопроса, касательно качественного монтажа и последующей успешной эксплуатации
        декоративного облицовочного камня в течение многих десятилетий, для чего технология укладки была тщательно проработана с учетом всех
        возможных факторов и различных условий применения.
        </p>
        <p><b>Четкое следование изложенным рекомендациям - залог успешной эксплуатации декоративного камня в течение многих лет!</b>
        </p>

         <div class="left-side-half-header-orange" style="padding-left: 0px;"><span style="color:#996633"<b>ДО НАЧАЛА РАБОТ</b></div>
        <div class="left-side-half-text" style="padding:0;">

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
        <div class="left-side-half-header-orange" style="padding-left: 0px;"><span style="color:#996633"<b>ИНСТРУКЦИИ ПО МОНТАЖУ ДЕКОРАТИВНОГО КАМНЯ И ТИПУ ПРИМЕНЯЕМЫХ МАТЕРИАЛОВ:</b></div>
        <div class="right-half">
            <div class="right-side-half-text">
                <div id="document" style="text-align: left;">
                    <p><a class="link_grey_color" href="data/instr_short.pdf"><img class="doc-miniature" src="images\content\certificates\transparent.png" alt="..." style="float:left"/>
                        <u><b>КРАТКАЯ ИНСТРУКЦИЯ.</b></u></a><br>
                        Изложены общие рекомендации
                        по монтажу различных фактур и
                        типу применяемых материалов.
                    </p>
                    <p>(файл в формате <b>pdf</b>, для просмотра
                        необходим <a class="link_grey_color" href="https://get.adobe.com/reader/" target="_blank"><b>Adobe Reader</b></a>).
                    </p>
                </div>
            </div>
        </div>
        <div class="left-half">
            <div class="left-side-half-text">
                <div id="document" style="text-align: left;">
                    <p><a class="link_grey_color" href="data/instr_depth.pdf"><img class="doc-miniature" src="images\content\certificates\transparent.png" alt="..." style="float:left"/>
                        <u><b>ПОДРОБНАЯ ИНСТРУКЦИЯ.</b></u></a><br>
                        Изложены подробные рекомендации
                        по монтажу различных фактур на
                        различные типы поверхностей и узлы.
                        Описаны различные монтажные
                        материалы и приведены подробные
                        рекомендации по их применению.
                    </p>
                    <p>(файл в формате <b>pdf</b>, для просмотра
                        необходим <a class="link_grey_color" href="https://get.adobe.com/reader/" target="_blank"><b>Adobe Reader</b></a>).
                    </p>
                </div>
            </div>
        </div>
    <div class="left-side-half-header-orange" style="padding-left: 0px;"><span style="color:#996633"<b>ВИДЕО ПО МОНТАЖУ ДЕКОРАТИВНОГО КАМНЯ:</b><span style="float:right;color:grey;"> <b>перейти к </b><a class="link_brown_color" href="index.php?r=videogallery%2Findex" style="color:#9E8D6B"><u>ВИДЕОГАЛЕРЕЕ</u></a></span></div>
    <div class="gallery" style="width:100%;text-align: justify;" >
    <?php foreach ($videos as $videoItem){ ?>
        <div class="videoblock">
            <a target="_blank" href="<?= $videoItem->video_link ?>">
                <img src="<?= $videoItem->video_thumbnail?>">
                <p style="margin:0;"><b><?= $videoItem->video_name?></b></p>
                <p style="margin:0;"><?= $videoItem->video_description?></p>
            </a>
        </div>
    <?php } ?>
</div>
<?php include './../views/layouts/randomfooter.php' ?>
</div>

   </div>


</div>
