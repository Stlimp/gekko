<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_before_and_after_album".
 *
 * @property integer $id
 * @property string $album_name
 * @property string $city
 * @property string $description
 * @property integer $product_color_id
 *
 * @property GkkProductColor $productColor
 * @property GkkBeforeAndAfterPhoto[] $gkkBeforeAndAfterPhotos
 */
class BeforeandafterAlbum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_before_and_after_album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_color_id'], 'integer'],
            [['album_name', 'city', 'description'], 'required'],
            [['description'], 'string'],
            [['album_name', 'city'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'album_name' => 'Album Name',
            'city' => 'City',
            'description' => 'Description',
            'product_color_id' => 'Product Color ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductColor()
    {
        die();
        return $this->hasOne(ProductColor::className(), ['product_color_id' => 'product_color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGkkBeforeAndAfterPhotos()
    {
        return $this->hasMany(BeforeAndAfterPhoto::className(), ['album_name' => 'album_name']);
    }
}
