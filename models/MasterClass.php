<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_class".
 *
 * @property int $id
 * @property string $lm_essence
 * @property string $lm_title
 * @property string $lm_img
 * @property string $lm_description
 * @property string $lm_content
 * @property int $lm_price
 * @property string $lm_date
 * @property string $lm_publicate
 * @property string $lm_prioritet
 */
class MasterClass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_class';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lm_essence', 'lm_title', 'lm_img', 'lm_description', 'lm_content', 'lm_price', 'lm_date', 'lm_publicate', 'lm_prioritet'], 'required'],
            [['lm_title', 'lm_description', 'lm_content'], 'string'],
            [['lm_price'], 'integer'],
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
            'lm_title' => 'Lm Title',
            'lm_img' => 'Lm Img',
            'lm_description' => 'Lm Description',
            'lm_content' => 'Lm Content',
            'lm_price' => 'Lm Price',
            'lm_date' => 'Lm Date',
            'lm_publicate' => 'Lm Publicate',
            'lm_prioritet' => 'Lm Prioritet',
        ];
    }
}
