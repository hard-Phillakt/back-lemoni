<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:17
 */

namespace app\controllers;

use yii\web\Controller;

//  Подключил модель "категория тортов"
use app\models\CatCake;

//  Подключил модель "фильтров тортов"
use app\models\FilterCake;


// Создал контроллер тортов
class CatCakeController extends Controller
{
    public function actionIndex(){


        $query = new CatCake();

        $model = $query::find()->all();


        $filter = new FilterCake();


        return $this->render('index', ['model' => $model, 'filter' => $filter]);
    }
}