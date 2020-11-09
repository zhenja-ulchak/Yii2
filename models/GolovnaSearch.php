<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Golovna;

/**
 * GolovnaSearch represents the model behind the search form of `app\models\Golovna`.
 */
class GolovnaSearch extends Golovna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['content', 'content_text', 'head', 'head_text', 'footer', 'footer_text', 'logo'], 'safe'],
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
        $query = Golovna::find();

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
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'content_text', $this->content_text])
            ->andFilterWhere(['like', 'head', $this->head])
            ->andFilterWhere(['like', 'head_text', $this->head_text])
            ->andFilterWhere(['like', 'footer', $this->footer])
            ->andFilterWhere(['like', 'footer_text', $this->footer_text])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
