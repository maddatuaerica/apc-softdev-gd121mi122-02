<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $student_lastname
 * @property string $student_firstname
 * @property string $student_middlename
 * @property string $student_email
 * @property string $student_address
 * @property integer $student_contact
 *
 * @property Classes[] $classes
 * @property Grades[] $grades
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
            [['student_lastname', 'student_firstname', 'student_middlename', 'student_email', 'student_address', 'student_contact'], 'required'],
            [['student_contact'], 'integer'],
            [['student_lastname', 'student_firstname', 'student_middlename', 'student_email'], 'string', 'max' => 45],
            [['student_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_lastname' => 'Student Lastname',
            'student_firstname' => 'Student Firstname',
            'student_middlename' => 'Student Middlename',
            'student_email' => 'Student Email',
            'student_address' => 'Student Address',
            'student_contact' => 'Student Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grades::className(), ['student_id' => 'id']);
    }
}
