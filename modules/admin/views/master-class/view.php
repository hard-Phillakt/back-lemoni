<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$previous = Url::previous();


/* @var $this yii\web\View */
/* @var $model app\models\MasterClass */

$this->title = $model->lm_title;
$this->params['breadcrumbs'][] = ['label' => 'Master Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="master-class-view">

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
            'lm_essence',
            'lm_title:ntext',
            'lm_img',
            'lm_description:ntext',
            'lm_content:ntext',
            'lm_price',
            'lm_date',
            'lm_publicate',
            'lm_prioritet',
        ],
    ]) ?>

</div>
