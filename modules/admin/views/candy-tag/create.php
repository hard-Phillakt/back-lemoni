<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CandyTag */

$this->title = 'Create Candy Tag';
$this->params['breadcrumbs'][] = ['label' => 'Candy Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candy-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
