<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_stores".
 *
 * @property integer $id
 * @property string $country
 * @property string $city
 * @property string $description
 */
class Stores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_stores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'city', 'description'], 'required'],
            [['description'], 'string'],
            [['country', 'city'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'city' => 'City',
            'description' => 'Description',
        ];
    }
}
