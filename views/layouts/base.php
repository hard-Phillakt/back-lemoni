<?php

use yii\helpers\Html;
use app\assets\BaseAsset;
use app\widgets\customcart\CartInformer;
use yii\helpers\Url;
use app\widgets\stock\WStock;
use app\widgets\customcart\ElementsList;

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
    <meta name="yandex-verification" content="da2913ff66454a5b"/>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Url::to(['./web/favicon.ico'])]); ?>
    <link rel="stylesheet" type="text/css" href="https://securepayments.sberbank.ru/demopayment/docsite/assets/css/modal.css">
    <script type="application/javascript" src="https://securepayments.sberbank.ru/demopayment/docsite/assets/js/ipay.js"></script>
    <script type="application/javascript">
        var ipay = new IPAY({api_token: 't5ntb5a8sneugo2tnvc7ri4cuv'});
    </script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=a927f738-0c06-46da-9330-37a4e3010060&lang=ru_RU"
            type="text/javascript">
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(56515504, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/56515504" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '611835906039047');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=611835906039047&ev=PageView&noscript=1"/>
    </noscript>
<!--     End Facebook Pixel Code-->
<!---->
<!--     End Vk Pixel Code-->
    <script type="text/javascript">!function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?167", t.onload = function () {
                VK.Retargeting.Init("VK-RTRG-469069-aCsr8"), VK.Retargeting.Hit()
            }, document.head.appendChild(t)
        }();</script>
    <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-469069-aCsr8" style="position:fixed; left:-999px;" alt=""/>
    </noscript>
    <!-- End Vk Pixel Code end -->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="box-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="/search/" id="form-box-search">
                        <input type="text" name="q" class="global-form__input" placeholder="поиск по товарам">
                        <button onclick="fbq('track', 'Search');" class="box-search__btn" type="submit">
                            <img src="/img/icons/arrow-right.svg" alt="arrow-right" class="rotate__180">
                        </button>
                        <span class="box-search__close">×</span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Full menu -->
    <div class="box-reletive">

        <div class="header-full-menu pt-35 close-menu">

            <div class="container mb-50">
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

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

                        <div class="additional-modules">

                            <!-- additional-modules -->
                            <div class="additional-modules__phone">
                                <a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a>
                            </div>

                            <!-- additional-modules__search -->
                            <div class="additional-modules__search">
                                <img src="/img/icons/black/icon-search.svg" alt="icon-search">
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
                                    <a href="/" class="link black-menu-link__a" onclick="fbq('track', 'ViewContent');">Главная</a>
                                </li>
                                <li>
                                    <a href="/cake" class="link black-menu-link__a"
                                       onclick="fbq('track', 'ViewContent');">Каталог тортов</a>
                                </li>
                                <li>
                                    <a href="/candy" class="link black-menu-link__a"
                                       onclick="fbq('track', 'ViewContent');">Каталог десертов</a>
                                </li>
                                <li>
                                    <a href="/contact" class="link black-menu-link__a">Контакты</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <ul class="header-box-full__ul">
                                <li>
                                    <a href="/master-class" class="link black-menu-link__a"
                                       onclick="fbq('track', 'ViewContent');">Мастер-классы</a>
                                </li>
                                <li>
                                    <a href="/stock" class="link black-menu-link__a">Акции</a>
                                </li>
                                <li>
                                    <a href="/news" class="link black-menu-link__a">Новости</a>
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
                            <img src="/img/icons/black/icon-search.svg" alt="icon-search">
                        </div>

                        <!-- additional-modules__cart -->
                        <div class="additional-modules__cart">
                            <a href="/check-out"><img src="/img/icons/black/icon-cart.svg" alt="icon-cart">
                                <span class="CartInformerBox">
                                    <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => 'site/index', 'text' => '{c}']); ?>
                                </span>
                            </a>

                            <div class="add-item-wrapper add-item-hidden add-item-none">
                                <h5 class="title title-h5 pb-15">Добавленно:</h5>
                                <p class="add-item"></p>
                            </div>
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
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer__logo mb-15">
                        <a href="/">
                            <img src="/img/logo/logo-white.svg" alt="white">
                        </a>
                    </div>
                    <ul class="footer__ul mt-15">
                        <li><a href="tel:+74722505154" class="link link__a_w">+7 (4722) 50-51-54</a></li>
                        <li><a href="mailto:info@cafelemoni.ru" class="link link__a_w">info@cafelemoni.ru</a></li>
                        <li>
                            <div class="fai-c">
                                <a href="https://www.instagram.com/bakery_lemoni/" class="df pr-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="df"
                                         style="width: 25px; height: 25px; aria-hidden=" true
                                    " focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa
                                    fa-instagram fa-w-14" role="img" viewBox="0 0 448 512">
                                    <path fill="#fff"
                                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-lg-offset-1 col-md-3 col-sm-2 col-xs-12">
                    <ul class="footer__ul">
                        <li><h3 class="title title__h2">Меню:</h3></li>
                        <li><a href="/" class="link link__a_w">Главная</a></li>
                        <li><a href="/deliv-cake" class="link link__a_w">Доставка</a></li>
                        <li><a href="/order" class="link link__a_w">Заказ и оплата</a></li>
                        <li><a href="/contact" class="link link__a_w">Контакты</a></li>
                        <li><a href="/review" class="link link__a_w">Отзывы</a></li>
                        <li><a href="/about" class="link link__a_w">О нас</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-lg-offset-0 col-md-3 col-sm-3 col-xs-12">
                    <ul class="footer__ul">
                        <li><h3 class="title title__h2">Продукция:</h3></li>
                        <li><a href="/cake" class="link link__a_w">Торты</a></li>
                        <li><a href="/candy" class="link link__a_w">Десерты</a></li>
                        <li><a href="/master-class" class="link link__a_w">Мастер-классы</a></li>
                        <li><a href="/news" class="link link__a_w">Новости</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                    <ul class="footer__ul">
                        <li><h3 class="title title__h2">Акции:</h3></li>

                        <!-- Виджет акций -->
                        <?= WStock::widget() ?>

                    </ul>
                </div>
            </div>

        </div>

        <div class="create-company">
            <div class="container">
                <div class="row flex-aling-center">
                    <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
                        <div class="create-company__project">
                            © Кафе Лемони, 2019 - <?= date('o'); ?>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="create-company__media">
                            <?= Html::a('<p class="mr-15">Разработка сайта</p> ' . Html::img('/img/logo/logo_media.svg'), Url::to('https://webmedia31.ru/'), ['class' => 'link link__a_w']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!--  Scroll to topScroll to top  -->
    <div class="scroll-to-top__wrapp set-bottom">
        <span class="scroll-to-top__wrapp_arrow"></span>
    </div>

</div>

<div id="modal-delivery" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close opac__07" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">

                <div class="mb-35">
                    <h2 class="title title__h3">
                        <p style="color: #8F5541">Спасибо за заказ!</p>
                    </h2>
                </div>

                <div class="flex-justify-center pb-35">
                    <p class="desc desc__md opac__07">
                        С вами свяжется наш менеджер по указанному телефону для обсуждения деталей.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
