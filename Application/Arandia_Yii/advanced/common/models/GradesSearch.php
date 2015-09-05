<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Grades;

/**
 * GradesSearch represents the model behind the search form about `common\models\Grades`.
 */
class GradesSearch extends Grades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'subject_id', 'student_id'], 'integer'],
            [['first_grading', 'second_grading', 'third_grading', 'fourth_grading', 'final_grading'], 'number'],
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
        $query = Grades::find();

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
            'first_grading' => $this->first_grading,
            'second_grading' => $this->second_grading,
            'third_grading' => $this->third_grading,
            'fourth_grading' => $this->fourth_grading,
            'final_grading' => $this->final_grading,
            'subject_id' => $this->subject_id,
            'student_id' => $this->student_id,
        ]);

        return $dataProvider;
    }
}
