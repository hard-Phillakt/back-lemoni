<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мастер-классы';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="master-class-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать мастер-класс', ['create'], ['class' => 'btn btn-success mb-35']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'format' => 'html',
                'value' => function ($data) {
                    return "<img src='{$data->lm_img}' style='width: 150px;'>";
                },
            ],
            'lm_essence',
            'lm_title:ntext',
//            'lm_img',
            'lm_description:ntext',
            //'lm_content:ntext',
            //'lm_price',
            //'lm_date',
            //'lm_publicate',
            //'lm_prioritet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
