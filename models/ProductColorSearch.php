<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductColor;

/**
 * ProductColorSearch represents the model behind the search form about `app\models\ProductColor`.
 */
class ProductColorSearch extends ProductColor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_color_id'], 'integer'],
            [['product_color_name', 'product_article', 'product_3ds_link', 'product_subcategory_name', 'product_color_image'], 'safe'],
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
        $query = ProductColor::find();

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
            'product_color_id' => $this->product_color_id,
        ]);

        $query->andFilterWhere(['like', 'product_color_name', $this->product_color_name])
            ->andFilterWhere(['like', 'product_article', $this->product_article])
            ->andFilterWhere(['like', 'product_3ds_link', $this->product_3ds_link])
            ->andFilterWhere(['like', 'product_subcategory_name', $this->product_subcategory_name])
            ->andFilterWhere(['like', 'product_color_image', $this->product_color_image]);

        return $dataProvider;
    }
}
