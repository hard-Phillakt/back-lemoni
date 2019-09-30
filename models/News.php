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
            [['lm_title', 'lm_description', 'lm_content'], 'string'],
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
            'lm_essence' => 'Lm Essence',
            'lm_img' => 'Lm Img',
            'lm_title' => 'Lm Title',
            'lm_description' => 'Lm Description',
            'lm_content' => 'Lm Content',
            'lm_date' => 'Lm Date',
            'lm_publicate' => 'Lm Publicate',
            'lm_prioritet' => 'Lm Prioritet',
        ];
    }
}
