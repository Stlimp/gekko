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
            'product_item_name' => 'Название продукта',
            'product_item_price' => 'Цена за м2',
            'product_item_short_descr' => 'Краткое описание',
            'product_item_img_char' => 'Символические обозначения',
            'product_item_3ds_link' => 'Ссылка на текстуру 3DS',
            'product_item_long_descr_main' => 'Характеристики рядовой плитки',
            'product_item_long_descr_additional' => 'Характеристики угловой плитки',
        ];
    }
}
