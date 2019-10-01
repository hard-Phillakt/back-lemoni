<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:17
 */

namespace app\controllers;

use Yii;

use yii\web\Controller;

//  Подключил модель "тортов"
use app\models\CakeGoods;

//  Подключил модель "фильтров тортов"
use app\models\FilterCake;


//  Создал контроллер тортов
class CakeGoodsController extends Controller
{
    public function actionIndex(){


        $query = new CakeGoods();


        $model = $query::find()->with(['tag'])->asArray()->all();

        
        $filter = new FilterCake();

        if(Yii::$app->request->post()){

            $data_filter = Yii::$app->request->post('FilterCake');

            debug($data_filter);die;

        }
        

        
        
        

        return $this->render('index', ['model' => $model, 'filter' => $filter]);
    }
}