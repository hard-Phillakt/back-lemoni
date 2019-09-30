<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 30.09.2019
 * Time: 16:09
 */

namespace app\models;


use yii\base\Model;

class FilterCake extends Model
{

    public $price_for_kg;

    public $type = [
        'Классический' => 'Классический',
        'Мусовый' => 'Мусовый',
        'Шадлав' => 'Шадлав',
        'Диетические' => 'Диетические',
        'Постные' => 'Постные'
    ];

    public $count_level = [
        1 => 'один уровень',
        2 => 'два уровня',
        3 => 'три уровня',
        4 => 'четыре уровня',
        5 => 'пять уровней',
    ];

    public $subjects = [
        'Свадебный торт' => 'Свадебный торт',
        'День рождения' => 'День рождения',
        'Юбилей' => 'Юбилей'
    ];

    public $create_box = [
//        '23 февраля' => '23 февраля',
//        'День влюбленных' => 'День влюбленных',
//        'День рождения' => 'День рождения',
//        'Новый год' => 'Новый год',
//        'Свадьба' => 'Свадьба',
//        'Пасха' => 'Пасха',
//        '1 сентября' => '1 сентября',
//        'День учителя' => 'День учителя',
//        'День матери' => 'День матери',
//        'Диетические' => 'Диетические',
//        '8 марта' => '8 марта'
//
        0 => '23 февраля',
    ];

    public function rules()
    {

        return [
            [['price_for_kg', 'type', 'count_level', 'subjects', 'create_box',], 'safe']
        ];

    }

    public function attributeLabels()
    {
        return [
            'price_for_kg' => 'price_for_kg',
            'type' => 'type',
            'count_level' => 'count_level',
            'subjects' => 'subjects',
            'create_box' => 'create_box',
        ];
    }

}
























