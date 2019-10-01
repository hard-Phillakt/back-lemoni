<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cake_tag".
 *
 * @property int $id
 * @property int $cake_id
 * @property int $tag_id
 */
class CakeTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cake_tag';
    }
    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cake_id', 'tag_id'], 'required'],
            [['cake_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cake_id' => 'Cake ID',
            'tag_id' => 'Tag ID',
        ];
    }
}
