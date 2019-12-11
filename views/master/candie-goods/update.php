<?php

use yii\helpers\Html;
use yii\helpers\Url;

$previous = Url::previous();


/* @var $this yii\web\View */
/* @var $model app\models\CandieGoods */

$this->title = 'Update Candie Goods: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candie Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candie-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
