<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Predmet;

/**
 * PredmetSearch represents the model behind the search form of `common\models\Predmet`.
 */
class PredmetSearch extends Predmet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_predmet', 'id_prepod'], 'integer'],
            [['name_predmet'], 'safe'],
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
        $query = Predmet::find();

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
            'id_predmet' => $this->id_predmet,
            'id_prepod' => $this->id_prepod,
        ]);

        $query->andFilterWhere(['like', 'name_predmet', $this->name_predmet]);

        return $dataProvider;
    }
}
