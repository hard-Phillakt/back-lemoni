<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SbOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sb-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderNumber')->textInput() ?>

    <?= $form->field($model, 'orderDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'transDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formattedAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panMasked')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentSystem')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
