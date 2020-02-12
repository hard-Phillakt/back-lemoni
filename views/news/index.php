<?php

use app\widgets\sidebar\Sidebar;

$this->title = 'Кафе-кондитерская «Лемони» | Новости';
$this->registerMetaTag(['name' => 'description', 'content' => 'Отчёты с мастер-классов, новости из мира кулинарии, интересные события в Белгороде.']);

?>

<section class="news mt-90">
    <div class="container">
        <div class="row flex-reverse">

            <div class="col-lg-2">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Новости компании</h1>

                <div class="news-box">

                    <ul class="news-box__wrapp">

                        <?php $newsBoxCount = 0;

                        foreach ($model as $key => $value): ?>

                            <?php

                            // Дата публикации на сайте
                            $datePublicate = strtotime($value->lm_date);

                            if ($value->lm_publicate == 1 && $datePublicate < date('U')): ?>

                                <li class="mt-35 top-news">

                                    <div class="news-box__img" style="background: url(<?= $value->lm_img; ?>)"
                                         data-title="<?= $value->lm_title; ?>"
                                         data-img-count="<?= $newsBoxCount; ?>"></div>

                                    <div class="news-box__content">

                                        <div class="news-box__content_tag">

                                            <?php $essence = $value->lm_essence == 'Новость' ? '#E69F9C;' : '#A5D9C9;'; ?>

                                            <span class="tag__news" style="background: <?= $essence; ?>"></span>

                                            <span><?= $value->lm_essence; ?></span>
                                        </div>

                                        <div class="mt-45">
                                            <h2 class="title title__h4">

                                                <div class="news-box__content_link news-box__content_link-pointer"
                                                     data-title="<?= $value->lm_title; ?>"
                                                     data-link-count="<?= $newsBoxCount; ?>">

                                                    <?= $value->lm_title; ?>

                                                    <div class="news-box__content_hidden">

                                                        <?= $value->lm_content; ?>

                                                    </div>
                                                </div>

                                            </h2>
                                        </div>

                                        <div class="mt-35">
                                            <div class="desc desc__sm">

                                                <?= $value->lm_description; ?>

                                            </div>
                                        </div>

                                        <div class="mt-35">
                                            <div class="news-box__content_date news-box__content_link"><?= $value->lm_date; ?></div>
                                        </div>
                                    </div>
                                </li>
                                <?php

                                $newsBoxCount++;

                            endif; ?>

                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <img src="./img/icons/Button_Close.svg" alt="Button_Close">
                </button>
            </div>

            <div class="modal-body-wrapp">

                <div class="mb-35">
                    <h3 class="modal-header__title title title__h3" style="color: #8F5541"></h3>
                </div>

                <div class="modal-body"></div>

                <div class="mt-35">
                    <button type="submit" data-dismiss="modal" class="button button__rectangle">Закрыть</button>
                </div>
            </div>

        </div>
    </div>
</div>
