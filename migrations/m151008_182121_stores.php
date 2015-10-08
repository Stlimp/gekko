<?php

use yii\db\Schema;
use yii\db\Migration;

class m151008_182121_stores extends Migration
{
    public function up()
    {
        
        $this->createTable('gkk_stores', array(
            'id' => Schema::TYPE_PK,
            'country' => 'string NOT NULL',
            'city' => 'string NOT NULL',
            'description' => 'text NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_stores is created!\n");

    }

    public function down()
    {
        
        $this->dropTable('gkk_stores');
        echo ("Table gkk_stores is dropped!\n");
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
