<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Movies;

/**
 * MoviesSearch represents the model behind the search form of `common\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'catalog_id', 'janr_id', 'age'], 'integer'],
            [['title', 'desc', 'star', 'format', 'created_at', 'year'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Movies::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'country_id' => $this->country_id,
            'catalog_id' => $this->catalog_id,
            'janr_id' => $this->janr_id,
            'age' => $this->age,
            'created_at' => $this->created_at,
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'star', $this->star])
            ->andFilterWhere(['like', 'format', $this->format]);

        return $dataProvider;
    }
}
