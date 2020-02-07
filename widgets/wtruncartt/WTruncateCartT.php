<?php

namespace app\widgets\wtruncartt;

use Yii;
use app\components\TruncateCartT;

class WTruncateCartT extends \yii\base\Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $cart = new TruncateCartT();

        $request = Yii::$app->request->get('truncate');

        if (!Yii::$app->user->isGuest && $request) {
            $cart->on($cart::_TRUNCATE_CART, $cart::truncateCartT($request));
        }

        return $this->render('index');
    }

}