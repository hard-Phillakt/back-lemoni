<?php


use app\widgets\sidebar\Sidebar;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

//debug($model);
//debug($masterClassForm);

$this->title = 'Запишитесь на наш мастер-класс';
$this->registerMetaTag(['name' => 'description', 'content' => 'Список ближайших мастер-классов, которые вы можете посетить самостоятельно, с друзьями или с детьми.']);

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

                        <li class="mt-35 top-news">

                            <div class="news-box__img"
                                 style="background: url(<?= $model[0]->lm_img; ?>)"
                                 data-title="<?= $model[0]->lm_title; ?>"
                                 data-img-count="0"></div>

                            <div class="news-box__content">

                                <div class="flex-aling-center flex-justify-between mb-35">
                                    <div class="news-box__content_tag">

                                        <?php //Взрослый || Детский ?>

                                        <?php $essence = $model[0]->lm_essence == 'Взрослый' ? '#E69F9C;' : '#A5D9C9;'; ?>

                                        <span class="tag__news" style="background: <?= $essence; ?>"></span>

                                        <span><?= $model[0]->lm_essence; ?></span>

                                    </div>

                                    <div class="news-box__content_tag">

                                        <span class="pl-30"><?= $model[0]->lm_price; ?> руб</span>

                                    </div>
                                </div>

                                <div class="mt-45">
                                    <h2 class="title title__h4">
                                        <span class="news-box__content_link">
                                            <?= $model[0]->lm_title; ?>
                                        </span>
                                    </h2>
                                </div>

                                <div class="mt-35">
                                    <div class="desc desc__sm">
                                        <?= $model[0]->lm_description; ?>
                                    </div>
                                </div>

                                <div class="mt-35">
                                    <div class="flex-box">
                                        <div class="news-box__content_date"><?= $model[0]->lm_date; ?></div>
                                        <div>
                                            <div href="#!" class="link link__a"
                                                 data-title="<?= $model[0]->lm_title; ?>"
                                                 data-link-count="0">
                                                Записаться

                                                <div class="news-box__content_hidden">
                                                    <?= $model[0]->lm_content; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <?php

                        $newsBoxCount = 1;

                        $newsArticle = 1;

                        $mCount = count($model) - 1; ?>

                        <?php while ($newsArticle <= $mCount): ?>

                            <?php if ($model[$newsArticle]->lm_publicate == 1): ?>

                                <li class="mt-35 top-news">

                                    <div class="row mb-15">
                                        <div class="col-lg-6">
                                            <div class="news-box__content_tag">

                                                <?php //Взрослый || Детский?>

                                                <?php $essence = $model[$newsArticle]->lm_essence == 'Взрослый' ? '#E69F9C;' : '#A5D9C9;'; ?>

                                                <span class="tag__news" style="background: <?= $essence; ?>"></span>

                                                <span><?= $model[$newsArticle]->lm_essence; ?></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="news-box__content_tag">

                                                <span class="pl-30"><?= $model[$newsArticle]->lm_price; ?> руб</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="news-box__img"
                                         style="background: url(<?= $model[$newsArticle]->lm_img; ?>)"
                                         data-title="<?= $model[$newsArticle]->lm_title; ?>"
                                         data-img-count="<?= $newsBoxCount; ?>"></div>

                                    <div class="news-box__content">

                                        <div class="mt-45">
                                            <h2 class="title title__h4">

                                                <span class="news-box__content_link">

                                                    <?= $model[$newsArticle]->lm_title; ?>

                                                </span>

                                            </h2>
                                        </div>

                                        <div class="mt-35">
                                            <div class="desc desc__sm">

                                                <?= $model[$newsArticle]->lm_description; ?>

                                            </div>
                                        </div>

                                        <div class="mt-35">
                                            <div class="flex-box">
                                                <div
                                                    class="news-box__content_date"><?= $model[$newsArticle]->lm_date; ?></div>
                                                <div>
                                                    <div href="#!" class="link link__a"
                                                         data-title="<?= $model[$newsArticle]->lm_title; ?>"
                                                         data-link-count="<?= $newsBoxCount; ?>">
                                                        Записаться

                                                        <div class="news-box__content_hidden">

                                                            <?= $model[$newsArticle]->lm_content; ?>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </li>

                                <?php

                                $newsBoxCount++;
                                $newsArticle++;

                            endif; ?>

                        <?php endwhile; ?>

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

                <div class="mb-15">
                    <h3 class="modal-header__title title title__h3" style="color: #8F5541"></h3>
                </div>

                <div class="modal-body">

                </div>

                <?php $form = ActiveForm::begin([
                    'options' => ['class' => 'master-class-form']
                ]); ?>

                <?= $form->field($masterClassForm, 'title_master')->hiddenInput()->label(false); ?>

                <div class="mb-25">
                    <p>Записаться на <br> Мастер-класс</p>
                </div>

                <?= $form->field($masterClassForm, 'name')->textInput(['class' => 'global-form__input', 'placeholder' => 'Введите имя'])->label(false) ?>

                <!--                --><? //= $form->field($masterClassForm, 'phone')->textInput(['class' => 'global-form__input', 'placeholder' => '+7 000 000 0000'])->label('') ?>

                <?= $form->field($masterClassForm, 'phone')->widget(MaskedInput::class, [
                    'mask' => '+7 999 999 9999',
                    'options' => [
                        'class' => 'global-form__input',
                        'placeholder' => '+7'
                    ]
                ])->label(false) ?>

                <?= $form->field($masterClassForm, 'comment')->textarea([
                    'rows' => '6',
                    'class' => 'global-form__input',
                    'placeholder' => 'Введите комментарий'
                ])->label(false) ?>

                <div class="mt-35 flex-justify-center">
                    <?= Html::submitButton('Записаться', ['class' => 'button button__rectangle']) ?>
                </div>

                <?php $form = ActiveForm::end(); ?>

            </div>

        </div>
    </div>
</div>