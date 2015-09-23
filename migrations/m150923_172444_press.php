<?php

use yii\db\Schema;
use yii\db\Migration;

class m150923_172444_press extends Migration
{
    public function up()
    {
        echo ("Table gkk_press is created!\n");
        $this->createTable('gkk_press', array(
            'id' => Schema::TYPE_PK,
            'link_name' =>'string NOT NULL',
            'link' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
        echo ("Table gkk_press is dropped!\n");
        $this->dropTable('gkk_press');
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
