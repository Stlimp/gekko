<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_products_item".
 *
 * @property integer $id
 * @property string $product_item_name
 * @property integer $product_item_price
 * @property string $product_item_short_descr
 * @property string $product_item_img_char
 * @property string $product_item_3ds_link
 * @property string $product_item_long_descr_main
 * @property string $product_item_long_descr_additional
 */
class ProductItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_products_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_item_name', 'product_item_price', 'product_item_short_descr', 'product_item_img_char', 'product_item_3ds_link', 'product_item_long_descr_main'], 'required'],
            [['product_item_price'], 'integer'],
            [['product_item_name', 'product_item_short_descr', 'product_item_img_char', 'product_item_3ds_link', 'product_item_long_descr_main', 'product_item_long_descr_additional'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_item_name' => 'Product Item Name',
            'product_item_price' => 'Product Item Price',
            'product_item_short_descr' => 'Product Item Short Descr',
            'product_item_img_char' => 'Product Item Img Char',
            'product_item_3ds_link' => 'Product Item 3ds Link',
            'product_item_long_descr_main' => 'Product Item Long Descr Main',
            'product_item_long_descr_additional' => 'Product Item Long Descr Additional',
        ];
    }
}
