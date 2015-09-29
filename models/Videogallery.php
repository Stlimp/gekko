<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_videogallery".
 *
 * @property integer $id
 * @property string $video_name
 * @property string $video_description
 * @property string $video_link
 * @property string $video_thumbnail
 */
class Videogallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_videogallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['video_name', 'video_description', 'video_link'], 'required'],
            [['video_name', 'video_description', 'video_link', 'video_thumbnail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_name' => 'Video Name',
            'video_description' => 'Video Description',
            'video_link' => 'Video Link',
            'video_thumbnail' => 'Video Thumbnail',
        ];
    }
}
