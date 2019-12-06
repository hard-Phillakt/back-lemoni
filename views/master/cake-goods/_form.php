<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;


/* @var $this yii\web\View */
/* @var $model app\models\CandieGoods */
/* @var $form yii\widgets\ActiveForm */


//debug($model);
?>

<div class="candie-goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-6">

            <?= $form->field($model, 'lm_essence')->dropDownList([
                'cake' => 'cake',
                'shadlaw' => 'shadlaw',
                'bouquet' => 'bouquet',
                'candy' => 'candy',
            ]) ?>

            <?= $form->field($model, 'lm_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_weight')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_price_for_kg')->textInput() ?>

            <?= $form->field($model, 'lm_type')->dropDownList([
                'Классический' => 'Классический',
                'Мусcовый' => 'Мусcовый',
                'Шадлав' => 'Шадлав',
                'Диетические' => 'Диетические',
                'Постные' => 'Постные',
            ]) ?>

            <?= $form->field($model, 'lm_count_level')->dropDownList([
                '1' => 1,
                '2' => 2,
                '3' => 3
            ]) ?>

            <?= $form->field($model, 'lm_subjects')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_compilation')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lm_alter_card')->dropDownList([
                'cake' => 'cake',
                'shadlaw' => 'shadlaw',
                'bouquet' => 'bouquet',
                'candy' => 'candy',
            ]) ?>
        </div>

        <div class="col-lg-6">

            <?= $form->field($model, 'lm_create_box')->dropDownList([
                '1' => '23 февраля',
                '2' => 'День влюбленных',
                '3' => 'День рождения',
                '4' => 'Новый год',
                '5' => 'Свадьба',
                '6' => 'Пасха',
                '7' => '1 сентября',
                '8' => 'День учителя',
                '9' => 'День матери',
                '10' => 'Диетические',
                '11' => '8 марта',
            ]) ?>

            <?= $form->field($model, 'lm_publicate')->dropDownList([
                '1' => 'Да',
                '0' => 'Нет'
            ]) ?>

            <?= $form->field($model, 'lm_prioritet')->textInput(['maxlength' => true]) ?>

            <div class="admin-rev-img">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="admin-rev-img" style="background: url(<?= $model->lm_img_one; ?>);" ></div>

                        <?= $form->field($model, 'lm_img_one')->textInput(['maxlength' => true])->widget(InputFile::class, [
                            'options'       => ['class' => 'form-control'],
                            'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                            'buttonName' => 'Загрузить',
                        ]) ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="admin-rev-img" style="background: url(<?= $model->lm_img_two; ?>);"></div>

                        <?= $form->field($model, 'lm_img_two')->textInput(['maxlength' => true])->widget(InputFile::class, [
                            'options'       => ['class' => 'form-control'],
                            'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                            'buttonName' => 'Загрузить',
                        ]) ?>
                    </div>

                    <div class="col-lg-4">
                        <div class="admin-rev-img" style="background: url(<?= $model->lm_img_three; ?>);"></div>
                        <?= $form->field($model, 'lm_img_three')->textInput(['maxlength' => true])->widget(InputFile::class, [
                            'options'       => ['class' => 'form-control'],
                            'buttonOptions' => ['class' => 'btn btn-primary mt-15'],
                            'buttonName' => 'Загрузить',
                        ]) ?>
                    </div>
                </div>
            </div>
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
