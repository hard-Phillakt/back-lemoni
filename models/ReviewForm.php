<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 27.11.2019
 * Time: 17:10
 */

namespace app\models;

use \yii\base\Model;


class  ReviewForm extends Model {

    public $name;
    public $phone;
    public $comment;
    public $file;


    public function rules(){

        return [
            ['name', 'required', 'message' => 'Введите имя'],
            ['phone', 'required', 'message' => 'Введите телефон'],
            ['comment', 'required', 'message' => 'Введите комментарий'],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => '',
            'phone' => '',
            'comment' => '',
        ];
    }

}