<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CandieGoods;
use app\models\CakeGoods;

class CheckOutController extends Controller
{

    public $layout = 'base';

    public function actionIndex()
    {
        return $this->render('index');
    }
}