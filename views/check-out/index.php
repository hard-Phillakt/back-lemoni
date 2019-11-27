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


$this->registerJsFile('/js/checkout.js');

?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="/" class="breadcrumbs-line__active">Главная -</a><span> Корзина </span>
            </div>
        </div>
    </div>
</section>


<!-- cart-goods -->
<section class="cart-goods">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-60">
                    <h1 class="title title__h1">
                        Корзина
                    </h1>
                </div>
            </div>
        </div>

        <!-- под товары разметка -->
        <div class="row mt-35">

            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-4">
                <a class="button button__circle" href="<?= Url::previous(); ?>">
                    <img src="./img/icons/arrow-right.svg" alt="arrow-right" class="rotate__180">
                </a>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">
                <h4 class="title title__h4">Вес</h4>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">
                <h4 class="title title__h4">Цена</h4>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-xs">
                <h4 class="title title__h4">Кол-во</h4>
            </div>

        </div>

        <!-- товары корзины -->
        <div class="row">

            <div class="col-lg-12">

                <!--            выводим список товаров из корзины    -->
                <?= ElementsList::widget(['type' => ElementsList::TYPE_FULL]); ?>

            </div>

        </div>

        <!-- итог в рублях -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8">
                <div class="mt-35">
                    <!--                    <h3 class="title title__h1">Итого: <span>1 800</span> руб</h3>-->
                    <div class="cart-goods__total">
                        <h3 class="title title__h1">
                            Итого: <?= CartInformer::widget(['htmlTag' => 'span', 'text' => '{p}']); ?> руб</h3>
                    </div>

                </div>
            </div>

            <div class="col-lg-2 col-lg-offset-8">
                <div class="mt-35">

                    <?= TruncateButton::widget(['text' => 'Очистить корзину']); ?>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="mt-35">
                    <?= Html::a('Оформить заказ', Url::to('/delivery'), ['class' => 'button button__rectangle']); ?>
                    <!--                    <a href="#!" class="button button__rectangle">Оформить заказ</a>-->
                </div>
            </div>
        </div>

    </div>
</section>
