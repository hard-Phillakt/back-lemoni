<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;


/* @var $this yii\web\View */
/* @var $model app\models\CandieGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candie-goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-6">

            <?= $form->field($model, 'lm_essence')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_weight')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_price_for_kg')->textInput() ?>

            <?= $form->field($model, 'lm_type')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_count_level')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_subjects')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_compilation')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_alter_card')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-6">

            <?= $form->field($model, 'lm_create_box')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_publicate')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_prioritet')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_img_one')->textInput(['maxlength' => true])->widget(InputFile::class, [
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                'buttonName' => 'Загрузить',
            ]) ?>

            <?= $form->field($model, 'lm_img_two')->textInput(['maxlength' => true])->widget(InputFile::class, [
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                'buttonName' => 'Загрузить',
            ]) ?>

            <?= $form->field($model, 'lm_img_three')->textInput(['maxlength' => true])->widget(InputFile::class, [
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                'buttonName' => 'Загрузить',
            ]) ?>

        </div>


        <div class="col-lg-12">

            <?= $form->field($model, 'lm_description')->textarea(['rows' => 6])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]) ?>

            <?= $form->field($model, 'lm_content')->textarea(['rows' => 6])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]) ?>

        </div>


    </div>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
