<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 28.10.2019
 * Time: 17:29
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\CakeGoods;
use app\models\CandieGoods;

// Карточка товара под вопросом (как лучше сделать 4 карточки)
class CardController extends Controller
{

    public $layout = 'base';


//    букет
    public function actionBouquet($id = null){

        $candie_goods = new CandieGoods();

        $model = $candie_goods::findOne($id);


        return $this->render('bouquet', ['model' => $model]);
    }


//    шадлав
    public function actionShadlaw($id = null){

        $cake_goods = new CakeGoods();

        $model = $cake_goods::findOne($id);

        return $this->render('shadlaw', ['model' => $model]);
    }


//    конфеты
    public function actionCandie($id = null){

        $candie_goods = new CandieGoods();

        $model = $candie_goods::findOne($id);

        return $this->render('candie', ['model' => $model]);
    }


//    торты
    public function actionCake($id = null){

        $cake_goods = new CakeGoods();

        $model = $cake_goods::findOne($id);

        return $this->render('cake', ['model' => $model]);
    }
}

















































