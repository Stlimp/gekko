<?php

use yii\db\Schema;
use yii\db\Migration;

class m150927_142640_videogallery extends Migration
{
    public function up()
    {
        echo ("Table gkk_videogallery is created!\n");
        $this->createTable('gkk_videogallery', array(
            'id' => Schema::TYPE_PK,
            'video_name' =>'string NOT NULL',
            'video_description' =>'string NOT NULL',
            'video_link' =>'string NOT NULL',
            'video_thumbnail' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
    }

    public function down()
    {
        echo ("Table gkk_videogallery is dropped!\n");
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
