<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_before_and_after_photo".
 *
 * @property integer $id
 * @property string $album_name
 * @property string $photo_image
 *
 * @property GkkBeforeAndAfterAlbum $albumName
 */
class BeforeandafterPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_before_and_after_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['album_name', 'photo_image'], 'required'],
            [['album_name', 'photo_image'], 'string', 'max' => 255]
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
            'photo_image' => 'Photo Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbumName()
    {
        return $this->hasOne(GkkBeforeAndAfterAlbum::className(), ['album_name' => 'album_name']);
    }
}
