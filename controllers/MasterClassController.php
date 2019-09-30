<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:41
 */

namespace app\controllers;

use yii\web\Controller;

// подключил модель мастер классов
use app\models\MasterClass;

// Страница "Мастер классов"
class MasterClassController extends Controller
{
    public function actionIndex(){


        $query = new MasterClass();

        $model = $query::find()->all();
        

        return $this->render('index', ['model' => $model]);
    }
}