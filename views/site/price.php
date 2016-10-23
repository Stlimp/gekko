<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price';
?>
   
<div class="site-index">
    <div class="jumbotron">
    <div class="page-header">КАТАЛОГИ И ПРАЙС</div>
    
    <div class="left-half">
        <div class="left-side-half-header-orange">КАТАЛОГИ И БРОШЮРЫ</div>
        <div class="left-side-half-text">
            <div id="document">
                <a class="link_grey_color" href="http://example.com/files/myfile.pdf" target="_blank">

                    <img class="doc-miniature" src="\images\content\certificates\transparent.png" alt="..." />    

                <p>КАТАЛОГ 2015</p>
                </a>
            </div>
            <div id="document">
                <a class="link_grey_color" href="http://example.com/files/myfile.pdf" target="_blank">

                    <img class="doc-miniature" src="\images\content\certificates\transparent.png" alt="..." />    

                <p>ЛИФЛЕТ 2015</p>
                </a>
            </div>
        </div>
    </div>
    <div class="right-half">
        <div class="right-side-half-header-orange">ПРАЙС-ЛИСТ</div>
        <div class="right-side-half-text">
            
            <div id="document">
                <a class="link_grey_color" href="data/price.xls" target="_blank">
                <img class="doc-miniature" src="\images\content\certificates\price.jpg" alt="..." />    
                <p>Розничный прайс <br> от 01.02.2016г.</p>
                </a>
            </div>          
            
        </div>
    </div>
    <div class="page-text">
        <p><b>Внимание!</b> Использование любых печатных материалов и фотографии, представленных на настоящем вебсайте, разрешается только после предварительного 
        согласования с производителем!</p>
    </div>
    
</div>
</div>
