<?php

use yii\helpers\Html;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model app\models\CakeGoods */

$this->title = 'Create Cake Goods';
$this->params['breadcrumbs'][] = ['label' => 'Cake Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cake-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
