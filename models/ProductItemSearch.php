<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductItem;

/**
 * ProductItemSearch represents the model behind the search form about `app\models\ProductItem`.
 */
class ProductItemSearch extends ProductItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_item_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'product_item_price' => $this->product_item_price,
        ]);

        $query->andFilterWhere(['like', 'product_item_name', $this->product_item_name]);

        return $dataProvider;
    }
}
