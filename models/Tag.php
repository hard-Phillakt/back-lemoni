<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $title
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }


//  связь для выборки по тегам (заменил связь на getRichCake + фильтры по связям)
//    public function getCake()
//    {
//        return $this->hasMany(CakeGoods::class, ['id' => 'cake_id'])
//            ->viaTable('cake_tag', ['tag_id' => 'id']);
//    }

    public function getRichCake($price = null)
    {
        return $this->hasMany(CakeGoods::class, ['id' => 'cake_id'])
//          ->where('lm_price_for_kg = :price', [':price' => $price])
//          сюда нужно дописать дополнительные фильтры ("Тип продукта", "Колличество уровней", "Тематическое оформление")
            ->andFilterWhere(['like', 'lm_price_for_kg', ':price', [':price' => $price]])
            ->viaTable('cake_tag', ['tag_id' => 'id']);
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
