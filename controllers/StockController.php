<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:38
 */

namespace app\controllers;

use yii\web\Controller;

// подключил модель Акции
use app\models\Stock;

// Страница "Акции"
class StockController extends Controller
{
    public function actionIndex(){

        $query = new Stock();

        $model = $query::find()->orderBy('id DESC')->all();

        return $this->render('index', ['model' => $model]);
    }
}