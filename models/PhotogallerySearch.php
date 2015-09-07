<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Photogallery;

/**
 * PhotogallerySearch represents the model behind the search form about `app\models\Photogallery`.
 */
class PhotogallerySearch extends Photogallery
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['photo_name', 'photo_category', 'photo_subcategory', 'photo_image', 'photo_product'], 'safe'],
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
        $query = Photogallery::find();

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
        ]);

        $query->andFilterWhere(['like', 'photo_name', $this->photo_name])
            ->andFilterWhere(['like', 'photo_category', $this->photo_category])
            ->andFilterWhere(['like', 'photo_subcategory', $this->photo_subcategory])
            ->andFilterWhere(['like', 'photo_image', $this->photo_image])
            ->andFilterWhere(['like', 'photo_product', $this->photo_product]);

        return $dataProvider;
    }
}
