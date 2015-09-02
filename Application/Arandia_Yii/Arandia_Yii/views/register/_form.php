<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Register */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="register-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_number')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'contact_number')->textInput() ?>

    <?= $form->field($model, 'grade_level')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'previous_school')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'father_occupation')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'mother_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'mother_occupation')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'emergency_contact')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'telephone_number')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'usertype')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
