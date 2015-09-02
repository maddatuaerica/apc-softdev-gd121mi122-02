<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $Teacher_lastname
 * @property string $Teacher_firstname
 * @property string $Teacher_middlename
 * @property string $Teacher_email
 * @property string $Teacher_address
 * @property string $Teacher_contact
 * @property string $Teacher_status
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
            [['Teacher_lastname', 'Teacher_firstname', 'Teacher_middlename', 'Teacher_email', 'Teacher_address', 'Teacher_contact', 'Teacher_status'], 'required'],
            [['Teacher_lastname', 'Teacher_firstname', 'Teacher_middlename', 'Teacher_email'], 'string', 'max' => 45],
            [['Teacher_address'], 'string', 'max' => 100],
            [['Teacher_contact'], 'string', 'max' => 20],
            [['Teacher_status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Teacher_lastname' => 'Teacher Lastname',
            'Teacher_firstname' => 'Teacher Firstname',
            'Teacher_middlename' => 'Teacher Middlename',
            'Teacher_email' => 'Teacher Email',
            'Teacher_address' => 'Teacher Address',
            'Teacher_contact' => 'Teacher Contact',
            'Teacher_status' => 'Teacher Status',
        ];
    }
}
