<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `backend\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_contact'], 'integer'],
            [['teacher_lastname', 'teacher_firstname', 'teacher_middlename', 'teacher_email', 'teacher_address', 'teacher_status'], 'safe'],
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
        $query = Teacher::find();

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
            'teacher_contact' => $this->teacher_contact,
        ]);

        $query->andFilterWhere(['like', 'teacher_lastname', $this->teacher_lastname])
            ->andFilterWhere(['like', 'teacher_firstname', $this->teacher_firstname])
            ->andFilterWhere(['like', 'teacher_middlename', $this->teacher_middlename])
            ->andFilterWhere(['like', 'teacher_email', $this->teacher_email])
            ->andFilterWhere(['like', 'teacher_address', $this->teacher_address])
            ->andFilterWhere(['like', 'teacher_status', $this->teacher_status]);

        return $dataProvider;
    }
}
