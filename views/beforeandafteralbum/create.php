<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BeforeandafterAlbum */

$this->title = 'Create Beforeandafter Album';
$this->params['breadcrumbs'][] = ['label' => 'Beforeandafter Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beforeandafter-album-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
