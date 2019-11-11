<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Url::remember();


/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success mb-35']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lm_essence',
            'lm_img',
            'lm_title:ntext',
            'lm_description:ntext',
            //'lm_content:ntext',
            //'lm_date',
            //'lm_publicate',
            //'lm_prioritet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
