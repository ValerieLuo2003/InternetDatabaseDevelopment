<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Casestudy;

/**
 * CasestudySearch 表示 Casestudy 模型后面的搜索表单。
 */
class CasestudySearch extends Casestudy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name', 'casecontent', 'picture'], 'safe'],
            [['num_id'], 'integer'],
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
        $query = Casestudy::find();

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

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'casecontent', $this->casecontent])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
