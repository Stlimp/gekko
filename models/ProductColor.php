<?php

namespace app\models;

use Yii;
use yz\shoppingcart\ShoppingCart;


/**
 * This is the model class for table "gkk_product_color".
 *
 * @property integer $product_color_id
 * @property string $product_color_name
 * @property string $product_article
 * @property string $product_3ds_link
 * @property string $product_angular
 * @property string $product_regular
 * @property string $product_price
 * @property string $product_subcategory_name
 * @property string $product_color_image
 *
 * @property GkkProduct $productSubcategoryName
 */
class ProductColor extends \yii\db\ActiveRecord implements \yz\shoppingcart\CartPositionInterface
{
    use \yz\shoppingcart\CartPositionTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gkk_product_color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_color_name', 'product_article', 'product_3ds_link', 'product_subcategory_name', 'product_color_image'], 'required'],
            [['product_color_name', 'product_article', 'product_3ds_link', 'product_subcategory_name', 'product_color_image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_color_id' => 'Product Color ID',
            'product_color_name' => 'Product Color Name',
            'product_article' => 'Product Article',
            'product_3ds_link' => 'Product 3ds Link',
            'product_subcategory_name' => 'Product Subcategory Name',
            'product_color_image' => 'Product Color Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductSubcategoryName()
    {
        return $this->hasOne(Product::className(), ['product_product_name' => 'product_subcategory_name']);
    }

    public function getPrice()
    {
        return $this->product_price;
    }

    public function getId()
    {
        return $this->product_color_id;
    }

    public function hasSeamless(){
        $product=$this->hasOne(Product::className(), ['product_product_name' => 'product_subcategory_name'])->one();     
        return $product->product_price_seamless>0?"true":"false";
    } 

    public function hasAngular(){
        $product=$this->hasOne(Product::className(), ['product_product_name' => 'product_subcategory_name'])->one();     
        return $product->product_angular_calculation_size>0?"true":"false";
    } 


    public function getProductPrice()
    {
        $product=$this->hasOne(Product::className(), ['product_product_name' => 'product_subcategory_name'])->one();
        return $product->product_price;
    }

    /**
     * @param CartPositionInterface $position
     * @param int $quantity
     */
    public function put($position, $quantity = 1)
    {
        if (isset($this->_positions[$position->getId()])) {
            $this->_positions[$position->getId()]->setQuantity(
                $this->_positions[$position->getId()]->getQuantity() + $quantity);

        } else {
            $position->setQuantity($quantity);
            $this->_positions[$position->getId()] = $position;
        }
        $this->trigger(self::EVENT_POSITION_PUT, new CartActionEvent([
            'action' => CartActionEvent::ACTION_POSITION_PUT,
            'position' => $this->_positions[$position->getId()],
        ]));
        $this->trigger(self::EVENT_CART_CHANGE, new CartActionEvent([
            'action' => CartActionEvent::ACTION_POSITION_PUT,
            'position' => $this->_positions[$position->getId()],
        ]));
        if ($this->storeInSession)
            $this->saveToSession();
        die();
    }


  
}
