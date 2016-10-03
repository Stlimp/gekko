<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_product_seam".
 *
 * @property integer $product_seam_id
 * @property string $product_seam_name
 * @property string $product_seam_product_color
 * @property string $product_seam_number
 * @property string $product_seam_miniature
 * @property string $product_seam_image
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
            [['product_seam_id', 'product_seam_name', 'product_seam_product_color', 'product_seam_number', 'product_seam_miniature', 'product_seam_image'], 'required'],
            [['product_seam_id'], 'integer'],
            [['product_seam_name', 'product_seam_product_color', 'product_seam_number', 'product_seam_miniature', 'product_seam_image'], 'string', 'max' => 255],
            [['product_seam_product_color'], 'exist', 'skipOnError' => true, 'targetClass' => ProductColor::className(), 'targetAttribute' => ['product_seam_product_color' => 'product_color_name']],
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
            'product_seam_number' => 'Product Seam Number',
            'product_seam_miniature' => 'Product Seam Miniature',
            'product_seam_image' => 'Product Seam Image',
        ];
    }
}
