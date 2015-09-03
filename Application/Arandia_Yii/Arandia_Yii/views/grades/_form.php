<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Subject;

/* @var $this yii\web\View */
/* @var $model app\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'second_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'third_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'fourth_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'final_grading')->textInput(['maxlength' => 10]) ?>

	<?= $form->field($model, 'subject_id')->dropDownList(
			ArrayHelper::map(Subject::find()->all(),'subject_id','subject_code'),
			['prompt'=>'Select Subject'] 
	) ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
