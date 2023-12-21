<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Personhomework;

/**
 * PersonhomeworkSearch represents the model behind the search form of `backend\models\Personhomework`.
 */
class PersonhomeworkSearch extends Personhomework
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_id'], 'integer'],
            [['name', 'hw1', 'hw2', 'hw3', 'github'], 'safe'],
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
        $query = Personhomework::find();

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
            'num_id' => $this->num_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'hw1', $this->hw1])
            ->andFilterWhere(['like', 'hw2', $this->hw2])
            ->andFilterWhere(['like', 'hw3', $this->hw3])
            ->andFilterWhere(['like', 'github', $this->github]);

        return $dataProvider;
    }
}
