<?php

namespace backend\modules\price\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\price\models\Price;

/**
 * PriceSearch represents the model behind the search form about `backend\modules\price\models\Price`.
 */
class PriceSearch extends Price
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price'], 'integer'],
            [['name', 'img', 'price_description', 'description', 'value'], 'safe'],
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
        $query = Price::find();

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
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'price_description', $this->price_description])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
