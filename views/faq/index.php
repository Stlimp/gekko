<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="faq-index" style="font-family:Corbel;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Faq', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<ul>
    <?php foreach ($chapter as $chapter_item){ ?>
            <h1 style="color:#CC6633"><?= $chapter_item->chapter ?></h1>
            <?php foreach($faq as $arr) { 
                    if ($arr->chapter == $chapter_item->chapter) {?>
                    
                    <li><a class="" style ="none"  data-toggle="collapse" href="#collapseQuestion<?= $arr->id ?>" aria-expanded="false" aria-controls="collapseQuestion<?= $arr->id ?>">
                        <?= $arr->question ?>
                    </a>
                    <div class="collapse" id="collapseQuestion<?= $arr->id ?>">
                      <div class="well" style="border-radius:10px 0 10px;">
                        <p><?= $arr->answer ?><p>
                      </div>
                    </div>
                </li>
    <?php }}} ?>
</ul

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'chapter',
            'question:ntext',
            'answer:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
