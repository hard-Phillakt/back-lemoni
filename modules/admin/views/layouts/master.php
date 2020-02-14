<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\BaseAsset;
use app\widgets\customcart\CartInformer;
use yii\helpers\Url;
use app\widgets\wtruncartt\WTruncateCartT;

BaseAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="admin-wrapper">
    <!-- header start -->
    <header class="header admin-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <!-- section-logo -->
                    <?= Html::a(Html::img(Url::to('/img/logo/logo-brown.svg')), Url::to('/')) ?>
                </div>

                <div class="col-lg-2">

                    <div class="mt-15">
                        <h4>Раздел инфо:</h4>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Новости', Url::to('/admin/news/index'), ['class' => 'link link__a']) ?>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Мастер-классы', Url::to('/admin/master-class'), ['class' => 'link link__a']) ?>
                    </div>

                </div>

                <div class="col-lg-2">

                    <div class="mt-15">
                        <h4>Раздел товаров:</h4>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Товары - Торты', Url::to('/admin/cake-goods'), ['class' => 'link link__a']) ?>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Товары - Дерерты', Url::to('/admin/candie-goods'), ['class' => 'link link__a']) ?>
                    </div>
                </div>

                <div class="col-lg-2">

                    <div class="mt-15">
                        <h4>Раздел связей:</h4>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Связь Тег + Торт', Url::to('/admin/cake-tag'), ['class' => 'link link__a']) ?>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Связь Тег + Дерерт', Url::to('/admin/candy-tag'), ['class' => 'link link__a']) ?>
                    </div>

                    <div class="mt-15">
                        <?= Html::a('Список всех Тегов', Url::to('/admin/tag'), ['class' => 'link link__a']) ?>
                    </div>
                </div>

                <div class="col-lg-2">

                    <div class="mt-15">
                        <h4>Прочее:</h4>
                    </div>

                    <div>
                        <?= WTruncateCartT::widget(); ?>
                    </div>

                    <div class="mt-15">
                        <?//= Html::a('Отзывы', Url::to('/admin/review'), ['class' => 'link link__a']) ?>
                    </div>

                </div>

                <div class="col-lg-2">
                    <div class="main-admin-wrapp">
                        <h4>Главный админ</h4>
                        <div class="main-admin__img"></div>
                        <?php if (!Yii::$app->user->isGuest): ?>
                            <div class="additional-modules mt-15">
                                <div class="log-out-link">
                                    <?= Html::a('Выход', Url::to('/admin/login/log-out'), ['class' => 'link link__a']) ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?= Html::a(Html::img(Url::to('/img/logo/logo-white.svg')), Url::to('/')) ?>
                </div>

            </div>
        </div>
        <div class="create-company">
            <div class="container">
                <div class="row flex-aling-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="create-company__project">
                            © Кафе Лемони, 2019 - <?= date('o'); ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-5 col-sm-5 col-xs-5">
                        <div class="create-company__media">
                            <a class="link link__a_w" href="https://webmedia31.ru/"><p class="mr-15">Разработка
                                    сайта</p> <img src="/img/logo/logo_media.svg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
