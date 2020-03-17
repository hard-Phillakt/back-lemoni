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
use app\models\SbOrder;


use dvizh\cart\widgets\CartInformer;


//  Страница "Доставка"
class DeliveryController extends Controller
{

    public static function getOrder($modelDeliveryContact)
    {

        $elements = yii::$app->cart->elements;

        $dataForm = Yii::$app->request->post();

        if ($dataForm['PickupDeliveryContact']) {
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
        } else {
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
//              Вытаскиваю доп данные для отправки по id из корзины
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
                $data .= '<td><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
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
//              Вытаскиваю доп данные для отправки по id из корзины
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
                $data .= '<td><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
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

//      Отправщик сформированных данных
        if (!empty($data) && $modelDeliveryContact->load(Yii::$app->request->post()) && Yii::$app->request->isAjax && !empty($dataUser)) {

            Yii::$app->mailer->compose()
                ->setFrom('info@cafelemoni.ru')
                ->setTo([
                    'hard-phillakt@mail.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
                    'sale@cafelemoni.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
                    'info@cafelemoni.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
                    'info@webmedia31.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
                ])
                ->setSubject('Сформирован заказ на оплату с сайта Cafelemoni.ru')
                ->setTextBody('Сформирован заказ на оплату с сайта Cafelemoni.ru')
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


//  SB оплата
    public function actionCart()
    {

        $SB_data = [];

        $elements = Yii::$app->cart->elements;

        foreach ($elements as $key) {

            switch ($key->model) {

                case 'app\models\CandieGoods':

                    $query = CandieGoods::findOne(['id' => $key->item_id]);

                    $SB_data[] = [
                        'title' => $query->lm_title,
                        'item_id' => $key->item_id,
                        'count' => $key->count,
                        'price' => $key->price,
                        'type' => 'Десерт'
                    ];

                    break;

                case 'app\models\CakeGoods':

                    $query = CakeGoods::findOne(['id' => $key->item_id]);

                    $SB_data[] = [
                        'title' => $query->lm_title,
                        'item_id' => $key->item_id,
                        'count' => $key->count,
                        'price' => $key->price,
                        'type' => 'Торт'
                    ];
                    break;

                default:
                    return true;
            }
        }

        return json_encode($SB_data);
    }

//  SB оплата
    public function actionSbOrder()
    {

        $post = Yii::$app->request->post('order');

        $data = json_decode($post);

//        paymentSystem: "VISA",
//        merchantShortName: "www.3dsec.sberbank.ru",
//        merchantLogin: "www.3dsec.sberbank.ru",
//        approvalCode: "123456",
//        orderNumber: "1567037",
//        backUrl: "https://3dsec.sberbank.ru/payment/docsite/finish_modal.html?orderId=5705b89c-5504-7431-8609-8cad00001bc1&lang=ru",
//        failUrl: "https://3dsec.sberbank.ru/payment/docsite/finish_modal.html?orderId=5705b89c-5504-7431-8609-8cad00001bc1&lang=ru",
//        terminalId: "20160630",
//        orderDescription: "Пирог с яблоками (2 шт.), Сконы (1 шт.), Новый торт на модуле admin -12 (1 шт.),",
//        merchantFullName: "www.3dsec.sberbank.ru",
//        transDate: "11.03.2020 11:07:04",
//        digest: "86A68720F1D5AF70567F5A83A5DC53F12E298633CB68F16901475E6B8D9161D1",
//        currency: "643",
//        expiry: "12/2024",
//        formattedAmount: "1420.00",
//        actionCodeDescription: "",
//        formattedFeeAmount: "0.00",
//        email: "phillakt@gmail.com",
//        amount: "142000",
//        merchantCode: "20160630",
//        ip: "37.208.65.172",
//        panMasked: "411111**1111",
//        successUrl: "https://3dsec.sberbank.ru/payment/docsite/finish_modal.html?orderId=5705b89c-5504-7431-8609-8cad00001bc1&lang=ru",
//        processingErrorType: {value: "NO_ERROR", messageCode: "payment.errors.no_error"},
//        panMasked4digits: "**** **** **** 1111",
//        errorTypeName: "SUCCESS",
//        feeAmount: "0",
//        orderParams: {},
//        orderExpired: false,
//        refNum: "328372200994",
//        finishPageLogin: "rbs_new",
//        cardholderName: "CARD HOLDER",
//        paymentDate: "11.03.2020 11:07:14",
//        merchantUrl: "http://www.3dsec.sberbank.ru",
//        status: "DEPOSITED"


        $model = new SbOrder();

        $model->orderNumber = $data->orderNumber;
        $model->orderDescription = $data->orderDescription;
        $model->transDate = $data->transDate;
        $model->formattedAmount = $data->formattedAmount;
        $model->email = $data->email;
        $model->ip = $data->ip;
        $model->panMasked = $data->panMasked;
        $model->paymentSystem = $data->paymentSystem;
        $model->save();

//      Отправщик оплаченных данных
        if ($post && Yii::$app->request->isAjax) {

            $dataUser = "<div>Оплаченный заказ № {$data->orderNumber} с сайта: Cafelemoni.ru</div>";
            $dataUser .= "<div>Список товаров: {$data->orderDescription}<div>";
            $dataUser .= "<div>Дата оплаты: {$data->transDate}<div>";
            $dataUser .= "<div>Сумма покупки: {$data->formattedAmount}<div>";
            $dataUser .= "<div>Почта покупателя: {$data->email}<div>";
            $dataUser .= "<div>Ip адрес покупателя: {$data->ip}<div>";
            $dataUser .= "<div>Банковская карточка покупателя: {$data->panMasked}<div>";
            $dataUser .= "<div>Система оплаты: {$data->paymentSystem}<div>";

            Yii::$app->mailer->compose()
                ->setFrom('info@cafelemoni.ru')
                ->setTo([
                    "hard-phillakt@mail.ru" => "Оплаченный заказ № {$data->orderNumber} с сайта: Cafelemoni.ru",
//                    'sale@cafelemoni.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
//                    'info@cafelemoni.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
//                    'info@webmedia31.ru' => 'Сформирован заказ на оплату: cafelemoni.ru',
                ])
                ->setSubject("Оплаченный заказ № {$data->orderNumber} с сайта: Cafelemoni.ru")
                ->setTextBody("Оплаченный заказ № {$data->orderNumber} с сайта: Cafelemoni.ru")
                ->setHtmlBody("<div>{$dataUser}</div>")
                ->send();
        }

        return 'success';
    }


}