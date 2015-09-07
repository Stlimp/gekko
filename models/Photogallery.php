<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_photogallery".
 *
 * @property integer $id
 * @property string $photo_name
 * @property string $photo_category
 * @property string $photo_subcategory
 * @property string $photo_image
 * @property string $photo_product
 */
class Photogallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $image;

    public static function tableName()
    {
        return 'gkk_photogallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_name', 'photo_category', 'photo_subcategory', 'photo_product'], 'required'],
            [['photo_name', 'photo_category', 'photo_subcategory', 'photo_product'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>'jpg, gif, png, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo_name' => 'Название',
            'photo_category' => 'Категория',
            'photo_subcategory' => 'Подкатегория',
            'photo_image' => 'Изображение',
            'photo_product' => 'Продукт',
        ];
    }
}
