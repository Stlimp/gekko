<?php

use yii\db\Schema;
use yii\db\Migration;

class m160301_135226_order extends Migration
{
    public function up()
    {
         /*$this->createTable('gkk_product_color', array(
            'product_color_id' => Schema::TYPE_PK,
            'product_color_name' =>'string NOT NULL',
            'product_article' =>'string NOT NULL',
            'product_3ds_link' =>'string NOT NULL',
            
            'product_subcategory_name' =>'string NOT NULL',
            'product_color_image'=>'string NOT NULL',
            
           
        ), 'ENGINE=InnoDB');
        $this->addForeignKey('product_subcategory','gkk_product_color','product_subcategory_name','gkk_product','product_product_name');*/




        $this->createTable('gkk_orders', array(
            'id' => Schema::TYPE_PK,
            'user'=>'string NOT NULL',
            'ip'=>'string NOT NULL',
            'date'=>'string NOT NULL',
            'time'=>'string NOT NULL',
            'new'=>'string NOT NULL',
            'status'=>'string NOT NULL',
            'price_input'=>'string NOT NULL',
            'weight_input'=>'string NOT NULL',
            ), 'ENGINE=InnoDB');
        echo ("Table gkk_orders is created!\n");

        $this->createTable('gkk_order_items', array(
            'order_item_id' => Schema::TYPE_PK,
            'order_id' => Schema::TYPE_INTEGER,
            'product_name' => 'string NOT NULL',
            'product_color_name' => 'string NOT NULL',
            'regular_input' => 'string NOT NULL',
            'angular_input' => 'string NOT NULL',
            'reduce_squere' => 'string NOT NULL',
            'add_five_percent' => 'string NOT NULL',
            'seamless' => 'string NOT NULL',
            'price_color' => 'string NOT NULL',
            'weight_color' => 'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_order_items is created!\n");

        $this->addForeignKey('order_id','gkk_order_items','order_id','gkk_orders','id');
        $this->addForeignKey('product_color_name','gkk_order_items','product_color_name','gkk_product_color','product_color_name');
        $this->addForeignKey('product_name','gkk_order_items','product_name','gkk_product_color','product_subcategory_name');
    }

    public function down()
    {
        $this->dropTable('gkk_order_items');
        echo ("Table gkk_order_items is dropped!\n");
        $this->dropTable('gkk_orders');
        echo ("Table gkk_orders is dropped!\n");
        
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
