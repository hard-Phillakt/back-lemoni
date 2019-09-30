<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:44
 */

namespace app\controllers;


use yii\web\Controller;

//Страница "Отзывов"
class ReviewController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}