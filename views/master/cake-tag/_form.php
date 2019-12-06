<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CakeTag */
/* @var $form yii\widgets\ActiveForm */

use app\models\CakeGoods;
use yii\helpers\ArrayHelper;

$cakeGoods = CakeGoods::find()->asArray()->all();



//debug($cakeGoods[0]['id']);



//foreach ($cakeGoods as $key){
//
//    echo $key['id'];
//
//}

$arr_tag = ArrayHelper::map($cakeGoods, 'id', 'lm_title');

//debug($result);

?>

<div class="row">
    <div class="col-lg-12">
        <div class="cake-tag-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'cake_id')->dropDownList($arr_tag) ?>

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
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>