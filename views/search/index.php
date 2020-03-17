<?php

use yii\widgets\ListView;
use yii\helpers\HtmlPurifier;
use yii\widgets\LinkPager;

?>

<div class="container mt-90">

    <div class="row mb-60">
        <div class="col-lg-8">
            <div>
                <div>
                    <h2 class="title title__h1 opac__07">Страница поиска</h2>
                </div>

                <div class="mt-35">
                    <p class="desc desc__sm opac__07">
                        Вы искали ... "<?= HtmlPurifier::process($request); ?>"
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="mt-60">
                <form id="form-search" action="/search">
                    <input type="text" id="filtercake-price_for_kg_max" class="global-form__input"
                           name="q" placeholder="поиск по товарам">

                    <div class="mt-15" style="text-align: right">
                        <button type="submit" class="button button__rectangle" data-toggle="modal" data-target="#one-click" onclick="fbq('track', 'Search');">Найти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row" id="search-goods">

        <div class="col-lg-12">

            <?php if(empty($model)): ?>

                <div class="mt-45 mb-45">
                    <h2 class="title title__h2 opac__07" style="text-align: center">Товаров с таким названием не найдено!</h2>
                </div>

            <?php endif; ?>

        </div>

        <?php foreach ($model as $kay => $value): ?>

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
                            <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>" class="link link__a ml-15">
                                <span class="title"><?= $value['lm_title']; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <div id="balance-ajax" data-balance="<?= $balance; ?>"></div>

    </div>

    <?php if($balance): ?>

    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="mt-60" style="text-align: center">
                <button id="search-button" data-request="<?= $request; ?>" type="button" class="button button__rectangle">
                    Загрузить еще
                    &nbsp; <span id="search-button-balance"><?= $balance; ?></span>
                </button>
            </div>
        </div>
    </div>

    <?php endif; ?>

</div>
