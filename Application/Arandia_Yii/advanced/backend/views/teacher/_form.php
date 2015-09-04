<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_contact')->textInput() ?>

    <?= $form->field($model, 'teacher_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
