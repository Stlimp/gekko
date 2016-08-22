<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Accordion;
mb_internal_encoding("UTF-8");
$this->registerJsFile('@web/js/faq-select.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div class="site-index">
<div class="jumbotron">
    <div class="page-header" style="float:left;">ВОПРОС - ОТВЕТ</div>

        
    <ul style ="list-style: none">
        <?php foreach ($chapter as $chapter_item){ ?>
                <h1 style="color:#CC6633;font-size:14px;"><?= mb_strtoupper($chapter_item->chapter) ?></h1>
                <?php foreach($faq as $arr) { 
                        if ($arr->chapter == $chapter_item->chapter) {?>
                        
                        <li><a class="question unselected" style ="font-size:12px;color:#000000;text-decoration: none; "  data-toggle="collapse" href="#collapseQuestion<?= $arr->id ?>" aria-expanded="false" aria-controls="collapseQuestion<?= $arr->id ?>">
                            <?= $arr->question ?>
                        </a>
                        <div class="collapse" id="collapseQuestion<?= $arr->id ?>">
                          <div class="well">
                            <p><?= $arr->answer ?></p>
                          </div>
                        </div>
                    </li>

        <?php }}} ?>
    </ul>
    <p>
        <?= Html::a('Create Faq', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
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
</div>
