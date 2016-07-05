<?php

namespace backend\modules\specials\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\specials\models\Specials;

/**
 * SpecialsSearch represents the model behind the search form about `backend\modules\specials\models\Specials`.
 */
class SpecialsSearch extends Specials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dt_add', 'dt_update', 'type'], 'integer'],
            [['title', 'img', 'short_description', 'description', 'slug'], 'safe'],
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
        $query = Specials::find();

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
            'dt_add' => $this->dt_add,
            'dt_update' => $this->dt_update,
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'short_description', $this->short_description])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
