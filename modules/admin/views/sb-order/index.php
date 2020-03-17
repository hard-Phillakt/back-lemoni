<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Url::remember();

/* @var $this yii\web\View */
/* @var $searchModel app\models\SbOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Онлайн оплаты Сбербанк';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sb-order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'orderNumber',
            'orderDescription:ntext',
            'transDate',
            'formattedAmount',
            'email:email',
            'ip',
            'panMasked',
            'paymentSystem',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],

        ],
    ]); ?>


</div>
