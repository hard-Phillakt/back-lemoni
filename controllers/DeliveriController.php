<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:49
 */

namespace app\controllers;


use yii\web\Controller;

//Страница "Доставка"
class DeliveriController extends Controller
{
    public function actionIndex(){

        return $this->render('index');
    }
}