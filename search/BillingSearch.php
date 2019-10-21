<?php

namespace app\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Billing;

/**
 * BillingSearch represents the model behind the search form of `app\models\Billing`.
 */
class BillingSearch extends Billing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['driver', 'fleet', 'item_name', 'item_total', 'item_code', 'invoice', 'note'], 'safe'],
            [['total_price'], 'number'],
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
        $query = Billing::find();

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
            'total_price' => $this->total_price,
        ]);

        $query->andFilterWhere(['like', 'driver', $this->driver])
            ->andFilterWhere(['like', 'fleet', $this->fleet])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'item_total', $this->item_total])
            ->andFilterWhere(['like', 'item_code', $this->item_code])
            ->andFilterWhere(['like', 'invoice', $this->invoice])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
