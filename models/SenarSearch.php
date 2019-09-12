<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Senar;

/**
 * SenarSearch represents the model behind the search form of `app\models\Senar`.
 */
class SenarSearch extends Senar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'POINT_REPULSION_POWER', 'POINT_DURABILITY', 'POINT_HITTING_SOUND', 'POINT_SHOCK_ABSORPTION', 'POINT_CONTROL', 'AVERAGE_PRICE'], 'integer'],
            [['STRING_BRAND', 'STRING_NAME', 'STRING_CATEGORY', 'STRING_FEELING'], 'safe'],
            [['STRING_DIAMETER'], 'number'],
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
        $query = Senar::find();

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
            'STRING_DIAMETER' => $this->STRING_DIAMETER,
            'POINT_REPULSION_POWER' => $this->POINT_REPULSION_POWER,
            'POINT_DURABILITY' => $this->POINT_DURABILITY,
            'POINT_HITTING_SOUND' => $this->POINT_HITTING_SOUND,
            'POINT_SHOCK_ABSORPTION' => $this->POINT_SHOCK_ABSORPTION,
            'POINT_CONTROL' => $this->POINT_CONTROL,
            'AVERAGE_PRICE' => $this->AVERAGE_PRICE,
        ]);

        $query->andFilterWhere(['like', 'STRING_BRAND', $this->STRING_BRAND])
            ->andFilterWhere(['like', 'STRING_NAME', $this->STRING_NAME])
            ->andFilterWhere(['like', 'STRING_CATEGORY', $this->STRING_CATEGORY])
            ->andFilterWhere(['like', 'STRING_FEELING', $this->STRING_FEELING]);

        return $dataProvider;
    }
}
