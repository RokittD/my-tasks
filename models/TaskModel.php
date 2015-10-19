<?php

namespace rokittd\tasks\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use rokittd\tasks\models\TaskRecord;

/**
 * TaskModel represents the model behind the search form about `rokittd\tasks\models\TaskRecord`.
 */
class TaskModel extends TaskRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'user_id', 'status', 'closed_at'], 'integer'],
            [['description', 'estimate'], 'safe'],
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
        $query = TaskRecord::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'closed_at' => $this->closed_at,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'estimate', $this->estimate]);

        return $dataProvider;
    }
}
