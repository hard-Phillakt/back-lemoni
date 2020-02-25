<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Url::remember();

$this->title = 'Акции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать акцию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'format' => 'html',
                'value' => function($data){
                    return "<img src='{$data['previmg']}' style='width: 150px;'>";
                }
            ],
            'description:ntext',
            'content:ntext',
            //'date',
            'publication',
            //'priority',
            //'essence',
            //'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
