<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterClass */

$this->title = 'Create Master Class';
$this->params['breadcrumbs'][] = ['label' => 'Master Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
