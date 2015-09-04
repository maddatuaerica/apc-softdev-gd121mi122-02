<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Register;

/**
 * RegisterSearch represents the model behind the search form about `backend\models\Register`.
 */
class RegisterSearch extends Register
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age', 'contact_number', 'telephone_number'], 'integer'],
            [['lastname', 'firstname', 'middlename', 'address', 'birthday', 'birthplace', 'gender', 'grade_level', 'previous_school', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'guardian', 'relation', 'username', 'password'], 'safe'],
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
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'contact_number' => $this->contact_number,
            'telephone_number' => $this->telephone_number,
        ]);

        $query->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'birthplace', $this->birthplace])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'grade_level', $this->grade_level])
            ->andFilterWhere(['like', 'previous_school', $this->previous_school])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'father_occupation', $this->father_occupation])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_occupation', $this->mother_occupation])
            ->andFilterWhere(['like', 'guardian', $this->guardian])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
