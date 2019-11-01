<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 04.10.2019
 * Time: 10:25
 */

namespace app\controllers;


use yii\web\Controller;
use dvizh\cart\models\CartElement;

// контроллер для удаления опци из страницы checkout
class DelOptionController extends Controller
{


    public function actionIndex()
    {

        $query = new CartElement();

        if (\Yii::$app->request->isAjax) {

            $post_id = \Yii::$app->request->post('id');

            $post_option = \Yii::$app->request->post('option');

            $cartElement = $query::findOne($post_id);

            if (!empty($cartElement)) {

                $json = json_decode($cartElement->options, true);

                foreach ($json as $key => $value) {

                    if ($key != $post_option) {
                        $freash_json[$key] = $value;
                    }

                }

                $freash_json = json_encode($freash_json);

                if (!empty($freash_json)) {

                    $cartElement->options = $freash_json;

                    if ($cartElement->save()) {

                        $price = explode('-', $post_option);

                        $cartElement->price = $cartElement->price - $price[1];

                        if ($cartElement->save()) {

                            return 'ok';
                        }

                    }
                }

            }

        }

    }

}

//    {"3":" test-1","title-2":" category 3","alias-1":" cat-2"}

