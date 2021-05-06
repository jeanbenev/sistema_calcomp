<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dqc84;

/**
 * Dqc84Search represents the model behind the search form of `app\models\Dqc84`.
 */
class Dqc84Search extends Dqc84
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'model', 'total_location'], 'integer'],
            [['fat_part_no', 'update_dt', 'create_dt'], 'safe'],
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
        $query = Dqc84::find();

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
            'model' => $this->model,
            'total_location' => $this->total_location,
            'update_dt' => $this->update_dt,
            'create_dt' => $this->create_dt,
        ]);

        $query->andFilterWhere(['like', 'fat_part_no', $this->fat_part_no]);

        return $dataProvider;
    }
}
