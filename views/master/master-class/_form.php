<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterClass */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-class-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lm_essence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lm_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lm_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lm_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lm_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lm_price')->textInput() ?>

    <?= $form->field($model, 'lm_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lm_publicate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lm_prioritet')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
