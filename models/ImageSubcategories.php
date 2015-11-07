<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_image_subcategories".
 *
 * @property integer $image_subcategory_id
 * @property string $image_subcategory_name
 *
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
            [['image_subcategory_name'], 'required'],
            [['image_subcategory_name'], 'string', 'max' => 255]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkPhotogalleries()
    {
        return $this->hasMany(GkkPhotogallery::className(), ['photo_subcategory' => 'image_subcategory_name']);
    }
}
