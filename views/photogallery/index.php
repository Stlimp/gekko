<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotogallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photogalleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogallery-index">
    <div class="page-header">ФОТОГАЛЛЕРЕЯ</div>
    <div class="photogallery">   
    <?php foreach ($photogallery as $photoItem){ ?>
        <div class="photogallery-item">
            <a target="_blank" href="<?= $photoItem->photo_name ?>.html"><img src="<?= $photoItem->photo_image?>" alt="<?= $photoItem->photo_name?>" width="100" height="75"></a>
        </div>
     <?php } ?>
    </div>

    <p>
        <?= Html::a('Create Photogallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo_name',
            'photo_category',
            'photo_subcategory',
            'photo_image',
            // 'photo_product',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
