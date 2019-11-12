<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CakeGoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cake-goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lm_essence') ?>

    <?= $form->field($model, 'lm_title') ?>

    <?= $form->field($model, 'lm_description') ?>

    <?= $form->field($model, 'lm_content') ?>

    <?php // echo $form->field($model, 'lm_weight') ?>

    <?php // echo $form->field($model, 'lm_price_for_kg') ?>

    <?php // echo $form->field($model, 'lm_type') ?>

    <?php // echo $form->field($model, 'lm_count_level') ?>

    <?php // echo $form->field($model, 'lm_subjects') ?>

    <?php // echo $form->field($model, 'lm_create_box') ?>

    <?php // echo $form->field($model, 'lm_publicate') ?>

    <?php // echo $form->field($model, 'lm_prioritet') ?>

    <?php // echo $form->field($model, 'lm_img_one') ?>

    <?php // echo $form->field($model, 'lm_img_two') ?>

    <?php // echo $form->field($model, 'lm_img_three') ?>

    <?php // echo $form->field($model, 'lm_compilation') ?>

    <?php // echo $form->field($model, 'lm_alter_card') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
