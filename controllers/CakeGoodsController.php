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

use app\models\Tag;

//  Создал контроллер тортов
class CakeGoodsController extends Controller
{
    public function actionIndex()
    {

        $query = new CakeGoods();
        $tag = new Tag();

        $model = $query::find()->with(['tag'])->asArray()->all();

        $filter = new FilterCake();

        if ($data_filter = Yii::$app->request->post('FilterCake')) {

//          debug($data_filter);die;

            $cake = $query::find();
            
//          1.фильтр по "Цена за килограм"
            $cake->andFilterWhere(['like', 'lm_price_for_kg', $data_filter['price_for_kg']]);

            if($data_filter['type']){
                foreach ($data_filter['type'] as $key => $value){

//                  2.фильтр по "Тип продукта"
                    $cake->andFilterWhere(['like', 'lm_type', $value]);

                }
            }

//          3.фильтр по "Колличество уровней"
            $cake->andFilterWhere(['like', 'lm_count_level', $data_filter['lm_count_level']]);

//          4.фильтр по "Тематическое оформление"
            $cake->andFilterWhere(['like', 'lm_subjects', $data_filter['lm_subjects']]);

//            if($data_filter['create_box']){
//
//                $data_tag = $tag::find()->asArray()->with('cake')->all();
//
////                debug($data_tag);
//
//                foreach ($data_filter['create_box'] as $key => $value){
//
////                    echo $value;
//
////                  5.фильтр по "Готовые подборки"
//                    $cake->andFilterWhere(['like', 'create_box', $value]);
//
//                }
//
//            }

            $data_cake = $cake->asArray()->all();


            return $this->render('index', ['data_cake' => $data_cake, 'model' => $model, 'filter' => $filter]);

        }


        return $this->render('index', ['model' => $model, 'filter' => $filter]);
    }
}