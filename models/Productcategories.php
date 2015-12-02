<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_product_categories".
 *
 * @property integer $product_category_id
 * @property string $product_category_name
 *
 * @property GkkProduct[] $gkkProducts
 */
class ProductCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_product_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_category_id'], 'integer'],
            [['product_category_name'], 'required'],
            [['product_category_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_category_id' => 'Product Category ID',
            'product_category_name' => 'Product Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkProducts()
    {
        return $this->hasMany(GkkProduct::className(), ['product_category_name' => 'product_category_name']);
    }
}
