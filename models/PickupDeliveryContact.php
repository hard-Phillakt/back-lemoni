<?php

namespace app\models;


use yii\base\Model;

class PickupDeliveryContact extends Model
{
    public $name;
    public $phone;
    public $city;
    public $dateCreate;
    public $comment;
    public $delivery;

    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Введите имя'],
            ['phone', 'required', 'message' => 'Введите телефон'],
            ['city', 'required', 'message' => 'Введите город'],
            ['dateCreate', 'required', 'message' => 'Введите дату приготовления'],
            [['dateCreate', 'required'], 'integer', 'message' => 'В поле должны быть только цифры'],
            ['comment', 'safe'],
            ['delivery', 'safe']
        ];

    }


    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'room' => 'Квартира',
            'dateCreate' => 'Желаемая дата приготовления',
            'comment' => 'Комментарий',
            'delivery' => 'Способ доставки',
        ];
    }
}