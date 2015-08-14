<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Register */
/* @var $form ActiveForm */
?>
<div class="site-register">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_number') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'middlename') ?>
        <?= $form->field($model, 'address') ?>
        <?= $form->field($model, 'birthday') ?>
        <?= $form->field($model, 'birthplace') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'contact_num') ?>
        <?= $form->field($model, 'grade_level') ?>
        <?= $form->field($model, 'prev_school') ?>
        <?= $form->field($model, 'father_name') ?>
        <?= $form->field($model, 'father_occupation') ?>
        <?= $form->field($model, 'mother_name') ?>
        <?= $form->field($model, 'mother_occupation') ?>
        <?= $form->field($model, 'emerg_name') ?>
        <?= $form->field($model, 'relation') ?>
        <?= $form->field($model, 'tel_num') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'usertype') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
