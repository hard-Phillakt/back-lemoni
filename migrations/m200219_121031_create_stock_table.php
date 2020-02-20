<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stock}}`.
 */
class m200219_121031_create_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stock}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'previmg' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'date' => $this->string(10),
            'publication' => $this->string(1),
            'priority' => $this->string(10),
            'essence' => $this->string(20),
            'type' => $this->string(50),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stock}}');
    }
}
// --fields=title:string,previmg:string,description:text,content:text,date:string(10),publication:string(1),priority:string(10),essence:string(20),type:string(50)