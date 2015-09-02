<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $Student_id
 * @property string $Student_lastname
 * @property string $Student_firstname
 * @property string $Student_middlename
 * @property string $Student_email
 * @property string $Student_address
 * @property string $Student_contact
 *
 * @property Classes[] $classes
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Student_id', 'Student_lastname', 'Student_firstname', 'Student_middlename', 'Student_email', 'Student_address', 'Student_contact'], 'required'],
            [['Student_id'], 'string', 'max' => 15],
            [['Student_lastname', 'Student_firstname', 'Student_middlename', 'Student_email', 'Student_contact'], 'string', 'max' => 45],
            [['Student_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Student_id' => 'Student ID',
            'Student_lastname' => 'Student Lastname',
            'Student_firstname' => 'Student Firstname',
            'Student_middlename' => 'Student Middlename',
            'Student_email' => 'Student Email',
            'Student_address' => 'Student Address',
            'Student_contact' => 'Student Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['Student_id' => 'Student_id']);
    }
}
