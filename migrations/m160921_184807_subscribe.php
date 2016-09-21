<?php

use yii\db\Schema;
use yii\db\Migration;

class m160921_184807_subscribe extends Migration
{
    public function up()
    {
        $this->createTable('gkk_subscribers', array(
            'id' => Schema::TYPE_PK,
            'email' => 'string NOT NULL',
            'date' => 'date NOT NULL',
            'UNIQUE KEY `email` (`email`)',
            ), 'ENGINE=InnoDB');
        echo ("Table gkk_news is created!\n");
    }

    public function down()
    {
        $this->dropTable('gkk_subscribers');
        echo ("Table gkk_subscribers is dropped!\n");

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
