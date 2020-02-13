<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 */
class m200213_082633_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%review}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'phone' => $this->string(15),
            'comment' => $this->text(),
            'review_img' => $this->string(255),
            'publicated' => $this->integer(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%review}}');
    }
}
