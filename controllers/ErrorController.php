<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 08.11.2019
 * Time: 16:00
 */

namespace app\controllers;


use yii\web\Controller;

class ErrorController extends Controller {


    public function actionIndex(){


        return $this->render('index');
    }

}