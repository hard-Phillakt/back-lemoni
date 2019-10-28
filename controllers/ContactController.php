<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:47
 */

namespace app\controllers;


use yii\web\Controller;

// Страница "Контакты"
class ContactController extends Controller
{
    public $layout = 'base';

    public function actionIndex(){

        return $this->render('index');
    }
}