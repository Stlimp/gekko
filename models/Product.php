<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_product".
 *
 * @property integer $product_product_id
 * @property string $product_product_name
 * @property string $product_product_image
 * @property string $product_category_name
 * @property string $product_category_short_description
 * @property string $product_category_short_characteristics
 *
 * @property GkkProductCategories $productCategoryName
 * @property GkkProductColor[] $gkkProductColors
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_product_id'], 'integer'],
            [['product_product_name', 'product_product_image', 'product_category_name', 'product_category_short_description', 'product_category_short_characteristics'], 'required'],
            [['product_product_name', 'product_product_image', 'product_category_name', 'product_category_short_description', 'product_category_short_characteristics'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_product_id' => 'Product Product ID',
            'product_product_name' => 'Product Product Name',
            'product_product_image' => 'Product Product Image',
            'product_category_name' => 'Product Category Name',
            'product_category_short_description' => 'Product Category Short Description',
            'product_category_short_characteristics' => 'Product Category Short Characteristics',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategoryName()
    {
        return $this->hasOne(GkkProductCategories::className(), ['product_category_name' => 'product_category_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkProductColors()
    {
        return $this->hasMany(GkkProductColor::className(), ['product_subcategory_name' => 'product_product_name']);
    }
}
