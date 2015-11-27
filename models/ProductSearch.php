<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_product_id'], 'integer'],
            [['product_product_name', 'product_product_image', 'product_category_name', 'product_category_short_description', 'product_category_short_characteristics'], 'safe'],
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
        $query = Product::find();

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
            'product_product_id' => $this->product_product_id,
        ]);

        $query->andFilterWhere(['like', 'product_product_name', $this->product_product_name])
            ->andFilterWhere(['like', 'product_product_image', $this->product_product_image])
            ->andFilterWhere(['like', 'product_category_name', $this->product_category_name])
            ->andFilterWhere(['like', 'product_category_short_description', $this->product_category_short_description])
            ->andFilterWhere(['like', 'product_category_short_characteristics', $this->product_category_short_characteristics]);

        return $dataProvider;
    }
}
