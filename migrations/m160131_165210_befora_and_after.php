<?php

use yii\db\Schema;
use yii\db\Migration;

class m160131_165210_befora_and_after extends Migration
{
    /*public function up()
    {

    }

    public function down()
    {
        echo "m160131_165210_befora_and_after cannot be reverted.\n";

        return false;
    }*/

    
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
         $this->createTable('gkk_before_and_after_album', array(
            'id' => Schema::TYPE_INTEGER,
            'album_name' => 'string NOT NULL',
            'city' => 'string NOT NULL',
            'description' => 'text NOT NULL',
            'product_color_id' => Schema::TYPE_INTEGER,
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_before_and_after_album is created!\n");
        $this->addPrimaryKey('before_and_after_album_pk', 'gkk_before_and_after_album', 'album_name');
        $this->addForeignKey('product_color_id','gkk_before_and_after_album','product_color_id','gkk_product_color','product_color_id');

        $this->createTable('gkk_before_and_after_photo', array(
            'id' => Schema::TYPE_PK,
            'album_name' =>'string NOT NULL',
            'photo_image' =>'string NOT NULL',
         ), 'ENGINE=InnoDB');
        echo ("Table gkk_news is gkk_before_and_after_photo!\n");

        
        
        $this->addForeignKey('before_and_after_album_name','gkk_before_and_after_photo','album_name','gkk_before_and_after_album','album_name');

        
    }

    public function safeDown()
    {
        $this->dropTable('gkk_before_and_after_photo');
        echo ("Table gkk_before_and_after_photo is dropped!\n");

        $this->dropTable('gkk_before_and_after_album');
        echo ("Table gkk_before_and_after_album is dropped!\n");
    }
    
}
