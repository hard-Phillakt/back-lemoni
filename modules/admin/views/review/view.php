<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$previous = Url::previous();
/* @var $this yii\web\View */
/* @var $model app\models\Review */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'отзыв', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="review-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'comment:ntext',
            'publicated',
        ],
    ]) ?>

</div>
