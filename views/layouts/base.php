<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\BaseAsset;
use app\widgets\customcart\CartInformer;
use yii\bootstrap\NavBar;

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
            type="text/javascript">
    </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <!-- Full menu -->
    <div class="box-reletive">

        <div class="header-full-menu pt-35 close-menu">

            <div class="container mb-60">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="header-box">

                            <!-- nav-menu-icon -->
                            <nav class="nav-menu-icon">
                                <a href="#!" class="nav-menu-icon__link">
                                    <span class="nav-menu-icon__link_img mr-15">
                                        <img src="/img/icons/black/icon-close.svg" alt="icon-close"
                                             class="img-responsive">
                                    </span>
                                    <span class="nav-menu-icon__link_title">
                                        Закрыть
                                    </span>
                                </a>
                            </nav>

                        </div>
                    </div>

<!--                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--                        -->
<!--                    </div>-->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

                        <div class="additional-modules">

                            <!-- additional-modules -->
                            <div class="additional-modules__phone">
                                <a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a>
                            </div>

                            <!-- additional-modules__search -->
                            <div class="additional-modules__search">
                                <a href="#!"><img src="/img/icons/black/icon-search.svg" alt="icon-search"></a>
                            </div>

                            <!-- additional-modules__cart-->
                            <div class="additional-modules__cart">
                                <a href="/check-out">
                                    <img src="/img/icons/black/icon-cart.svg" alt="icon-cart">
                                        <span class="CartInformerBox">
                                            <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => 'site/index', 'text' => '{c}']); ?>
                                        </span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="header-box-full">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <ul class="header-box-full__ul">
                                <li>
                                    <a href="/" class="link black-menu-link__a">Главная</a>
                                </li>
                                <li>
                                    <a href="/cake-goods" class="link black-menu-link__a">Каталог тортов</a>
                                </li>
                                <li>
                                    <a href="/candie-goods" class="link black-menu-link__a">Candy bar</a>
                                </li>
                                <li>
                                    <a href="/contact" class="link black-menu-link__a">Контакты</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <ul class="header-box-full__ul">
                                <li>
                                    <a href="/news" class="link black-menu-link__a">Новости</a>
                                </li>
                                <li>
                                    <a href="/master-class" class="link black-menu-link__a">Мастер-классы</a>
                                </li>
                                <li>
                                    <a href="/review" class="link black-menu-link__a">Отзывы</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <ul class="header-box-full__ul">
                                <li>
                                    <a href="/about" class="link black-menu-link__a">О нас</a>
                                </li>
                                <li>
                                    <a href="/order" class="link black-menu-link__a">Заказ и оплата</a>
                                </li>
                                <li>
                                    <a href="/deliv-cake" class="link black-menu-link__a">Доставка и прием товара</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row flex-aling-center">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <!-- nav-menu-icon -->
                    <nav class="nav-menu-icon">
                        <a href="#!" class="nav-menu-icon__link">
                                <span class="nav-menu-icon__link_img">
                                    <img src="/img/icons/black/icon-menu.svg" alt="icon-menu" class="img-responsive">
                                </span>
                                <span class="nav-menu-icon__link_title">
                                    Меню
                                </span>
                        </a>
                    </nav>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <!-- section-logo -->
                    <div class="section-logo">
                        <a href="/">
                            <img src="/img/logo/logo-brown.svg" alt="logo-brown" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                    <div class="additional-modules">
                        <!-- additional-modules__phone -->
                        <div class="additional-modules__phone">
                            <a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a>
                        </div>

                        <!-- additional-modules__search -->
                        <div class="additional-modules__search">
                            <a href="#!"><img src="/img/icons/black/icon-search.svg" alt="icon-search"></a>
                        </div>

                        <!-- additional-modules__cart -->
                        <div class="additional-modules__cart">
                            <a href="/check-out"><img src="/img/icons/black/icon-cart.svg" alt="icon-cart">
                            <span class="CartInformerBox">
                                <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => 'site/index', 'text' => '{c}']); ?>
                            </span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </header>

    <!-- content -->
    <?= $content ?>

    <!-- footer start -->
    <footer class="footer mt-90">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="section-logo">
                        <a href="/">
                            <img src="/img/logo/logo-white.svg" alt="white">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <ul class="footer__ul">
                        <li><a href="/" class="link link__a_w">Главная</a></li>
                        <li><a href="/contact" class="link link__a_w">Контакты</a></li>
                        <li><a href="/deliv-cake" class="link link__a_w">Доставка</a></li>
                        <li><a href="/about" class="link link__a_w">О нас</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <ul class="footer__ul">
                        <li><a href="/cake-goods" class="link link__a_w">Торты</a></li>
                        <li><a href="/candie-goods" class="link link__a_w">Candy bar</a></li>
                        <li><a href="/order" class="link link__a_w">Заказ и оплата</a></li>
                        <!--                        <li><a href="#!" class="link link__a_w">Дегустация</a></li>-->
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <ul class="footer__ul">
                        <!--                        <li><a href="#!" class="link link__a_w">Конструктор тортов</a></li>-->
                        <li><a href="/master-class" class="link link__a_w">Мастер-классы</a></li>
                        <li><a href="/news" class="link link__a_w">Новости</a></li>
                        <li><a href="/review" class="link link__a_w">Отзывы</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <ul class="footer__ul">
                        <li>Контакты:</li>
                        <li><a href="tel:+74722505154" class="link link__a_w">+7 (4722) 50-51-54</a></li>
                        <li><a href="mailto:info@cafelemoni.ru" class="link link__a_w">info@cafelemoni.ru</a></li>
                    </ul>
                </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">-->
<!--                    <div class="section-logo">-->
<!--                        <a href="/">-->
<!--                            <img src="/img/logo/logo-white.svg" alt="white">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">-->
<!--                    <ul class="footer__ul">-->
<!--                        <li><a href="/" class="link link__a_w">Главная</a></li>-->
<!--                        <li><a href="/contact" class="link link__a_w">Контакты</a></li>-->
<!--                        <li><a href="/deliv-cake" class="link link__a_w">Доставка</a></li>-->
<!--                        <li><a href="/about" class="link link__a_w">О нас</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">-->
<!--                    <ul class="footer__ul">-->
<!--                        <li><a href="/cake-goods" class="link link__a_w">Торты</a></li>-->
<!--                        <li><a href="/candie-goods" class="link link__a_w">Candy bar</a></li>-->
<!--                        <li><a href="/order" class="link link__a_w">Заказ и оплата</a></li>-->
<!--                        <!--                        <li><a href="#!" class="link link__a_w">Дегустация</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">-->
<!--                    <ul class="footer__ul">-->
<!--                        <!--                        <li><a href="#!" class="link link__a_w">Конструктор тортов</a></li>-->
<!--                        <li><a href="/master-class" class="link link__a_w">Мастер-классы</a></li>-->
<!--                        <li><a href="/news" class="link link__a_w">Новости</a></li>-->
<!--                        <li><a href="/review" class="link link__a_w">Отзывы</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">-->
<!--                    <ul class="footer__ul">-->
<!--                        <li>Контакты:</li>-->
<!--                        <li><a href="tel:+74722505154" class="link link__a_w">+7 (4722) 50-51-54</a></li>-->
<!--                        <li><a href="mailto:info@cafelemoni.ru" class="link link__a_w">info@cafelemoni.ru</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </footer>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
