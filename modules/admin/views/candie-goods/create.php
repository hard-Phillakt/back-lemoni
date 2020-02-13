<?php

use yii\helpers\Html;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model app\models\CandieGoods */

$this->title = 'Создать товар - десерт';
$this->params['breadcrumbs'][] = ['label' => 'Candie Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="candie-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
