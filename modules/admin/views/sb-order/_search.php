<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SbOrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sb-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'orderNumber') ?>

    <?= $form->field($model, 'orderDescription') ?>

    <?= $form->field($model, 'transDate') ?>

    <?= $form->field($model, 'formattedAmount') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'panMasked') ?>

    <?php // echo $form->field($model, 'paymentSystem') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
