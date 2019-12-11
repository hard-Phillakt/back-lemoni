<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:38
 */

namespace app\controllers;


use yii\web\Controller;

// подключил модель новостей
use app\models\News;

// Страница "Новостей"
class NewsController extends Controller
{
    public function actionIndex(){

        $query = new News();

        $model = $query::find()->orderBy('id DESC')->all();

        return $this->render('index', ['model' => $model]);
    }
}