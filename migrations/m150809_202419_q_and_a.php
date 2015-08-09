<?php

use yii\db\Schema;
use yii\db\Migration;

class m150809_202419_q_and_a extends Migration
{
    public function up()
    {
        echo ("Table gkk_q_and_a created!\n");
        $this->createTable('gkk_q_and_a', array(
            'id' => Schema::TYPE_PK,
            'chapter' => 'string NOT NULL',
            'question' => 'text NOT NULL',
            'answer' => 'text NOT NULL',
         ), 'ENGINE=InnoDB');

    }

    public function down()
    {
        echo ("Table gkk_q_and_a dropped!\n");
        $this->dropTable('gkk_q_and_a');
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
