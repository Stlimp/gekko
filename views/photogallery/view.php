<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Photogallery */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Photogalleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photogallery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'photo_name',
            'photo_category',
            'photo_subcategory',
            'photo_image',
            'photo_product',
        ],
    ]) ?>

</div>
