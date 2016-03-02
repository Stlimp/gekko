<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_orders".
 *
 * @property integer $id
 * @property string $user
 * @property string $ip
 * @property string $date
 * @property string $time
 * @property string $new
 * @property string $status
 * @property string $price_input
 * @property string $weight_input
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'ip', 'date', 'time', 'new', 'status', 'price_input', 'weight_input'], 'required'],
            [['user', 'ip', 'date', 'time', 'new', 'status', 'price_input', 'weight_input'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'ip' => 'Ip',
            'date' => 'Date',
            'time' => 'Time',
            'new' => 'New',
            'status' => 'Status',
            'price_input' => 'Price Input',
            'weight_input' => 'Weight Input',
        ];
    }
}
