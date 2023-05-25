<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Qlist;

/**
 * QlistSearch represents the model behind the search form of `common\models\Qlist`.
 */
class QlistSearch extends Qlist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subject_id', 'level_id', 'correct_ans', 'type', 'user_id', 'status'], 'integer'],
            [['qcontent', 'ans1', 'ans2', 'ans3', 'ans4', 'image', 'created_at', 'updated_at'], 'safe'],
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
        $query = Qlist::find();

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
            'subject_id' => $this->subject_id,
            'level_id' => $this->level_id,
            'correct_ans' => $this->correct_ans,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['ilike', 'qcontent', $this->qcontent])
            ->andFilterWhere(['ilike', 'ans1', $this->ans1])
            ->andFilterWhere(['ilike', 'ans2', $this->ans2])
            ->andFilterWhere(['ilike', 'ans3', $this->ans3])
            ->andFilterWhere(['ilike', 'ans4', $this->ans4])
            ->andFilterWhere(['ilike', 'image', $this->image]);

        return $dataProvider;
    }
}
