<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;


/* @var $this yii\web\View */
/* @var $model app\models\Review */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publicated')->dropDownList([
                '0' => 'Нет',
                '1' => 'Да'
            ]) ?>
        </div>

        <div class="col-lg-6">

            <?= $form->field($model, 'review_img')->widget(InputFile::class, [
                'language'      => 'ru',
                'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'buttonName' => 'Загрузить',
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple'      => false       // возможность выбора нескольких файлов
            ]) ?>

            <div class="review-bg" style="background: url(<?= $model->review_img; ?>)"></div>

        </div>

        <div class="col-lg-12">

            <?= $form->field($model, 'comment')->widget(CKEditor::class, [
                'editorOptions' => [
                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ],
            ]) ?>

            <div class="form-group mt-15">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
