<?php

use app\widgets\sidebar\Sidebar;

$this->title = 'Доставка тортов и десертов в Белгороде';
$this->registerMetaTag(['name' => 'description', 'content' => 'Бесплатная доставка продукции «Лемони» при заказе на сумму от 3000 рублей по городу. Возможен самовывоз и доставка по области.']);

?>

<section class="contact mt-90">
    <div class="container">
        <div class="row flex-reverse">

            <div class="col-lg-2">

                <!-- Sidebar -->
                <?=  Sidebar::widget(); ?>
            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Доставка <br> и приём торта</h1>

                <div class="row">

                    <div class="col-lg-7">

                        <div class="font-family">
                            <div class="mt-60">
                                <p>
                                    Мы осуществляем доставку всей продукции курьером.
                                </p>

                                <p>
                                    Стоимость доставки по городу будет зависеть от суммы заказа:
                                </p>

                                <p>
                                    Бесплатно — при заказе на сумму свыше 3000 рублей;
                                </p>

                                <p>
                                    300 рублей — при заказе от любой суммы до 3000 рублей.
                                </p>

                                <p>
                                    Стоимость доставки по области оговаривается отдельно.
                                </p>

                                <p>
                                    Доставка свадебных тортов оговаривается отдельно и заранее.
                                    Возможен самовывоз заказа на любую сумму.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">
                        <div class="contact__customer">
                            <img src="./img/deliv-cake/deliv-cake.png" alt="deliv-cake" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>