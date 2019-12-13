<?php


use app\widgets\sidebar\Sidebar;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

//debug($model);
//debug($masterClassForm);

?>

<section class="news mt-90">
    <div class="container">
        <div class="row flex-reverse">

            <div class="col-lg-3">

                <!-- Sidebar -->
                <?= Sidebar::widget(); ?>

            </div>

            <div class="col-lg-8 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Мастер-классы</h1>

                <div class="news-box">

                    <ul class="news-box__wrapp">

                        <?php

                        $newsBoxCount = 0;

                        foreach ($model as $key => $value): ?>


                            <?php if ($value->lm_publicate == 1): ?>

                                <li class="mt-35 top-news">

                                    <div class="news-box__img" style="background: url(<?= $value->lm_img; ?>)" data-title="<?= $value->lm_title; ?>"
                                         data-img-count="<?= $newsBoxCount; ?>"></div>

                                    <div class="news-box__content">

                                        <div class="news-box__content_tag">

                                            <?php

                                            //                                            Взрослый || Детский

                                            ?>

                                            <?php $essence = $value->lm_essence == 'Взрослый' ? '#E69F9C;' : '#A5D9C9;'; ?>

                                            <span class="tag__news" style="background: <?= $essence; ?>"></span>

                                            <span><?= $value->lm_essence; ?></span>
                                        </div>

                                        <div class="mt-45">
                                            <h2 class="title title__h4">

                                                <span class="news-box__content_link">

                                                    <?= $value->lm_title; ?>

                                                </span>

                                            </h2>
                                        </div>

                                        <div class="mt-35">
                                            <div class="desc desc__sm">

                                                <?= $value->lm_description; ?>

                                            </div>
                                        </div>

                                        <div class="mt-35">
                                            <div class="flex-box">
                                                <div class="news-box__content_date"><?= $value->lm_date; ?></div>
                                                <div>
                                                    <div href="#!" class="link link__a"
                                                       data-title="<?= $value->lm_title; ?>"
                                                       data-link-count="<?= $newsBoxCount; ?>">
                                                        Записаться

                                                        <div class="news-box__content_hidden">

                                                            <?= $value->lm_content; ?>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </li>

                                <?php

                                $newsBoxCount++;

                            endif; ?>

                        <?php endforeach; ?>


                        <!--                        <li class="mt-35 top-news">-->
                        <!---->
                        <!---->
                        <!--                            <div class="news-box__img"></div>-->
                        <!---->
                        <!--                            <div class="news-box__content">-->
                        <!---->
                        <!--                                <div class="news-box__content_tag">-->
                        <!---->
                        <!--                                    <div class="flex-box">-->
                        <!--                                        <div>-->
                        <!--                                            <div class="tag__news" style="background: #E69F9C;"></div>-->
                        <!--                                            <span>Новость</span>-->
                        <!--                                        </div>-->
                        <!--                                        <div>-->
                        <!--                                            <span>2990</span>-->
                        <!--                                            <span>руб</span>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!---->
                        <!--                                </div>-->
                        <!---->
                        <!--                                <div class="mt-45">-->
                        <!--                                    <h2 class="title title__h4">-->
                        <!--                                            <span href="#!" class="news-box__content_link">-->
                        <!--                                                Лучший рецепт месяца по мнению-->
                        <!--                                                наших кондитеров-->
                        <!--                                            </span>-->
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
                        <!--                                    <div class="flex-box">-->
                        <!--                                        <div class="news-box__content_date">14.09.2019</div>-->
                        <!--                                        <div>-->
                        <!--                                            <a href="#!" class="link link__a">-->
                        <!--                                                Записаться-->
                        <!---->
                        <!---->
                        <!--                                                <div class="news-box__content_hidden">-->
                        <!--                                                    <div class="mt-30">-->
                        <!--                                                        <img src="./img/news/test-news/test-news.png" alt="cake__1">-->
                        <!--                                                    </div>-->
                        <!---->
                        <!--                                                    <div class="mt-35" style="color: #8F5541">-->
                        <!--                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
                        <!--                                                        Illum-->
                        <!--                                                        voluptatum-->
                        <!--                                                        corrupti cumque voluptates, incidunt provident recusandae-->
                        <!--                                                        officiis-->
                        <!--                                                        nam mollitia-->
                        <!--                                                        architecto odio ullam, maxime est cum? Eum, quis dicta.-->
                        <!--                                                        Facere,-->
                        <!--                                                        magni dolores-->
                        <!--                                                        harum distinctio eum nisi!-->
                        <!--                                                    </div>-->
                        <!---->
                        <!--                                                    <div class="mt-35">-->
                        <!--                                                        <img src="./img/news/test-news/test-news.png" alt="cake__1">-->
                        <!--                                                    </div>-->
                        <!---->
                        <!--                                                    <div class="mt-35" style="color: #8F5541">-->
                        <!--                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
                        <!--                                                        Illum-->
                        <!--                                                        voluptatum-->
                        <!--                                                        corrupti cumque voluptates, incidunt provident recusandae-->
                        <!--                                                        officiis-->
                        <!--                                                        nam mollitia-->
                        <!--                                                        architecto odio ullam, maxime est cum? Eum, quis dicta.-->
                        <!--                                                        Facere,-->
                        <!--                                                        magni dolores-->
                        <!--                                                        harum distinctio eum nisi!-->
                        <!--                                                    </div>-->
                        <!--                                                </div>-->
                        <!---->
                        <!--                                            </a>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!---->
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

                <div class="mb-35">
                    <h3 class="modal-header__title title title__h3" style="color: #8F5541"></h3>
                </div>

                <div class="modal-body">

                </div>

                <?php $form = ActiveForm::begin([
                    'options' => ['class' => 'master-class-form mt-35']
                ]); ?>

                <?= $form->field($masterClassForm, 'title_master')->hiddenInput()->label(''); ?>

                <div class="mb-35">
                    <p>Записаться на <br> Мастер-класс</p>
                </div>

                <?= $form->field($masterClassForm, 'name')->textInput(['class' => 'global-form__input', 'placeholder' => 'Введите имя'])->label('') ?>

                <!--                --><? //= $form->field($masterClassForm, 'phone')->textInput(['class' => 'global-form__input', 'placeholder' => '+7 000 000 0000'])->label('') ?>

                <?= $form->field($masterClassForm, 'phone')->widget(MaskedInput::class, [
                    'mask' => '+7 999 999 9999',
                    'options' => [
                        'class' => 'global-form__input',
                        'placeholder' => '+7'
                    ]
                ])->label('') ?>

                <?= $form->field($masterClassForm, 'comment')->textarea([
                    'rows' => '6',
                    'class' => 'global-form__input',
                    'placeholder' => 'Введите комментарий'
                ])->label('') ?>

                <div class="mt-35 flex-justify-center">
                    <?= Html::submitButton('Записаться', ['class' => 'button button__rectangle']) ?>
                </div>

                <?php $form = ActiveForm::end(); ?>

            </div>

        </div>
    </div>
</div>