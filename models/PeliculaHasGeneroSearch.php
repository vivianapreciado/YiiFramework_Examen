<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PeliculaHasGenero;

/**
 * PeliculaHasGeneroSearch represents the model behind the search form of `app\models\PeliculaHasGenero`.
 */
class PeliculaHasGeneroSearch extends PeliculaHasGenero
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_idpelicula', 'fk_idcategoria'], 'integer'],
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
        $query = PeliculaHasGenero::find();

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
            'fk_idpelicula' => $this->fk_idpelicula,
            'fk_idcategoria' => $this->fk_idcategoria,
        ]);

        return $dataProvider;
    }
}
