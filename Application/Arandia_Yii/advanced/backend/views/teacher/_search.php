<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'teacher_lastname') ?>

    <?= $form->field($model, 'teacher_firstname') ?>

    <?= $form->field($model, 'teacher_middlename') ?>

    <?= $form->field($model, 'teacher_email') ?>

    <?php // echo $form->field($model, 'teacher_address') ?>

    <?php // echo $form->field($model, 'teacher_contact') ?>

    <?php // echo $form->field($model, 'teacher_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
