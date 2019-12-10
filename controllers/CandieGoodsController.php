<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 15:17
 */

namespace app\controllers;


use Yii;

use yii\helpers\ArrayHelper;

use yii\web\Controller;

//  Подключил модель "тортов"
//use app\models\CakeGoods;
use app\models\CandieGoods;

//  Подключил модель "фильтров тортов"
use app\models\FilterCake;

use app\models\Tag;




//  Создал контроллер тортов
class CandieGoodsController extends Controller
{

    public $layout = 'base';

    public function actionIndex()
    {

        $query_cake_goods = new CandieGoods();

        $model = $query_cake_goods::find()->asArray()->all();

        $filter = new FilterCake();

        if ($data_filter = Yii::$app->request->post('FilterCake')) {

//            $cake = $query_cake_goods::find()->with(['tag']);
            $cake = $query_cake_goods::find();

//          1.фильтр по "Цена за килограм"
//            $cake->andFilterWhere(['like', 'lm_price_for_kg', $data_filter['price_for_kg']]);

//            $cake->andFilterWhere(['>=', 'lm_price_for_kg', $data_filter['price_for_kg_min']]);
//
//            $cake->andFilterWhere(['<=', 'lm_price_for_kg', $data_filter['price_for_kg_max']]);


            if ($data_filter['type']) {
                foreach ($data_filter['type'] as $key => $value) {

//                  2.фильтр по "Тип продукта"
                    $cake->orFilterWhere(['like', 'lm_type', $value]);

                }
            }

//          3.фильтр по "Колличество уровней"
            $cake->andFilterWhere(['like', 'lm_count_level', $data_filter['lm_count_level']]);

//          4.фильтр по "Тематическое оформление"
            $cake->andFilterWhere(['like', 'lm_subjects', $data_filter['lm_subjects']]);

            $data_cake = $cake->asArray()->all();

//          5.фильт по "Тегам" пока делаю страницами в место фильтра
//            if ($data_filter['tag']) {
//
////              если в запросе есть id тега делаем выборку данных в классе Tag ( в классе объявдляются связи и условия выборки)
//                $chosenTag = Tag::find()->where(['id' => $data_filter['tag']])->one();
//
//
////              если в параметрах есть цена то
//                if($data_filter['price_for_kg']){
//
//                    $richCakes = $chosenTag->getRichCake($data_filter['price_for_kg'])->asArray()->all();
//                } else {
//
//                    $richCakes = $chosenTag->getRichCake($data_filter['price_for_kg'])->asArray()->all();
//
////                  $richCakes = $chosenTag->getCake()->asArray()->all();
//                }
//
//
////              делаю рендер по тегам и фильтрам
//                return $this->render('index', ['richCakes' => $richCakes, 'model' => $model, 'filter' => $filter]);
//            }


//          делаю рендер по фильтрам без тегов
            return $this->render('index', ['data_cake' => $data_cake, 'model' => $model, 'filter' => $filter]);

        }

//      делаю рендер без фильтров и тегов
        return $this->render('index', ['model' => $model, 'filter' => $filter]);
    }




    public function actionAjaxGoods()
    {
        $this->layout = false;

        $query_cake_goods = new CandieGoods();

        $filter = new FilterCake();

        if (Yii::$app->request->isAjax && $data_filter = Yii::$app->request->post('FilterCake')) {

            $cake = $query_cake_goods::find();

//          1.фильтр по "Цена за килограм"
            $cake->andFilterWhere(['>=', 'lm_price_for_kg', $data_filter['price_for_kg_min']]);

            $cake->andFilterWhere(['<=', 'lm_price_for_kg', $data_filter['price_for_kg_max']]);

            if ($data_filter['type']) {

                foreach ($data_filter['type'] as $key => $value) {

//                  2.фильтр по "Тип продукта"
                    $cake->orFilterWhere(['like', 'lm_type', $value]);

                }

            }

//          3.фильтр по "Колличество уровней"
            $cake->andFilterWhere(['like', 'lm_count_level', $data_filter['count_level']]);

//          4.фильтр по "Тематическое оформление"
            $cake->andFilterWhere(['like', 'lm_subjects', $data_filter['subjects']]);

            $data_cake = $cake->asArray()->all();

//          делаю рендер по фильтрам без тегов на ajax
            return $this->render('ajax-goods', ['data_cake' => $data_cake]);
        }



        //      Compilation
        if (Yii::$app->request->isAjax && $data_filter_id = Yii::$app->request->post('compilation')) {

            $candy = new Tag();

//            $data_compilation = $query_cake_goods::find()->where(['lm_create_box' => $data_filter_id])->all();

            $data_compilation = $candy::find()->with('candy')->where(['id' => $data_filter_id])->asArray()->all();


//          debug($data_compilation);die;


//          фильтр по готовым подборкам
            return $this->render('ajax-goods', ['data_compilation' => $data_compilation]);
        }
    }
}