<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:17
 */

namespace app\controllers;

use yii\web\Controller;


// Создал контроллер тортов
class CatCakeController extends Controller
{
    public function actionIndex(){

        return $this->render('index');
    }
}