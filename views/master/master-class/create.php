<?php

use yii\helpers\Html;
use yii\helpers\Url;

Url::remember();

/* @var $this yii\web\View */
/* @var $model app\models\MasterClass */

$this->title = 'Create Master Class';
$this->params['breadcrumbs'][] = ['label' => 'Master Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="mt-35">
        <?= Html::a('Назад', $previous, ['class' => 'link link__a mb-35']); ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
