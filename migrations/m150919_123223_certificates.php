<?php

use yii\db\Schema;
use yii\db\Migration;

class m150919_123223_certificates extends Migration
{
    public function up()
    {

        echo ("Table gkk_certificates is created!\n");
        $this->createTable('gkk_certificates', array(
            'id' => Schema::TYPE_PK,
            'type' => 'string NOT NULL',
            'path' =>'string NOT NULL',
            'description' =>'string NOT NULL',
            'thumbnail' =>'string DEFAULT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
       echo ("Table gkk_certificates is dropped!\n");
        $this->dropTable('gkk_certificates');
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
