<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Grades */
/* @var $form ActiveForm */
?>
<div class="backend-view-grades-view">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'first_grading') ?>
        <?= $form->field($model, 'second_grading') ?>
        <?= $form->field($model, 'third_grading') ?>
        <?= $form->field($model, 'fourth_grading') ?>
        <?= $form->field($model, 'final_grading') ?>
        <?= $form->field($model, 'subject_id') ?>
        <?= $form->field($model, 'student_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- backend-view-grades-view -->
