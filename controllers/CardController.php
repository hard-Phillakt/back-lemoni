<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 28.10.2019
 * Time: 17:29
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CakeGoods;
use app\models\CandieGoods;
use yii\web\NotFoundHttpException;
use app\components\SendEmailClass;



// Карточка товара под вопросом (как лучше сделать 4 карточки)
class CardController extends Controller {

    public $layout = 'base';


   public static function error($model){

        if ($model == null) {

//          Выводим ошибку 404
            throw new NotFoundHttpException();
        }
    }

//    букет
    public function actionBouquet($id = null){

        $sendEmail = new SendEmailClass();

        $candie_goods = new CandieGoods();

        $model = $candie_goods::findOne($id);

        self::error($model);

        $sendEmail->on($sendEmail::PARAM_FORM, $sendEmail::sendMail());
        
        return $this->render('bouquet', ['model' => $model]);
    }


//    шадлав
    public function actionShadlaw($id = null){

        $sendEmail = new SendEmailClass();

        $cake_goods = new CakeGoods();

        $model = $cake_goods::findOne($id);

        $sendEmail->on($sendEmail::PARAM_FORM, $sendEmail::sendMail());

        self::error($model);

        return $this->render('shadlaw', ['model' => $model]);
    }


//    конфеты
    public function actionCandie($id = null){

        $sendEmail = new SendEmailClass();

        $candie_goods = new CandieGoods();

        $model = $candie_goods::findOne($id);

        $sendEmail->on($sendEmail::PARAM_FORM, $sendEmail::sendMail());

        self::error($model);

        return $this->render('candie', ['model' => $model]);
    }


//    торты
    public function actionCake($id = null){

        $sendEmail = new SendEmailClass();

        $cake_goods = new CakeGoods();

        $model = $cake_goods::findOne($id);

        $sendEmail->on($sendEmail::PARAM_FORM, $sendEmail::sendMail());

        self::error($model);

        return $this->render('cake', ['model' => $model]);
    }

}

















































