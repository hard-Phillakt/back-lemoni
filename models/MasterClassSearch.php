<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterClass;

/**
 * MasterClassSearch represents the model behind the search form of `app\models\MasterClass`.
 */
class MasterClassSearch extends MasterClass
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lm_price'], 'integer'],
            [['lm_essence', 'lm_title', 'lm_img', 'lm_description', 'lm_content', 'lm_date', 'lm_publicate', 'lm_prioritet'], 'safe'],
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
        $query = MasterClass::find();

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
            'lm_price' => $this->lm_price,
        ]);

        $query->andFilterWhere(['like', 'lm_essence', $this->lm_essence])
            ->andFilterWhere(['like', 'lm_title', $this->lm_title])
            ->andFilterWhere(['like', 'lm_img', $this->lm_img])
            ->andFilterWhere(['like', 'lm_description', $this->lm_description])
            ->andFilterWhere(['like', 'lm_content', $this->lm_content])
            ->andFilterWhere(['like', 'lm_date', $this->lm_date])
            ->andFilterWhere(['like', 'lm_publicate', $this->lm_publicate])
            ->andFilterWhere(['like', 'lm_prioritet', $this->lm_prioritet]);

        return $dataProvider;
    }
}
