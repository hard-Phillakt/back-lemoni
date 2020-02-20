<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;

?>

<div class="stock-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        
        <div class="col-lg-6">

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date')->textInput(['maxlength' => true, 'placeholder' => 'Обязательный формат 00.00.0000']) ?>

            <?= $form->field($model, 'publication')->dropDownList([
                '0' => 'Нет',
                '1' => 'Да'
            ]) ?>

            <?= $form->field($model, 'priority')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'essence')->textInput(['maxlength' => true]) ?>

            <?//= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

        </div>

        <div class="col-lg-6">

            <?= $form->field($model, 'previmg')->widget(InputFile::class, [
                'language'      => 'ru',
                'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'buttonName' => 'Загрузить',
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple'      => false       // возможность выбора нескольких файлов
            ]) ?>

            <div class="review-bg" style="background: url(<?= $model->previmg; ?>)"></div>

        </div>


        <div class="col-lg-12">
            <?= $form->field($model, 'description')->textarea(['rows' => 6])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]) ?>
        </div>

        <div class="col-lg-12">
            <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget(CKEditor::class, [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]) ?>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
