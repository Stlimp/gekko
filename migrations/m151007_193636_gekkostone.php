<?php

use yii\db\Schema;
use yii\db\Migration;

class m151007_193636_gekkostone extends Migration
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
        
        $this->createTable('gkk_q_and_a', array(
            'id' => Schema::TYPE_PK,
            'chapter' => 'string NOT NULL',
            'question' => 'text NOT NULL',
            'answer' => 'text NOT NULL',
         ), 'ENGINE=InnoDB');

        $this->createTable('gkk_products', array(
            'id' => Schema::TYPE_PK,
            'product_image' =>'string NOT NULL',
            'product_category' =>'string NOT NULL',
            'product_name' => 'string NOT NULL',
            'product_3ds' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');

        $this->createTable('gkk_photogallery', array(
            'id' => Schema::TYPE_PK,
            'photo_name' => 'string NOT NULL',
            'photo_category' =>'string NOT NULL',
            'photo_subcategory' =>'string NOT NULL',
            'photo_image' =>'string NOT NULL',
            'photo_product' =>'string NOT NULL',

         ), 'ENGINE=InnoDB');

        $this->createTable('gkk_certificates', array(
            'id' => Schema::TYPE_PK,
            'type' => 'string NOT NULL',
            'path' =>'string NOT NULL',
            'description' =>'string NOT NULL',
            'thumbnail' =>'string DEFAULT NULL',
         ), 'ENGINE=InnoDB');

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

        $this->createTable('gkk_press', array(
            'id' => Schema::TYPE_PK,
            'link_name' =>'string NOT NULL',
            'link' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');

        $this->createTable('gkk_videogallery', array(
            'id' => Schema::TYPE_PK,
            'video_name' =>'string NOT NULL',
            'video_description' =>'string NOT NULL',
            'video_link' =>'string NOT NULL',
            'video_thumbnail' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');

    }

    public function safeDown()
    {
        
        $this->dropTable('gkk_q_and_a');
       
        $this->dropTable('gkk_news');
         
        $this->dropTable('gkk_products');
        
        $this->dropTable('gkk_photogallery');
        
        $this->dropTable('gkk_certificates');
        
        $this->dropTable('gkk_products_item');
        
        $this->dropTable('gkk_press');
       
        $this->dropTable('gkk_videogallery');
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
