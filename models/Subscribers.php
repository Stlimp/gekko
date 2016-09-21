<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_subscribers".
 *
 * @property integer $id
 * @property string $email
 * @property string $date
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_subscribers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['date'], 'safe'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'date' => 'Date',
        ];
    }
}
