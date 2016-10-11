<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_product_seam".
 *
 * @property integer $product_seam_id
 * @property string $product_seam_name
 * @property string $product_seam_product_color
 * @property string $product_seam_postfix
 */
class ProductSeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_product_seam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_seam_id', 'product_seam_name', 'product_seam_product_color', 'product_seam_postfix'], 'required'],
            [['product_seam_id'], 'integer'],
            [['product_seam_name', 'product_seam_product_color', 'product_seam_postfix'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_seam_id' => 'Product Seam ID',
            'product_seam_name' => 'Product Seam Name',
            'product_seam_product_color' => 'Product Seam Product Color',
            'product_seam_postfix' => 'Product Seam Postfix',
        ];
    }
}
