<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property string $first_grading
 * @property string $second_grading
 * @property string $third_grading
 * @property string $fourth_grading
 * @property string $Final_grading
 * @property string $Subject_code
 * @property string $Student_id
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
            [['first_grading', 'second_grading', 'third_grading', 'fourth_grading', 'Final_grading', 'Subject_code', 'Student_id'], 'required'],
            [['first_grading', 'second_grading', 'third_grading', 'fourth_grading'], 'number'],
            [['Final_grading'], 'safe'],
            [['Subject_code'], 'string', 'max' => 20],
            [['Student_id'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'first_grading' => 'First Grading',
            'second_grading' => 'Second Grading',
            'third_grading' => 'Third Grading',
            'fourth_grading' => 'Fourth Grading',
            'Final_grading' => 'Final Grading',
            'Subject_code' => 'Subject Code',
            'Student_id' => 'Student ID',
        ];
    }
}
