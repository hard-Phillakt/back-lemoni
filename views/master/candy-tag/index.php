<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\CandieGoods;
use app\models\Tag;
use yii\helpers\Url;


Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel app\models\CandyTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$candyArr = ArrayHelper::map(CandieGoods::find()->asArray()->all(), 'id', 'lm_title');

$tagArr = ArrayHelper::map(Tag::find()->asArray()->all(),'id', 'title');


$this->title = 'Связи: candy с тегами';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candy-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="mt-35">
        <?= Html::a('Создать связь', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            'candy_id' => [
                'label' => 'Candy - id',
//              'filter' => Html::input('text', 'CakeTagSearch[cake_id]', '', ['class' => 'form-control'] ),
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'candy_id', // поле в модели, для которого применяется сортировка
                    $candyArr,
                    [
                        'prompt' => '- Все -',
                        'class' => 'form-control',
                    ]
                ),
                'value' => function ($data) {

                    $candyGoods = new CandieGoods();

                    $candyGoods = $candyGoods::findOne($data['candy_id']);

                    return $candyGoods['lm_title'];
                },
            ],


            'tag_id' => [
                'label' => 'Tag - id',
//              'filter' => Html::input('text', 'CakeTagSearch[tag_id]', '', ['class' => 'form-control']),
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'tag_id', // поле в модели, для которого применяется сортировка
                    $tagArr,
                    [
                        'prompt' => '- Все -',
                        'class' => 'form-control',
                    ]
                ),
                'value' => function ($data) {

                    $tags = new Tag();

                    $tags = $tags::findOne($data['tag_id']);

                    return $tags['title'];
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
