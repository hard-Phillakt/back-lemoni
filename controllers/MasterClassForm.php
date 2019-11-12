<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 12.11.2019
 * Time: 12:49
 */

namespace app\controllers;


use yii\base\Model;

class MasterClassForm extends Model {

    public $name;
    public $phone;
    public $comment;

    public function rules(){

        return [
            ['name', 'required', 'message' => 'Введите корректное имя'],
            ['phone', 'required', 'message' => 'Введите корректный телефон'],
            ['comment', 'required', 'message' => 'Введите корректное комментарий'],
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