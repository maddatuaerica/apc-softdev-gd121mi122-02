<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Teacher_id', 'Teacher_lastname', 'Teacher_firstname', 'Teacher_middlename', 'Teacher_email', 'Teacher_address', 'Teacher_contact', 'Teacher_status'], 'safe'],
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
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Teacher_id', $this->Teacher_id])
            ->andFilterWhere(['like', 'Teacher_lastname', $this->Teacher_lastname])
            ->andFilterWhere(['like', 'Teacher_firstname', $this->Teacher_firstname])
            ->andFilterWhere(['like', 'Teacher_middlename', $this->Teacher_middlename])
            ->andFilterWhere(['like', 'Teacher_email', $this->Teacher_email])
            ->andFilterWhere(['like', 'Teacher_address', $this->Teacher_address])
            ->andFilterWhere(['like', 'Teacher_contact', $this->Teacher_contact])
            ->andFilterWhere(['like', 'Teacher_status', $this->Teacher_status]);

        return $dataProvider;
    }
}
