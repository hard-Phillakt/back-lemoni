<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lm_essence') ?>

    <?= $form->field($model, 'lm_img') ?>

    <?= $form->field($model, 'lm_title') ?>

    <?= $form->field($model, 'lm_description') ?>

    <?php // echo $form->field($model, 'lm_content') ?>

    <?php // echo $form->field($model, 'lm_date') ?>

    <?php // echo $form->field($model, 'lm_publicate') ?>

    <?php // echo $form->field($model, 'lm_prioritet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
