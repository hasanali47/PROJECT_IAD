<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Packs;

/**
 * PacksSearch represents the model behind the search form about `backend\models\Packs`.
 */
class PacksSearch extends Packs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pack_id', 'member_member_id'], 'integer'],
            [['blood_group', 'packed_date', 'expiry_date', 'packed_place_name'], 'safe'],
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
        $query = Packs::find();

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
            'pack_id' => $this->pack_id,
            'member_member_id' => $this->member_member_id,
            'packed_date' => $this->packed_date,
            'expiry_date' => $this->expiry_date,
        ]);

        $query->andFilterWhere(['like', 'blood_group', $this->blood_group])
            ->andFilterWhere(['like', 'packed_place_name', $this->packed_place_name]);

        return $dataProvider;
    }
}
