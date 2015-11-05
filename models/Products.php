<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_products".
 *
 * @property integer $product_id
 * @property string $product_image
 * @property string $product_category_id
 * @property string $product_name
 * @property string $product_3ds
 *
 * @property GkkProductCategories $productCategory
 */
class Products extends \yii\db\ActiveRecord
{
    public $image;
    public $file_3ds;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_category_id', 'product_name'], 'required'],
            [['product_image', 'product_category_id', 'product_name', 'product_3ds'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_image' => 'Product Image',
            'product_category_id' => 'Product Category ID',
            'product_name' => 'Product Name',
            'product_3ds' => 'Product 3ds',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategory()
    {
        return $this->hasOne(GkkProductCategories::className(), ['product_category_name' => 'product_category_id']);
    }
}
