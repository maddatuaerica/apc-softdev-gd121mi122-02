<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use app\models\Teacher;
=======
use app\models\teacher;
>>>>>>> 5f97765ec078bc855f40e8322f0f3c01a356994b

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'subject_description')->textInput(['maxlength' => 45]) ?>

	<?= $form->field($model, 'teacher_id')->dropDownList(
<<<<<<< HEAD
		ArrayHelper::map(Teacher::find()->all(),'teacher_id','teacher_lastname'),
		['prompt'=>'Select Teacher']
=======
			ArrayHelper::map(Teacher::find()->all(),'teacher_id','teacher_lastname'),
			['prompt'=>'Select Teacher']
	
>>>>>>> 5f97765ec078bc855f40e8322f0f3c01a356994b
	)?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
