<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:49
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CakeGoods;
use app\models\CandieGoods;
use app\models\DeliveryContact;
use app\models\PickupDeliveryContact;


use dvizh\cart\widgets\CartInformer;


//Страница "Доставка"
class DeliveryController extends Controller
{

    public static function getOrder($modelDeliveryContact)
    {

        $elements = yii::$app->cart->elements;

        $dataForm = Yii::$app->request->post();

        if($dataForm['PickupDeliveryContact']){

            $dataUser = '';
            $dataUser .= "<style>

                            .box {
                                font-weight: 600;
                                border-bottom: 1px solid #000;
                            }
                            
                            .mb-30 {
                                margin-bottom: 30px
                            }
                            
                            strong {
                               color:#8F5541;
                            }
                         </style>";
            $dataUser .= '<div class="box mb-30">';
            $dataUser .= '<p><strong><h3>Заказчик:</h3></strong><p>';
            $dataUser .= '<p><strong>Имя: </strong>' . $dataForm['PickupDeliveryContact']['name'];
            $dataUser .= '<p><strong>Телефон: </strong>' . $dataForm['PickupDeliveryContact']['phone'];
            $dataUser .= '<p><strong>Город: </strong>' . $dataForm['PickupDeliveryContact']['city'];
            $dataUser .= '<p><strong>Комментарий: </strong>' . $dataForm['PickupDeliveryContact']['comment'];
            $dataUser .= '<p><strong>Дата приготовления: </strong>' . $dataForm['check_issue_date'];
            $dataUser .= '<p><strong>Способ получения: </strong>' . $dataForm['PickupDeliveryContact']['delivery'];
            $dataUser .= '</div>';

        }else {

            $dataUser = '';
            $dataUser .= "<style>

                            .box {
                                font-weight: 600;
                                border-bottom: 1px solid #000;
                            }
                            
                            .mb-30 {
                                margin-bottom: 30px
                            }
                            
                            strong {
                               color:#8F5541;
                            }
                         </style>";
            $dataUser .= '<div class="box mb-30">';
            $dataUser .= '<p><strong><h3>Заказчик:</h3></strong><p>';
            $dataUser .= '<p><strong>Имя: </strong>' . $dataForm['DeliveryContact']['name'];
            $dataUser .= '<p><strong>Телефон: </strong>' . $dataForm['DeliveryContact']['phone'];
            $dataUser .= '<p><strong>Город: </strong>' . $dataForm['DeliveryContact']['city'];
            $dataUser .= '<p><strong>Улица: </strong>' . $dataForm['DeliveryContact']['street'];
            $dataUser .= '<p><strong>Дом: </strong>' . $dataForm['DeliveryContact']['house'];
            $dataUser .= '<p><strong>Квартира: </strong>' . $dataForm['DeliveryContact']['room'];
            $dataUser .= '<p><strong>Комментарий: </strong>' . $dataForm['DeliveryContact']['comment'];
            $dataUser .= '<p><strong>Дата приготовления: </strong>' . $dataForm['check_issue_date'];
            $dataUser .= '<p><strong>Способ получения: </strong>' . $dataForm['DeliveryContact']['delivery'];
            $dataUser .= '</div>';

        }

        $data = '';
        $totalSumm = '';

        $i = 1;

        foreach ($elements as $key => $value) {

            if ($value->model == 'app\models\CakeGoods') {

                $modelGoods = new CakeGoods();

//          Вытаскиваю доп данные для отправки по id из корзины
                $query = $modelGoods::findOne($value->item_id);

                $json_decode = json_decode($value['options']);

                $data .= "<style>

                        .table {
                            font-weight: 600;
                            width: 100%;
                        }

                        .table td {
                            margin-right: 15px;
                            display: inline-block;
                            padding: 5px 15px;
                        }

                        .table td strong {
                            color:#8F5541;
                         }

                        .table td span {
                            margin-top: 10px;
                            display: block;
                         }

                     </style>";
                $data .= '<div style="margin-bottom: 30px; font-weight: 600;">';
                $data .= '<p><strong><h3>Товар:</h3></strong><p>';
                $data .= '<table class="table">';
                $data .= '<tr>';
                $data .= '<td style=""><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
                $data .= '<td><strong>Название товара: </strong><br>' . '<span>' . $query->lm_title;
                $data .= '<td><strong>Количество: </strong><br>' . '<span>' . $value['count'] . ' шт';
                $data .= '<td><strong>Сумма: </strong><br>' . '<span>' . $value['price'] . ' руб';
                $data .= '<td><strong>Вес в кг: </strong><br>' . '<span>' . $json_decode->optGuests_kg . ' кг';
                $data .= '<td><strong>Тип: </strong><br>' . '<span>' . $query->lm_type;
                $data .= '<td><strong>Сумма * количество: </strong><br>' . '<span>' . $value['price'] * $value['count'] . ' руб';
                $data .= '</tr>';
                $data .= '</table>';


                $data .= '<table class="table" style="font-weight: 600; margin-top: 30px; width: 100%;">';
                $data .= '<tr>';
                if ($value['options']) {

                    foreach ($json_decode as $key => $value) {

                        $explode_str = explode('-', $value);

                        if (!(int)$explode_str[0]) {
                            $data .= '<td style="padding: 5px;"><strong style="color:#8F5541;">Опция-' . $i . ': </strong><br>' . '<span>' . $explode_str[2] . ' - ' . $explode_str[1] . ' руб';
                            $i++;
                        }

                    }
                }
                $data .= '</tr>';
                $data .= '</table>';
                $data .= '</div>';
                $data .= '<hr>';

            } else {

                $modelGoods = new CandieGoods();

//          Вытаскиваю доп данные для отправки по id из корзины
                $query = $modelGoods::findOne($value->item_id);

                $json_decode = json_decode($value['options']);

                $data .= '<style>

                        .table {
                            font-weight: 600;
                            width: 100%;
                        }

                        .table td {
                            margin-right: 15px;
                            display: inline-block;
                            padding: 5px 15px;
                        }

                        .table td strong {
                            color:#8F5541;
                         }

                        .table td span {
                            margin-top: 10px;
                            display: block;
                         }

                     </style>';
                $data .= '<div style="margin-bottom: 30px; font-weight: 600;">';
                $data .= '<p><strong><h3>Товар:</h3></strong><p>';
                $data .= '<table class="table">';
                $data .= '<tr>';
                $data .= '<td style=""><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
                $data .= '<td><strong>Название товара: </strong><br>' . '<span>' . $query->lm_title;
                $data .= '<td><strong>Количество: </strong><br>' . '<span>' . $value['count'] . ' шт';
                $data .= '<td><strong>Сумма: </strong><br>' . '<span>' . $value['price'] . ' руб';
                $data .= $json_decode->optGuests_kg ? '<td><strong>Вес в кг: </strong><br>' . '<span>' . $json_decode->optGuests_kg . ' кг' : false;
                $data .= '<td><strong>Тип: </strong><br>' . '<span>' . $query->lm_type;
                $data .= '<td><strong>Сумма * количество: </strong><br>' . '<span>' . $value['price'] * $value['count'] . ' руб';
                $data .= '</tr>';
                $data .= '</table>';
                $data .= '<table class="table" style="font-weight: 600; margin-top: 30px; width: 100%;">';
                $data .= '<tr>';
                if ($value['options']) {

                    foreach ($json_decode as $key => $value) {

                        $explode_str = explode('-', $value);

                        if (!(int)$explode_str[0]) {
                            $data .= '<td style="padding: 5px;"><strong style="color:#8F5541;">Опция-' . $i . ': </strong><br>' . '<span>' . $explode_str[2] . ' - ' . $explode_str[1] . ' руб';
                            $i++;
                        }

                    }
                }
                $data .= '</tr>';
                $data .= '</table>';
                $data .= '</div>';
                $data .= '<hr>';
            }


        }

        $price = CartInformer::widget(['htmlTag' => 'span', 'text' => '{p}']);

        $data .= "<div><h3><strong>Итоговая сумма:</strong></h3>  <h3>{$price} <strong>руб</strong></h3></div>";


        if (!empty($data) && $modelDeliveryContact->load(Yii::$app->request->post()) && Yii::$app->request->isAjax && !empty($dataUser)) {

            Yii::$app->mailer->compose()
                ->setFrom('info@cafelemoni.ru')
                ->setTo([
                    'hard-phillakt@mail.ru' => 'Заказ с сайта : cafelemoni.ru',
                    'sale@cafelemoni.ru' => 'Заказ с сайта : cafelemoni.ru',
                    'info@webmedia31.ru' => 'Заказ с сайта : cafelemoni.ru',
                ])
                ->setSubject('Доставка с Cafelemoni')
                ->setTextBody('Доставка с Cafelemoni')
                ->setHtmlBody("<div>{$dataUser}<div><div>{$data}</div><div>{$totalSumm}</div>")
                ->send();
        }
    }



//  Метод для доставки
    public function actionIndex()
    {
        $model = new DeliveryContact();

        self::getOrder($model);

        return $this->render('index', ['modelDeliveryContact' => $model]);
    }


//  Метод для самовывоза
    public function actionPickup()
    {
        $model = new PickupDeliveryContact();

        self::getOrder($model);

        return $this->render('pickup', ['modelDeliveryContact' => $model]);
    }
}