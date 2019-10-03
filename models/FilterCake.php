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

    public $tag = [
        1 => '23 февраля',
        2 => 'День влюбленных',
        3 => 'День рождения',
        4 => 'Новый год',
        5 => 'Свадьба',
        6 => 'Пасха',
        7 => '1 сентября',
        8 => 'День учителя',
        9 => 'День матери',
        10 => 'Диетические',
        11 => '8 марта'
    ];

    public function rules()
    {

        return [
            [['price_for_kg', 'type', 'count_level', 'subjects', 'tag',], 'safe']
        ];

    }

    public function attributeLabels()
    {
        return [
            'price_for_kg' => 'price_for_kg',
            'type' => 'type',
            'count_level' => 'count_level',
            'subjects' => 'subjects',
            'tag' => 'create_box',
        ];
    }

}
























