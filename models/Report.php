<?php

namespace app\models;

use yii\db\Query;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dqc841;

/**
 * Dqc841Search represents the model behind the search form of `app\models\Dqc841`.
 */
class Report extends Dqc841
{
    public $model;
    public $fat_part_no;
    public $total_location;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'fat_part_no', 'total_location'], 'integer'],
            [['model', 'fat_part_no', 'total_location'], 'safe'],
            [['parts_no', 'unt_usg', 'description', 'ref_designator', 'update_dt', 'create_dt'], 'safe'],
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
        $query = Dqc841::find()->joinWith('fatPartNo', true, 'INNER JOIN')->joinWith('fatPartNo.model0', true, 'INNER JOIN');

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
            'dqcmodel.id'           => $this->model,
            'dqc84.total_location'  => $this->total_location,
            'dqc841.fat_part_no'    => $this->fat_part_no,
        ]);

        $query
            ->andFilterWhere(['like', 'parts_no', $this->parts_no])
            ->andFilterWhere(['like', 'unt_usg', $this->unt_usg])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ref_designator', $this->ref_designator]);

        return $dataProvider;
    }
}
