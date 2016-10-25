<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articles;

/**
 * ArticlesSeach represents the model behind the search form about `app\models\Articles`.
 */
class ArticlesSeach extends Articles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'AutorID'], 'integer'],
            [['Published', 'Tittle', 'Content', 'PreContent'], 'safe'],
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
        $query = Articles::find();

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
            'ID' => $this->ID,
            'AutorID' => $this->AutorID,
            'Published' => $this->Published,
        ]);

        $query->andFilterWhere(['like', 'Tittle', $this->Tittle])
            ->andFilterWhere(['like', 'Content', $this->Content])
            ->andFilterWhere(['like', 'PreContent', $this->PreContent]);

        return $dataProvider;
    }
}
