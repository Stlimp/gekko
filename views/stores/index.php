<?php

use yii\helpers\Html;
use yii\grid\GridView;
mb_internal_encoding("UTF-8");

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stores-index">
    <div class="jumbotron">
    <div class="page-header">ГДЕ КУПИТЬ</div>
    <div class="left_third">
        <div style="color: #CC6633;"><b>Выберите Ваш регион и город:</b></div>
        <ul style ="list-style: none;padding-left:0px;">
            <?php foreach ($country as $countryItem){ ?>
            <a  style ="font-size:12px;color:#787764;text-decoration: none; "  data-toggle="collapse" href="#collapse<?=$countryItem ?>" aria-expanded="false" aria-controls="collapse<?= $countryItem ?>"> 
                <h1 style="font-size:14px;"><b><u><?= mb_strtoupper($countryItem) ?></u></b>    </h1>
            </a>
                <div class="collapse" id="collapse<?= $countryItem ?>">
                    <div class="well-stores">
                    <?php foreach($stores as $arr) { 
                        if ($arr->country == $countryItem) {?>
                        <div class="cities">
                            <a  style ="font-size:12px;color:#787764;text-decoration: none; "  data-toggle="collapse" href="#collapse<?=$arr->city ?>" aria-expanded="false" aria-controls="collapse<?= $arr->city ?>"> 
                                <h2 style="font-size:12px;"><u><?= mb_strtoupper($arr->city) ?></u></h1>
                            </a>
                            <div class="collapse" id="collapse<?= $arr->city ?>">
                                <div class="well-stores">       
                                    <div class="store">
                                        <?= $arr->description ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
                    </div>
                </div>
            
                    <?php } ?>
                
                
               

        </ul>
        
    </div>
    <div class="right_two_thirds">
        <div style="color: #CC6633;"><b>Карта</b></div>
        
        <iframe src="https://mapsengine.google.com/map/embed?mid=zpgWQOXI5Eno.kx2t4tkdCL9k" width="100%" height="480"></iframe>
        <!-- GOOGLE MAPS
        
        !-->
    </div>

    
    </div>
</div>
