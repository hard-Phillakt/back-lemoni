<?php

// для настройки корзины
$this->registerJsFile('/js/cart.js');

// Класс для опций
$this->registerJsFile('/js/card-class.js');

// для настройки опций товара в зависимости от карточки товара
$this->registerJsFile('/js/card/card-shadlaw.js');


//use dvizh\cart\widgets\BuyButton;
//use dvizh\cart\widgets\TruncateButton;
//use dvizh\cart\widgets\CartInformer;
//use dvizh\cart\widgets\ElementsList;
//use dvizh\cart\widgets\DeleteButton;
//use dvizh\cart\widgets\ChangeCount;
//use dvizh\cart\widgets\ChangeOptions;


use app\widgets\customcart\BuyButton;
use app\widgets\customcart\TruncateButton;
use app\widgets\customcart\CartInformer;
use app\widgets\customcart\ElementsList;
use app\widgets\customcart\DeleteButton;
use app\widgets\customcart\ChangeCount;
use app\widgets\customcart\ChangeOptions;

use yii\helpers\Html;
use yii\helpers\Url;

//debug($model);

Url::remember();

?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="/" class="breadcrumbs-line__active">Главная</a> <span> - <?= $model['lm_title']; ?></span>
            </div>
        </div>
    </div>
</section>

<!-- card-goods start -->
<section class="card-goods">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-35">
                    <a class="button button__circle" href="/<?= $model['lm_essence'] ?>-goods">
                        <img src="/img/icons/arrow-right.svg" alt="arrow-right" class="rotate__180">
                    </a>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="card-goods__img mt-35">

                    <?//= Html::img('@web/' . $model->lm_img_one, ['alt' => '']) ?>

                    <?= Html::img($model->lm_img_one, ['alt' => '', 'class' => 'img-responsive']) ?>

                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="mt-35">
                            <h5 class="title title__h5">Описание:</h5>
                        </div>

                        <div class="mt-35">
                            <p class="desc desc__sm">

                                <?= $model->lm_content; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-offset-1 mt-35">

                <h1 class="title title__h3"><?= $model->lm_title;?></h1>


                <div class="mt-60">
                    <div class="card-goods__price">
                        <!--                        <span>1700</span>-->
                        <span><?= $model->lm_price_for_kg;?></span> руб
                    </div>
                </div>


                <div class="mt-15">
                    <p class="desc desc__sm opac__05">
                        *В стоимость входят: оформление торта, начинка на выбор, <br>
                        стандартная упаковка и фигурки, как на фото.
                    </p>
                </div>


                <!-- Начало опций товара -->


                <?= ChangeOptions::widget([
                    'model' => $model,
                    'type' => 'radio',
                ]);?>

                <div class="mt-35">
                    <div class="card-goods__total">
                        Итого: <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => 'site/index', 'text' => '{p}']); ?> руб
                    </div>
                </div>

                <!--                <div class="mt-35">-->
                <!--                    <div class="card-goods__total">-->
                <!--                        Итого: <span>1 800</span> руб-->
                <!--                    </div>-->
                <!--                </div>-->


                <div class="mt-35">
<!--                    <a class="button button__rectangle mr-15">Купить в один клик</a>-->

                    <?= BuyButton::widget([
                        'model' => $model,
                        'text' => 'В корзину',
                        'htmlTag' => 'a',
                        'cssClass' => 'custom_class button button__rectangle',
                    ]) ?>

                    <div class="mt-35">

                        <?= TruncateButton::widget(['text' => 'Очистить корзину']); ?>

                    </div>
                </div>

                <!--                <div class="mt-35">-->
                <!--                    <a class="button button__rectangle mr-15">Купить в один клик</a>-->
                <!--                    <a class="button button__rectangle">В корзину</a>-->
                <!--                </div>-->

            </div>

        </div>
    </div>
</section>