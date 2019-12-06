<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\controllers\master\CakeTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cake Tags';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cake-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cake Tag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cake_id',
            'tag_id',

            [
                'value' => function ($data) {
//                    debug($data);
//                    return $data->category->title;
                    return '!!!!!';
                },
                'label' => 'Торт',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'cake_id', // поле в модели, для которого применяется сортировка
                    ArrayHelper::map(\app\models\CakeGoods::find()->asArray()->all(), 'id', 'lm_title'),
                    ['class' => 'form-control', 'prompt' => '- Все -']
                )
            ],

            [
                'value' => function ($data) {
//                    return $data->category->title;
                    return '!!!!!';
                },
                'label' => 'Тег',

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
