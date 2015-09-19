<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_news".
 *
 * @property integer $id
 * @property string $post_image
 * @property string $header
 * @property string $post
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;

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
            [['header', 'post', 'date'], 'required'],
            [['post'], 'string'],
                
            [['date'], 'safe'],
            [['post_image', 'header'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Изображение',
            'header' => 'Заголовок',
            'post' => 'Текст',
            'date' => 'Дата',
            'post_image'=> 'Изображение новости'
        ];
    }
}
