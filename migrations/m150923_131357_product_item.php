<?php

use yii\db\Schema;
use yii\db\Migration;

class m150923_131357_product_item extends Migration
{
    public function up()
    {
        echo ("Table gkk_product_item is created!\n");
        $this->createTable('gkk_products_item', array(
            'id' => Schema::TYPE_PK,
            'product_item_name' =>'string NOT NULL',
            'product_item_price' =>'int NOT NULL',
            'product_item_short_descr' =>'string NOT NULL',
            'product_item_img_char' =>'string NOT NULL',
            'product_item_3ds_link' =>'string NOT NULL',
            'product_item_long_descr_main' => 'string NOT NULL',
            'product_item_long_descr_additional' => 'string DEFAULT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
        echo ("Table gkk_product_item is dropped!\n");
        $this->dropTable('gkk_product_item');
    }
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
