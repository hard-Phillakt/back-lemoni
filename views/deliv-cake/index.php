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
                <?= Sidebar::widget(); ?>
            </div>

            <div class="col-lg-9 col-lg-offset-1">

                <h1 class="title title__h1 opac__07">Доставка <br> и приём торта</h1>

                <div class="row">

                    <div class="col-lg-7">

                        <div class="font-family">
                            <div class="mt-60">
                                <p>Мы осуществляем доставку всей продукции курьером.</p>

                                <p>Доставка свадебных тортов оговаривается отдельно и заранее. Возможен самовывоз заказа
                                    на любую сумму.</p>

                                <p>Стоимость доставки по городу будет зависеть от суммы заказа:</p>

                                <p>Бесплатно — при заказе на сумму свыше 5000 рублей (кроме праздничных дней);</p>

                                <p>300 рублей — при заказе на любую сумму до 5000 рублей.</p>
                            </div>
                        </div>

                        <div>

                            <div class="dai-c mt-35 mb-35">
                                <div class="table__humburger link link__a active-link-a">
                                    Посмотреть прайс городов:
                                </div>
<!--                                <div class="table__humburger">-->
<!--                                    <span></span>-->
<!--                                    <span></span>-->
<!--                                    <span></span>-->
<!--                                </div>-->
                            </div>

                            <table class="table table_price table_price-hidden table_price-none mt-35">
                                <tr>
                                    <td>Алексеевка ближняя Короч. р-н</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td>Алексеевка дальняя</td>
                                    <td>4300</td>
                                </tr>
                                <tr>
                                    <td>Алексеевка Волоконовский  р-н</td>
                                    <td>2600</td>
                                </tr>
                                <tr>
                                    <td>Алексеевка Яковлевский р-н</td>
                                    <td>1250</td>
                                </tr>
                                <tr>
                                    <td>Безымено с.  Грайворонский р-н</td>
                                    <td>2400</td>
                                </tr>
                                <tr>
                                    <td>Береговое 2 Прохоровский р-н</td>
                                    <td>1700</td>
                                </tr>
                                <tr>
                                    <td>Белянка Шебекинский р-н</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>Белый колодезь Вейделевский р-н</td>
                                    <td>4800</td>
                                </tr>
                                <tr>
                                    <td>Бессоновка</td>
                                    <td>750</td>
                                </tr>
                                <tr>
                                    <td>Бирюч</td>
                                    <td>3600</td>
                                </tr>
                                <tr>
                                    <td>Борисовка</td>
                                    <td>1200</td>
                                </tr>
                                <tr>
                                    <td>Большетроицкое</td>
                                    <td>1850</td>
                                </tr>
                                <tr>
                                    <td>Бутово Яковлевский р-н</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td>Быковка  Яковлевский р-н</td>
                                    <td>700</td>
                                </tr>
                                <tr>
                                    <td>Валуйки</td>
                                    <td>3600</td>
                                </tr>
                                <tr>
                                    <td>Вейделевка</td>
                                    <td>4350</td>
                                </tr>
                                <tr>
                                    <td>Верхососна</td>
                                    <td>3600</td>
                                </tr>
                                <tr>
                                    <td>Веселая Лопань</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>Вознесеновка Ивнянского р-на</td>
                                    <td>1700</td>
                                </tr>
                                <tr>
                                    <td>Вознесеновка Шебекинского  р-на</td>
                                    <td>1200</td>
                                </tr>
                                <tr>
                                    <td>Вознесеновка Яковлевского р-на</td>
                                    <td>950</td>
                                </tr>
                                <tr>
                                    <td>Вознесеновка Яковлевского р-на</td>
                                    <td>950</td>
                                </tr>
                                <tr>
                                    <td>Волоконовка</td>
                                    <td>2850</td>
                                </tr>
                                <tr>
                                    <td>Головино</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>Гостищево</td>
                                    <td>720</td>
                                </tr>
                                <tr>
                                    <td>Городище Старооскольский р-н</td>
                                    <td>3700</td>
                                </tr>
                                <tr>
                                    <td>Грайворон</td>
                                    <td>1900</td>
                                </tr>
                                <tr>
                                    <td>Губкин</td>
                                    <td>2900</td>
                                </tr>
                                <tr>
                                    <td>Графовка Шебекинский р-н</td>
                                    <td>800</td>
                                </tr>
                                <tr>
                                    <td>Дубовое</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>Драгунское Белгородский р-н</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>Ивица  Корочанский р-н</td>
                                    <td>1800</td>
                                </tr>
                                <tr>
                                    <td>Ивня</td>
                                    <td>1850</td>
                                </tr>
                                <tr>
                                    <td>Игуменка дальняя</td>
                                    <td>550</td>
                                </tr>
                                <tr>
                                    <td>Иловка Алексеевский р-н</td>
                                    <td>4100</td>
                                </tr>
                                <tr>
                                    <td>Комсомольский</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>Короча</td>
                                    <td>1350</td>
                                </tr>
                                <tr>
                                    <td>Красная яруга</td>
                                    <td>1900</td>
                                </tr>
                                <tr>
                                    <td>Курск</td>
                                    <td>3500</td>
                                </tr>
                                <tr>
                                    <td>Лопухинка с. Губкинский р-н</td>
                                    <td>2670</td>
                                </tr>
                                <tr>
                                    <td>Майский</td>
                                    <td>400</td>
                                </tr>
                                <tr>
                                    <td>Маслова Пристань</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <td>Никольское</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>Новая Дерявня</td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>Ново Дубовской</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td>Новосадовый</td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>Новый Оскол</td>
                                    <td>2650</td>
                                </tr>
                                <tr>
                                    <td>Октябрьский</td>
                                    <td>700</td>
                                </tr>
                                <tr>
                                    <td>Пролетарский</td>
                                    <td>1700</td>
                                </tr>
                                <tr>
                                    <td>Прохоровка</td>
                                    <td>1600</td>
                                </tr>
                                <tr>
                                    <td>Пушкарное</td>
                                    <td>300</td>
                                </tr>

                                <tr>
                                    <td>Пятницкое</td>
                                    <td>2900</td>
                                </tr>

                                <tr>
                                    <td>Пуляевка</td>
                                    <td>600</td>
                                </tr>

                                <tr>
                                    <td>Погореловка Корочанский р-н</td>
                                    <td>1300</td>
                                </tr>

                                <tr>
                                    <td>Покровка Ивнянский р-н</td>
                                    <td>1000</td>
                                </tr>

                                <tr>
                                    <td>Пушкарное Белгородский р-н</td>
                                    <td>300</td>
                                </tr>

                                <tr>
                                    <td>Пушкарное Яковлевский р-н</td>
                                    <td>750</td>
                                </tr>

                                <tr>
                                    <td>Пушкарное Корочанский р-н</td>
                                    <td>1400</td>
                                </tr>

                                <tr>
                                    <td>Разумное</td>
                                    <td>350</td>
                                </tr>

                                <tr>
                                    <td>Ракитное</td>
                                    <td>1500</td>
                                </tr>

                                <tr>
                                    <td>Репное</td>
                                    <td>350</td>
                                </tr>

                                <tr>
                                    <td>Ровеньки</td>
                                    <td>5700</td>
                                </tr>

                                <tr>
                                    <td>Северный</td>
                                    <td>300</td>
                                </tr>

                                <tr>
                                    <td>Севрюково</td>
                                    <td>500</td>
                                </tr>

                                <tr>
                                    <td>Старый Оскол</td>
                                    <td>3360</td>
                                </tr>

                                <tr>
                                    <td>Строитель</td>
                                    <td>600</td>
                                </tr>

                                <tr>
                                    <td>Стригуны Борисовский р-н</td>
                                    <td>1000</td>
                                </tr>

                                <tr>
                                    <td>Стрелецкое Белгородский р-н</td>
                                    <td>350</td>
                                </tr>

                                <tr>
                                    <td>Стрелецкое Яковлевский р-н</td>
                                    <td>800</td>
                                </tr>

                                <tr>
                                    <td>Стрелецкое Красногвардейский р-н</td>
                                    <td>3600</td>
                                </tr>

                                <tr>
                                    <td>Скородное</td>
                                    <td>2050</td>
                                </tr>

                                <tr>
                                    <td>Сурково Шебекинский р-н</td>
                                    <td>1600</td>
                                </tr>

                                <tr>
                                    <td>Таврово</td>
                                    <td>3, 4,5,6,8,9,10 350</td>
                                </tr>

                                <tr>
                                    <td>Таврово,Таврово</td>
                                    <td>1, 2,7 300</td>
                                </tr>

                                <tr>
                                    <td>Терновка</td>
                                    <td>500</td>
                                </tr>

                                <tr>
                                    <td>Томаровка</td>
                                    <td>750</td>
                                </tr>

                                <tr>
                                    <td>Уразово Валуйский р-н</td>
                                    <td>4100</td>
                                </tr>

                                <tr>
                                    <td>Устинка Белгородский р-н</td>
                                    <td>1000</td>
                                </tr>

                                <tr>
                                    <td>Хохлово</td>
                                    <td>500</td>
                                </tr>

                                <tr>
                                    <td>Чернянка</td>
                                    <td>2650</td>
                                </tr>

                                <tr>
                                    <td>Чураево Шебекинский р-н</td>
                                    <td>950</td>
                                </tr>

                                <tr>
                                    <td>Шебекино</td>
                                    <td>900</td>
                                </tr>

                                <tr>
                                    <td>Шеино</td>
                                    <td>800</td>
                                </tr>

                                <tr>
                                    <td>Яковлево</td>
                                    <td>800</td>
                                </tr>

                            </table>
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