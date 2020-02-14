<?php

use app\widgets\sidebar\Sidebar;

$this->title = 'Кафе-кондитерская «Лемони» | Контакты';
$this->registerMetaTag(['name' => 'description', 'content' => 'Мы находимся по адресу: г. Белгород улица Щорса 57. Телефон для связи 8(920)200-51-54.']);

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

                    <div class="col-lg-4">

                        <div>
                            <p>Наш адрес:</p>
                            <p>г. Белгород, ул. Щорса, дом 57</p>
                        </div>

                        <div class="mt-35">
                            <p>Телефон для заказа:</p>
                            <p><a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a></p>
                        </div>

                        <div class="mt-35">
                            Юридические данные: <br>
                            ООО ”Лемони” <br>
                            ИНН 3123359885 <br>
                            ОГРН 1153123001789
                        </div>

                        <div class="fai-c mt-35 mb-35">
                            <a href="https://www.instagram.com/bakery_lemoni/" class="df pr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="df" style="width: 25px; height: 25px; aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" viewBox="0 0 448 512"><path fill="#8f5541" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </a>
                            <a href="https://www.facebook.com/konditerskayalemoni/" class="df">
                                <svg xmlns="http://www.w3.org/2000/svg" class="df" style="width: 25px; height: 21px; aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" viewBox="0 0 320 512"><path fill="#8f5541" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-8">

                        <div id="map"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

