<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $teacher_lastname
 * @property string $teacher_firstname
 * @property string $teacher_middlename
 * @property string $teacher_email
 * @property string $teacher_address
 * @property integer $teacher_contact
 * @property string $teacher_status
 *
 * @property Classes[] $classes
 * @property Subject[] $subjects
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_lastname', 'teacher_firstname', 'teacher_middlename', 'teacher_email', 'teacher_address', 'teacher_contact', 'teacher_status'], 'required'],
            [['teacher_contact'], 'integer'],
            [['teacher_lastname', 'teacher_firstname', 'teacher_middlename', 'teacher_email', 'teacher_status'], 'string', 'max' => 45],
            [['teacher_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teacher_lastname' => 'Teacher Lastname',
            'teacher_firstname' => 'Teacher Firstname',
            'teacher_middlename' => 'Teacher Middlename',
            'teacher_email' => 'Teacher Email',
            'teacher_address' => 'Teacher Address',
            'teacher_contact' => 'Teacher Contact',
            'teacher_status' => 'Teacher Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['teacher_id' => 'id']);
    }
}
