<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


use app\widgets\customcart\BuyButton;
use app\widgets\customcart\TruncateButton;
use app\widgets\customcart\CartInformer;
use app\widgets\customcart\ElementsList;
use app\widgets\customcart\DeleteButton;
use app\widgets\customcart\ChangeCount;
use app\widgets\customcart\ChangeOptions;

//debug($modelDeliveryContact);
use yii\widgets\Pjax;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;

?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#!" class="breadcrumbs-line__active">Главная</a><span> - Доставка </span>
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


<!--        <div class="row mt-35">-->
<!--            <div class="col-lg-12">-->
<!--                <h3 class="title title__h4">Выберите способ получения товара:</h3>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row">
            <div class="col-lg-12">

<!--                --><?php //if( Yii::$app->session->hasFlash('success') ): ?>
<!---->
<!--                    <div class="alert alert-success alert-dismissible" role="alert">-->
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                        --><?php //echo Yii::$app->session->getFlash('success'); ?>
<!--                    </div>-->
<!---->
<!--                --><?php //endif;?>

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

<!--                <div class="col-lg-12">-->
<!--                    <div class="mt-15 ml-15">-->
<!--                        <h4 class="title title__h4">Доставка</h4>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="delivery-box global-form">

                    <div class="row">

                        <div class="col-lg-5">

                            <p class="mt-35">
                                <!--                                <label>Ваше имя</label>-->
                                <!--                                <input type="text" class="global-form__input" placeholder="Укажите имя">-->

                                <?= $form->field($modelDeliveryContact, 'name')->textInput(['class' => 'global-form__input', 'placeholder' => 'Укажите имя']); ?>

                            </p>

                            <p class="mt-35">
                                <!--                                <label>Контактный телефон</label>-->
                                <!--                                <input type="text" class="global-form__input" placeholder="+7">-->

<!--                                --><?//= $form->field($modelDeliveryContact, 'phone')->textInput(['class' => 'global-form__input', 'placeholder' => '+ 7']); ?>

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

                                <!--                                <label>Улица</label>-->
                                <!--                                <input type="text" class="global-form__input" placeholder="Укажите улицу">-->
                            </p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mt-35">
                                        <!--                                        <label>Дом</label>-->
                                        <!--                                        <input type="text" class="global-form__input" placeholder="№">-->

                                        <?= $form->field($modelDeliveryContact, 'house')->textInput(['class' => 'global-form__input', 'placeholder' => '№']); ?>

                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-35">
                                        <!--                                        <label>Квартира</label>-->
                                        <!--                                        <input type="text" class="global-form__input" placeholder="№">-->

                                        <?= $form->field($modelDeliveryContact, 'room')->textInput(['class' => 'global-form__input', 'placeholder' => '№']); ?>
                                    </p>
                                </div>
                            </div>


                        </div>


                        <div class="col-lg-6 col-lg-offset-1">
                            <p class="mt-35">

                                <!--                                <label>Желаемая дата приготовления</label>-->
                                <!--                                <input type="text" class="global-form__input" placeholder="Пример: 01.01.2019">-->

                                <? //= $form->field($modelDeliveryContact, 'dateCreate')->textInput(['class' => 'global-form__input', 'placeholder' => 'Пример: 01.01.2019']);?>

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

                            </p>

                            <p class="mt-35">

                                <!--                                <label>Комментарий</label>-->
                                <!--                                    <textarea type="textarea" rows="7" class="global-form__input"-->
                                <!--                                              placeholder="Введите текст"></textarea>-->

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
                            <div class="col-lg-6">
                                <span class="total-delivery__box_key opac__07">Способ получения:</span>
                            </div>

                            <div class="col-lg-6">
                                
                                <div class="global-form__select">

                                    <?= $form->field($modelDeliveryContact, 'delivery')->dropDownList(['Доставка' => 'Доставка', 'Самовывоз' => 'Самовывоз'])->label(false) ?>

                                </div>

                                <!--                                <span class="total-delivery__box_value">Доставка</span>-->
                            </div>
                        </div>

                        <div class="row mt-35">
                            <div class="col-lg-6">
                                <span class="total-delivery__box_key opac__07">Товары:</span>
                            </div>

                            <div class="col-lg-6">
                                <!--                                <span class="total-delivery__box_value">2 товара</span>-->
                                <span
                                    class="total-delivery__box_value"><?= CartInformer::widget(['htmlTag' => 'span', 'text' => '{c}']); ?>
                                    шт</span>
                            </div>
                        </div>

                        <div class="row mt-35">
                            <div class="col-lg-6">
                                <span class="total-delivery__box_key">Итого:</span>
                            </div>

                            <div class="col-lg-6">
                                    <span class="total-delivery__box_value">
<!--                                        <span class="total-delivery__summ">5 428</span>-->
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
                            <!--                            <a href="#!" class="button button__rectangle">Заказать</a>-->

                            <?= Html::submitButton('Заказать', ['class' => 'button button__rectangle']) ?>

                            <!--                            <a href="#!" class="button button__rectangle">Заказать</a>-->
                        </div>
                    </div>
                </div>


            </div>

            <?php $form = ActiveForm::end(); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
</section>


<div id="modal-delivery" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close opac__07" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <div class="mb-35">
                    <h2 class="title title__h3">
                        <p style="color: #8F5541">Спасибо</p>
                        <p>за оставленную заявку!</p>
                    </h2>
                </div>

                <div class="flex-justify-center pb-35">
                    <p class="desc desc__md opac__07">
                        Наш менеджер позвонит вам в ближайшее время!
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>
