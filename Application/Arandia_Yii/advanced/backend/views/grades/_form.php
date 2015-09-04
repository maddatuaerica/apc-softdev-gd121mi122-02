<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Subject;
use backend\models\Student;

/* @var $this yii\web\View */
/* @var $model backend\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fourth_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'final_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(
		ArrayHelper::map(Subject::find()->all(),'subject_id','subject_name'),
		['prompt'=>'Subject ID']
	) ?>
	
    <?= $form->field($model, 'student_id')->dropDownList(
		ArrayHelper::map(Student::find()->all(),'student_id','student_lastname'),
		['prompt'=>'Student ID']
	) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
