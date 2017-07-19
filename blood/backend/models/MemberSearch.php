<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Member;

/**
 * MemberSearch represents the model behind the search form about `backend\models\Member`.
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'member_age', 'member_contact_no', 'member_weight'], 'integer'],
            [['member_name', 'member_gender', 'member_address', 'member_bloog_group'], 'safe'],
            [['member_height'], 'number'],
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
        $query = Member::find();

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
            'member_id' => $this->member_id,
            'member_age' => $this->member_age,
            'member_contact_no' => $this->member_contact_no,
            'member_height' => $this->member_height,
            'member_weight' => $this->member_weight,
        ]);

        $query->andFilterWhere(['like', 'member_name', $this->member_name])
            ->andFilterWhere(['like', 'member_gender', $this->member_gender])
            ->andFilterWhere(['like', 'member_address', $this->member_address])
            ->andFilterWhere(['like', 'member_bloog_group', $this->member_bloog_group]);

        return $dataProvider;
    }
}
