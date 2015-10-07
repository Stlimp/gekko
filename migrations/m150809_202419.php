<?php

use yii\db\Schema;
use yii\db\Migration;

class m150809_202419_q_and_a extends Migration
{
    public function safeUp()
    {


        $this->createTable('gkk_news', array(
            'id' => Schema::TYPE_PK,
            'post_image' =>'string NOT NULL',
            'header' =>'string NOT NULL',
            'post' => 'text NOT NULL',
            'date' => 'date NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_news is created!\n");
        
        $this->createTable('gkk_q_and_a', array(
            'id' => Schema::TYPE_PK,
            'chapter' => 'string NOT NULL',
            'question' => 'text NOT NULL',
            'answer' => 'text NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_q_and_a is created!\n");


        $this->createTable('gkk_products', array(
            'id' => Schema::TYPE_PK,
            'product_image' =>'string NOT NULL',
            'product_category' =>'string NOT NULL',
            'product_name' => 'string NOT NULL',
            'product_3ds' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_products is created!\n");


        $this->createTable('gkk_photogallery', array(
            'id' => Schema::TYPE_PK,
            'photo_name' => 'string NOT NULL',
            'photo_category' =>'string NOT NULL',
            'photo_subcategory' =>'string NOT NULL',
            'photo_image' =>'string NOT NULL',
            'photo_product' =>'string NOT NULL',

         ), 'ENGINE=InnoDB');
        echo ("Table gkk_photogallery is created!\n");

        $this->createTable('gkk_certificates', array(
            'id' => Schema::TYPE_PK,
            'type' => 'string NOT NULL',
            'path' =>'string NOT NULL',
            'description' =>'string NOT NULL',
            'thumbnail' =>'string DEFAULT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_certificates is created!\n");


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
        echo ("Table gkk_product_item is created!\n");


        $this->createTable('gkk_press', array(
            'id' => Schema::TYPE_PK,
            'link_name' =>'string NOT NULL',
            'link' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_press is created!\n");

        $this->createTable('gkk_videogallery', array(
            'id' => Schema::TYPE_PK,
            'video_name' =>'string NOT NULL',
            'video_description' =>'string NOT NULL',
            'video_link' =>'string NOT NULL',
            'video_thumbnail' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_videogallery is created!\n");

    }

    public function safeDown()
    {
        
        $this->dropTable('gkk_q_and_a');
        echo ("Table gkk_q_and_a is dropped!\n");

        $this->dropTable('gkk_q_and_a');
        echo ("Table gkk_news is dropped!\n");

         
        $this->dropTable('gkk_products');
        echo ("Table gkk_products is dropped!\n");

        
        $this->dropTable('gkk_photogallery');
        echo ("Table gkk_hotogallery is dropped!\n");

        
        $this->dropTable('gkk_certificates');
        echo ("Table gkk_certificates is dropped!\n");

        
        $this->dropTable('gkk_product_item');
        echo ("Table gkk_product_item is dropped!\n");

        
        $this->dropTable('gkk_press');
        echo ("Table gkk_press is dropped!\n");
        
        $this->dropTable('gkk_videogallery');
        echo ("Table gkk_videogallery is dropped!\n");
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
