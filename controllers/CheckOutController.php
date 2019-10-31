<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 29.10.2019
 * Time: 9:20
 */

namespace app\controllers;


use yii\web\Controller;

class CheckOutController extends Controller
{

    public $layout = 'base';

    public  function actionIndex(){

        
        return $this->render('index');
    }
}