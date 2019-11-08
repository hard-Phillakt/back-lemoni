<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\BaseAsset;
use app\widgets\customcart\CartInformer;

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

    <script src="https://api-maps.yandex.ru/2.1/?apikey=a927f738-0c06-46da-9330-37a4e3010060&lang=ru_RU"
            type="text/javascript"></script>
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
                            <a href="/">
                                <img src="/img/logo/logo-brown.svg" alt="logo-brown" class="img-responsive">
                            </a>
                        </div>

                        <?php if(!Yii::$app->user->isGuest): ?>

                            <div class="additional-modules">

                                <div class="log-out-link">
                                    <strong>
                                        <a href="/master/login/log-out" class="link link__a">ВЫХОД &nbsp; <i class="fas fa-sign-out-alt"></i></a>
                                    </strong>
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
                <?= $content ?>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <footer class="footer mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-logo">
                        <a href="/">
                            <img src="/img/logo/logo-white.svg" alt="white">
                        </a>
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
