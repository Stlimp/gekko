<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_image_subcategories".
 *
 * @property integer $image_subcategory_id
 * @property string $image_subcategory_name
 * @property string $image_category_name
 *
 * @property GkkImageCategories $imageCategoryName
 * @property GkkPhotogallery[] $gkkPhotogalleries
 */
class ImageSubcategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_image_subcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_subcategory_id'], 'integer'],
            [['image_subcategory_name', 'image_category_name'], 'required'],
            [['image_subcategory_name', 'image_category_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_subcategory_id' => 'Image Subcategory ID',
            'image_subcategory_name' => 'Image Subcategory Name',
            'image_category_name' => 'Image Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImageCategoryName()
    {
        return $this->hasOne(GkkImageCategories::className(), ['image_category_name' => 'image_category_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkPhotogalleries()
    {
        return $this->hasMany(GkkPhotogallery::className(), ['photo_subcategory' => 'image_subcategory_name']);
    }
}
