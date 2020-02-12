<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
//use app\models\CakeTag;

// импортировал все торты
use app\models\CakeGoods;

// импортировал все candy
use app\models\CandieGoods;

use app\models\Tag;

use yii\helpers\Url;


Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel app\controllers\master\CakeTagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Связи: торты с тегами';
$this->params['breadcrumbs'][] = $this->title;


$cakeArr = ArrayHelper::map(CakeGoods::find()->asArray()->all(), 'id', 'lm_title');

$tagArr = ArrayHelper::map(Tag::find()->asArray()->all(), 'id', 'title');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="cake-tag-index">

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
                        [
                            'format' => 'html',
                            'value' => function ($data) {
                                $model = new CakeGoods();
                                $query = $model::findOne($data['cake_id']);
                                return "<div class='td-prev' style='background: url({$query->lm_img_one});'></div>";
                            },
                        ],
                        'cake_id'  => [
                            'label' => 'Cake - id',
//                            'filter' => Html::input('text', 'CakeTagSearch[cake_id]', '', ['class' => 'form-control'] ),
                            'filter' => Html::activeDropDownList(
                                $searchModel,
                                'cake_id', // поле в модели, для которого применяется сортировка
                                $cakeArr,
                                [
                                    'prompt' => '- Все -',
                                    'class' => 'form-control',
                                ]
                            ),
                            'value' => function ($data) {

                                $cakeGoods = new CakeGoods();

                                $cakeGoods = $cakeGoods::findOne($data['cake_id']);

                                return $cakeGoods['lm_title'];
                            },
                        ],


                        'tag_id' =>  [
                            'label' => 'Tag - id',
//                            'filter' => Html::input('text', 'CakeTagSearch[tag_id]', '', ['class' => 'form-control']),
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
        </div>
    </div>
</div>




<!--






-->

