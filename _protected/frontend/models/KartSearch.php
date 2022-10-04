<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kart;

/**
 * KartSearch represents the model behind the search form of `frontend\models\Kart`.
 */
class KartSearch extends Kart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_rt', 'r401', 'r404', 'r405', 'r406tgl', 'r406bln', 'r406thn', 'r407', 'r408', 'r409', 'r410', 'r411', 'r412', 'r413', 'r414', 'r415', 'r416', 'r416a', 'r416b', 'r417', 'r418', 'r419', 'r420', 'r421', 'r422', 'r423', 'r424', 'r425', 'r426', 'r427', 'r428a', 'r428b', 'r428c', 'r428d', 'r428e', 'r428f', 'r428g', 'r428h', 'r428i', 'r428j', 'r429', 'r430', 'r431a', 'r431b', 'r431c', 'r431d', 'r431e', 'r431f'], 'integer'],
            [['r101', 'r102', 'r103', 'r104', 'r105', 'r106', 'r402', 'r403', 'created_at', 'updated_at'], 'safe'],
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
        $query = Kart::find();

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
            'id_rt' => $this->id_rt,
            'r401' => $this->r401,
            'r404' => $this->r404,
            'r405' => $this->r405,
            'r406tgl' => $this->r406tgl,
            'r406bln' => $this->r406bln,
            'r406thn' => $this->r406thn,
            'r407' => $this->r407,
            'r408' => $this->r408,
            'r409' => $this->r409,
            'r410' => $this->r410,
            'r411' => $this->r411,
            'r412' => $this->r412,
            'r413' => $this->r413,
            'r414' => $this->r414,
            'r415' => $this->r415,
            'r416' => $this->r416,
            'r416a' => $this->r416a,
            'r416b' => $this->r416b,
            'r417' => $this->r417,
            'r418' => $this->r418,
            'r419' => $this->r419,
            'r420' => $this->r420,
            'r421' => $this->r421,
            'r422' => $this->r422,
            'r423' => $this->r423,
            'r424' => $this->r424,
            'r425' => $this->r425,
            'r426' => $this->r426,
            'r427' => $this->r427,
            'r428a' => $this->r428a,
            'r428b' => $this->r428b,
            'r428c' => $this->r428c,
            'r428d' => $this->r428d,
            'r428e' => $this->r428e,
            'r428f' => $this->r428f,
            'r428g' => $this->r428g,
            'r428h' => $this->r428h,
            'r428i' => $this->r428i,
            'r428j' => $this->r428j,
            'r429' => $this->r429,
            'r430' => $this->r430,
            'r431a' => $this->r431a,
            'r431b' => $this->r431b,
            'r431c' => $this->r431c,
            'r431d' => $this->r431d,
            'r431e' => $this->r431e,
            'r431f' => $this->r431f,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'r101', $this->r101])
            ->andFilterWhere(['like', 'r102', $this->r102])
            ->andFilterWhere(['like', 'r103', $this->r103])
            ->andFilterWhere(['like', 'r104', $this->r104])
            ->andFilterWhere(['like', 'r105', $this->r105])
            ->andFilterWhere(['like', 'r106', $this->r106])
            ->andFilterWhere(['like', 'r402', $this->r402])
            ->andFilterWhere(['like', 'r403', $this->r403]);

        return $dataProvider;
    }
}
