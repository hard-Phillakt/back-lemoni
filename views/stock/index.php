<?php

use app\widgets\sidebar\Sidebar;

$this->title = 'Кафе-кондитерская «Лемони» | Акции';
$this->registerMetaTag(['name' => 'description', 'content' => 'Акции и интересные события.']);

//debug($model);

?>


<section class="news mt-90">
    <div class="container">
        <div class="row flex-reverse">

            <div class="col-lg-2">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Акции компании</h1>

                <div class="news-box">

                    <?php if (empty($model)): ?>

                        <div class="mt-35">
                            <h3 class="desc desc__md opac__07">Акции вскоре будут добавлены на сайт.</h3>
                            <div class="mt-15">
                                <p class="desc desc__md opac__07"> О наличии или заказе товаров вы можете уточнить по
                                    телефону: <a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a></p>
                            </div>
                        </div>

                    <?php endif; ?>

                    <ul class="news-box__wrapp">

                        <?php $newsBoxCount = 0;

                        foreach ($model as $key => $value): ?>

                            <?php

                            // Дата публикации на сайте
                            $datePublicate = strtotime($value->date);

                            if ($value->publication == 1 && $datePublicate < date('U')): ?>

                                <li class="mt-35 top-news">

                                    <div class="news-box__img" style="background: url(<?= $value->previmg; ?>)"
                                         data-title="<?= $value->title; ?>"
                                         data-img-count="<?= $newsBoxCount; ?>"></div>

                                    <div class="news-box__content">
                                        <div class="mt-45">
                                            <h2 class="title title__h4">

                                                <div class="news-box__content_link news-box__content_link-pointer"
                                                     data-title="<?= $value->title; ?>"
                                                     data-link-count="<?= $newsBoxCount; ?>">

                                                    <?= $value->title; ?>

                                                    <div class="news-box__content_hidden">
                                                        <?= $value->content; ?>
                                                    </div>
                                                </div>

                                            </h2>
                                        </div>

                                        <div class="mt-35">
                                            <div class="desc desc__sm">
                                                <?= $value->description; ?>
                                            </div>
                                        </div>

                                        <div class="mt-35">
                                            <div
                                                class="news-box__content_date news-box__content_link"><?= $value->date; ?></div>
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
