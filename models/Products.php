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
    public $image;
    public $file_3ds;

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
            [[ 'product_category', 'product_name'], 'required'],
            [['product_category', 'product_name'], 'string', 'max' => 255],
            [['product_image'],'file','extensions'=>'jpg, gif, png, jpeg'],
            [['product_3ds'],'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_image' => 'Изображение',
            'product_category' => 'Категория',
            'product_name' => 'Имя',
            'product_3ds' => '3DS файл',
        ];
    }
}
