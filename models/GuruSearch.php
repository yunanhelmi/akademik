<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guru;

/**
 * app\models\GuruSearch represents the model behind the search form about `app\models\Guru`.
 */
 class GuruSearch extends Guru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'alamat'], 'integer'],
            [['nama', 'no_telp', 'email', 'nip'], 'safe'],
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
        $query = Guru::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'alamat' => $this->alamat,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
