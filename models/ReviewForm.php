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
    public $fileId;
    public $file;


    public function rules(){

        return [
            ['name', 'required', 'message' => 'Введите имя'],
            ['phone', 'required', 'message' => 'Введите телефон'],
            ['comment', 'required', 'message' => 'Введите комментарий'],
            [['file'],
                'file',
                'maxSize' => 1 . 'e+7', // 10 MB в Byte
                'skipOnEmpty' => true,
                'extensions' => 'jpg, png',
                'maxFiles' => 1,
                'uploadRequired' => 'Загрузите файл',
                'wrongExtension' => 'Неверный формат! Допустимый - jpg, png',
                'wrongMimeType' => 'Файл имеет недопустимый MIME-тип',
                'tooBig' => 'Превышен размер файла! Не более 10 MB'
            ],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {

            $this->file->saveAs('files/xenos/uploads/image/' . 'image__' . date('U') . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        } 
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