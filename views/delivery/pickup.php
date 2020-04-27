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

                                <?= $form->field($modelDeliveryContact, 'phone')->widget(MaskedInput::class, [
                                    'mask' => '+7 999 999 9999',
                                    'options' => [
                                        'class' => 'global-form__input',
                                        'placeholder' => '+7'
                                    ]
                                ]); ?>

                            </p>


                            <div class="row">
                                <div class="col-lg-12 mt-35 mb-25">
                                    <span class="title title__h5 pb-15">Выбрать способ получения:</span>
                                </div>
                                <div class="col-lg-12 mt-35 mb-25">

                                    <ul class="production-method">
<!--                                        <li><a href="/delivery" class="link link__a">Доставка</a></li>-->

                                        <label class="djc-s unpacked circle-dots-wrapper">
                                            <div class="circle-dots">
                                                <span></span>
                                            </div>
                                            <div class="ml-10 fs fs__12">
                                                <a href="/delivery" class="circle-dots__link">Курьером</a>
                                            </div>

                                        </label>

                                        <label class="djc-s unpacked circle-dots-wrapper">
                                            <div class="circle-dots">
                                                <span class="circle-dots-active"></span>
                                            </div>
                                            <div class="ml-10 fs fs__12">
                                                <a href="/pickup" class="circle-dots__link">Самовывоз</a>
                                            </div>

                                        </label>

                                    </ul>

<!--                                    <div role="presentation" class="dropdown">-->
<!--                                            <span id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"-->
<!--                                                  role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                Самовывоз-->
<!--                                                <span class="caret"></span>-->
<!--                                            </span>-->
<!--                                        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">-->
<!--                                            <li><a href="/delivery">Доставка</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
                                </div>
                            </div>


<!--                            <div class="global-form__select mt-35">-->
<!---->
<!--                                <label class="title title__h5 pb-15" for="deliverycontact-city">Город</label>-->
<!--                                <select name="PickupDeliveryContact[city]" id="deliverycontact-city">-->
<!--                                    <option value="Белгород — 0">Белгород — 0 руб</option>-->
<!--                                </select>-->
<!---->
<!--                            </div>-->

                        </div>


                        <div class="col-lg-6 col-lg-offset-1">

                            <div class="form-group field-deliverycontact-name required">
                                <label class="control-label"></label>
                                <?= DatePicker::widget([
                                    'language' => 'ru',
                                    'name' => 'check_issue_date',
                                    'value' => date('d.m.Y', strtotime('+2 days')),
                                    'options' => [
                                        'placeholder' => 'Выберите дату приготовления',
                                        'class' => 'global-form__input',
                                    ],
                                    'pluginOptions' => [
                                        'todayHighlight' => true,
                                    ]
                                ]); ?>
                            </div>

                            <p class="mt-35">
                                <?= $form->field($modelDeliveryContact, 'comment')->textarea(['rows' => 6, 'class' => 'global-form__input', 'placeholder' => 'Введите текст']); ?>
                            </p>
                        </div>

                        <div class="col-lg-12">
                            <div class="filter-sidebar-catalog__box_ul global-form mt-35">
                                <span for="global-form__input_el1"><span
                                        class="shadow-checkbox mr-15 check-true"></span>
                                    <input type="checkbox" id="global-form__input_el1"
                                           class="global-form__checkbox mt-35">
                                    <div class="djc-c">
                                        <div>Я соглашаюсь на передачу персональных данных согласно</div>
                                    </div>
                                </span>
                            </div>
                            <div>
                                <a href="https://cafelemoni.ru/politics" class="ml-30 link link__a">политике
                                    конфиденциальности</a>
                            </div>
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

                        <div class="row mt-35">
                            <div class="col-lg-7">
                                <span class="total-delivery__box_key">Количество:</span>
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

                        <div class="row mt-35">
                            <div class="col-lg-12">
                                <div class="SB_box djc-c dai-c dfd-column pt-25 pb-25">

                                    <?= Html::submitButton('<span class="bg-sb-logo"></span>Оплата заказа', ['id' => 'SB__btn']) ?>

<!--                                    <div class="mt-35" style="text-align: center; color: red;">-->
<!--                                        В данный момент онлайн оплата не принимается!-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2  mt-35">

<!--                        <div class="desc desc__sm">-->
<!--                            Без учета доставки.Подробнее-->
<!--                            об условиях доставки ознакомьтесь-->
<!--                            на странице <a href="/deliv-cake" class="link link__a">“Доставка и прием”</a>-->
<!--                            или у нашего менеджера-->
<!--                        </div>-->

<!--                        <div class="djc-c" onclick="fbq('track', 'Lead');">-->
<!--                            --><?//= Html::submitButton('Заказать', ['class' => 'button button__rectangle']) ?>
<!--                        </div>-->

                    </div>
                </div>

                <?= $form->field($modelDeliveryContact, 'delivery')->hiddenInput(['value' => 'Самовывоз'])->label('') ?>
            </div>

            <?php $form = ActiveForm::end(); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
</section>



