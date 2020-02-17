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

    <!--    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans&display=swap" rel="stylesheet">-->
    <!--    <link rel="icon" href="favicon.ico" type="image/x-icon">-->
    <!--    <link rel="stylesheet" href="./style/main.css">-->

    <script src="https://api-maps.yandex.ru/2.1/?apikey=a927f738-0c06-46da-9330-37a4e3010060&lang=ru_RU" type="text/javascript"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap-master">

    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="header-box">

                        <!-- section-logo -->
                        <div class="section-logo">
                            <?= Html::a(Html::img(Url::to('/img/logo/logo-brown.svg')), Url::to('/')) ?>
                        </div>

                            <?= Html::a('Новости', Url::to('/master/news/index'), ['class' => 'link link__a'])?>

                            <?= Html::a('Мастер-классы', Url::to('/master/master-class'), ['class' => 'link link__a'])?>

                            <?= Html::a('Торты', Url::to('/master/cake-goods'), ['class' => 'link link__a'])?>

                            <?= Html::a('Кенди бар', Url::to('/master/candie-goods'), ['class' => 'link link__a'])?>

                            <?= Html::a('Теги-Cake', Url::to('/master/cake-tag'), ['class' => 'link link__a'])?>

                            <?= Html::a('Теги-Candy', Url::to('/master/candy-tag'), ['class' => 'link link__a'])?>

                            <?= WTruncateCartT::widget();?>

                        <?php if(!Yii::$app->user->isGuest): ?>

                            <div class="additional-modules">

                                <div class="log-out-link">

                                    <?= Html::a('Выход', Url::to('/master/login/log-out'), ['class' => 'link link__a'])?>

                                </div>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- content -->
    <section class="content mt-60">
        <div class="container">
            <div class="row">
                <?= $content ?>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <footer class="footer mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-logo mb-35">
                        <?= Html::a(Html::img(Url::to('/img/logo/logo-white.svg')), Url::to('/')) ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="create-company">
            <div class="container">
                <div class="row flex-aling-center">
                    <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-6">
                        <div class="create-company__project">
                            © Кафе Лемони, 2019 - 2019                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <div class="create-company__media">
                            <a class="link link__a_w" href="https://webmedia31.ru/"><p class="mr-15">Разработка сайта</p> <img src="/img/logo/logo_media.svg" alt=""></a>                        </div>
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
