<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Кэнди бары для любых мероприятий в Белгороде';
$this->registerMetaTag(['name' => 'description', 'content' => 'Сопровождение любого мероприятия сладким праздничным столом. Выберете любимые десерты для своих гостей.']);
?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= Url::home(); ?>" class="breadcrumbs-line__active">Главная</a> <span> - Candy</span>
            </div>
        </div>
    </div>
</section>


<!-- filter-sidebar-catalog start -->
<section class="filter-sidebar-catalog">
    <div class="container">
        <div class="row flex-reverse">

            <!-- Sidebar Filter -->
            <div class="col-lg-3 mt-35">

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'id' => 'sidebar-filter-candy',
                        'class' => 'cake-goods'
                    ],
                ]); ?>

                <h4 class="title title__h4">Фильтр</h4>

                <div class="filter-sidebar-catalog__box mt-60">

                    <!-- filter kg -->
                    <div class="filter-sidebar-catalog__box">

                        <h5 class="title title__h5 mt-35">
                            Цена за единицу товара
                        </h5>

                        <div class="flter-min-max mt-35">

                            <?= $form->field($filter, 'price_for_kg_min')->textInput(['placeholder' => '0', 'class' => 'global-form__input'])->label('Минимум', ['class' => 'mb-15']) ?>

                            <?= $form->field($filter, 'price_for_kg_max')->textInput(['placeholder' => '6000', 'class' => 'global-form__input'])->label('Максимум', ['class' => 'mb-15']) ?>

                        </div>

                    </div>


                    <!-- filter type-goods -->
                    <div class="filter-sidebar-catalog__box mt-35">

                        <h5 class="title title__h5 mt-35">
                            Тип продукта
                        </h5>

                        <div class="filter-sidebar-catalog__box_ul global-form mt-15">

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el2"
                                           class="global-form__checkbox mt-35" value="Классические пирожные">
                                    классические пирожные
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el3"
                                           class="global-form__checkbox mt-35" value="Мусовые пирожные">
                                    мусовые пирожные
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el4"
                                           class="global-form__checkbox mt-35" value="Конфеты">
                                    конфеты
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el5"
                                           class="global-form__checkbox mt-35" value="Пряники">
                                    пряники
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Щербет">
                                    щербет
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el7"
                                           class="global-form__checkbox mt-35" value="Зефир">
                                    зефир
                                </label>
                            </div>


                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el8"
                                           class="global-form__checkbox mt-35" value="Фруктовый букет">
                                    фруктовый букет
                                </label>
                                </div>


                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el9"
                                           class="global-form__checkbox mt-35" value="Куличи">
                                    куличи
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e20"
                                           class="global-form__checkbox mt-35" value="Кейкпопсы">
                                    кейкпопсы
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e21"
                                           class="global-form__checkbox mt-35" value="Укусики">
                                    укусики
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e22"
                                           class="global-form__checkbox mt-35" value="Постное">
                                    постное
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e23"
                                           class="global-form__checkbox mt-35" value="Штрудель">
                                    штрудель
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e24"
                                           class="global-form__checkbox mt-35" value="Кексы на фруктовом пюре">
                                    кексы на фруктовом пюре
                                </label>
                                </div>

                                <div class="mt-15">
                                    <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_e25"
                                           class="global-form__checkbox mt-35" value="Трайфлы">
                                    трайфлы
                                </label>
                                </div>

                        </div>

                    </div>

                    <?//= Html::submitButton('Применить', ['class' => 'button button__rectangle mt-35']) ?>
                </div>

                <?php $form = ActiveForm::end(); ?>

            </div>

            <!-- Goods-cards -->
            <div class="col-lg-8 col-lg-offset-1 title__line_r-53">
                <h2 class="title title__h1 opac__07">Каталог candy bar</h2>

                <!-- filter type-goods -->
                <div class="filter-sidebar-catalog__box-compilation mt-60 dsp-none">

                    <div class="row">
                        <div class="col-lg-3">
                            <h5 class="title title__h5">
                                Готовые подборки
                            </h5>
                        </div>

                        <div class="col-lg-9">

                            <div class="filter-sidebar-catalog__box-compilation_ul global-form">

                                <?php foreach ($filter['tag'] as $key => $value): ?>

                                    <a href="#!" data-count="<?= $key; ?>"
                                       class="compilation-candie link link__a mr-15 mb-15">
                                        <?= $value; ?>
                                    </a>

                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mt-60" id="box-candie-goods">

                    <!-- card-filter -->
                    <?php

                    if ($model): ?>

                        <?php foreach ($model as $key => $value): ?>

                            <!-- cake-card -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                <div class="glob-module-card mb-35 shadow-card pb-35">

                                    <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                       class="card-img card-img__bg"
                                       style="background: url(..<?= $value['lm_img_one']; ?>)"></a>

                                    <div class="wrapp-full-description">
                                        <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                           class="link link__a link__item mt-15 ml-15">
                                            <span class="title"><?= $value['lm_title']; ?></span>
                                        </a>

                                        <div class="mt-15 mb-30">
                                            <span class="card-price pl-15 opac__07">
                                                <?= $value['lm_price_for_kg']; ?> руб/кг
                                            </span>
                                        </div>

                                        <div class="link-full-description">
                                            <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                               class="link link__a ml-15">
                                                <span class="title"><?= $value['lm_title']; ?></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <?php foreach ($data_cake as $key => $value): ?>

                            <!-- cake-card -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                                <div class="glob-module-card mb-35 shadow-card pb-35">

                                    <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                       class="card-img card-img__bg"
                                       style="background: url(..<?= $value['lm_img_one']; ?>)"></a>

                                    <div class="wrapp-full-description">
                                        <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                           class="link link__a link__item mt-15 ml-15">
                                            <span class="title"><?= $value['lm_title']; ?></span>
                                        </a>

                                        <div class="mt-15 mb-30">
                                            <span class="card-price pl-15 opac__07">
                                                <?= $value['lm_price_for_kg']; ?> руб/кг
                                            </span>
                                        </div>

                                        <div class="link-full-description">
                                            <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                                               class="link link__a ml-15">
                                                <span class="title"><?= $value['lm_title']; ?></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
