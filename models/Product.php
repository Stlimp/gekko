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
 * @property string $product_characteristics
 * @property string $product_regular_size
 * @property string $product_regular_thickness
 * @property double $product_regular_weight
 * @property string $product_regular_quantity
 * @property string $product_regular_repeatability
 * @property string $product_angular_size
 * @property string $product_angular_thickness
 * @property double $product_angular_weight
 * @property string $product_angular_quantity
 * @property string $product_angular_repeatability
 * @property double $product_regular_calculation_size
 * @property double $product_angular_calculation_size
 * @property double $product_angular_calculation_size_square
 * @property double $product_price
 * @property double $product_regular_seamless_calculation_size
 * @property double $product_angular_seamless_calculation_size
 * @property double $product_angular_seamless_calculation_size_square
 * @property double $product_price_seamless
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
            [['product_product_name', 'product_product_image', 'product_index_image', 'product_category_name', 'product_characteristics', 'product_regular_size', 'product_regular_thickness', 'product_regular_weight', 'product_regular_quantity', 'product_regular_repeatability', 'product_regular_calculation_size', 'product_price', 'product_regular_seamless_calculation_size', 'product_price_seamless'], 'required'],
            [['product_regular_weight', 'product_angular_weight', 'product_regular_calculation_size', 'product_angular_calculation_size', 'product_angular_calculation_size_square', 'product_price', 'product_regular_seamless_calculation_size', 'product_angular_seamless_calculation_size', 'product_angular_seamless_calculation_size_square', 'product_price_seamless'], 'number'],
            [['product_product_name', 'product_product_image', 'product_index_image', 'product_category_name', 'product_regular_size', 'product_regular_thickness', 'product_regular_quantity', 'product_regular_repeatability', 'product_angular_size', 'product_angular_thickness', 'product_angular_quantity', 'product_angular_repeatability'], 'string', 'max' => 255],
            [['product_characteristics'], 'string', 'max' => 1000],//?
            [['product_category_name'], 'exist', 'skipOnError' => true, 'targetClass' => GkkProductCategories::className(), 'targetAttribute' => ['product_category_name' => 'product_category_name']],//?
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
             'product_index_image' => 'Product Index Image', 
            'product_category_name' => 'Product Category Name',
            'product_characteristics' => 'Product Characteristics',
            'product_regular_size' => 'Product Regular Size',
            'product_regular_thickness' => 'Product Regular Thickness',
            'product_regular_weight' => 'Product Regular Weight',
            'product_regular_quantity' => 'Product Regular Quantity',
            'product_regular_repeatability' => 'Product Regular Repeatability',
            'product_angular_size' => 'Product Angular Size',
            'product_angular_thickness' => 'Product Angular Thickness',
            'product_angular_weight' => 'Product Angular Weight',
            'product_angular_quantity' => 'Product Angular Quantity',
            'product_angular_repeatability' => 'Product Angular Repeatability',
            'product_regular_calculation_size' => 'Product Regular Calculation Size',
            'product_angular_calculation_size' => 'Product Angular Calculation Size',
            'product_angular_calculation_size_square' => 'Product Angular Calculation Size Square',
            'product_price' => 'Product Price',
            'product_regular_seamless_calculation_size' => 'Product Regular Seamless Calculation Size',
            'product_angular_seamless_calculation_size' => 'Product Angular Seamless Calculation Size',
            'product_angular_seamless_calculation_size_square' => 'Product Angular Seamless Calculation Size Square',
            'product_price_seamless' => 'Product Price Seamless',
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
    public function hasAngular(){
        
        return $this->product_angular_calculation_size>0?"true":"false";
    } 

}
