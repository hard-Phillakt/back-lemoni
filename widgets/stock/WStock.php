<?php

namespace app\widgets\stock;

use yii\base\Widget;
use app\models\Stock;

class WStock extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $query = new Stock();

        $model = $query::find()->where(['publication' => 1])->orderBy('id DESC')->limit(3)->all();

       return $this->render('index', ['model' => $model]);
    }
}