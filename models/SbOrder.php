<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sb_order".
 *
 * @property int $id
 * @property int $orderNumber
 * @property string $orderDescription
 * @property string $transDate
 * @property string $formattedAmount
 * @property string $email
 * @property string $ip
 * @property string $panMasked
 * @property string $paymentSystem
 */
class SbOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sb_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderNumber'], 'integer'],
            [['orderDescription'], 'string'],
            [['transDate'], 'string', 'max' => 30],
            [['formattedAmount', 'panMasked'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 50],
            [['paymentSystem'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderNumber' => 'Order Number',
            'orderDescription' => 'Order Description',
            'transDate' => 'Trans Date',
            'formattedAmount' => 'Formatted Amount',
            'email' => 'Email',
            'ip' => 'Ip',
            'panMasked' => 'Pan Masked',
            'paymentSystem' => 'Payment System',
        ];
    }
}
