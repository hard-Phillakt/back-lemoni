<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 29.10.2019
 * Time: 9:20
 */

namespace app\controllers;


use yii\web\Controller;

class CartController extends Controller
{

    public  function actionIndex(){

        

        return $this->render('index');
    }
}