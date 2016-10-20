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
    <div class="page-header" style="float:left; font-weight: bold; color: #666666">ВОПРОС / ОТВЕТ</div>


    <ul style ="list-style: none">
        <?php foreach ($chapter as $chapter_item){ ?>
                <h1 style="color: #996633;font-size:15px; font-weight: bold"><?= mb_strtoupper($chapter_item->chapter) ?></h1>
                <?php foreach($faq as $arr) {
                        if ($arr->chapter == $chapter_item->chapter) {?>

                        <li><a class="question unselected" style ="font-size:14px;color:#666666;text-decoration: none; "  data-toggle="collapse" href="#collapseQuestion<?= $arr->id ?>" aria-expanded="false" aria-controls="collapseQuestion<?= $arr->id ?>">
                            <?= $arr->question ?>
                        </a>
                        <div class="collapse" id="collapseQuestion<?= $arr->id ?>">
                          <div class="well">
                            <p style ="font-size:14px;"><?= $arr->answer ?></p>
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
