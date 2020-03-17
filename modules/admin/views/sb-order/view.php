<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model app\models\SbOrder */

$this->title = $model->orderNumber;
$this->params['breadcrumbs'][] = ['label' => 'Sb Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sb-order-view">

    <h1>Номер заказа: <?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'orderNumber',
            'orderDescription:ntext',
            'transDate',
            'formattedAmount',
            'email:email',
            'ip',
            'panMasked',
            'paymentSystem',
        ],
    ]) ?>

</div>
