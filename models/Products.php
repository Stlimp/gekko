<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_products".
 *
 * @property integer $id
 * @property string $product_image
 * @property string $product_category
 * @property string $product_name
 */
class Products extends \yii\db\ActiveRecord
{
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
            [['product_image', 'product_category', 'product_name'], 'required'],
            [['product_image', 'product_category', 'product_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_image' => 'Product Image',
            'product_category' => 'Product Category',
            'product_name' => 'Product Name',
        ];
    }
}
