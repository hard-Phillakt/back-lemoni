<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 11.11.2019
 * Time: 15:22
 */

namespace app\models;


use yii\base\Model;

class DeliveryContact extends Model
{

    public $name;
    public $phone;
    public $city;
    public $street;
    public $house;
    public $room;
    public $dateCreate;
    public $comment;
    public $delivery;


    public function rules()
    {

        return [
            ['phone', 'required', 'message' => 'Введите телефон'],
            ['name', 'required', 'message' => 'Введите имя'],
            ['city', 'required', 'message' => 'Введите город'],
            ['street', 'required', 'message' => 'Введите улицу'],
            ['house', 'required', 'message' => 'Введите дом'],
            ['room', 'required', 'message' => 'Введите квартиру'],
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