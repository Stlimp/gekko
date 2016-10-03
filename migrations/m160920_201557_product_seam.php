<?php

use yii\db\Schema;
use yii\db\Migration;

class m160920_201557_product_seam extends Migration
{
    public function up()
    {
        $this->createTable('gkk_product_seam', array(
            'product_seam_id' => Schema::TYPE_INTEGER,
            'product_seam_name' =>'string NOT NULL',
            'product_seam_product_color' =>'string NOT NULL',
            'product_seam_number' =>'string NOT NULL',
            'product_seam_miniature' =>'string NOT NULL',
            'product_seam_image' =>'string NOT NULL',
            
           
        ), 'ENGINE=InnoDB');
        $this->addPrimaryKey('product_seam_id', 'gkk_product_seam', 'product_seam_id');
        $this->addForeignKey('product_seam_product_color','gkk_product_seam','product_seam_product_color','gkk_product_color','product_color_name');
    }

    public function down()
    {
        echo "m160920_201557_product_seam cannot be reverted.\n";

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
