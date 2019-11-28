<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 27.11.2019
 * Time: 17:10
 */

namespace app\models;

use \yii\base\Model;
use  yii\web\UploadedFile;

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
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'mp4,', 'maxFiles' => 1, 'uploadRequired' => 'Загрузите файл', 'wrongExtension' => 'Требуемый формат mp4', 'wrongMimeType' => 'файл имеет недопустимый MIME-тип'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {

            $this->file->saveAs('xenos/uploads/video/' . 'reviews' . '_id-' . date('U') . '.' . $this->file->extension);
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