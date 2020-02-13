<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$previous = Url::previous();

/* @var $this yii\web\View */
/* @var $model app\models\CandieGoods */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Товар - десерт', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="candie-goods-view">

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
            'lm_description:ntext',
            'lm_content:ntext',
            'lm_weight',
            'lm_price_for_kg',
            'lm_type',
            'lm_count_level',
            'lm_subjects',
            'lm_create_box',
            'lm_publicate',
            'lm_prioritet',
            'lm_img_one:ntext',
            'lm_img_two:ntext',
            'lm_img_three:ntext',
            'lm_compilation:ntext',
            'lm_alter_card:ntext',
        ],
    ]) ?>

</div>
