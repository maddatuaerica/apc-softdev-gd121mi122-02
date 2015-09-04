<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_lastname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'teacher_firstname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'teacher_middlename')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'teacher_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'teacher_address')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'teacher_contact')->textInput() ?>
	
	<select name="MyForm[status]" id="MyForm_status">
	<option value="0">Please select your Status</option>
	<option value="Single">Single</option>
	<option value="Married">Married</option>
	<option value="Divorced">Divorced</option>
	<option value="Separated">Separated</option>
	<option value="Widowed">Widowed</option>
	</select>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
