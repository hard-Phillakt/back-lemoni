<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 08.11.2019
 * Time: 11:47
 */

namespace app\models;


use yii\base\Model;

class Login extends Model {


    public $name;
    public $password;

    public function rules(){

        return [
            ['name', 'required', 'message' => 'Неверное имя',],
            ['password', 'required', 'message' => 'Неверный пароль'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Введите имя',
            'password' => 'Введите пароль',
        ];
    }

}