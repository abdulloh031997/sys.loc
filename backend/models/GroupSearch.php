<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Group;

/**
 * GroupSearch represents the model behind the search form of `common\models\Group`.
 */
class GroupSearch extends Group
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'special', 'emode_id', 'lang_id', 'faculty_id'], 'integer'],
            [['name', 'fakultet', 'utype', 'emode_name', 'lang_name', 'created_at'], 'safe'],
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
        $query = Group::find();

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
            'special' => $this->special,
            'emode_id' => $this->emode_id,
            'lang_id' => $this->lang_id,
            'created_at' => $this->created_at,
            'faculty_id' => $this->faculty_id,
        ]);

        $query->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'fakultet', $this->fakultet])
            ->andFilterWhere(['ilike', 'utype', $this->utype])
            ->andFilterWhere(['ilike', 'emode_name', $this->emode_name])
            ->andFilterWhere(['ilike', 'lang_name', $this->lang_name]);

        return $dataProvider;
    }
}
