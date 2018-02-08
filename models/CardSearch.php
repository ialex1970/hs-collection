<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Card;

/**
 * CardSearch represents the model behind the search form of `app\models\Card`.
 */
class CardSearch extends Card
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_card', 'crafting_cost', 'fid_type', 'fid_rarity'], 'integer'],
            [['name', 'fid_set', 'img'], 'safe'],
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
        $query = Card::find();

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
            'id_card' => $this->id_card,
            'crafting_cost' => $this->crafting_cost,
            'fid_type' => $this->fid_type,
            'fid_rarity' => $this->fid_rarity,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'fid_set', $this->fid_set])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
