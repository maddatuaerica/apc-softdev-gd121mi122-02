<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $address
 * @property string $birthday
 * @property string $birthplace
 * @property string $gender
 * @property integer $age
 * @property integer $contact_number
 * @property string $grade_level
 * @property string $previous_school
 * @property string $father_name
 * @property string $father_occupation
 * @property string $mother_name
 * @property string $mother_occupation
 * @property string $guardian
 * @property string $relation
 * @property integer $telephone_number
 * @property string $username
 * @property string $password
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'middlename', 'address', 'birthday', 'birthplace', 'gender', 'age', 'contact_number', 'grade_level', 'previous_school', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'guardian', 'relation', 'telephone_number', 'username', 'password'], 'required'],
            [['birthday'], 'safe'],
            [['age', 'contact_number', 'telephone_number'], 'integer'],
            [['lastname', 'firstname', 'middlename', 'birthplace', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'guardian'], 'string', 'max' => 50],
            [['address', 'previous_school'], 'string', 'max' => 100],
            [['gender', 'grade_level', 'relation', 'username', 'password'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'birthplace' => 'Birthplace',
            'gender' => 'Gender',
            'age' => 'Age',
            'contact_number' => 'Contact Number',
            'grade_level' => 'Grade Level',
            'previous_school' => 'Previous School',
            'father_name' => 'Father Name',
            'father_occupation' => 'Father Occupation',
            'mother_name' => 'Mother Name',
            'mother_occupation' => 'Mother Occupation',
            'guardian' => 'Guardian',
            'relation' => 'Relation',
            'telephone_number' => 'Telephone Number',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
