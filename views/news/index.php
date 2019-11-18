<?php

use app\widgets\sidebar\Sidebar;

//debug($model);
?>

<section class="news mt-90">
    <div class="container">
        <div class="row">

            <div class="col-lg-2">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Новости компании</h1>

                <div class="news-box">

                    <ul class="news-box__wrapp">


                        <?php
                        $newsBoxCount = 0;

                        foreach ($model as $key => $value): ?>

                            <?php if ($value->lm_publicate == 1): ?>

                                <li class="mt-35 top-news">


                                    <div class="news-box__img" data-img-count="<?= $newsBoxCount; ?>"></div>

                                    <div class="news-box__content">

                                        <div class="news-box__content_tag">

                                            <?php $essence = $value->lm_essence == 'Новость' ? '#E69F9C;' : '#A5D9C9;'; ?>

                                            <span class="tag__news" style="background: <?= $essence; ?>"></span>

                                            <span><?= $value->lm_essence; ?></span>
                                        </div>

                                        <div class="mt-45">
                                            <h2 class="title title__h4">

                                                <a href="#!" class="news-box__content_link" data-link-count="<?= $newsBoxCount; ?>">

                                                    <?= $value->lm_title; ?>

                                                    <div class="news-box__content_hidden">

                                                        <?= $value->lm_content; ?>

                                                    </div>
                                                </a>

                                            </h2>
                                        </div>

                                        <div class="mt-35">
                                            <div class="desc desc__sm">

                                                <?= $value->lm_description; ?>

                                            </div>
                                        </div>

                                        <div class="mt-35">
                                            <div class="news-box__content_date"><?= $value->lm_date; ?></div>
                                        </div>


                                    </div>


                                </li>

                            <?php

                                $newsBoxCount++;

                            endif; ?>

                        <?php endforeach; ?>

                        <!-- list news -->
                        <!--                        <li class="mt-35">-->
                        <!---->
                        <!--                            <div class="news-box__img"></div>-->
                        <!---->
                        <!--                            <div class="news-box__content">-->
                        <!---->
                        <!--                                <div class="news-box__content_tag">-->
                        <!--                                    <span class="tag__news" style="background: #E69F9C;"></span>-->
                        <!--                                    <span>Новость</span>-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="mt-45">-->
                        <!--                                    <h2 class="title title__h4">-->
                        <!---->
                        <!---->
                        <!--                                        <a href="#!" class="news-box__content_link">-->
                        <!---->
                        <!--                                            Лучший рецепт месяца по мнению-->
                        <!--                                            наших кондитеров-->
                        <!---->
                        <!--                                            <div class="news-box__content_hidden">-->
                        <!---->
                        <!--                                                <div class="mt-30">-->
                        <!--                                                    <img src="./img/news/test-news/test-news.png" alt="cake__1">-->
                        <!--                                                </div>-->
                        <!---->
                        <!--                                                <div class="mt-35" style="color: #8F5541">-->
                        <!--                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum-->
                        <!--                                                    voluptatum-->
                        <!--                                                    corrupti cumque voluptates, incidunt provident recusandae-->
                        <!--                                                    officiis-->
                        <!--                                                    nam mollitia-->
                        <!--                                                    architecto odio ullam, maxime est cum? Eum, quis dicta. Facere,-->
                        <!--                                                    magni dolores-->
                        <!--                                                    harum distinctio eum nisi!-->
                        <!--                                                </div>-->
                        <!---->
                        <!--                                                <div class="mt-35">-->
                        <!--                                                    <img src="./img/news/test-news/test-news.png" alt="cake__1">-->
                        <!--                                                </div>-->
                        <!---->
                        <!--                                                <div class="mt-35" style="color: #8F5541">-->
                        <!--                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum-->
                        <!--                                                    voluptatum-->
                        <!--                                                    corrupti cumque voluptates, incidunt provident recusandae-->
                        <!--                                                    officiis-->
                        <!--                                                    nam mollitia-->
                        <!--                                                    architecto odio ullam, maxime est cum? Eum, quis dicta. Facere,-->
                        <!--                                                    magni dolores-->
                        <!--                                                    harum distinctio eum nisi!-->
                        <!--                                                </div>-->
                        <!---->
                        <!--                                            </div>-->
                        <!---->
                        <!--                                        </a>-->
                        <!---->
                        <!--                                    </h2>-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="mt-35">-->
                        <!--                                    <div class="desc desc__sm">-->
                        <!--                                        Приближающийся летний сезон — прекрасное время, чтобы-->
                        <!--                                        попробовать самые вкусные и разнообразные сочетания-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="mt-35">-->
                        <!--                                    <div class="news-box__content_date">14.09.2019</div>-->
                        <!--                                </div>-->
                        <!---->
                        <!---->
                        <!--                            </div>-->
                        <!---->
                        <!---->
                        <!--                        </li>-->


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
                <div class="modal-body">

                </div>

                <div class="mt-35">
                    <button type="submit" data-dismiss="modal" class="button button__rectangle mt-60">Закрыть</button>
                </div>
            </div>

        </div>
    </div>
</div>
