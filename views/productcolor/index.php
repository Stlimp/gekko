<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductColorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-color-index">

    <div class="page-header">ДЕКОРИТАВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>
    <div class="gallery">   
        <?php foreach ($colors as $color){ ?>
            <div class="product">
                <a target="_blank" href="<?php echo $color->product_3ds_link; ?>"><img src="" alt="" width="220" height="150"></a>
                <h3 style="margin:0"><?= $color->product_color_name?></h3>
            </div>
        <?php } ?>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Color', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_color_id',
            'product_color_name',
            'product_article',
            'product_3ds_link',
            'product_angular',
            'product_regular',
            'product_price',
            'product_subcategory_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
