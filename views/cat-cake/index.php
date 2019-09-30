<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:20
 */

use yii\widgets\ActiveForm;


//debug($model);

echo 'CatCake: <br>';

debug($filter);
?>


<div class="row">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-6">


        <?= $form->field($filter, 'price_for_kg')->textInput()->label('Цена за килограм'); ?>

        <?= $form->field($filter, 'type[]')->checkboxList($filter['type'])->label('Тип продукта'); ?>

        <?= $form->field($filter, 'count_level')->dropDownList($filter['count_level'])->label('Колличество уровней'); ?>

        <?= $form->field($filter, 'subjects')->dropDownList($filter['subjects'])->label('Тематическое оформление'); ?>


    </div>

    <div class="col-lg-6">
        <?= $form->field($filter, 'create_box')->radioList($filter['create_box'])->label('Готовые подборки:'); ?>
        <?= $form->field($filter, 'create_box')->checkboxList($filter['create_box'])->label('Готовые подборки:'); ?>
    </div>

    <?php $form = ActiveForm::end(); ?>


    <div class="col-lg-6 offset-6">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, dolor excepturi illum nam praesentium
            reprehenderit ullam! Architecto aspernatur illo ipsa nemo neque nisi non nulla numquam quas sit! Architecto
            dolore id incidunt ipsum iusto molestias nesciunt odio porro quam? Alias animi assumenda dolores expedita
            illo modi pariatur quis rerum voluptate.</h1>
    </div>
</div>
