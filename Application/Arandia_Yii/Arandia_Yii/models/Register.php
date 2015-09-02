<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property string $id_number
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $address
 * @property string $birthday
 * @property string $birthplace
 * @property integer $gender
 * @property integer $age
 * @property integer $contact_num
 * @property string $grade_level
 * @property string $prev_school
 * @property string $father_name
 * @property string $father_occupation
 * @property string $mother_name
 * @property string $mother_occupation
 * @property string $emerg_name
 * @property string $relation
 * @property integer $tel_num
 * @property string $username
 * @property string $password
 * @property string $usertype
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
            [['id_number', 'lastname', 'firstname', 'middlename', 'address', 'birthday', 'birthplace', 'gender', 'age', 'contact_num', 'grade_level', 'prev_school', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'emerg_name', 'relation', 'tel_num', 'username', 'password', 'usertype'], 'required'],
            [['birthday'], 'safe'],
            [['gender', 'age', 'contact_num', 'tel_num'], 'integer'],
            [['id_number'], 'string', 'max' => 10],
            [['lastname', 'firstname', 'middlename', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'emerg_name'], 'string', 'max' => 50],
            [['address', 'birthplace', 'prev_school'], 'string', 'max' => 100],
            [['grade_level', 'relation', 'username', 'password', 'usertype'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_number' => 'Id Number',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'birthplace' => 'Birthplace',
            'gender' => 'Gender',
            'age' => 'Age',
            'contact_num' => 'Contact Num',
            'grade_level' => 'Grade Level',
            'prev_school' => 'Prev School',
            'father_name' => 'Father Name',
            'father_occupation' => 'Father Occupation',
            'mother_name' => 'Mother Name',
            'mother_occupation' => 'Mother Occupation',
            'emerg_name' => 'Emerg Name',
            'relation' => 'Relation',
            'tel_num' => 'Tel Num',
            'username' => 'Username',
            'password' => 'Password',
            'usertype' => 'Usertype',
        ];
    }
}
