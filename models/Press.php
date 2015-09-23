<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_press".
 *
 * @property integer $id
 * @property string $link_name
 * @property string $link
 */
class Press extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_press';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_name', 'link'], 'required','message' => 'Обязательно для ввода'],
            [['link_name', 'link'], 'string', 'max' => 255],
            [['link'],'url','message' => 'Ссылка должна начинаться с http://'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_name' => 'Имя',
            'link' => 'Ссылка',
        ];
    }
}
