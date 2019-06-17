<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Audit;

/**
 * AuditSearch represents the model behind the search form of `common\models\Audit`.
 */
class AuditSearch extends Audit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_audit', 'number_audit', 'count_place', 'number_korpus'], 'integer'],
            [['name_audit', 'type_audit'], 'safe'],
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
        $query = Audit::find();

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
            'id_audit' => $this->id_audit,
            'number_audit' => $this->number_audit,
            'count_place' => $this->count_place,
            'number_korpus' => $this->number_korpus,
        ]);

        $query->andFilterWhere(['like', 'name_audit', $this->name_audit])
            ->andFilterWhere(['like', 'type_audit', $this->type_audit]);

        return $dataProvider;
    }
}
