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
use app\models\CandieGoods;

//  Подключил модель "фильтров тортов"
use app\models\FilterCake;

use app\models\Tag;

//  Создал контроллер тортов
class CandieGoodsController extends Controller
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

//  Выборка по get параметрам - объявляю в actionIndex (switch)
    public function getCandyType($arg)
    {
        $filter = new FilterCake();

        $query_cake_goods = new CandieGoods();

        $goods = $query_cake_goods::find()->where(['lm_type' => $arg])->asArray()->orderBy('id DESC')->all();

        if (empty($goods)) {

            return $this->render('index', ['model' => $goods, 'filter' => $filter, 'empty_goods' => self::noProducts()]);
        }

        $tag = new Tag();

        $queryTag = $tag::find()->where(['subjects' => 'candy'])->asArray()->all();

        return $this->render('index', ['model' => $goods, 'filter' => $filter, 'tag' => $queryTag]);
    }

    public function actionIndex($param = null)
    {
        $this->layout = 'base';

        $query_cake_goods = new CandieGoods();

        $model = $query_cake_goods::find()->asArray()->orderBy('id DESC')->all();

        $filter = new FilterCake();


        if ($data_filter = Yii::$app->request->post('FilterCake')) {

//          $cake = $query_cake_goods::find()->with(['tag']);

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

            $data_cake = $cake->asArray()->orderBy('id DESC')->all();

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


            if (empty($data_cake)) {
                return self::noProducts();
            }

//          делаю рендер по фильтрам без тегов
            return $this->render('index', ['data_cake' => $data_cake, 'model' => $model, 'filter' => $filter]);

        }

//      Выборка с главной по параметрам
        switch ($param) {
//          мусовые пирожные
            case 'cake-muss':
                return $this->getCandyType('Мусовые пирожные');
                break;

//          классические пирожные
            case 'classic':
                return $this->getCandyType('Классические пирожные');
                break;

//          Все
            case 'dessert':
                return $this->getCandyType('');
                break;

//          Пряники
            case 'cookie':
                return $this->getCandyType('Пряники');
                break;

//          Конфеты
            case 'candy':
                return $this->getCandyType('Конфеты');
                break;
            
//          Конфеты
            case 'kulichi':
                return $this->getCandyType('Куличи');
                break;

//          Постная продукция
            case 'lean-products':
                return $this->getCandyType('Постная продукция');
                break;

//          Классические пирожные, Мусовые пирожные
            case 'muss-classic':
                return $this->getCandyType(['Классические пирожные', 'Мусовые пирожные']);
                break;

//          Фруктовый букет
            case 'fruit-bouquets':
                return $this->getCandyType('Фруктовый букет');
                break;

//          Зефир
            case 'marshmallows':
                return $this->getCandyType('Зефир');
                break;

//          Трайфлы
            case 'trifles':
                return $this->getCandyType('Трайфлы');
                break;
        }

        $tag = new Tag();

        $queryTag = $tag::find()->where(['subjects' => 'candy'])->asArray()->all();

//      делаю рендер без фильтров и тегов
        return $this->render('index', ['model' => $model, 'filter' => $filter, 'tag' => $queryTag]);
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
//                  $cake->orFilterWhere(['like', 'lm_type', $value]);

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

            if (empty($data_cake)) {
                return self::noProducts();
            }

//          делаю рендер по фильтрам без тегов на ajax
            return $this->render('ajax-goods', ['data_cake' => $data_cake]);
        }


//      Compilation
        if (Yii::$app->request->isAjax && $data_filter_id = Yii::$app->request->post('compilation')) {

            $candy = new Tag();

            $data_compilation = $candy::find()->with('candy')->where(['id' => $data_filter_id])->asArray()->orderBy('id DESC')->all();


            if (empty($data_compilation[0]['candy'])) {
                return self::noProducts();
            }

//          фильтр по готовым подборкам
            return $this->render('ajax-goods', ['data_compilation' => $data_compilation]);
        }


    }
}