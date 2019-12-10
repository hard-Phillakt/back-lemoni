<?php

// debug($data_compilation);die;
// debug($data_compilation[0]['cake']);die;

// echo 'ajax';

?>

<?php if($data_cake): ?>

<?php foreach ($data_cake as $key => $value): ?>

    <!-- filter-cake-card -->
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

        <div class="glob-module-card mb-35 shadow-card pb-35">

            <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
               class="card-img card-img__bg"
               style="background: url(..<?= $value['lm_img_one']; ?>)"></a>

            <div class="mt-15 pl-15">
                <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                   class="link link__a mt-15">
                    <?= $value['lm_title']; ?>
                </a>
            </div>

            <div class="mt-15 mb-30">
                <span class="card-price pl-15 opac__07"><?= $value['lm_price_for_kg']; ?>
                    руб/кг</span>
            </div>

        </div>

    </div>

<?php endforeach; ?>

<?php else: ?>

<!--    --><?php //foreach ($data_compilation as $key => $value): ?>

    <?php foreach ($data_compilation[0]['cake'] as $key => $value): ?>

        <?//= debug($value); ?>

        <!-- compilation-cake-card -->
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="glob-module-card mb-35 shadow-card pb-35">

                <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                   class="card-img card-img__bg"
                   style="background: url(..<?= $value['lm_img_one']; ?>)"></a>

                <div class="mt-15 pl-15">
                    <a href="/<?= $value['lm_alter_card']; ?>/<?= $value['id']; ?>"
                       class="link link__a mt-15">
                        <?= $value['lm_title']; ?>
                    </a>
                </div>

                <div class="mt-15 mb-30">
                <span class="card-price pl-15 opac__07"><?= $value['lm_price_for_kg']; ?>
                    руб/кг</span>
                </div>

            </div>

        </div>

    <?php endforeach; ?>

<?php endif; ?>
