<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property integer $id
 * @property string $first_grading
 * @property string $second_grading
 * @property string $third_grading
 * @property string $fourth_grading
 * @property string $final_grading
 * @property integer $subject_id
 * @property integer $student_id
 *
 * @property Subject $subject
 * @property Student $student
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_grading', 'second_grading', 'third_grading', 'fourth_grading', 'final_grading', 'subject_id', 'student_id'], 'required'],
            [['first_grading', 'second_grading', 'third_grading', 'fourth_grading', 'final_grading'], 'number'],
            [['subject_id', 'student_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_grading' => 'First Grading',
            'second_grading' => 'Second Grading',
            'third_grading' => 'Third Grading',
            'fourth_grading' => 'Fourth Grading',
            'final_grading' => 'Final Grading',
            'subject_id' => 'Subject ID',
            'student_id' => 'Student ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
