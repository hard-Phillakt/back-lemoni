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


//Страница "Доставка"
class DeliveryController extends Controller
{
    public function actionIndex()
    {

        $elements = yii::$app->cart->elements;


        $modelDeliveryContact = new DeliveryContact();

        $dataForm = Yii::$app->request->post();
        $dataUser = '';
        $dataUser .= '<div style="margin-bottom: 30px; font-weight: 600;">';
        $dataUser .= '<p><strong><h3>Заказчик:</h3></strong><p>';
        $dataUser .= '<p><strong style="color:#8F5541;">Имя: </strong>' . $dataForm['DeliveryContact']['name'];
        $dataUser .= '<p><strong style="color:#8F5541;">Телефон: </strong>' . $dataForm['DeliveryContact']['phone'];
        $dataUser .= '<p><strong style="color:#8F5541;">Город: </strong>' . $dataForm['DeliveryContact']['city'];
        $dataUser .= '<p><strong style="color:#8F5541;">Улица: </strong>' . $dataForm['DeliveryContact']['street'];
        $dataUser .= '<p><strong style="color:#8F5541;">Дом: </strong>' . $dataForm['DeliveryContact']['house'];
        $dataUser .= '<p><strong style="color:#8F5541;">Квартира: </strong>' . $dataForm['DeliveryContact']['room'];
        $dataUser .= '<p><strong style="color:#8F5541;">Комментарий: </strong>' . $dataForm['DeliveryContact']['comment'];
        $dataUser .= '<p><strong style="color:#8F5541;">Дата приготовления: </strong>' . $dataForm['check_issue_date'];
        $dataUser .= '<p><strong style="color:#8F5541;">Способ получения: </strong>' . $dataForm['DeliveryContact']['delivery'];
        $dataUser .= '</div>';
        $dataUser .= '<hr>';

        $data = '';

        $i = 1;

        foreach ($elements as $key => $value) {

            if ($value->model == 'app\models\CakeGoods') {
                $modelGoods = new CakeGoods();


//          debug($value->item_id);

//          Вытаскиваю доп данные для отправки по id из корзины
                $query = $modelGoods::findOne($value->item_id);

//            debug($query);

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
//          $data .= '<td><strong><h3>Товар</h3></strong><br><p>';
                $data .= '<td style=""><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
                $data .= '<td><strong>Название товара: </strong><br>' . '<span>' . $query->lm_title;
                $data .= '<td><strong>Количество: </strong><br>' . '<span>' . $value['count'] . ' шт';
                $data .= '<td><strong>Сумма: </strong><br>' . '<span>' . $value['price'] . ' руб';
                $data .= '<td><strong>Вес в кг: </strong><br>' . '<span>' . $json_decode->optGuests_kg . ' кг';
                $data .= '<td><strong>Тип: </strong><br>' . '<span>' . $query->lm_type;
//          $data .= '<td><strong style="color:#8F5541;">Описание товара: </strong><br>' . $query->lm_description . ' <td>';
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

//          debug($value->item_id);

//          Вытаскиваю доп данные для отправки по id из корзины
                $query = $modelGoods::findOne($value->item_id);

//            debug($query);

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
//          $data .= '<td><strong><h3>Товар</h3></strong><br><p>';
                $data .= '<td style=""><strong>Id товара: </strong><br>' . '<span>' . $value['item_id'];
                $data .= '<td><strong>Название товара: </strong><br>' . '<span>' . $query->lm_title;
                $data .= '<td><strong>Количество: </strong><br>' . '<span>' . $value['count'] . ' шт';
                $data .= '<td><strong>Сумма: </strong><br>' . '<span>' . $value['price'] . ' руб';
                $data .= '<td><strong>Вес в кг: </strong><br>' . '<span>' . $json_decode->optGuests_kg . ' кг';
                $data .= '<td><strong>Тип: </strong><br>' . '<span>' . $query->lm_type;
//          $data .= '<td><strong style="color:#8F5541;">Описание товара: </strong><br>' . $query->lm_description . ' <td>';
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


        if (!empty($data) && $modelDeliveryContact->load(Yii::$app->request->post()) && Yii::$app->request->isAjax && !empty($dataUser)) {


//            Yii::$app->session->setFlash('success', "Спасибо, сообщение успешно отправленно!");

//            echo '<div>' . $dataUser . '<div><div>' . $data . '</div>';

            Yii::$app->mailer->compose()
                ->setFrom('info@cafelemoni.ru')
                ->setTo('info@cafelemoni.ru')
                ->setSubject('Доставка с Cafelemoni')
                ->setTextBody('Доставка с Cafelemoni')
                ->setHtmlBody('<div>' . $dataUser . '<div><div>' . $data . '</div>')
                ->send();

//            echo 'успешно отправленно!';

//                return 'ok';

//            $this->redirect('/delivery');

        }


        return $this->render('index', ['modelDeliveryContact' => $modelDeliveryContact]);
    }
}