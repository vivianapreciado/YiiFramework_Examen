<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActorHasPelicula;

/**
 * ActorHasPeliculaSearch represents the model behind the search form of `app\models\ActorHasPelicula`.
 */
class ActorHasPeliculaSearch extends ActorHasPelicula
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_idactor', 'fk_idpelicula'], 'integer'],
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
        $query = ActorHasPelicula::find();

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
            'fk_idactor' => $this->fk_idactor,
            'fk_idpelicula' => $this->fk_idpelicula,
        ]);

        return $dataProvider;
    }
}
