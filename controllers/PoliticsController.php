<?php


namespace app\controllers;

use yii\web\Controller;

class PoliticsController extends Controller
{
    public $layout = 'base';

    public function actionIndex(){

        return $this->render('index');
    }
}