<?php


use app\widgets\sidebar\Sidebar;

?>

<section class="contact mt-90">
    <div class="container">
        <div class="row flex-reverse">

            <div class="col-lg-2">

                <!-- Sidebar -->
                <?=  Sidebar::widget(); ?>

            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Контакты</h1>

                <div class="row mt-60">

                    <div class="col-lg-3">

                        <div>
                            <p>Наш адрес:</p>
                            <p>г.Белгород, ул.Щорса, дом 57</p>

                        </div>

                        <div class="mt-35">
                            <p>Телефон для заказа:</p>
                            <p><a href="#!" class="link link__a">+7 (4722) 50-51-54</a></p>
                            <p><a href="#!" class="link link__a">+7 (915) 576 4500</a></p>
                        </div>

                        <div class="mt-35">
                            Юридические данные: <br>
                            ООО ”Лемони” <br>
                            ИНН 3123359885 <br>
                            ОГРН 1153123001789
                        </div>

                        <div class="mt-35">
                            <a href="https://www.instagram.com/bakery_lemoni/">
                                <img src="./img/contact/ico_inst.svg" alt="ico_inst">
                            </a>
                            <a href="https://www.facebook.com/konditerskayalemoni/">
                                <img src="./img/contact/ico_facebook.svg" alt="ico_facebook">
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-9">
                        <!-- <img src="./img/contact/contact-map.png" alt="contact" class="img-responsive"> -->

                        <div id="map"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

