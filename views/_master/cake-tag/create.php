<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CakeTag */

$this->title = 'Create Cake Tag';
$this->params['breadcrumbs'][] = ['label' => 'Cake Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cake-tag-create">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
