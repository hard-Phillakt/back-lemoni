<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 28.10.2019
 * Time: 16:21
 */

namespace app\controllers;


use yii\web\Controller;

// страница доставки "описание"
class DelivCakeController extends Controller
{

    public $layout = 'base';

    public function actionIndex(){
        
        return $this->render('index');
    }
}