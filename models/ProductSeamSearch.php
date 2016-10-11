<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductSeam;

/**
 * ProductSeamSearch represents the model behind the search form about `app\models\ProductSeam`.
 */
class ProductSeamSearch extends ProductSeam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_seam_id'], 'integer'],
            [['product_seam_name', 'product_seam_product_color', 'product_seam_postfix'], 'safe'],
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
        $query = ProductSeam::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'product_seam_id' => $this->product_seam_id,
        ]);

        $query->andFilterWhere(['like', 'product_seam_name', $this->product_seam_name])
            ->andFilterWhere(['like', 'product_seam_product_color', $this->product_seam_product_color])
            ->andFilterWhere(['like', 'product_seam_postfix', $this->product_seam_postfix]);

        return $dataProvider;
    }
}
