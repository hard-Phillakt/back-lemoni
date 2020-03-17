<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SbOrder;

/**
 * SbOrderSearch represents the model behind the search form of `app\models\SbOrder`.
 */
class SbOrderSearch extends SbOrder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'orderNumber'], 'integer'],
            [['orderDescription', 'transDate', 'formattedAmount', 'email', 'ip', 'panMasked', 'paymentSystem'], 'safe'],
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
        $query = SbOrder::find();

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
            'orderNumber' => $this->orderNumber,
        ]);

        $query->andFilterWhere(['like', 'orderDescription', $this->orderDescription])
            ->andFilterWhere(['like', 'transDate', $this->transDate])
            ->andFilterWhere(['like', 'formattedAmount', $this->formattedAmount])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'panMasked', $this->panMasked])
            ->andFilterWhere(['like', 'paymentSystem', $this->paymentSystem]);

        return $dataProvider;
    }
}
