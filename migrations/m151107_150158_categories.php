<?php

use yii\db\Schema;
use yii\db\Migration;

class m151107_150158_categories extends Migration
{
    public function up()
    {




        $this->createTable('gkk_image_categories', array(
            'image_category_id' => Schema::TYPE_INTEGER,
            'image_category_name' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_image_categories is created!\n");
        $this->addPrimaryKey('image_category_pk', 'gkk_image_categories', 'image_category_name');

        $this->createTable('gkk_image_subcategories', array(
            'image_subcategory_id' => Schema::TYPE_INTEGER,
            'image_subcategory_name' =>'string NOT NULL',
            'image_category_name'=>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_image_subcategories is created!\n");
        $this->addPrimaryKey('image_subcategory_pk', 'gkk_image_subcategories', 'image_subcategory_name');
        $this->addForeignKey('image_subcategory_category','gkk_image_subcategories','image_category_name','gkk_image_categories','image_category_name');


        $this->createTable('gkk_photogallery', array(
            'id' => Schema::TYPE_PK,
            'photo_name' => 'string NOT NULL',
            'photo_category' =>'string NOT NULL',
            'photo_subcategory' =>'string NOT NULL',
            'photo_image' =>'string NOT NULL',
            'photo_product' =>'string NOT NULL',

         ), 'ENGINE=InnoDB');
        echo ("Table gkk_photogallery is created!\n");
         $this->addForeignKey('image_category','gkk_photogallery','photo_category','gkk_image_categories','image_category_name');
         $this->addForeignKey('image_subcategory','gkk_photogallery','photo_subcategory','gkk_image_subcategories','image_subcategory_name');

    }

    public function down()
    {
        echo "m151107_150158_categories cannot be reverted.\n";

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
