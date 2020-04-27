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
                <a class="button button__circle" href="/check-out">
                    <img src="./img/icons/arrow-right.svg"
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
                                        <!--                                        <li><a href="/pickup" class="link link__a">Самовывоз</a></li>-->

                                        <label class="djc-s unpacked circle-dots-wrapper">
                                            <div class="circle-dots">
                                                <span class="circle-dots-active"></span>
                                            </div>
                                            <div class="ml-10 fs fs__12">
                                                <a href="/delivery" class="circle-dots__link">Курьером</a>
                                            </div>

                                        </label>

                                        <label class="djc-s unpacked circle-dots-wrapper">
                                            <div class="circle-dots">
                                                <span></span>
                                            </div>
                                            <div class="ml-10 fs fs__12">
                                                <a href="/pickup" class="circle-dots__link">Самовывоз</a>
                                            </div>

                                        </label>

                                    </ul>
                                    <!--                                    <div role="presentation" class="dropdown">-->
                                    <!--                                            <span id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"-->
                                    <!--                                                  role="button" aria-haspopup="true" aria-expanded="false">-->
                                    <!--                                                Доставка-->
                                    <!--                                                <span class="caret"></span>-->
                                    <!--                                            </span>-->
                                    <!--                                        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">-->
                                    <!--                                            <li><a href="/pickup">Самовывоз</a></li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>


                            <div class="global-form__select mt-35">

                                <label class="title title__h5 pb-15" for="deliverycontact-city">Выберите район доставки:</label>
                                <select name="DeliveryContact[city]" id="deliverycontact-city">
                                    <option value=">Белгород — 300">Белгород — 300 руб</option>
                                    <option value="Алексеевка ближ. Короч. р-н — 1000">Алексеевка ближ. Короч. р-н —
                                        1000 руб
                                    </option>
                                    <option value="Алексеевка дальняя — 4300">Алексеевка дальняя — 4300 руб</option>
                                    <option value="Алексеевка Волоконовский р-н — 2600">Алексеевка Волоконовский р-н —
                                        2600 руб
                                    </option>
                                    <option value="Алексеевка Яковлевский р-н р-н — 1250">Алексеевка Яковлевский р-н р-н
                                        — 1250 руб
                                    </option>
                                    <option value="Безымено с. Грайворонский р-н — 2400">Безымено с. Грайворонский р-н —
                                        2400 руб
                                    </option>
                                    <option value="Береговое 2 Прохоровский р-н — 1700">Береговое 2 Прохоровский р-н —
                                        1700 руб
                                    </option>
                                    <option value="Белянка Шебекинский р-н — 1500">Белянка Шебекинский р-н — 1500 руб
                                    </option>
                                    <option value="Белый колодезь Вейделевский р-н — 4800">Белый колодезь Вейделевский
                                        р-н — 4800 руб
                                    </option>
                                    <option value="Бессоновка — 750">Бессоновка — 750 руб</option>
                                    <option value="Бирюч — 3600">Бирюч — 3600 руб</option>
                                    <option value="Борисовка — 1200">Борисовка — 1200 руб</option>
                                    <option value="Большетроицкое — 1850">Большетроицкое — 1850 руб</option>
                                    <option value="Бутово Яковлевский р-н — 1000">Бутово Яковлевский р-н — 1000 руб
                                    </option>
                                    <option value="Бутово Яковлевский р-н — 700">Бутово Яковлевский р-н — 700 руб
                                    </option>
                                    <option value="Быковка Яковлевский р-н — 700">Быковка Яковлевский р-н — 700 руб
                                    </option>
                                    <option value="Валуйки — 3600">Валуйки — 3600 руб</option>
                                    <option value="Вейделевка — 4350">Вейделевка — 4350 руб</option>
                                    <option value="Верхососна — 3600">Верхососна — 3600 руб</option>
                                    <option value="Веселая Лопань — 500">Веселая Лопань — 500 руб</option>
                                    <option value="Вознесеновка Ивнянского р-на — 1700">Вознесеновка Ивнянского р-на —
                                        1700 руб
                                    </option>
                                    <option value="Вознесеновка Шебекинского р-на — 1200">Вознесеновка Шебекинского р-на
                                        — 1200 руб
                                    </option>
                                    <option value="Вознесеновка Яковлевского р-на — 950">Вознесеновка Яковлевского р-на
                                        — 950 руб
                                    </option>
                                    <option value="Волоконовка — 2850">Волоконовка — 2850 руб</option>
                                    <option value="Головино — 600">Головино — 600 руб</option>
                                    <option value="Гостищево — 720">Гостищево — 720 руб</option>
                                    <option value="Городище Старооскольский р-н — 3700 ">Городище Старооскольский р-н —
                                        3700 руб
                                    </option>
                                    <option value="Грайворон — 1900">Грайворон — 1900 руб</option>
                                    <option value="Губкин — 2900">Губкин — 2900 руб</option>
                                    <option value="Графовка Шебекинский р-н — 800">Графовка Шебекинский р-н — 800 руб
                                    </option>
                                    <option value="Дубовое — 300">Дубовое — 300 руб</option>
                                    <option value="Драгунское Белгородский р-н — 300">Драгунское Белгородский р-н — 300
                                        руб
                                    </option>
                                    <option value="Ивица Корочанский р-н — 1800">Ивица Корочанский р-н — 1800 руб
                                    </option>
                                    <option value="Ивня — 1850">Ивня — 1850 руб</option>
                                    <option value="Игуменка дальняя — 550">Игуменка дальняя — 550 руб</option>
                                    <option value="Иловка Алексеевский р-н — 4100">Иловка Алексеевский р-н — 4100 руб
                                    </option>
                                    <option value="Комсомольский — 500">Комсомольский — 500 руб</option>
                                    <option value="Короча — 1350 ">Короча — 1350 руб</option>
                                    <option value="Красная яруга — 1900">Красная яруга — 1900 руб</option>
                                    <option value="Курск — 3500">Курск — 3500 руб</option>
                                    <option value="Лопухинка с. Губкинский р-н — 2670">Лопухинка с. Губкинский р-н —
                                        2670 руб
                                    </option>
                                    <option value="Майский — 400">Майский — 400 руб</option>
                                    <option value="Маслова Пристань — 600">Маслова Пристань — 600 руб</option>
                                    <option value="Никольское — 500">Никольское — 500 руб</option>
                                    <option value="Новая Дерявня — 350">Новая Дерявня — 350 руб</option>
                                    <option value="Ново Дубовской — 300">Ново Дубовской — 300 руб</option>
                                    <option value="Новосадовый — 350">Новосадовый — 350 руб</option>
                                    <option value="Новый Оскол — 2650">Новый Оскол — 2650 руб</option>
                                    <option value="Октябрьский — 700">Октябрьский — 700 руб</option>
                                    <option value="Пролетарский — 1700 ">Пролетарский — 1700 руб</option>
                                    <option value="Прохоровка — 1600">Прохоровка — 1600 руб</option>
                                    <option value="Пушкарное — 300 ">Пушкарное — 300 руб</option>
                                    <option value="Пятницкое — 2900">Пятницкое — 2900 руб</option>
                                    <option value="Пуляевка — 600 ">Пуляевка — 600 руб</option>
                                    <option value="Погореловка Корочанский р-н — 1300">Погореловка Корочанский р-н —
                                        1300 руб
                                    </option>
                                    <option value="Покровка Ивнянский р-н — 1000">Покровка Ивнянский р-н — 1000 руб
                                    </option>
                                    <option value="Пушкарное Белгородский р-н — 300">Пушкарное Белгородский р-н — 300
                                        руб
                                    </option>
                                    <option value="Пушкарное Яковлевский р-н — 750">Пушкарное Яковлевский р-н — 750
                                        руб
                                    </option>
                                    <option value="Пушкарное Корочанский р-н — 1400">Пушкарное Корочанский р-н — 1400
                                        руб
                                    </option>
                                    <option value="Разумное — 350">Разумное — 350 руб</option>
                                    <option value="Ракитное — 1500">Ракитное — 1500 руб</option>
                                    <option value="Репное — 350">Репное — 350 руб</option>
                                    <option value="Ровеньки — 5700">Ровеньки — 5700 руб</option>
                                    <option value="Северный — 300">Северный — 300 руб</option>
                                    <option value="Севрюково — 500">Севрюково — 500 руб</option>
                                    <option value="Старый Оскол — 3360">Старый Оскол — 3360 руб</option>
                                    <option value="Строитель — 600">Строитель — 600 руб</option>
                                    <option value="Стригуны Борисовский р-н — 1000">Стригуны Борисовский р-н — 1000
                                        руб
                                    </option>
                                    <option value="Стрелецкое Белгородский р-н — 350">Стрелецкое Белгородский р-н — 350
                                        руб
                                    </option>
                                    <option value="Стрелецкое Яковлевский р-н — 800">Стрелецкое Яковлевский р-н — 800
                                        руб
                                    </option>
                                    <option value="Стрелецкое Красногвардейский р-н — 3600">Стрелецкое Красногвардейский
                                        р-н — 3600 руб
                                    </option>
                                    <option value="Скородное — 2050 ">Скородное — 2050 руб</option>
                                    <option value="Сурково Шебекинский р-н — 1600">Сурково Шебекинский р-н — 1600 руб
                                    </option>
                                    <option value="Таврово 3,4,5,6,8,9,10 — 350">Таврово 3,4,5,6,8,9,10 — 350 руб
                                    </option>
                                    <option value="Таврово,Таврово 1,2,7 — 300">Таврово,Таврово 1,2,7 — 300 руб</option>
                                    <option value="Терновка — 500">Терновка — 500 руб</option>
                                    <option value="Томаровка — 750">Томаровка — 750 руб</option>
                                    <option value="Уразово Валуйский р-н — 4100">Уразово Валуйский р-н — 4100 руб
                                    </option>
                                    <option value="Устинка Белгородский р-н — 1000">Устинка Белгородский р-н — 1000
                                        руб
                                    </option>
                                    <option value="Хохлово — 500">Хохлово — 500 руб</option>
                                    <option value="Чернянка — 2650">Чернянка — 2650 руб</option>
                                    <option value="Чураево Шебекинский р-н — 950">Чураево Шебекинский р-н — 950 руб
                                    </option>
                                    <option value="Шебекино — 900">Шебекино — 900 руб</option>
                                    <option value="Шеино — 800">Шеино — 800 руб</option>
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
                                <?= $form->field($modelDeliveryContact, 'comment')->textarea(['rows' => 6, 'class' => 'global-form__input', 'placeholder' => 'Напишите свои пожелания: В какое время вам будет удобно забрать продукцию? Например с 8:00 до 11:00']); ?>
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

                        <!--                        <div class="row mt-35 line-white">-->
                        <!--                            <div class="col-lg-7">-->
                        <!--                                <span class="total-delivery__box_key opac__07">Способ получения:</span>-->
                        <!--                            </div>-->
                        <!---->
                        <!--                            <div class="col-lg-5">-->
                        <!--                                <div>-->
                        <!--                                    <div role="presentation" class="dropdown">-->
                        <!--                                            <span id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"-->
                        <!--                                                  role="button" aria-haspopup="true" aria-expanded="false">-->
                        <!--                                                Доставка-->
                        <!--                                                <span class="caret"></span>-->
                        <!--                                            </span>-->
                        <!--                                        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">-->
                        <!--                                            <li><a href="/pickup">Самовывоз</a></li>-->
                        <!--                                        </ul>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

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
                                <span class="total-delivery__box_key">Цена доставки:</span>
                            </div>

                            <div class="col-lg-5">
                                <span class="total-delivery__box_value">
                                    <span
                                        class="total-delivery__summ" id="total-delivery__courier">0</span>
                                    руб
                                </span>
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
                        <!--                            --><? //= Html::submitButton('Заказать', ['class' => 'button button__rectangle']) ?>
                        <!--                        </div>-->

                    </div>
                </div>

                <?= $form->field($modelDeliveryContact, 'delivery')->hiddenInput(['value' => 'Доставка'])->label('') ?>

            </div>

            <?php $form = ActiveForm::end(); ?>

            <?php Pjax::end(); ?>

        </div>

    </div>
</section>



