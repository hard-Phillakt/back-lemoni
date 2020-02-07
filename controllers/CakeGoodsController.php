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
use app\models\CakeGoods;

//  Подключил модель "фильтров тортов"
use app\models\FilterCake;

use app\models\Tag;

//  Создал контроллер тортов
class CakeGoodsController extends Controller
{

    //  Выводим если нету товаров
    public static function noProducts()
    {

        return $errorMessage = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="desc desc__md opac__07">Товары для данной категории вскоре будут добавлены на сайт.</h3>
                                    <div class="mt-15">
                                        <p class="desc desc__md opac__07"> О наличии или заказе товаров вы можете уточнить по телефону: <a href="tel:+74722505154" class="link link__a">+7 (4722) 50-51-54</a></p>
                                    <div>
                                </div>';
    }

    public function getCakeCompilation()
    {

        $this->layout = 'base';

//      Compilation
        if ($data_filter_id = Yii::$app->request->get('compilation')) {

            $filter = new FilterCake();

            $tag = new Tag();

            $data_compilation = $tag::find()->with('cake')->where(['id' => $data_filter_id])->asArray()->orderBy('id DESC')->all();

//          Если нету сборки - выводим все товары
            if(!$data_compilation[0]['cake']){

                $query_cake_goods = new CakeGoods();

                $data = $query_cake_goods::find()->asArray()->orderBy('id DESC')->all();

                return $this->render('index', ['model' => $data, 'filter' => $filter]);
            }

            return $this->render('index', ['compilation' => $data_compilation, 'filter' => $filter]);
        }

    }

//  Выборка по get параметрам
    public function getCakeType($arg)
    {
        $filter = new FilterCake();

        $query_cake_goods = new CakeGoods();

        $goods = $query_cake_goods::find()->where(['lm_type' => $arg])->asArray()->orderBy('id DESC')->all();

        if (empty($goods)) {

            return $this->render('index', ['data_cake' => $goods, 'filter' => $filter, 'void' => self::noProducts()]);
        }

        return $this->render('index', ['model' => $goods, 'filter' => $filter]);
    }

    public function actionIndex($param = null, $compilation = null)
    {
        $this->layout = 'base';

        $query_cake_goods = new CakeGoods();

        $model = $query_cake_goods::find()->asArray()->orderBy('id DESC')->all();

        $filter = new FilterCake();

        if (!Yii::$app->request->isAjax && $data_filter = Yii::$app->request->post('FilterCake')) {

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


            $data_cake = $cake->asArray()->orderBy('id DESC')->all();


//          5.фильт по "Тегам" пока делаю страницами в место фильтра ПОКА ###НЕ ПАШЕТ###
//            if ($data_filter['tag']) {
//
////              если в запросе есть id тега делаем выборку данных в классе Tag ( в классе объявдляются связи и условия выборки)
//                $chosenTag = Tag::find()->where(['id' => $data_filter['tag']])->one();
//
//
////              если в параметрах есть цена то
//                if ($data_filter['price_for_kg']) {
//
//                    $richCakes = $chosenTag->getRichCake($data_filter['price_for_kg'])->asArray()->all();
//                } else {
//
//                    $richCakes = $chosenTag->getRichCake($data_filter['price_for_kg'])->asArray()->all();
//
////                    $richCakes = $chosenTag->getCake()->asArray()->all();
//                }
//
//
////              делаю рендер по тегам и фильтрам
//                return $this->render('index', ['richCakes' => $richCakes, 'model' => $model, 'filter' => $filter]);
//            }


//          делаю рендер по фильтрам без тегов
            return $this->render('index', ['data_cake' => $data_cake, 'model' => $model, 'filter' => $filter]);

        }


//        if ($data_filter_id = Yii::$app->request->get('compilation')) {
//
//            $model = $query_cake_goods::find()->where(['lm_create_box' => $data_filter_id])->all();
//
////          фильтр по готовым подборкам
//            return $this->render('index', ['model' => $model, 'filter' => $filter]);
//        }


//      Выборка с главной по параметрам
        switch ($param) {
            case 'muss':
                return $this->getCakeType('Мусcовый');
                break;
            case 'diet':
                return $this->getCakeType('Диетические');
                break;
            case 'classic':
                return $this->getCakeType('Классический');
                break;
            case 'shadlaw':
                return $this->getCakeType('Шадлав');
                break;
        }

//      Подборки с главной
        switch ($compilation) {
//          День рождения
            case '1':
               return $this->getCakeCompilation();
                break;
//          Свадьба
            case '5':
                return $this->getCakeCompilation();
                break;
//          Праздничные торты
            case '2':
                return $this->getCakeCompilation();
                break;
//          Особым питанием
            case '10':
                return $this->getCakeCompilation();
                break;
        }

//      делаю рендер без фильтров и тегов
        return $this->render('index', ['model' => $model, 'filter' => $filter]);
    }

    public function actionAjaxGoods()
    {
        $this->layout = false;

        $query_cake_goods = new CakeGoods();

        $filter = new FilterCake();

        if (Yii::$app->request->isAjax && $data_filter = Yii::$app->request->post('FilterCake')) {

            $cake = $query_cake_goods::find();

//          1.фильтр по "Цена за килограм"
            $cake->filterWhere(['>=', 'lm_price_for_kg', $data_filter['price_for_kg_min']]);

            $cake->andFilterWhere(['<=', 'lm_price_for_kg', $data_filter['price_for_kg_max']]);

            if ($data_filter['type']) {

                foreach ($data_filter['type'] as $key => $value) {

                    if ($key == 0) {

                        // 2.фильтр по "Тип продукта" до первого ключа массива
                        $cake->andFilterWhere(['like', 'lm_type', $value]);
                    } else {

                        // 2.фильтр по "Тип продукта" с массивом ключей
                        $cake->orFilterWhere(['like', 'lm_type', $value]);
                    }

                }

            }

//          3.фильтр по "Колличество уровней"
            $cake->andFilterWhere(['like', 'lm_count_level', $data_filter['count_level']]);

//          4.фильтр по "Тематическое оформление"
            $cake->andFilterWhere(['like', 'lm_subjects', $data_filter['subjects']]);

            $data_cake = $cake->asArray()->orderBy('id DESC')->all();

            if(empty($data_cake)){

               return self::noProducts();
            }

//          делаю рендер по фильтрам без тегов на ajax
            return $this->render('ajax-goods', ['data_cake' => $data_cake]);
        }

//      Compilation
        if (Yii::$app->request->isAjax && $data_filter_id = Yii::$app->request->post('compilation')) {

            $tag = new Tag();

            $data_compilation = $tag::find()->with('cake')->where(['id' => $data_filter_id])->asArray()->orderBy('id DESC')->all();

//          фильтр по готовым подборкам
            return $this->render('ajax-goods', ['data_compilation' => $data_compilation]);
        }

    }

}