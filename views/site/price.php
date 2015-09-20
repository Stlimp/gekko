<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price';
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

    .left-side-half-text img{
        border: 2px solid #eed3d7;
        border-radius: 10px 0  10px;
        height:162px;
        width:115px;

    }

    #document{
        display:inline-block;
            margin:15px;
            text-align: center;
    }

  
</style>

   
<div class="site-index">
    <div class="jumbotron">
    <div class="page-header">КАТАЛОГИ И ПРАЙС</div>
    
    <div class="left-half">
        <div class="left-side-half-header">КАТАЛОГИ И БРОШЮРЫ</div>
        <div class="left-side-half-text">
            <div id="document">
                <a href="http://example.com/files/myfile.pdf" target="_blank">

                    <img src="images\content\certificates\transparent.png" alt="..." />    

                <p>КАТАЛОГ 2015</p>
                </a>
            </div>
            <div id="document">
                <a href="http://example.com/files/myfile.pdf" target="_blank">

                    <img src="images\content\certificates\transparent.png" alt="..." />    

                <p>ЛИФЛЕТ 2015</p>
                </a>
            </div>
        </div>
    </div>
    <div class="right-half">
        <div class="right-side-half-header">ПРАЙС-ЛИСТЫ</div>
        <div class="right-side-half-text">
            
            <div id="document">
                <a href="http://example.com/files/myfile.pdf" target="_blank">
                <img src="images\content\certificates\transparent.png" alt="..." />    
                <p>Розничный прайс <br> от 01.01.2015</p>
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
