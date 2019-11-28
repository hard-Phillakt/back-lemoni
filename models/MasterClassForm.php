<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 12.11.2019
 * Time: 12:49
 */

namespace app\models;


use yii\base\Model;

class MasterClassForm extends Model {

    public $name;
    public $phone;
    public $comment;
    public $title_master;

    public function rules(){

        return [
            ['name', 'required', 'message' => 'Введите корректное имя'],
            ['phone', 'required', 'message' => 'Введите корректный телефон'],
//            ['phone', 'integer', 'message' => 'Должны быть только цифры'],
            ['comment', 'required', 'message' => 'Введите комментарий'],
            ['comment', 'safe'],
        ];

    }

    public function attributeLabels()
    {
        return [
            'name' => 'Введите имя',
            'phone' => 'Введите телефон',
            'comment' => 'Введите комментарий'
        ];
    }

}