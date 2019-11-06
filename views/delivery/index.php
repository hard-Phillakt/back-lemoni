<?php


use yii\helpers\Html;
use yii\helpers\Url;


use app\widgets\customcart\BuyButton;
use app\widgets\customcart\TruncateButton;
use app\widgets\customcart\CartInformer;
use app\widgets\customcart\ElementsList;
use app\widgets\customcart\DeleteButton;
use app\widgets\customcart\ChangeCount;
use app\widgets\customcart\ChangeOptions;

?> 

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#!" class="breadcrumbs-line__active">Главная</a><span> - Доставка
                    </span>
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
                <a class="button button__circle" href="/check-out"><img src="./img/icons/arrow-right.svg" alt="arrow-right"
                                                                class="rotate__180"></a>
            </div>

        </div>


        <div class="row mt-35">
            <div class="col-lg-12">
                <h3 class="title title__h4">Выберите способ получения товара:</h3>
            </div>
        </div>

        <div class="row mt-35">

            <div class="col-lg-8">

                <div class="col-lg-12">
                    <div class="mt-15 ml-15">
                        <h4 class="title title__h4">Доставка</h4>
                    </div>
                </div>

                <div class="delivery-box global-form">

                    <div class="row">

                        <div class="col-lg-5">

                            <p class="mt-35">
                                <label>Ваше имя</label>
                                <input type="text" class="global-form__input" placeholder="Укажите имя">
                            </p>

                            <p class="mt-35">
                                <label>Контактный телефон</label>
                                <input type="text" class="global-form__input" placeholder="+7">
                            </p>

                            <div class="global-form__select mt-35">
                                <label class="title title__h5 pb-15">Город</label>
                                <select name="" id="">
                                    <option value="belgorod">Белгород</option>
                                    <option value="st-oskol">Ст. Оскол</option>
                                    <option value="voronez">Вронеж</option>
                                </select>
                            </div>

                            <p class="mt-35">
                                <label>Улица</label>
                                <input type="text" class="global-form__input" placeholder="Укажите улицу">
                            </p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mt-35">
                                        <label>Дом</label>
                                        <input type="text" class="global-form__input" placeholder="№">
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-35">
                                        <label>Квартира</label>
                                        <input type="text" class="global-form__input" placeholder="№">
                                    </p>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 col-lg-offset-1">
                            <p class="mt-35">
                                <label>Желаемая дата приготовления</label>
                                <input type="text" class="global-form__input" placeholder="Пример: 01.01.2019">
                            </p>

                            <p class="mt-35">
                                <label>Комментарий</label>
                                    <textarea type="textarea" rows="7" class="global-form__input"
                                              placeholder="Введите текст"></textarea>
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
                                <span class="total-delivery__box_value">Доставка</span>
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
                            на странице <a href="#!" class="link link__a">“Доставка и прием”</a>
                            или у нашего менеджера
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="mt-35">
                            <a href="#!" class="button button__rectangle">Заказать</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</section>
