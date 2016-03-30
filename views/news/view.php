<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">
    <div class="jumbotron">
        <div class="page-header" style="float:left;">НОВОСТИ</div>
        <div class="page-text">

            <h3><?= Html::encode($model->header) ?></h3>
            <h4><?= Html::encode($model->date)?></h4>

          <!--   <p>
              <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
              <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                  'class' => 'btn btn-danger',
                  'data' => [
                      'confirm' => 'Are you sure you want to delete this item?',
                      'method' => 'post',
                  ],
              ]) ?>
          </p> -->
            
            <?= $model->post    ?>
        </div>
    </div>
</div>
