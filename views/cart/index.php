
<!-- breadcrumbs-line -->
<section class="breadcrumbs-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#!" class="breadcrumbs-line__active">Главная - Торты -</a><span> Фруктовый букет №23
                    </span>
            </div>
        </div>
    </div>
</section>


<section class="cart-goods">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-60">
                    <h1 class="title title__h1">
                        Корзина
                    </h1>
                </div>
            </div>
        </div>

        <!-- под товары разметка -->
        <div class="row mt-35">
            <div class="col-lg-5">
                <a class="button button__circle" href="#!"><img src="./img/icons/arrow-right.svg" alt="arrow-right"
                                                                class="rotate__180"></a>
            </div>

            <div class="col-lg-2">
                <h4 class="title title__h4">Вес</h4>
            </div>

            <div class="col-lg-2">
                <h4 class="title title__h4">Цена</h4>
            </div>

            <div class="col-lg-2">
                <div class="">

                    <h4 class="title title__h4">Кол-во</h4>
                </div>
            </div>

        </div>

        <!-- товары корзины -->
        <div class="row">

            <div class="col-lg-12">
                <div class="dvizh-cart-block">
                    <div class="dvizh-cart">
                        <ul class="dvizh-cart-list">
                            <li class="dvizh-cart-row">
                                <div class=" row">
                                    <div class="col-xs-5">

                                        <div class="dvizh-cart-row-wrapp">

                                            <div class="dvizh-cart-row__img mr-30"
                                                 style="background: url(./img/goods/cake/cake__1.png);">

                                            </div>

                                            <div class="dvizh-cart-row__title">

                                                <h4 class="title title__h4">
                                                    Торт «Лотос»
                                                    с черничным джемом
                                                </h4>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-2">
                                        <span>4</span> кг
                                    </div>

                                    <div class="col-xs-2">

                                        <div class="dvizh-cart-row__wrapp-price">

                                            <span class="dvizh-cart-element-price3">1400.00 руб</span>

                                        </div>

                                    </div>


                                    <div class="col-xs-2">

                                        <div class="dvizh-cart-row__wrapp-price">

                                            <div class="dvizh-change-count">

                                                <a class="dvizh-arr dvizh-downArr" href="#">-</a>

                                                <input type="number" id="cartelement-count"
                                                       class="dvizh-cart-element-count" name="CartElement[count]"
                                                       value="1" data-role="cart-element-count" data-line-selector="li"
                                                       data-id="3" data-href="/cart/element/update">

                                                <a class="dvizh-arr dvizh-upArr" href="#">+</a>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xs-1 shop-cart-delete">
                                        <a class="dvizh-cart-delete-button delete" href="/cart/element/delete"
                                           data-url="/cart/element/delete" data-role="cart-delete-button"
                                           data-line-selector="dvizh-cart-row" data-id="3">╳</a>
                                    </div>

                                </div>

                                <!-- доп опции товара -->
                                <div class="row mt-15">
                                    <div class="col-lg-6 col-lg-offset-1">
                                        <div class="dvizh-cart-show-options">
                                            <div class="box-option">

                                                <div class="dvizh-cart-show-options__img mr-30"
                                                     style="background: url(./img/goods/cake/cake__1.png);">

                                                </div>

                                                <h5 class="title title__h4">Топер “День рождения”</h5>

                                                <!-- img.png-50: Это тест тайтл -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="price-option"><span>20</span>.00 руб</div>
                                    </div>

                                    <div class="col-lg-1 col-lg-offset-2">
                                        <!-- сделаю на потом (в беке методы уже сделаны для удаления опций) -->
                                        <!-- <span class="delete-option" data-option="title-50" data-id="3">╳</span> -->
                                    </div>

                                </div>
                            </li>

                        </ul>

                        <div class="dvizh-cart-bottom-panel"></div>

                    </div>
                </div>
            </div>

        </div>

        <!-- итог в рублях -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8">
                <div class="mt-35">
                    <h3 class="title title__h1">Итого: <span>1 800</span> руб</h3>
                </div>
            </div>

            <div class="col-lg-2 col-lg-offset-10">
                <div class="mt-35">
                    <a href="#!" class="button button__rectangle">В корзину</a>
                </div>
            </div>
        </div>

    </div>
</section>
