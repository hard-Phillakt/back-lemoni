<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

use app\widgets\customcart\CartInformer;

use yii\widgets\Pjax;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;
?>


<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= Url::home(); ?>" class="breadcrumbs-line__active">Главная</a><span> - Доставка </span>
            </div>
        </div>
    </div>
</section>


<section class="delivery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-60">
                    <h1 class="title title__h1">
                        Способ получения товара
                    </h1>
                </div>
            </div>
        </div>

        <!-- под товары разметка -->
        <div class="row mt-35">

            <div class="col-lg-12">
                <a class="button button__circle" href="/check-out"><img src="./img/icons/arrow-right.svg"
                                                                        alt="arrow-right"
                                                                        class="rotate__180"></a>
            </div>

        </div>

        <div class="row mt-35">

            <?php Pjax::begin(); ?>

            <?php $form = ActiveForm::begin([
            'options' => [
            'id' => 'delivery-form',
            'data-pjax' => true
            ]
            ]); ?>

            <div class="col-lg-8">

                <div class="delivery-box global-form">

                    <div class="row">

                        <div class="col-lg-5">

                            <?= $form->field($modelDeliveryContact, 'name')->textInput(['class' => 'global-form__input', 'placeholder' => 'Укажите имя']); ?>

                            <p class="mt-35">

                                <?= $form->field($modelDeliveryContact, 'phone')->widget(MaskedInput::class,[
                                'mask' => '+7 999 999 9999',
                                'options' => [
                                'class' => 'global-form__input',
                                'placeholder' => '+7'
                                ]
                                ]); ?>

                            </p>

                            <div class="global-form__select mt-35">

                                <label class="title title__h5 pb-15" for="deliverycontact-city">Город</label>
                                <select name="DeliveryContact[city]" id="deliverycontact-city">
                                    <option value="belgorod">Белгород</option>
                                </select>

                            </div>

                            <p class="mt-35">

                                <?= $form->field($modelDeliveryContact, 'street')->textInput(['class' => 'global-form__input', 'placeholder' => 'Укажите улицу']); ?>

                            </p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mt-35">

                                        <?= $form->field($modelDeliveryContact, 'house')->textInput(['class' => 'global-form__input', 'placeholder' => '№']); ?>

                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-35">
                                        <?= $form->field($modelDeliveryContact, 'room')->textInput(['class' => 'global-form__input', 'placeholder' => '№']); ?>
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 col-lg-offset-1">

                            <div class="form-group field-deliverycontact-name required">
                                <label class="control-label">Выберите дату доставки</label>

                                <?= DatePicker::widget([
                                'language' => 'ru',
                                'name' => 'check_issue_date',
                                'value' => date('d.m.Y', strtotime('+2 days')),
                                'options' => [
                                'placeholder' => 'Выберите дату приготовления',
                                'class' => 'global-form__input',

                                ],
                                'pluginOptions' => [
                                //                                        'format' => 'dd-M-yyyy',
                                'todayHighlight' => true,
                                ]
                                ]); ?>
                            </div>

                            <p class="mt-35">

                                <?= $form->field($modelDeliveryContact, 'comment')->textarea(['rows' => 6, 'class' => 'global-form__input', 'placeholder' => 'Введите текст']); ?>

                            </p>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-lg-4">

                <div class="total-delivery">

                    <div class="total-delivery__box">

                        <div>
                            <h2 class="total-delivery__box_title">Ваш заказ:</h2>
                        </div>

                        <div class="row mt-35 line-white">
                            <div class="col-lg-7">
                                <span class="total-delivery__box_key opac__07">Способ получения:</span>
                            </div>

                            <div class="col-lg-5">

                                <div>

                                    <div role="presentation" class="dropdown">
                                            <span id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                Доставка
                                                <span class="caret"></span>
                                            </span>
                                        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                                            <li><a href="/pickup">Самовывоз</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row mt-35">
                            <div class="col-lg-7">
                                <span class="total-delivery__box_key opac__07">Товары:</span>
                            </div>

                            <div class="col-lg-5">
                                <span
                                    class="total-delivery__box_value"><?= CartInformer::widget(['htmlTag' => 'span', 'text' => '{c}']); ?>
                                    шт</span>
                            </div>
                        </div>

                        <div class="row mt-35">
                            <div class="col-lg-7">
                                <span class="total-delivery__box_key">Итого:</span>
                            </div>

                            <div class="col-lg-5">
                                    <span class="total-delivery__box_value">
                                        <span
                                            class="total-delivery__summ"><?= CartInformer::widget(['htmlTag' => 'span', 'text' => '{p}']); ?></span>
                                        руб
                                    </span>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2  mt-35">
                        <div class="desc desc__sm">
                            Без учета доставки.Подробнее
                            об условиях доставки ознакомьтесь
                            на странице <a href="/deliv-cake" class="link link__a">“Доставка и прием”</a>
                            или у нашего менеджера
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="mt-35">

                            <?= Html::submitButton('Заказать', ['class' => 'button button__rectangle']) ?>

                        </div>
                    </div>
                </div>

                <?= $form->field($modelDeliveryContact, 'delivery')->hiddenInput(['value' => 'Самовывоз'])->label('') ?>

            </div>

            <?php $form = ActiveForm::end(); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
</section>



