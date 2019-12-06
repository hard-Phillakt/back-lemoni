<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CakeTag */

$this->title = 'Update Cake Tag: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cake Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="cake-tag-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>
