<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candy_tag".
 *
 * @property int $id
 * @property int $candy_id
 * @property int $tag_id
 */
class CandyTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candy_tag';
    }

    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['candy_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'candy_id' => 'Candy ID',
            'tag_id' => 'Tag ID',
        ];
    }
}
