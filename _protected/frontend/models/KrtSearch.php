<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Krt;

/**
 * KrtSearch represents the model behind the search form of `frontend\models\Krt`.
 */
class KrtSearch extends Krt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_sls', 'r110', 'r111', 'r112', 'r114', 'r115', 'r301a', 'r301b', 'r302', 'r303', 'r304', 'r305', 'r306a', 'r306b', 'r307a', 'r307b1', 'r307b2', 'r307b3', 'r308', 'r309a', 'r309b', 'r310', 'r501a', 'r501a_bln', 'r501a_thn', 'r501b', 'r501b_bln', 'r501b_thn', 'r501c', 'r501c_bln', 'r501c_thn', 'r501d', 'r501d_bln', 'r501d_thn', 'r501e', 'r501e_bln', 'r501e_thn', 'r502a', 'r502b', 'r502c', 'r502d', 'r502e', 'r502f', 'r502g', 'r502h', 'r502i', 'r502j', 'r502k', 'r502l', 'r502m', 'r502n', 'r503a', 'r503b', 'r504a', 'r504b', 'r504c', 'r504d', 'r504e', 'r505', 'r506', 'flag_error', 'status_kirim'], 'integer'],
            [['r101', 'r102', 'r103', 'r104', 'r105', 'r106', 'r108'], 'safe'],
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
        $query = Krt::find();

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
            'id_sls' => $this->id_sls,
            'r110' => $this->r110,
            'r111' => $this->r111,
            'r112' => $this->r112,
            'r114' => $this->r114,
            'r115' => $this->r115,
            'r301a' => $this->r301a,
            'r301b' => $this->r301b,
            'r302' => $this->r302,
            'r303' => $this->r303,
            'r304' => $this->r304,
            'r305' => $this->r305,
            'r306a' => $this->r306a,
            'r306b' => $this->r306b,
            'r307a' => $this->r307a,
            'r307b1' => $this->r307b1,
            'r307b2' => $this->r307b2,
            'r307b3' => $this->r307b3,
            'r308' => $this->r308,
            'r309a' => $this->r309a,
            'r309b' => $this->r309b,
            'r310' => $this->r310,
            'r501a' => $this->r501a,
            'r501a_bln' => $this->r501a_bln,
            'r501a_thn' => $this->r501a_thn,
            'r501b' => $this->r501b,
            'r501b_bln' => $this->r501b_bln,
            'r501b_thn' => $this->r501b_thn,
            'r501c' => $this->r501c,
            'r501c_bln' => $this->r501c_bln,
            'r501c_thn' => $this->r501c_thn,
            'r501d' => $this->r501d,
            'r501d_bln' => $this->r501d_bln,
            'r501d_thn' => $this->r501d_thn,
            'r501e' => $this->r501e,
            'r501e_bln' => $this->r501e_bln,
            'r501e_thn' => $this->r501e_thn,
            'r502a' => $this->r502a,
            'r502b' => $this->r502b,
            'r502c' => $this->r502c,
            'r502d' => $this->r502d,
            'r502e' => $this->r502e,
            'r502f' => $this->r502f,
            'r502g' => $this->r502g,
            'r502h' => $this->r502h,
            'r502i' => $this->r502i,
            'r502j' => $this->r502j,
            'r502k' => $this->r502k,
            'r502l' => $this->r502l,
            'r502m' => $this->r502m,
            'r502n' => $this->r502n,
            'r503a' => $this->r503a,
            'r503b' => $this->r503b,
            'r504a' => $this->r504a,
            'r504b' => $this->r504b,
            'r504c' => $this->r504c,
            'r504d' => $this->r504d,
            'r504e' => $this->r504e,
            'r505' => $this->r505,
            'r506' => $this->r506,
            'flag_error' => $this->flag_error,
            'status_kirim' => $this->status_kirim,
        ]);

        $query->andFilterWhere(['like', 'r101', $this->r101])
            ->andFilterWhere(['like', 'r102', $this->r102])
            ->andFilterWhere(['like', 'r103', $this->r103])
            ->andFilterWhere(['like', 'r104', $this->r104])
            ->andFilterWhere(['like', 'r105', $this->r105])
            ->andFilterWhere(['like', 'r106', $this->r106])
            ->andFilterWhere(['like', 'r108', $this->r108]);

        return $dataProvider;
    }
}
