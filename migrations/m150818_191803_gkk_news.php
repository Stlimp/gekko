<?php

use yii\db\Schema;
use yii\db\Migration;

class m150818_191803_gkk_news extends Migration
{
    public function up()
    {
        echo ("Table gkk_news is created!\n");
        $this->createTable('gkk_news', array(
            'id' => Schema::TYPE_PK,
            'post_image' =>'string NOT NULL',
            'header' =>'string NOT NULL',
            'post' => 'text NOT NULL',
            'date' => 'date NOT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
        echo ("Table gkk_news is dropped!\n");
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
