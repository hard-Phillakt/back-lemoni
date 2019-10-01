<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_cake".
 *
 * @property int $id
 * @property string $lm_essence
 * @property string $lm_title
 * @property string $lm_description
 * @property string $lm_content
 * @property string $lm_weight
 * @property int $lm_price_for_kg
 * @property string $lm_type
 * @property string $lm_count_level
 * @property string $lm_subjects
 * @property string $lm_create_box
 * @property string $lm_publicate
 * @property string $lm_prioritet
 * @property string $lm_img_one
 * @property string $lm_img_two
 * @property string $lm_img_three
 */
class CakeGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cake_goods';
    }
 




//    Связь многие ко многим tag и промежуточная cake_tag (связующая)
    public function getTag()
    {
        return $this->hasMany(Tag::class, ['id' => 'tag_id'])
            ->viaTable('cake_tag', ['cake_id' => 'id']);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lm_essence', 'lm_title', 'lm_description', 'lm_content', 'lm_weight', 'lm_price_for_kg', 'lm_type', 'lm_count_level', 'lm_subjects', 'lm_create_box', 'lm_publicate', 'lm_prioritet', 'lm_img_one', 'lm_img_two', 'lm_img_three'], 'required'],
            [['lm_title', 'lm_description', 'lm_content', 'lm_img_one', 'lm_img_two', 'lm_img_three'], 'string'],
            [['lm_price_for_kg'], 'integer'],
            [['lm_essence', 'lm_weight', 'lm_type', 'lm_count_level', 'lm_subjects', 'lm_create_box', 'lm_publicate', 'lm_prioritet'], 'string', 'max' => 255],
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
            'lm_description' => 'Lm Description',
            'lm_content' => 'Lm Content',
            'lm_weight' => 'Lm Weight',
            'lm_price_for_kg' => 'Lm Price For Kg',
            'lm_type' => 'Lm Type',
            'lm_count_level' => 'Lm Count Level',
            'lm_subjects' => 'Lm Subjects',
            'lm_create_box' => 'Lm Create Box',
            'lm_publicate' => 'Lm Publicate',
            'lm_prioritet' => 'Lm Prioritet',
            'lm_img_one' => 'Lm Img One',
            'lm_img_two' => 'Lm Img Two',
            'lm_img_three' => 'Lm Img Three',
        ];
    }
}
