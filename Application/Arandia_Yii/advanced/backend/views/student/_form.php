<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_contact')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
