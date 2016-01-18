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
            [['product_product_name', 'product_product_image', 'product_category_name', 'product_regular_size', 'product_regular_thickness', 'product_regular_quantity', 'product_regular_repeatability', 'product_regular_warning', 'product_angular_size', 'product_angular_thickness', 'product_angular_quantity', 'product_angular_repeatability', 'product_angular_warning'], 'safe'],
            [['product_regular_weight', 'product_angular_weight', 'product_regular_calculation_size', 'product_angular_calculation_size', 'product_angular_calculation_size_square', 'product_price', 'product_regular_seamless_calculation_size', 'product_angular_seamless_calculation_size', 'product_angular_seamless_calculation_size_square', 'product_price_seamless'], 'number'],
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
            'product_regular_weight' => $this->product_regular_weight,
            'product_angular_weight' => $this->product_angular_weight,
            'product_regular_calculation_size' => $this->product_regular_calculation_size,
            'product_angular_calculation_size' => $this->product_angular_calculation_size,
            'product_angular_calculation_size_square' => $this->product_angular_calculation_size_square,
            'product_price' => $this->product_price,
            'product_regular_seamless_calculation_size' => $this->product_regular_seamless_calculation_size,
            'product_angular_seamless_calculation_size' => $this->product_angular_seamless_calculation_size,
            'product_angular_seamless_calculation_size_square' => $this->product_angular_seamless_calculation_size_square,
            'product_price_seamless' => $this->product_price_seamless,
        ]);

        $query->andFilterWhere(['like', 'product_product_name', $this->product_product_name])
            ->andFilterWhere(['like', 'product_product_image', $this->product_product_image])
            ->andFilterWhere(['like', 'product_category_name', $this->product_category_name])
            ->andFilterWhere(['like', 'product_regular_size', $this->product_regular_size])
            ->andFilterWhere(['like', 'product_regular_thickness', $this->product_regular_thickness])
            ->andFilterWhere(['like', 'product_regular_quantity', $this->product_regular_quantity])
            ->andFilterWhere(['like', 'product_regular_repeatability', $this->product_regular_repeatability])
            ->andFilterWhere(['like', 'product_regular_warning', $this->product_regular_warning])
            ->andFilterWhere(['like', 'product_angular_size', $this->product_angular_size])
            ->andFilterWhere(['like', 'product_angular_thickness', $this->product_angular_thickness])
            ->andFilterWhere(['like', 'product_angular_quantity', $this->product_angular_quantity])
            ->andFilterWhere(['like', 'product_angular_repeatability', $this->product_angular_repeatability])
            ->andFilterWhere(['like', 'product_angular_warning', $this->product_angular_warning]);

        return $dataProvider;
    }
}
