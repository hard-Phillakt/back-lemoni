<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $id
 * @property string $title
 * @property string $previmg
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $publication
 * @property string $priority
 * @property string $essence
 * @property string $type
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'content'], 'string'],
            [['title', 'previmg'], 'string', 'max' => 255],
            [['date', 'priority'], 'string', 'max' => 10],
            [['publication'], 'string', 'max' => 1],
            [['essence'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 50],

            ['title', 'required', 'message' => 'Введите заголовок'],
            ['previmg', 'required', 'message' => 'Введите картинку'],
            ['description', 'required', 'message' => 'Введите заголовок'],
            ['content', 'required', 'message' => 'Введите контент'],
            ['date', 'required', 'message' => 'Введите дату'],
            ['priority', 'required', 'message' => 'Введите приоритет'],
            ['publication', 'required', 'message' => 'Введите публикацтю'],
            ['essence', 'safe', 'message' => 'Введите сущность'],
            ['type', 'safe', 'message' => 'Введите тип'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'previmg' => 'Превью - картинка',
            'description' => 'Описание',
            'content' => 'Контент',
            'date' => 'Дата',
            'publication' => 'Публикация',
            'priority' => 'Приоритет',
            'essence' => 'Сущность',
            'type' => 'Тип',
        ];
    }
}
