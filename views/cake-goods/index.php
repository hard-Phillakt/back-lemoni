<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

Url::remember();

$this->title = 'Торты на заказ в Белгороде | Каталог продукции';

$this->registerMetaTag(['name' => 'description', 'content' => 'Авторские муссовые и классические торты «Лемони»: красный бархат, бри груша, наполеон, медовик и другие десерты для любого праздника.']);

?>

<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= Url::home(); ?>" class="breadcrumbs-line__active">Главная</a><span> - Торты</span>
            </div>
        </div>
    </div>
</section>


<!-- filter-sidebar-catalog start -->
<section class="filter-sidebar-catalog">
    <div class="container">

        <!-- flex-reverse -->
        <div class="row">

            <!-- Sidebar Filter -->
            <div class="col-lg-3 mt-35">

                <h4 class="title title__h4">Фильтр</h4>

                <div class="filter-sidebar-catalog__box mt-60">

                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'id' => 'sidebar-filter-cake',
                            'class' => 'cake-goods'
                        ],
                    ]); ?>

                    <!-- filter kg -->
                    <div class="filter-sidebar-catalog__box">

                        <h5 class="title title__h5 mt-35">
                            Цена за килограмм
                        </h5>

                        <div class="flter-min-max mt-15">
                            <?= $form->field($filter, 'price_for_kg_min')->textInput(['placeholder' => '0', 'class' => 'global-form__input'])->label('Минимум', ['class' => 'mb-15']) ?>

                            <?= $form->field($filter, 'price_for_kg_max')->textInput(['placeholder' => '6000', 'class' => 'global-form__input'])->label('Максимум', ['class' => 'mb-15']) ?>
                        </div>
                    </div>

                    <!-- filter type-goods -->
                    <div class="filter-sidebar-catalog__box mt-15">

                        <h5 class="title title__h5 mt-35">
                            Тип продукта
                        </h5>

                        <div class="filter-sidebar-catalog__box_ul global-form global-form-checkbox mt-15">

                            <div class="mt-15">
                                <label>
                                    <span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el2"
                                           class="global-form__checkbox mt-35" value="Классический">
                                    классические
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el3"
                                           class="global-form__checkbox mt-35" value="Мусcовый">
                                    муссовые
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el4"
                                           class="global-form__checkbox mt-35" value="Шадлав">
                                    шадлавы
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el5"
                                           class="global-form__checkbox mt-35" value="Диетические">
                                    диетические
                                </label>
                            </div>

                            <div class="mt-15">
                                <label><span class="shadow-checkbox mr-15"></span>
                                    <input type="checkbox" name="FilterCake[type][]" id="global-form__input_el6"
                                           class="global-form__checkbox mt-35" value="Постные">
                                    постные
                                </label>
                            </div>

                        </div>

                    </div>


                    <!-- filter leavel -->
                    <div class="filter-sidebar-catalog__box mt-35">

                        <div class="global-form__select mt-35">

                            <div class="form-group field-filtercake-count_level">
                                <label class="title title__h5 pb-15" for="filtercake-count_level">Количество
                                    уровней</label>
                                <select id="filtercake-count_level" class="global-form__input"
                                        name="FilterCake[count_level]">
                                    <option value="1">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="" selected>...</option>
                                </select>

                                <div class="help-block"></div>
                            </div>

                        </div>

                    </div>

                    <?php $form = ActiveForm::end(); ?>

                    <? //= Html::submitButton('Применить', ['class' => 'button button__rectangle mt-35']) ?>

                </div>

            </div>

            <!-- Goods-cards -->
            <div class="col-lg-8 col-lg-offset-1 title__line_r-53">

                <h2 class="title title__h1 opac__07">Каталог тортов</h2>

                <?php if (!empty($tag)): ?>

                    <!-- filter type-goods dsp-none -->
                    <div class="filter-sidebar-catalog__box-compilation mt-60">

                        <div class="row">
                            <div class="col-lg-3">
                                <h5 class="title title__h5">
                                    Готовые подборки
                                </h5>
                            </div>

                            <div class="col-lg-9">

                                <!-- filter-sidebar-catalog__box-compilation -->

                                <div class="filter-sidebar-catalog__box-compilation_ul global-form ">

                                    <?php foreach ($tag as $key => $value): ?>

                                        <span data-count="<?= $value['id'] ?>"
                                              class="compilation-cake link mb-15 mr-15">
                                        <?= $value['title'] ?>
                                            <i class="tag-active__times">
                                                &times;
                                            </i>
                                    </span>

                                    <?php endforeach; ?>

                                </div>

                                <!-- filter-sidebar-catalog__box-compilation end -->

                            </div>
                        </div>

                    </div>

                <?php endif; ?>

                <div class="row mt-60" id="box-cake-goods">

                    <?php if ($void): ?>

                        <?= $void; ?>

                    <?php endif; ?>

                    <!-- card-filter -->
                    <?php if ($model): ?>

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

                    <?php elseif ($data_cake): ?>

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

                    <?php elseif ($compilation): ?>

                        <?php foreach ($compilation[0]['cake'] as $key => $value): ?>

                            <!-- cake-card compilation -->
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
