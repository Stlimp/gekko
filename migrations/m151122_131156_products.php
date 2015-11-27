<?php

use yii\db\Schema;
use yii\db\Migration;

class m151122_131156_products extends Migration
{
    public function safeUp()
    {
        $this->createTable('gkk_product_categories', array(
            'product_category_id' => Schema::TYPE_INTEGER,
            'product_category_name' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_product_categories is created!\n");
        $this->addPrimaryKey('product_category_pk', 'gkk_product_categories', 'product_category_name');

        $this->createTable('gkk_product', array(
            'product_product_id' => Schema::TYPE_INTEGER,
            'product_product_name' =>'string NOT NULL',
            'product_product_image'=>'string NOT NULL',
            'product_category_name' =>'string NOT NULL',
            'product_category_short_description' =>'string NOT NULL',  
            'product_category_short_characteristics' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_product is created!\n");

        $this->addPrimaryKey('product_subcategory_pk', 'gkk_product', 'product_product_name');
        $this->addForeignKey('product_category','gkk_product','product_category_name','gkk_product_categories','product_category_name');

        $this->createTable('gkk_product_color', array(
            'product_color_id' => Schema::TYPE_PK,
            'product_color_name' =>'string NOT NULL',
            'product_article' =>'string NOT NULL',
            'product_3ds_link' =>'string NOT NULL',
            'product_angular' =>'string NOT NULL',
            'product_regular' =>'string NOT NULL',
            'product_price' =>'string NOT NULL',
            'product_subcategory_name' =>'string NOT NULL',
            'product_color_image'=>'string NOT NULL',
        ), 'ENGINE=InnoDB');
        $this->addForeignKey('product_subcategory','gkk_product_color','product_subcategory_name','gkk_product','product_product_name');


    }

    public function safeDown()
    {
       

        return false;
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
