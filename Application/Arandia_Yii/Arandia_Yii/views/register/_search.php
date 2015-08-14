<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegisterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="register-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_number') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'middlename') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'birthplace') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'contact_num') ?>

    <?php // echo $form->field($model, 'grade_level') ?>

    <?php // echo $form->field($model, 'prev_school') ?>

    <?php // echo $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'father_occupation') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_occupation') ?>

    <?php // echo $form->field($model, 'emerg_name') ?>

    <?php // echo $form->field($model, 'relation') ?>

    <?php // echo $form->field($model, 'tel_num') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'usertype') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
