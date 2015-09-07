<?php

use yii\db\Schema;
use yii\db\Migration;

class m150907_192715_photogallery extends Migration
{
    public function up()
    {

        echo ("Table gkk_photogallery is created!\n");
        $this->createTable('gkk_photogallery', array(
            'id' => Schema::TYPE_PK,
            'photo_name' => 'string NOT NULL',
            'photo_category' =>'string NOT NULL',
            'photo_subcategory' =>'string NOT NULL',
            'photo_image' =>'string NOT NULL',
            'photo_product' =>'string NOT NULL',

         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
       echo ("Table gkk_hotogallery is dropped!\n");
        $this->dropTable('gkk_photogallery');
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
