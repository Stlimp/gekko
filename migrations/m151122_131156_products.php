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


            'product_regular_size' =>'string NOT NULL',
            'product_regular_thickness' =>'string NOT NULL',
            'product_regular_weight' =>'float NOT NULL',
            'product_regular_quantity' =>'string NOT NULL',
            'product_regular_repeatability' =>'string NOT NULL',
            'product_angular_size' =>'string DEFAULT NULL',
            'product_angular_thickness' =>'string DEFAULT NULL',
            'product_angular_weight' =>'float DEFAULT NULL',
            'product_angular_quantity' =>'string DEFAULT NULL',
            'product_angular_repeatability' =>'string DEFAULT NULL',

            'product_regular_calculation_size' =>'FLOAT NOT NULL',
            'product_angular_calculation_size' =>'FLOAT DEFAULT 0',
            'product_angular_calculation_size_square' =>'FLOAT DEFAULT 0',
            'product_price' =>'float NOT NULL',
            'product_regular_seamless_calculation_size' =>'FLOAT NOT NULL',
            'product_angular_seamless_calculation_size' =>'FLOAT DEFAULT 0',
            'product_angular_seamless_calculation_size_square' =>'FLOAT DEFAULT 0',
            'product_price_seamless' =>'FLOAT NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_product is created!\n");

        $this->addPrimaryKey('product_subcategory_pk', 'gkk_product', 'product_product_name');
        $this->addForeignKey('product_category','gkk_product','product_category_name','gkk_product_categories','product_category_name');

        $this->createTable('gkk_product_color', array(
            'product_color_id' => Schema::TYPE_PK,
            'product_color_name' =>'string NOT NULL',
            'product_article' =>'string NOT NULL',
            'product_3ds_link' =>'string NOT NULL',
            
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
