<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_image_categories".
 *
 * @property integer $image_category_id
 * @property string $image_category_name
 *
 * @property GkkPhotogallery[] $gkkPhotogalleries
 */
class ImageCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_image_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_category_id'], 'integer'],
            [['image_category_name'], 'required'],
            [['image_category_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_category_id' => 'Image Category ID',
            'image_category_name' => 'Image Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkPhotogalleries()
    {
        return $this->hasMany(GkkPhotogallery::className(), ['photo_category' => 'image_category_name']);
    }
}
