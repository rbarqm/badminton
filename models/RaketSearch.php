<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Raket;

/**
 * RaketSearch represents the model behind the search form of `app\models\Raket`.
 */
class RaketSearch extends Raket
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'MAX_TENSION', 'PRICE'], 'integer'],
            [['BRAND', 'NAME', 'CATEGORY', 'WEIGHT', 'GRIP'], 'safe'],
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
        $query = Raket::find();

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
            'ID' => $this->ID,
            'MAX_TENSION' => $this->MAX_TENSION,
            'PRICE' => $this->PRICE,
        ]);

        $query->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'CATEGORY', $this->CATEGORY])
            ->andFilterWhere(['like', 'WEIGHT', $this->WEIGHT])
            ->andFilterWhere(['like', 'GRIP', $this->GRIP]);

        return $dataProvider;
    }
}
