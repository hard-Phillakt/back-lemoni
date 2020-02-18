<?php
// для настройки корзины
$this->registerJsFile('/js/cart.js');

// Класс для опций
$this->registerJsFile('/js/card-class.js');

// для настройки опций товара в зависимости от карточки товара
$this->registerJsFile('/js/card/card-cake.js');

use app\widgets\customcart\BuyButton;
use app\widgets\customcart\ChangeOptions;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use app\models\MasterClassForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

use app\assets\OwlAsset;

Url::remember();

OwlAsset::register($this);
?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= Url::home(); ?>" class="breadcrumbs-line__active">Главная</a> <span>-</span>  <a href="<?= Url::to('/'.$model['lm_essence']); ?>" class="breadcrumbs-line__active">Торты</a> <span> - <?= $model['lm_title']; ?></span>
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
                    <a class="button button__circle" href="<?= Url::to('/cake'); ?>">
                        <img src="/img/icons/arrow-right.svg" alt="arrow-right" class="rotate__180">
                    </a>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="card-goods__img mt-35">

                    <?php if($model->lm_img_one): ?>

                        <div class="owl-carousel owl-theme">

                            <?php if($model->lm_img_one): ?>

                                <div class="item">
                                    <?= Html::img($model->lm_img_one, ['alt' => '', 'class' => 'img-responsive']) ?>
                                </div>

                            <?php endif; ?>

                            <?php if($model->lm_img_two): ?>

                                <div class="item">
                                    <?= Html::img($model->lm_img_two, ['alt' => '', 'class' => 'img-responsive']) ?>
                                </div>

                            <?php endif; ?>

                            <?php if($model->lm_img_three): ?>

                                <div class="item">
                                    <?= Html::img($model->lm_img_three, ['alt' => '', 'class' => 'img-responsive']) ?>
                                </div>

                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-35">
                            <p class="desc desc__sm">

                                <?= $model->lm_content; ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-7 col-xs-12 mt-35">

                <h1 class="title title__h2"><?= $model->lm_title; ?></h1>


                <div class="mt-60">
                    <div class="card-goods__price">
                        <span data-oldstate="<?= $model->lm_price_for_kg; ?>"><?= $model->lm_price_for_kg; ?></span> руб
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
<!--                        Итого: --><?//= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => 'site/index', 'text' => '{p}']); ?><!-- руб-->
                        Итого: <span class="dvizh-cart-price-total"><span><?= $model->lm_price_for_kg; ?></span></span> руб
                    </div>
                </div>


                <div class="flter-min-max mt-35">

                    <?= BuyButton::widget([
                        'model' => $model,
                        'text' => 'В корзину',
                        'htmlTag' => 'a',
                        'cssClass' => 'custom_class button button__rectangle',
                    ]) ?>

                    <!-- Modal start -->
                    <?php Modal::begin([
                        'options' => [
                            'id' => 'one-click'
                        ],
                        'toggleButton' => [
                            'label' => 'Купить в один клик',
                            'class' => 'button button__rectangle'
                        ],
                    ]); ?>


                    <?php $masterClassForm = new MasterClassForm();?>

                    <?php Pjax::begin()?>

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'id' => 'one-click-form',
                            'class' => 'master-class-form pl-30 pr-30',
                            'data-pjax' => "0"
                        ]
                    ]); ?>

                    <div class="flex-justify-center mb-35">
                        <h1 class="title title__h1 opac__07">Заказать: <?= $model->lm_title; ?></h1>
                    </div>

                    <?= $form->field($masterClassForm, 'name')->textInput(['class' => 'global-form__input', 'placeholder' => 'Введите имя'])->label('Введите имя') ?>

                    <?= $form->field($masterClassForm, 'phone')->widget(MaskedInput::class, [
                        'mask' => '+7 999 999 9999',
                        'options' => [
                            'class' => 'global-form__input',
                            'placeholder' => '+7'
                        ]
                    ]) ?>

                    <?= $form->field($masterClassForm, 'title_master')->hiddenInput(['value' => $model->lm_title])->label(''); ?>

                    <div class="pb-35 flex-justify-center">
                        <?= Html::submitButton('Заказать', ['class' => 'button button__rectangle']) ?>
                    </div>

                    <?php $form = ActiveForm::end(); ?>

                    <?php Pjax::end(); ?>

                    <?php Modal::end(); ?>
                    <!-- Modal end -->

                    <div class="mt-35">

                        <?//= TruncateButton::widget(['text' => 'Очистить корзину']); ?>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>