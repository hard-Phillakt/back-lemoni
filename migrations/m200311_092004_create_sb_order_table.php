<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sb_order}}`.
 */
class m200311_092004_create_sb_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sb_order}}', [
            'id' => $this->primaryKey(),
            'orderNumber' => $this->integer(50),
            'orderDescription' => $this->text(),
            'transDate' => $this->string(30),
            'formattedAmount' => $this->string(100),
            'email' => $this->string(255),
            'ip' => $this->string(50),
            'panMasked' => $this->string(100),
            'paymentSystem' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sb_order}}');
    }
}
