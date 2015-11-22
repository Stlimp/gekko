<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_product_color".
 *
 * @property integer $product_color_id
 * @property string $product_color_name
 * @property string $product_article
 * @property string $product_3ds_link
 * @property string $product_angular
 * @property string $product_regular
 * @property string $product_price
 * @property string $product_subcategory_name
 *
 * @property GkkProduct $productSubcategoryName
 */
class ProductColor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_product_color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_color_name', 'product_article', 'product_3ds_link', 'product_angular', 'product_regular', 'product_price', 'product_subcategory_name'], 'required'],
            [['product_color_name', 'product_article', 'product_3ds_link', 'product_angular', 'product_regular', 'product_price', 'product_subcategory_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_color_id' => 'Product Color ID',
            'product_color_name' => 'Product Color Name',
            'product_article' => 'Product Article',
            'product_3ds_link' => 'Product 3ds Link',
            'product_angular' => 'Product Angular',
            'product_regular' => 'Product Regular',
            'product_price' => 'Product Price',
            'product_subcategory_name' => 'Product Subcategory Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductSubcategoryName()
    {
        return $this->hasOne(GkkProduct::className(), ['product_product_name' => 'product_subcategory_name']);
    }
}
