<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use yii\data\ActiveDataProvider;
use yii\data\Pagination;

// Models
use app\models\CakeGoods;
use app\models\CandieGoods;


class SearchController extends Controller
{

    public static function filterGoods($model, $q)
    {

        $query = $model::find()
            ->orFilterWhere(['like', 'lm_title', $q])
            ->orFilterWhere(['like', 'lm_content', $q])
            ->all();

        return $query;
    }

    public function actionAjax()
    {
        $this->layout = false;

        if (Yii::$app->request->isAjax) {
            $q = Yii::$app->request->get('q');
            $count = Yii::$app->request->get('count');

            $cake = new CakeGoods();
            $candy = new CandieGoods();

            $queryCake = self::filterGoods($cake, $q);
            $queryCandy = self::filterGoods($candy, $q);

            $model = array_merge($queryCake, $queryCandy);

            $balance = count($model) - $count;

            $products = array_slice($model, 0, $count);

            $balance = $balance > 0 ? $balance : false;

            return $this->render('ajax', ['model' => $products, 'request' => $q, 'balance' => $balance]);
        }
    }


    public function actionIndex()
    {
        $this->layout = 'base';

        $q = Yii::$app->request->get('q');

        $cake = new CakeGoods();
        $candy = new CandieGoods();

        $queryCake = self::filterGoods($cake, $q);
        $queryCandy = self::filterGoods($candy, $q);

        $model = array_merge($queryCake, $queryCandy);

        $balance = count($model) - 9;

        $balance = $balance > 1 ? $balance : false;

        $products = array_slice($model, 0, 9);
        
        return $this->render('index', ['model' => $products, 'request' => $q, 'balance' => $balance]);
    }

}