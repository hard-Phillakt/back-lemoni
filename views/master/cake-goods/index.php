<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel app\models\CakeGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары - торты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cake-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товар торт', ['create'], ['class' => 'btn btn-success mb-35']) ?>
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
                    return "<img src='{$data->lm_img_one}' style='width: 150px;'>";
                },
            ],
            'lm_essence',
            'lm_title:ntext',
            'lm_description:ntext',
//            'lm_content:ntext',
            //'lm_weight',
            //'lm_price_for_kg',
            //'lm_type',
            //'lm_count_level',
            //'lm_subjects',
            //'lm_create_box',
//            'lm_publicate',
            //'lm_prioritet',
            //'lm_img_one:ntext',
            //'lm_img_two:ntext',
            //'lm_img_three:ntext',
            //'lm_compilation:ntext',
            //'lm_alter_card:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
