<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\News */

$previous = Url::previous();

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
