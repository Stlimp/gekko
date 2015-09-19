<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_certificates".
 *
 * @property integer $id
 * @property string $type
 * @property string $path
 * @property string $description
 * @property string $thumbnail
 */
class Certificates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public $thumb;
    
    public static function tableName()
    {
        return 'gkk_certificates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'description'], 'required'],
            [['type', 'path', 'description', 'thumbnail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип документа',
            'path' => 'Путь к документу',
            'description' => 'Описание',
            'thumbnail' => 'Изображение',
        ];
    }
}
