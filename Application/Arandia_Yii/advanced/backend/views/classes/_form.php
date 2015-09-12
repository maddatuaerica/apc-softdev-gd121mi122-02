<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Student;
use backend\models\Subject;
use backend\models\Teacher;

/* @var $this yii\web\View */
/* @var $model backend\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_id')->dropDownList(
		ArrayHelper::map(Student::find()->all(),'id','student_lastname'),
		['prompt'=>'Student ID']
	) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(
		ArrayHelper::map(Subject::find()->all(),'id','subject_code'),
		['prompt'=>'Subject ID']
	) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList(
		ArrayHelper::map(Teacher::find()->all(),'id','teacher_lastname'),
		['prompt'=>'Teacher ID']
	
	) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
