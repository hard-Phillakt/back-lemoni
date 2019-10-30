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

// Карточка товара под вопросом (как лучше сделать 4 карточки)
class CardController extends Controller
{

    public $layout = 'base';


//    букет
    public function actionBouquet(){


        return $this->render('bouquet');
    }


//    шадлав
    public function actionShadlaw(){


        return $this->render('shadlaw');
    }


//    конфеты
    public function actionCandie(){


        return $this->render('candie');
    }


//    торты
    public function actionCake($id = null){


        $cake_goods = new CakeGoods();

        $model = $cake_goods::findOne($id);

        return $this->render('cake', ['model' => $model]);
    }
}

















































