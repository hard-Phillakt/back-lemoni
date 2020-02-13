<?php

use yii\helpers\Html;
use yii\helpers\Url;


$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model app\models\Review */

$this->title = 'Обновить отзыв: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
