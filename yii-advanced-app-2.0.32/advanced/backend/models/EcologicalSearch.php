<?php
/**
 * Team: NKU-不想重装
 * Coding By: 李晓彤
 * 本文件用于后台生态环境影响管理
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ecological;

/**
 * EcologicalSearch represents the model behind the search form of `backend\models\Ecological`.
 */
class EcologicalSearch extends Ecological
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_id'], 'integer'],
            [['name', 'influence', 'picture', 'picture2', 'picture3'], 'safe'],
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
        $query = Ecological::find();

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
            ->andFilterWhere(['like', 'influence', $this->influence])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'picture2', $this->picture2])
            ->andFilterWhere(['like', 'picture3', $this->picture3]);

        return $dataProvider;
    }
}
