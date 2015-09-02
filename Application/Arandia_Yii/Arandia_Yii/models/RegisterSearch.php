<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Register;

/**
 * RegisterSearch represents the model behind the search form about `app\models\Register`.
 */
class RegisterSearch extends Register
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_number', 'lastname', 'firstname', 'middlename', 'address', 'birthday', 'birthplace', 'grade_level', 'prev_school', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'emerg_name', 'relation', 'username', 'password', 'usertype'], 'safe'],
            [['gender', 'age', 'contact_num', 'tel_num'], 'integer'],
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
        $query = Register::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'age' => $this->age,
            'contact_num' => $this->contact_num,
            'tel_num' => $this->tel_num,
        ]);

        $query->andFilterWhere(['like', 'id_number', $this->id_number])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'grade_level', $this->grade_level])
            ->andFilterWhere(['like', 'prev_school', $this->prev_school])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'father_occupation', $this->father_occupation])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_occupation', $this->mother_occupation])
            ->andFilterWhere(['like', 'emerg_name', $this->emerg_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'usertype', $this->usertype]);

        return $dataProvider;
    }
}
