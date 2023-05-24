<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Student;

/**
 * StudentSearch represents the model behind the search form of `common\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'code_hems', 'imie', 'status', 'group_id'], 'integer'],
            [['full_name', 'fuqorolik', 'davlat', 'millat', 'region', 'tuman', 'jins', 'bdate', 'pasport', 'fakultet', 'group_name', 'mvdir', 'emode_name', 'utype'], 'safe'],
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
        $query = Student::find();

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
            'code_hems' => $this->code_hems,
            'bdate' => $this->bdate,
            'imie' => $this->imie,
            'status' => $this->status,
            'group_id' => $this->group_id,
        ]);

        $query->andFilterWhere(['ilike', 'full_name', $this->full_name])
            ->andFilterWhere(['ilike', 'fuqorolik', $this->fuqorolik])
            ->andFilterWhere(['ilike', 'davlat', $this->davlat])
            ->andFilterWhere(['ilike', 'millat', $this->millat])
            ->andFilterWhere(['ilike', 'region', $this->region])
            ->andFilterWhere(['ilike', 'tuman', $this->tuman])
            ->andFilterWhere(['ilike', 'jins', $this->jins])
            ->andFilterWhere(['ilike', 'pasport', $this->pasport])
            ->andFilterWhere(['ilike', 'fakultet', $this->fakultet])
            ->andFilterWhere(['ilike', 'group_name', $this->group_name])
            ->andFilterWhere(['ilike', 'mvdir', $this->mvdir])
            ->andFilterWhere(['ilike', 'emode_name', $this->emode_name])
            ->andFilterWhere(['ilike', 'utype', $this->utype]);

        return $dataProvider;
    }
}
