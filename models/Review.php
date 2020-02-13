<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 13.02.2020
 * Time: 11:34
 */

namespace app\models;

use yii\db\ActiveRecord;

class Review extends ActiveRecord
{

    public static function tableName()
    {
        return 'review';
    }

    public function rules()
    {
        return [
            [['name', 'phone', 'comment','publicated'], 'required'],
            [['review_img',], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'comment' => 'Комментарий',
            'review_img' => 'Картинка',
            'publicated' => 'Статус публикации'
        ];
    }

}