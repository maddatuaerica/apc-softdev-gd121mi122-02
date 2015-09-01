<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Student_id', 'Student_lastname', 'Student_firstname', 'Student_middlename', 'Student_email', 'Student_address', 'Student_contact'], 'safe'],
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
        $query = Student::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Student_id', $this->Student_id])
            ->andFilterWhere(['like', 'Student_lastname', $this->Student_lastname])
            ->andFilterWhere(['like', 'Student_firstname', $this->Student_firstname])
            ->andFilterWhere(['like', 'Student_middlename', $this->Student_middlename])
            ->andFilterWhere(['like', 'Student_email', $this->Student_email])
            ->andFilterWhere(['like', 'Student_address', $this->Student_address])
            ->andFilterWhere(['like', 'Student_contact', $this->Student_contact]);

        return $dataProvider;
    }
}
