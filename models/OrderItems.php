<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gkk_order_items".
 *
 * @property integer $order_item_id
 * @property integer $order_id
 * @property string $product
 * @property string $regular_input
 * @property string $angular_input
 * @property string $reduce_squere
 * @property string $add_five_percent
 * @property string $seamless
 * @property string $price_color
 * @property string $weight_color
 *
 * @property GkkOrders $order
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_order_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id'], 'integer'],
            [['product_name','product_color_name', 'regular_input', 'angular_input', 'reduce_squere', 'add_five_percent', 'seamless', 'price_color', 'weight_color'], 'required'],
            [['product_name','product_color_name', 'regular_input', 'angular_input', 'reduce_squere', 'add_five_percent', 'seamless', 'price_color', 'weight_color'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_item_id' => 'Order Item ID',
            'order_id' => 'Order ID',
            'product_name' =>'Product Name',
            'product_color_name' => 'Product Color',
            'regular_input' => 'Regular Input',
            'angular_input' => 'Angular Input',
            'reduce_squere' => 'Reduce Squere',
            'add_five_percent' => 'Add Five Percent',
            'seamless' => 'Seamless',
            'price_color' => 'Price Color',
            'weight_color' => 'Weight Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(GkkOrders::className(), ['id' => 'order_id']);
    }
}
