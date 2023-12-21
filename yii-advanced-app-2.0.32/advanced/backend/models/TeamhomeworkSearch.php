<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本代码用于后台团队作业下载
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teamhomework;

/**
 * TeamhomeworkSearch represents the model behind the search form of `backend\models\Teamhomework`.
 */
class TeamhomeworkSearch extends Teamhomework
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_id'], 'integer'],
            [['name', 'position'], 'safe'],
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
        $query = Teamhomework::find();

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
            ->andFilterWhere(['like', 'position', $this->position]);

        return $dataProvider;
    }
}
