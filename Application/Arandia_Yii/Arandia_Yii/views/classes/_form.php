<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Student;
use app\models\Subject;
use app\models\Teacher;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => 45]) ?>

   
	<?= $form->field($model, 'student_id')->dropDownList(
		ArrayHelper::map(Student::find()->all(),'student_id','student_lastname'),
		['prompt'=>'Select Student']
	) ?>

	<?= $form->field($model, 'subject_id')->dropDownList(
		ArrayHelper::map(Subject::find()->all(),'subject_id','subject_code'),
		['prompt'=>'Select Subject']
	) ?>

 
	<?= $form->field($model, 'teacher_id')->dropDownList(
		ArrayHelper::map(Teacher::find()->all(),'teacher_id','teacher_lastname'),
		['prompt'=>'Select Teacher']
	) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
