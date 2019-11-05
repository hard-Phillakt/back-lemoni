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
class CakeGoods extends \yii\db\ActiveRecord implements \dvizh\cart\interfaces\CartElement
{


    public function getCartId()
    {
        return $this->id;
    }

    public function getCartName()
    {
        return $this->lm_title;
    }

    public function getCartPrice()
    {
        return $this->lm_price_for_kg;
    }

    //Опции продукта для выбора при добавлении в корзину
    public function getCartOptions()
    {
        return [
            '0' => [
                'name' => 'Колличество гостей:',
                'variants' => ['-', '1', '+']
            ],
            '1' => [
                'name' => 'Выберите цвет глазури:',
                'variants' => [
                    '#C76445;-10.00-glaze_test' => '',
                    '#F5ECDF;-20.00-glaze_test' => '',
                    '#C75A5A;-30.00-glaze_test' => '',
                    '#8CA5E3;-40.00-glaze_test' => '',
                    '#8CE3A5;-50.00-glaze_test' => '',
                    '#E38CCB;-60.00-glaze_test' => '',
                ]
            ],
            '2' => [
                'name' => 'Выберите декор:',
                'variants' => [
                    'decore__1_check-10.00-decor_test' => '',
                    'decore__1_check-20.00-decor_test' => '',
                    'decore__1_check-30.00-decor_test' => '',
                    'decore__1_check-40.00-decor_test' => '',
                ]
            ],
            '3' => [
                'name' => 'Добавьте поздравительную надпись:',
                'variants' => ['inscription-10-nadpis' => '',]
            ],
            'four-4' => [
                'name' => 'Формат поздравительной надписи:',
                'variants' => [
                    'optString__0_check-10.00-cream_test' => '',
                    'optString__1_check-20.00-gingerbread_test' => '',
                    'optString__2_check-30.00-topper_test' => '',
                    'optString__3_check-40.00-postcard_test' => '',
                ]
            ],
            '5' => [
                'name' => 'Выберите упаковку:',
                'variants' => [
                    'optString__5_check-10.00-packaging_test' => '',
                    'optString__5_check-20.00-packaging_test' => '',
                    'optString__5_check-30.00-packaging_test' => '',
                    'optString__5_check-40.00-packaging_test' => '',
                ]
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cake_goods';
    }


//  Связь многие ко многим tag и промежуточная cake_tag (связующая)
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
            [['lm_essence', 'lm_title', 'lm_description', 'lm_content', 'lm_weight', 'lm_price_for_kg', 'lm_type', 'lm_count_level', 'lm_subjects', 'lm_create_box', 'lm_publicate', 'lm_prioritet', 'lm_img_one', 'lm_img_two', 'lm_img_three', 'lm_alter_card'], 'required'],
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
            'lm_alter_card' => 'lm_alter_card',
        ];
    }
}
