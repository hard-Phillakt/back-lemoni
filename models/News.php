<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $lm_essence
 * @property string $lm_img
 * @property string $lm_title
 * @property string $lm_description
 * @property string $lm_content
 * @property string $lm_date
 * @property string $lm_publicate
 * @property string $lm_prioritet
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lm_essence', 'lm_img', 'lm_title', 'lm_description', 'lm_content', 'lm_date', 'lm_publicate', 'lm_prioritet'], 'required'],
            [['lm_essence', 'lm_title', 'lm_description', 'lm_content'], 'string'],
            [['lm_essence', 'lm_img', 'lm_date', 'lm_publicate', 'lm_prioritet'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lm_essence' => 'Сущность',
            'lm_title' => 'Заголовок',
            'lm_img' => 'Картинка',
            'lm_description' => 'Описание',
            'lm_content' => 'Контент',
            'lm_date' => 'Дата',
            'lm_publicate' => 'Публикация',
            'lm_prioritet' => 'Приоритет',
        ];
    }
}
