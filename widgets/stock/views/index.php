<?php

use yii\helpers\Html;

?>

<?php foreach ($model as $key): ?>

<li class="stock-widget">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-5 col-xs-4">
            <div class="djc-c mb-15">
                <?= Html::a(Html::img($key->previmg, ['alt' => 'stock-img', 'class' => 'card-img__img card-img__br-5']), '/stock'); ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-7 col-xs-8">
            <div class="stock-widget__content">
                <div class="mb-15">
                    <?= Html::a("<span>{$key->title}</span>", "/stock", ['class' => 'stock__link font-size__18']); ?>
                    <div class="news-box__content_date news-box__content_link mt-15"><?= $key->date; ?></div>
                </div>
                <div class="mt-35">
                    <div class="desc desc__sm">
                        <?= $key->description; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

<?php endforeach; ?>