<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_news".
 *
 * @property integer $id
 * @property string $post_image
 * @property string $post
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_image', 'post', 'date'], 'required'],
            [['post'], 'string'],
            [['date'], 'safe'],
            [['post_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_image' => 'Post Image',
            'post' => 'Post',
            'date' => 'Date',
        ];
    }
}
