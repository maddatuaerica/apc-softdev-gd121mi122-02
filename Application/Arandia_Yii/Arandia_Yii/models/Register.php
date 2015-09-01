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
 * @property integer $contact_number
 * @property string $grade_level
 * @property string $previous_school
 * @property string $father_name
 * @property string $father_occupation
 * @property string $mother_name
 * @property string $mother_occupation
 * @property string $emergency_contact
 * @property string $relation
 * @property integer $telephone_number
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
            [['id_number', 'lastname', 'firstname', 'middlename', 'address', 'birthday', 'birthplace', 'gender', 'age', 'contact_number', 'grade_level', 'previous_school', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'emergency_contact', 'relation', 'telephone_number', 'username', 'password', 'usertype'], 'required'],
            [['birthday'], 'safe'],
            [['gender', 'age', 'contact_number', 'telephone_number'], 'integer'],
            [['id_number'], 'string', 'max' => 10],
            [['lastname', 'firstname', 'middlename', 'father_name', 'father_occupation', 'mother_name', 'mother_occupation', 'emergency_contact'], 'string', 'max' => 50],
            [['address', 'birthplace', 'previous_school'], 'string', 'max' => 100],
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
            'contact_number' => 'Contact Number',
            'grade_level' => 'Grade Level',
            'previous_school' => 'Previous School',
            'father_name' => 'Father Name',
            'father_occupation' => 'Father Occupation',
            'mother_name' => 'Mother Name',
            'mother_occupation' => 'Mother Occupation',
            'emergency_contact' => 'Emergency Contact',
            'relation' => 'Relation',
            'telephone_number' => 'Telephone Number',
            'username' => 'Username',
            'password' => 'Password',
            'usertype' => 'Usertype',
        ];
    }
}
