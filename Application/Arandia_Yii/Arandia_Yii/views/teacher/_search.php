<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Teacher_id') ?>

    <?= $form->field($model, 'Teacher_lastname') ?>

    <?= $form->field($model, 'Teacher_firstname') ?>

    <?= $form->field($model, 'Teacher_middlename') ?>

    <?= $form->field($model, 'Teacher_email') ?>

    <?php // echo $form->field($model, 'Teacher_address') ?>

    <?php // echo $form->field($model, 'Teacher_contact') ?>

    <?php // echo $form->field($model, 'Teacher_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
