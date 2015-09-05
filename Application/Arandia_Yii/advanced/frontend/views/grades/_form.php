<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fourth_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'final_grading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
