<?php

use yii\db\Schema;
use yii\db\Migration;

class m150902_194147_products extends Migration
{
    public function up()
    {           
        echo ("Table gkk_products is created!\n");
        $this->createTable('gkk_products', array(
            'id' => Schema::TYPE_PK,
            'product_image' =>'string NOT NULL',
            'product_category' =>'string NOT NULL',
            'product_name' => 'string NOT NULL',
            'product_3ds' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
        echo ("Table gkk_products is dropped!\n");
        $this->dropTable('gkk_products');
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
