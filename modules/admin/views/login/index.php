<?php

$this->registerCssFile('/css/login.css');

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">

            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name'); ?>

                <?= $form->field($model, 'password')->passwordInput(); ?>

                <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>

            <?php $form::end(); ?>

        </div>
    </div>
</div>