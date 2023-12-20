<?php
/**
 * Team: 不想重装队
 * Coding By: 姜涵
 * 本文件用于新闻界面
 */
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Timeline;

/**
 * TimelineSearch represents the model behind the search form of `frontend\models\Timeline`.
 */
class TimelineSearch extends Timeline
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date', 'url'], 'safe'],
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
        $query = Timeline::find();

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
            'date' => $this->date,
            'num_id' => $this->num_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
