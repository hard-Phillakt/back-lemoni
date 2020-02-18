<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CakeGoods;
use yii\helpers\ArrayHelper;
use app\models\Tag;

$cakeGoods = CakeGoods::find()->asArray()->orderBy('id DESC')->all();
$cakeTag = Tag::find()->where(['subjects' => 'cake'])->orderBy('id DESC')->asArray()->all();

$arr_goods = ArrayHelper::map($cakeGoods, 'id', 'lm_title');
$arr_tag = ArrayHelper::map($cakeTag, 'id', 'title');

?>

<div class="row">
    <div class="col-lg-12">
        <div class="cake-tag-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'cake_id')->dropDownList($arr_goods) ?>

            <?= $form->field($model, 'tag_id')->dropDownList($arr_tag) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>