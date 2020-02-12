<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandyTag */
/* @var $form yii\widgets\ActiveForm */



use app\models\CandieGoods;
use yii\helpers\ArrayHelper;

$candyGoods = CandieGoods::find()->asArray()->all();

$arr_tag = ArrayHelper::map($candyGoods, 'id', 'lm_title');
?>

<div class="candy-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'candy_id')->dropDownList($arr_tag) ?>

    <?= $form->field($model, 'tag_id')->dropDownList([
        '1' => '23 февраля',
        '2' => 'День влюбленных',
        '3' => 'День рождения',
        '4' => 'Новый год',
        '5' => 'Свадьба',
        '6' => 'Пасха',
        '7' => 'День учителя',
        '8' => 'День матери',
        '9' => 'Диетические',
        '10' => '8 марта',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
