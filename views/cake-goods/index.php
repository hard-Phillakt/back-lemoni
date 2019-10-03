<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:20
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if($data_cake){
    debug($data_cake);
}

if($richCakes){
    debug($richCakes);
}

//debug($model);

echo 'CakeGoods: <br>';

//debug($filter);

?>


<div class="row">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-6">

        <?= $form->field($filter, 'price_for_kg')->textInput()->label('Цена за килограм'); ?>

        <?= $form->field($filter, 'type[]')->checkboxList($filter['type'])->label('Тип продукта'); ?>

        <?= $form->field($filter, 'count_level')->dropDownList($filter['count_level'])->label('Колличество уровней'); ?>

        <?= $form->field($filter, 'subjects')->dropDownList($filter['subjects'])->label('Тематическое оформление'); ?>

<!--        --><?//= $form->field($filter, 'create_box')->radioList($filter['create_box'])->label('Готовые подборки:'); ?>

        <?= Html::submitButton('отправить'); ?>

    </div>

    <div class="col-lg-6">

        <?= $form->field($filter, 'tag')->radioList($filter['tag'])->label('Готовые подборки:'); ?>

    </div>

    <?php $form = ActiveForm::end(); ?>


    <div class="col-lg-6 offset-6">


        <?php foreach ($model as $key): ?>

            <h2><?= $key['lm_title']; ?></h2>

            <p><strong>тематика: </strong><?= $key['lm_subjects']; ?></p>

            <p><strong>тип продукта: </strong><?= $key['lm_type']; ?></p>

            <p><strong>цена за кг: </strong><?= $key['lm_price_for_kg']; ?></p>

            <p><strong>уровни: </strong><?= $key['lm_count_level']; ?></p>

            <p><strong>тематическое оформление: </strong><?= $key['lm_subjects']; ?></p>

            <p><strong>готовые подборки: </strong><?= $key['lm_create_box']; ?></p>

        <?php endforeach; ?>

    </div>
</div>

































