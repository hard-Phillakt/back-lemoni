<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CandieGoods;

/**
 * CandieGoodsSearch represents the model behind the search form of `app\models\CandieGoods`.
 */
class CandieGoodsSearch extends CandieGoods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lm_price_for_kg'], 'integer'],
            [['lm_essence', 'lm_title', 'lm_description', 'lm_content', 'lm_weight', 'lm_type', 'lm_count_level', 'lm_subjects', 'lm_create_box', 'lm_publicate', 'lm_prioritet', 'lm_img_one', 'lm_img_two', 'lm_img_three', 'lm_compilation', 'lm_alter_card'], 'safe'],
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
        $query = CandieGoods::find()->orderBy('id DESC');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
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
            'lm_price_for_kg' => $this->lm_price_for_kg,
        ]);

        $query->andFilterWhere(['like', 'lm_essence', $this->lm_essence])
            ->andFilterWhere(['like', 'lm_title', $this->lm_title])
            ->andFilterWhere(['like', 'lm_description', $this->lm_description])
            ->andFilterWhere(['like', 'lm_content', $this->lm_content])
            ->andFilterWhere(['like', 'lm_weight', $this->lm_weight])
            ->andFilterWhere(['like', 'lm_type', $this->lm_type])
            ->andFilterWhere(['like', 'lm_count_level', $this->lm_count_level])
            ->andFilterWhere(['like', 'lm_subjects', $this->lm_subjects])
            ->andFilterWhere(['like', 'lm_create_box', $this->lm_create_box])
            ->andFilterWhere(['like', 'lm_publicate', $this->lm_publicate])
            ->andFilterWhere(['like', 'lm_prioritet', $this->lm_prioritet])
            ->andFilterWhere(['like', 'lm_img_one', $this->lm_img_one])
            ->andFilterWhere(['like', 'lm_img_two', $this->lm_img_two])
            ->andFilterWhere(['like', 'lm_img_three', $this->lm_img_three])
            ->andFilterWhere(['like', 'lm_compilation', $this->lm_compilation])
            ->andFilterWhere(['like', 'lm_alter_card', $this->lm_alter_card]);

        return $dataProvider;
    }
}
